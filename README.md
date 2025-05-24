# Laravel Todo App

A clean and responsive Todo List application built with Laravel and Blade, styled using pure CSS.  
It demonstrates core Laravel concepts like MVC architecture, form validation, CSRF protection, and basic CRUD operations.

---

## Features

- Add new todos  
- Mark todos as completed  
- Delete todos  
- Blade-based UI with responsive layout  
- CSRF-protected forms  
- Simple, no-JavaScript setup  

---

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/your-username/laravel-todo-app.git
cd laravel-todo-app
```

### 2. Install dependencies

```bash
composer install
```

### 3. Create `.env` file

```bash
cp .env.example .env
```

Then configure your database in `.env`.

For SQLite:

```env
DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite
```

Create the SQLite file:

```bash
touch database/database.sqlite
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Run migrations

```bash
php artisan migrate
```

### 6. Serve the application

```bash
php artisan serve
```

Then open http://localhost:8000 in your browser.

---

## Project Structure

- `app/Http/Controllers/TodoController.php` – Controller logic  
- `resources/views/todos/index.blade.php` – UI layout  
- `routes/web.php` – Route definitions  
- `public/css/style.css` – Custom styling  

---

## Security

- All forms use CSRF protection via `@csrf`  
- Input validation is handled with Laravel’s built-in validator  
