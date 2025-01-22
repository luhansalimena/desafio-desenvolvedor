# Setting Up a Laravel Sail Environment

Follow these steps to set up a Laravel Sail environment:

## Prerequisites

- Docker
- Docker Compose

## Installation

1. **Clone the Repository:**
    ```sh
    git clone https://github.com/luhansalimena/desafio-desenvolvedor.git
    cd desafio-desenvolvedor
    ```

2. **Install Laravel Sail:**
    ```sh
    composer require laravel/sail --dev
    ```

3. **Publish Sail's Docker Configuration:**
    ```sh
    php artisan sail:install
    ```

4. **Start the Docker Containers:**
    ```sh
    ./vendor/bin/sail up
    ```

5. **Run Migrations:**
    ```sh
    ./vendor/bin/sail artisan migrate
    ```

## Usage

- **Access the application:**
  Open your browser and navigate to `http://localhost/api/documentation`.

- **Stop the Docker Containers:**
  ```sh
  ./vendor/bin/sail down
  ```

For more information, refer to the [Laravel Sail documentation](https://laravel.com/docs/8.x/sail).
