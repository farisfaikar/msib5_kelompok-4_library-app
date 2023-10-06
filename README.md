<p align="center">
  <a href="https://readiverse.com" target="_blank">
    <img src="https://raw.githubusercontent.com/farisfaikar/readiverse/main/public/img/readiverse-logo-blue.png" width="100" alt="Readiverse Logo">
  </a>
</p>

<h1 align="center">Readiverse</h1>

<p align="center">
<a href="https://github.com/farisfaikar/readiverse"><img src="https://img.shields.io/github/stars/farisfaikar/readiverse.svg?style=social" alt="Stars"><a>
<img src="https://komarev.com/ghpvc/?username=farisfaikar&repo=readiverse&label=Repository%20views&readiverselor=0e75b6&style=flat" alt="Repository Views">
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

## Installation (For Developers)

readiverse Laravel Project Installation Tutorial:

1. Install PHP 8.2, XAMPP, Composer, Laravel 10.

2. Add the following extension to the php.ini file (usually found in C:\php\php.ini, depending on the PHP installation location). Write the following extension in the php.ini file then save:

```
extension=curl
extension=fileinfo
extension=openssl
extension=zip
extension=pdo_mysql ; for MySQL driver
extension=mbstring ; for seeder
extension=gd ; for image()
curl.cainfo="C:\xampp\php\extras\ssl\cacert.pem" ; for image(), first download the file cacert.pem
zend_extension=xdebug ; for unit and feature testing (if using windows xdebug installation can be through the following link: https://xdebug.org/wizard)
xdebug.mode=coverage ; for unit and feature testing
```

3. Copy and paste the .env-example file in the Laravel readiverse project folder in the same folder, and change the file name to `.env`.

4. Create a new APP_KEY in the `.env` file by running php artisan key:generate in the Laravel readiverse project folder.

5. Run composer install in the Laravel readiverse project folder. (This step is the most likely to get an error. If it does, it means there was a problem adding the extension in step 2).

6. Create a new database manually in phpMyAdmin with the name `readiverse`. Edit `DB_DATABASE=readiverse` in the `.env` file.

7. Run `php artisan migrate:fresh --seed` to populate the database with data.

8. Run php artisan serve and try to open localhost link (http://127.0.0.1:8000).

9. The website is accessible.

## Default Credentials

- Email: admin@mail.com
- Password: password

## GitHub Workflow (Trunk Based Development)

1. Create a new branch (example branch name: faris.backend_book-crud)
2. Add changes to the code in that branch
3. Create a Pull Request
4. Pull Request is tested by GitHub Actions (build, test, deploy)
5. Pull Request merged repo owner (branch: main)

### Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
