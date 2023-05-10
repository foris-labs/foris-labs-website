# ForisLabs  Website

Welcome to the ForisLabs Website repository! This website is built using the Laravel framework and Tailwind CSS, and
implements several features, including basic auth, social login, and API access using Laravel Passport.

## Prerequisites

- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [NPM](https://www.npmjs.com/)

## Installation

1. Clone this repository to your local machine.

```
git clone https://github.com/foris-labs/foris-labs-website.git
```

2. Change to the project directory.

```
cd foris-labs-website
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

Since this is Laravel 10, even if the database doesn't exist, Laravel will create the database itself during migration
before creating the tables

6. Migrate and seed the database.

```
php artisan migrate --seed
```

7. Install the default passport clients. We're using UUID for client ID

```
php artisan passport:install --uuids 
```

8. Serve the application.

 ```
 php artisan serve
 ```

9. You're good to go! The website should be running on http://localhost:8000.

## Social Login

This project implements social login using [Laravel Socialite](https://laravel.com/docs/10.x/socialite)

### Facebook Setup

To set up Facebook for socialite, visit
the [Foris Labs Facebook Developers Dashboard](https://developers.facebook.com/apps/542194561021954/settings/basic/) to
get the App ID and secret and set in the `.env` file

```
FACEBOOK_CLIENT_ID="foris-app-id"
FACEBOOK_CLIENT_SECRET="foris-client-secret"
```

If you don't have access to the developer dashboard, contact the [admin](mailto:kyrianobikwelu@gmail.com) for more
details.

The default callback url is `{your-app-url}/login/facebook/callback/` but you can modify it in your `.env` file. If
you're using a virtual host to setup a custom domain, eg `forislabs.test`, be sure to add the full callback url to
the [Facebook Settings](https://developers.facebook.com/apps/542194561021954/fb-login/settings/).

### Google Setup

To setup Google for socialite, visit
the [Foris Labs Google Cloud Dashboard](https://console.cloud.google.com/apis/credentials) and select
the `Foris Labs Website` Client to get the Client ID and secret and set in the `.env` file just like in the facebook
setup.

## TailwindCSS

This project uses [TailwindCSS](https://tailwindcss.com/) for styling. If you're not familiar with it, please check out
their [documentation](https://tailwindcss.com/docs).

## Basic Auth

This project includes a basic auth implementation with a pre-defined user. You can log in with the following
credentials:

```
Email: admin@forislabs.com
Password: forislabs
```

## API Access

This project uses [Laravel Passport](https://laravel.com/docs/10.x/passport) for API access. To use the API, you will
need to authenticate with a client ID and secret.

Two basic clients are created by default when you run `php artisan passport:install --uuid`. Create one more client with
name `Foris Labs Application Client` for the application build, and for mocking api access from it

```
php artisan passport:client --personal
```

Copy the client ID and secret and set the `PASSPORT_APP_ACCESS_CLIENT_ID` and `PASSPORT_APP_ACCESS_CLIENT_SECRET` in
your .env respectively

Please refer to the Laravel Passport documentation for more information.

## Contributing

We welcome contributions to this project! Please read our [contributing guidelines](CONTRIBUTING.md) for more
information.

## License

This project is licensed under the [MIT License](LICENSE).


