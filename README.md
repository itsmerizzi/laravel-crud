
# 📦 Laravel Product CRUD

This is a **simple CRUD (Create, Read, Update, Delete)** project for products, built using the **Laravel** framework. I created this project with the goal of learning and practicing Laravel project structure and concepts.

## 📚 About the Project

The application allows you to:

- 📄 List products
- ➕ Create new products
- ✏️ Edit existing products
- ❌ Delete products

The entire project was built with Laravel and uses **MySQL** for data persistence. Apache and MySQL services were configured using **XAMPP**.

---

## 🚀 Technologies Used

- PHP 8.x
- Laravel 10.x
- MySQL
- XAMPP (Apache + MySQL)
- Blade (Laravel's Template Engine)

---

## 🛠️ Installation and Usage

To run the project locally, follow these steps:

1. Clone this repository:
   ```bash
   git clone https://github.com/itsmerizzi/laravel-crud
   cd laravel-crud
   ```

2. Install Laravel dependencies:
   ```bash
   composer install
   ```

3. Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Configure the database connection in the `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. Run the migrations:
   ```bash
   php artisan migrate
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

8. Access the application at [http://localhost:8000](http://localhost:8000)

---

## 📂 Basic Structure

- `routes/web.php` → CRUD route definitions
- `app/Http/Controllers/ProductController.php` → Controller handling product logic
- `resources/views` → Blade views for creating, editing, listing, and deleting products

---

## 🎯 Purpose

This project was created **for learning purposes only**, as a way to explore the basics of Laravel, CRUD operations, and Blade. It is not intended for production use.

---

## 🤝 Contact

If you’d like to connect or share suggestions:

- 📧 [E-mail](mailto:augusto04rizzi@gmail.com)
- 💼 [LinkedIn](https://www.linkedin.com/in/augusto-jos%C3%A9-rizzi-823699209/)
