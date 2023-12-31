# Introduction

## CRUD-toko-buku

ENGLISH :
Requirement:

1. CodeIgniter4
2. Xampp
3. Git

How to use :

1. Extract "ci4appTokoBuku.rar" to you xampp local files (xampp/htdocs)
2. Open Xampp Control Panel app
3. Click "Start" Apache & MySQL module services
4. Click "Admin" at MySQL module after it started (Optional)
5. Go to your extracted "ci4appTokoBuku.rar" file
6. Right click on everywhere and click "Open Git Bash here"
7. Type "php spark serve" on git terminal (if you done using this app, click CTRL+C to stop spark)
8. Go to your web browser and go to "localhost:8080"
9. And you can see the website.
10. You can change any code by your own IDE (Optional)

---

BAHASA :
Persyaratan:

1. CodeIgniter4
2. Xampp
3. Git

Cara Penggunaan :

1. Ekstrak "ci4appTokoBuku.rar" ke file lokal xampp Anda (xampp/htdocs)
2. Buka aplikasi Panel Kontrol Xampp
3. Klik "Mulai" layanan modul Apache & MySQL
4. Klik "Admin" di modul MySQL setelah dimulai (Opsional)
5. Buka file "ci4appTokoBuku.rar" yang telah Anda ekstrak
6. Klik kanan di mana saja dan klik "Buka Git Bash di sini"
7. Ketik "php spark serve" di terminal git (jika Anda sudah selesai menggunakan aplikasi ini, klik CTRL+C untuk menghentikan percikan)
8. Buka browser web Anda dan buka "localhost:8080"
9. Dan Anda dapat melihat situs webnya.
10. Anda dapat mengubah kode apa pun dengan IDE Anda sendiri (Opsional)

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the _public_ folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's _public_ folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter _public/..._, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
