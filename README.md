#Contact us form package
[![Issues](https://img.shields.io/github/issues/negimanoj/contact-package.svg?style=flat-square)](https://github.com/negimanoj/contact-package/issues)
[![Forks](https://img.shields.io/github/forks/negimanoj/contact-package.svg?style=flat-square)](https://github.com/negimanoj/contact-package/network/members)
[![Stars](https://img.shields.io/github/stars/negimanoj/contact-package.svg?style=flat-square)](https://github.com/negimanoj/contact-package/stargazers)


## This package will add a contact form and also save the form details in the database and send email to specified user

## How to Install

You can install this by running following composer command
```bash
composer require carter/contact
 ```
After adding this package run the migration command to imort the database

```bash
php artisan migrate
 ```

And in the last run the follwoing command and publish it

```bash
php artisan vendor:publish
 ```