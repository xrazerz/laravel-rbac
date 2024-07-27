# Laravel RBAC System

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Introduction
This package provides a comprehensive Role-Based Access Control (RBAC) system for Laravel, allowing for more granular control over user permissions. It is designed to be flexible and easy to integrate into your Laravel application.

## Features
- Define roles and permissions.
- Assign roles to users.
- Check user permissions easily.
- Middleware for route protection.
- Artisan commands for managing roles and permissions.

## Installation
1. Install the package via Composer:
    ```sh
    composer require your-username/laravel-rbac
    ```

2. Publish the configuration file and migrations:
    ```sh
    php artisan vendor:publish --provider="Dev\Rabc\Providers\RabcServiceProvider"
    ```

3. Run the migrations:
    ```sh
    php artisan migrate
    ```

## Configuration
After publishing the configuration file, you can find it at `config/rbac.php`. Customize it according to your needs.

## Usage
### Defining Roles and Permissions
You can define roles and permissions in your database or using the provided Artisan commands.

```sh
# Create a role
php artisan rbac:create-role admin

# Create a permission
php artisan rbac:create-permission view-dashboard
```

### Assigning Roles to Users
You can assign roles to users using the `assignRole` method.

```php
$user = User::find(1);
$user->assignRole('admin');
```

### Checking Permissions
You can check if a user has a specific permission using the `can` method.

```php
if ($user->can('view-dashboard')) {
    // The user can view the dashboard
}
```

### Middleware
You can protect your routes using the provided middleware.

```php
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', 'AdminController@index');
});
```

## Contributing
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Open a pull request.

## License
This project is licensed under the MIT License - see the [LICENSE](MIT) file for details.

## Contact
 Ismail Mohamed - [xrootedx.dev@gmail.com](mailto:xrootedx.dev@gmail.com)

Project Link: [https://github.com/xrazerz/laravel-rbac](https://github.com/xrazerz/laravel-rbac)
