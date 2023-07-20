# Laravel Comics

This repository contains a Laravel application that allows users to manage and display a collection of comics.

## Features

- User management: Users can register, log in, and manage their own collection of comics.
- Comic management: Users can add, edit, and delete comics from their collection.
- Comic display: Comics are displayed with details such as title, author, publication date, and cover image.
- Search and filtering: Users can search for comics by title, author, and publication date. They can also filter comics by genres.

## Installation

1. Clone the repository:

```
git clone https://github.com/tahakyo/laravel-comics.git
```

2. Install dependencies using Composer:

```
composer install
```

3. Create a new database for the application.

4. Rename the `.env.example` file to `.env` and update the database configuration:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Generate a new application key:

```
php artisan key:generate
```

6. Run the database migrations and seed the database:

```
php artisan migrate --seed
```

7. Start the local development server:

```
php artisan serve
```

8. Access the application in your browser at `http://localhost:8000`.

## Usage

- Register a new user account or log in with an existing account.
- Add comics to your collection by providing the necessary details such as title, author, publication date, and cover image.
- Edit or delete comics from your collection.
- Use the search and filter functionality to find comics by title, author, publication date, or genre.
- Enjoy browsing and managing your comics collection!

## Contributing

If you find any issues or have ideas for improvements, please open an issue or submit a pull request. Your contributions are always welcome!

## License

This Laravel Comics application is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
