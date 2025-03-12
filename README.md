# Fuzion Mobile LMS

Fuzion Mobile LMS is a Laravel-based platform designed to deliver Learning Management Systems (LMS) and Performance Management Systems (PMS). It features an admin dashboard for content and project management, and a student dashboard for accessing learning resources and tracking performance.

## Features

- Admin Dashboard for managing content and projects
- Student Dashboard for accessing learning resources
- Portfolio home page
- Multi-guard authentication with Laravel Breeze
- SQLite database

## Installation

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js & npm

### Steps

1. Clone the repository:

    ```sh
    git clone https://github.com/chi-g/FuzionMobileTech-LMS-PMS.git
    cd FuzionMobileTech-LMS-PMS
    ```

2. Install dependencies:

    ```sh
    composer install
    npm install
    npm run dev
    ```

3. Create and configure the [.env](http://_vscodecontentref_/0) file:

    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

4. Run migrations:

    ```sh
    php artisan migrate
    ```

5. Serve the application:

    ```sh
    php artisan serve
    ```

## Usage

- Access the application at `http://localhost:8000`
- Admin Dashboard: `http://localhost:8000/admin`
- Student Dashboard: `http://localhost:8000/student`
- Instructor Dashboard: `http://localhost:8000/instructor`
