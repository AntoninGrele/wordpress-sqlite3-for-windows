# The easiest way to run WordPress on your Windows machine

This project aims to set you up with a working WordPress installation in a few seconds.

It is not meant for use in production, but for development purposes (themes, plug-ins, ...).

It uses the official [SQLite3 plug-in](https://wordpress.org/plugins/sqlite-database-integration/), meaning your database runs from a SQLite3 file instead of a database server. You can thus copy/paste the entire folder for easy transfer of your project.

## How to use

### 1. Start the PHP server 

Once the package is copied to your machine, you will want to start your local PHP server.

This requires calling the php.exe executable and running the command `-S localhost:8000`.

For example, if this package is installed directly at `C:/`, write this in your command line :
`C:/wordpress-sqlite3-for-windows/php-8.4.1-nts-Win32-vs17-x64/php.exe -S localhost:8000`

You can also add your php.exe file to your Environment Variable PATH, which will allow you to just write `php -S localhost:8000`.

Your WordPress site should now be available in your browser at `localhost:8000`.

### 2. Log in to your admin interface

Got to `localhost:8000/wp-admin` and log in with username `root` and password `password`.

You're in !

## Dependencies

The current version of this package uses :
* php-8.4.1-nts-Win32-vs17-x64
* wordpress-6.7.1
* sqlite-database-integration 2.1.15

## Licences

Refer to licencing of the three dependencies, PHP, WordPress and the SQLite Database Integration plug-in.