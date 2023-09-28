<p align="center"><a href="https://readiverse.com" target="_blank">
    <img src="https://raw.githubusercontent.com/farisfaikar/readiverse/main/public/img/readiverse-logo-blue.png" width="100" alt="Readiverse Logo">
</a></p>
<h1 align="center">Readiverse</h1>

<p align="center">
<a href="https://github.com/farisfaikar/mbah-jiwo"><img src="https://img.shields.io/github/stars/farisfaikar/mbah-jiwo.svg?style=social" alt="Stars"></a>
<img src="https://komarev.com/ghpvc/?username=farisfaikar&repo=mbah-jiwo&label=Repository%20views&color=0e75b6&style=flat" alt="Repository Views">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Description.
The application we developed is a library application where users can borrow books from the library online with a maximum duration of one week. Users who have admin status can add, edit, and delete book data contained in the application database.

# Features
Below are the features of this website.

## Client:
  
Clients can browse the list of books in the application. Clients can register themselves into the application by signing in/registering manually or using Google SSO. After that, the client can borrow books with a predetermined duration (maximum 1 week) and if the user fails to return the book within the specified time period, the application will automatically calculate the fine imposed on the client. The client is not allowed to borrow books if the fine has not been paid. If the client loses the book, the client must pay compensation at the full price of the book.

## Admin:

Admin can add, edit, and delete book data in the database. Admin can add, edit, and delete category data in the database.

# Technology
The technology used to develop this application are as follows:
- Fullstack: Laravel
- Frontend: Tailwind CSS, Blade, DaisyUI
- Database: MySQL
- Authentication: Laravel/Breeze
- VCS: Git, GitHub
- VPS: [To be determined]
- Collaborative: Eraser, Trello
- Testing: PHPunit
- Code Styling: Prettier

### Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
