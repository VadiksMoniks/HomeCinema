**Description:** REST API for a film management application.  
**Stack:** PHP 8.1, Laravel 10

---

## ⚙️ Installation

1️⃣ **Clone the repository**
```git clone https://github.com/username/homecinema-api.git```

Run ```composer install```
Create ```.env``` file from ```.env.example```
Create database and add it's name in ```.env``` param like this: ```DB_DATABASE=home_cinema```
Run ```php artisan key:generate```
Run ```php artisan migrate --seed```
Run ```php artisan storage:link```
Create ```film``` and people ```folders``` in ```./storage/app/public```
Add manualy some images into folders or use front-end page for adding pics

!Admin credentials: username - admin, password - 123


