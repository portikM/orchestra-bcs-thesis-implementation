# Orchestra

Orchestra is a web application for remote control over power supply of the house from alternative sources of energy.    
[See it live](http://orchestra.portimaksym.com/).

## Setting Up

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

To get a copy ot the build you will need:  

* [Composer](https://getcomposer.org/);
* [npm](https://www.npmjs.com/);
* localhost (MAMP or WAMP will do).

### Installing

Once you've copied project from the master, go to project folder and update composer, using your terminal:
```
composer update
```

Install dependencies:
```
npm install
```

Go to your localhost and create a database. Reccomended name `db_orchestra`. Then create a file `.env` in the root folder and copy over the contents from the `.env.example`. Configure `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` fields.

Generate a key for the `.env` file running command:
```
php artisan key:generate
```

Run the database migrations and seed the content:
```
php artisan migrate:fresh --seed
```

Now you're all set. To host the app go to project root and run:
```
php artisan serve
```

### Login credentials

Please use these credentials to logg into admins account:

**Email:** admin@orchestra.com    
**Password**: password

## Built With

* [Laravel](https://laravel.com/) - PHP Framework;
* [Vue.js](https://vuejs.org/) - JavaScript Framework;
* [Bulma](https://bulma.io/) - CSS Library;
* [Font Awesome](https://fontawesome.com/) - Icons Library.

## Authors

* [Maksym Portianoi](https://github.com/portikM).

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
