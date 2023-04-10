# ForisLabs  Website

Welcome to the ForisLabs  Website repository! This website is built using the Laravel framework and Tailwind CSS,  and implements several features, including basic auth, social login, and API access using Laravel Passport.

## Prerequisites
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [NPM](https://www.npmjs.com/)

## Installation

1. Clone this repository to your local machine.
```
git clone https://github.com/<username>/<repository-name>.git
```
2. Change to the project directory.
```
cd <repository-name>
```
3. Install the project dependencies.
```
composer install
npm install
```
4. Create a new `.env` file by copying the example.
```
cp .env.example .env
```
5. Set the local database details in your new .env file. You can leave the default details if you like. 
```
DB_DATABASE=<database-name>
DB_USERNAME=<database-username>
DB_PASSWORD=<database-password>
```
Since this is Laravel 10, even if the database doesn't exist, Laravel will create the database itself during migration before creating the tables

6. Migrate and seed the database.
```
php artisan migrate --seed
```
7. Serve the application.
 ```
 php artisan serve
 ```
8. You're good to go! The website should be running on http://localhost:8000.

## Social Login

This project implements social login using [Laravel Socialite](https://laravel.com/docs/10.x/socialite). To set it up with your Facebook and Google credentials, please follow the instructions in the `.env.example` file.

## TailwindCSS

This project uses [TailwindCSS](https://tailwindcss.com/) for styling. If you're not familiar with it, please check out their [documentation](https://tailwindcss.com/docs).

## Basic Auth

This project includes a basic auth implementation with a pre-defined user. You can log in with the following credentials:
```
Email: admin@forislabs.com
Password: forislabs
```

## API Access

This project uses [Laravel Passport](https://laravel.com/docs/10.x/passport) for API access. To use the API, you will need to authenticate with a client ID and secret.

Three basic clients have been created and stored in the database during the seeding process 
1. Foris Labs Personal Client
2. Foris Labs Password Client
3. Foris Labs Application Client

Please refer to the Laravel Passport documentation for more information.

## Contributing

We welcome contributions to this project! Please read our [contributing guidelines](CONTRIBUTING.md) for more information.

## License

This project is licensed under the [MIT License](LICENSE).


