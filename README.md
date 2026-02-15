# PHP Task Dashboard (MVC Mini Project)

This project demonstrates a clean and minimal MVC architecture built with plain PHP.

## Features

- MVC structure
- PDO database connection
- Prepared statements
- Basic task creation
- Separation of concerns
- XSS protection using htmlspecialchars()

## Folder Structure

- config/ → Database connection
- models/ → Task model (database logic)
- controllers/ → Business logic
- views/ → Presentation layer
- public/ → Front controller (entry point)

## Technical Decisions

- Used PDO for secure database communication
- Used prepared statements to prevent SQL injection
- Implemented Front Controller pattern
- Kept controller logic minimal and clean
- Separated business logic from presentation

## How to Run

1. Install XAMPP
2. Place project inside `htdocs`
3. Create database `task_dashboard`
4. Create `tasks` table
5. Open `http://localhost/php-task-dashboard/public`
