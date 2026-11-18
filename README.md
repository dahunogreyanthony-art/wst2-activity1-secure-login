# WST2 · Activity 1 – Secure Login System

**Name:** Rey Anthony E. Dahunog · **Section:** BS Info Tech 4C

Registration and login system in PHP 8 + MySQL that stores passwords safely and manages sessions securely.

## Features
- `register.php` – server-side validation, duplicate username/email check (prepared statement), `password_hash()`; every new account is a `student`.
- `login.php` – prepared statement + `password_verify()`, `session_regenerate_id(true)`, one generic error message.
- **Bonus:** 15-minute account lockout after 5 wrong passwords (`failed_attempts`, `locked_until`).
- `logout.php` – clears `$_SESSION`, deletes the session cookie, `session_destroy()`.
- `dashboard.php` – redirects to the login page when nobody is logged in.

## How to run (XAMPP)
1. Copy this `wst2_auth` folder into `C:\xampp\htdocs\`.
2. Start Apache and MySQL in the XAMPP Control Panel.
3. In http://localhost/phpmyadmin run `database/01_users_table.sql` (creates the `wst2_auth` database and `users` table).
4. Open http://localhost/wst2_auth/login.php and register an account.

If your MySQL root user has a password, change `DB_PASS` in `config/db.php`.
