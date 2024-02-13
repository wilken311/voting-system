<a name="readme-top"></a>

<!-- PROJECT LOGO -->
<br />
<div align="center">

  <p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

  <h3 align="center">Voting System Website</h3>
  <h4>SSG Voting System</h4>

  <p align="center">
    Voting System for Student Supreme Government
   
</div>

<!-- ABOUT THE PROJECT -->

## About The Project

![Product Name Screen Shot][product-screenshot]

This project is an e-voting system that allows students to vote online.

### Built With

-   Laravel
-   MySQL

<!-- GETTING STARTED -->

## Getting Started

### Prerequisites

Developer must have the following.

-   [Composer](https://getcomposer.org/download/)
-   [Xampp 7.1.30](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.1.30/)

### Installation

Steps on how to install the project locally:

1. Clone the repo
    ```sh
    git clone https://github.com/wilken311/voting-system.git
    ```
2. Install NPM packages

    ```sh
    composer install
    ```

    Note: (Error Might Occur) `Undefined index: name`
    [Click me to fix.](https://stackoverflow.com/questions/61177995/laravel-packagemanifest-php-undefined-index-name)

3. Create `.env`file

    ```sh
    touch .env
    ```

4. configure `.env` file. Replace the name of your database created on XAMPP Server

    ```sh
    DB_DATABASE=votingsystem
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Generate Application Key

    ```sh
    php artisan key:generate
    ```

6. Migrate database table and seed data
    ```js
    php artisan migrate --seed
    ```
7. Run the app
    ```js
    php artisan serve
    ```
8. Open the App
[127.0.0.1:8000](http://127.0.0.1:8000/)
 <!-- ROADMAP -->

## Roadmap

-   [x] Register
-   [x] Login / Logout
-   [x] Dashboard
-   [x] Student Enrollment
-   [x] Student Voter's Code
-   [x] COC (Certificate of Candidacy) Appliaction
-   [x] Final Candidates
-   [x] Overall Votes Result
-   [x] SSG Ranking
-   [x] Student's Vote Status
-   [x] Filing of COC
-   [x] Election Day
<!-- CONTRIBUTING -->

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->

## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<!-- ACKNOWLEDGMENTS -->

## Acknowledgments

Credits to the following:

-   [Laravel](https://laravel.com/)
-   [Xamp](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.1.30/)

[product-screenshot]: public/assets/screenshots.jpg
