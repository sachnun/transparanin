## Getting Started

Source Code Laravel untuk Website TransparIn.

### Required

-   PHP >= 7.2.5
-   MySQL
-   Composer
-   Node.js (optional)

### Install

Clone this project:

```cmd
> git clone https://github.com/sachnun/transparin.git transparin
> cd transparin
```

Install the composer:

```cmd
> composer install
```

Copy and set environment:

```cmd
> copy .env.example .env
> code .env
```

Systemlink public storage:

```cmd
> php artisan storage:link
```

Migration all tables:

```cmd
> php artisan migrate:fresh
```

### Usage

Run the local web server:

```cmd
> php artisan serve
```

after running it open **127.0.0.1:8000** in your browser.
