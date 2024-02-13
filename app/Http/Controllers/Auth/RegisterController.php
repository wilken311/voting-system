<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserCode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       
        $validator= Validator::make($data, [
            'code' => 'required|exists:user_codes,code',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $validator->after(function ($validator) {
            
            if ($this->CheckCode()) {
                $validator->errors()->add('code', 'The code has already been registered!');
            }
        });

        return $validator;
        
    }

    public function CheckCode(){
        
        //Get the id of the given code in user_codes table
        $user_code=UserCode::where('code','=',Input::get('code'))->take(1)->get();

        foreach($user_code as $data){
            //Check if the id(user_code_id) of the code is existing in user table.
            $user=User::where('user_code_id','=',$data->id)->get();
            //If existing error will occur
            if(count($user)>0){
                return true;
            }
            //If not, this will proceed to the next prcocess
            else{
                return false;
            }
        }

    }

  

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //Get the id of the given code in user_codes table
        $user_code=UserCode::where('code','=',$data['code'])->take(1)->get();
        foreach($user_code as $info){
            return User::create([
                'user_code_id' => $info->id,
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }     
    }

    //Redirect to login after registration
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return redirect($this->redirectPath())->with('success', "Registered Successfully! You may now log in.");
    }
}
