#Mailer package
[![Issues](https://img.shields.io/github/issues/negimanoj/carter-mailer.svg?style=flat-square)](https://github.com/negimanoj/carter-mailer/issues)
[![Forks](https://img.shields.io/github/forks/negimanoj/carter-mailer.svg?style=flat-square)](https://github.com/negimanoj/carter-mailer/network/members)
[![Stars](https://img.shields.io/github/stars/negimanoj/carter-mailer.svg?style=flat-square)](https://github.com/negimanoj/carter-mailer/stargazers)



## This is package is to send email

## How to Install

You can install this by running following composer command
```bash
composer require carter/mailer
 ```

Run the follwoing command and publish it

```bash
php artisan vendor:publish
 ```

 After publish you will find a new file "mailer.php" in your config folder.Please add necessarry details in that file

##How to use in controller

First thing you need to do is add the follwoing line in provider section of your "config/app.php".  
```bash
Carter\Mailer\MailerServiceProvider::class,
```
Add Follwing line in your controller

```bash
use Mailer;
```
##How to use this package to send mail

You can send mail using this package by adding follwing line of code

```php
$to="yourmail@example.com";
#or
$to=array('yourmail@example.com'=>'YourName','secondmail@example.com'=>'SecondName');

$subject="Subject of the email";
$message="Body of your message" #you can also load the view in your message

$message=Mailer::sendmail($to,$subject,$message);
```