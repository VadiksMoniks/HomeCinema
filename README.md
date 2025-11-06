# 🎬 HomeCinema API

**Description:** REST API for managing films and people in a cinema application.  
**Stack:** PHP 8.1, Laravel 10

---

## ⚙️ Installation

**Clone the repository**
```git clone https://github.com/username/homecinema-api.git```

**Run the following commands:**

Install dependencies
```composer install```

Create an .env file from the example
Create a database and specify its name in .env, for example:
```DB_DATABASE=home_cinema```

Generate the application key
```php artisan key:generate```

Run migrations and seeders
```php artisan migrate --seed```

Create a symbolic link for storage
```php artisan storage:link```

Manually create folders for media in

```./storage/app/public```
* film
* people

Add images manually into these folders, or use the front-end interface to upload them.

🔐 Admin Credentials
Default admin account for testing:
Username: admin
Password: 123




