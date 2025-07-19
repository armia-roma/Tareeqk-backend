# Tareeqk

A Laravel-based API service for towing requests and vehicle assistance.

## About The Project

Tareeqk is connects users needing vehicle assistance with towing service providers. The application provides API for managing towing requests, user authentication, and service coordination.

## Features

-   User authentication system with secure token-based access
-   Towing request management
-   Real-time status updates for service requests

## API Endpoints

### Authentication

-   `POST /api/register` - User registration
-   `POST /api/login` - User login with token generation
-   `POST /api/logout` - User logout (protected)
-   `GET /api/requests/pending` - Get pending towing requests
-   `POST /api/requests` - Create a new towing request
-   `POST /api/requests/{id}/cancel` - Cancel a towing request

## Installation

1. Clone the repository

    ```
    git clone https://github.com/yourusername/tareeqk.git
    ```

2. Install dependencies

    ```
    composer install
    ```

3. Create and configure your environment file

    ```
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure your database in the `.env` file

    create database tareeqk

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=tareeqk
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Run migrations

    ```
    php artisan migrate
    ```

6. Start the development server
    ```
    php artisan serve --host=0.0.0.0 --port=8000
    ```

## Technologies Used

-   Laravel
-   Laravel Sanctum for API authentication
-   MySQL

## License

This project is licensed under the MIT License.
