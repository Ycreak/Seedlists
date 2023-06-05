## Installation
Run the following commands:

1. Copy the .env file to your directory
1. Install sail: `composer require laravel/sail --dev`
1. Run sail: `sail up` (if you have the alias installed)
1. Install php dependencies: `sail composer install`
1. Install npm dependencies: `sail npm install`
1. Start VITE for eye candy: `sail npm run dev`
1. Login to docker-mysql, next into mysql: `mysql -u root -p` (password in .env)
1. Create the database `chirper`: `CREATE DATABASE chirper;`
1. Grant access to it for user `sail`: `GRANT ALL PRIVILEGES ON chirper.* TO 'sail'@'%';`
1. Flush the privileges: `FLUSH PRIVILEGES`
1. Exit and load the dump: `mysql -u sail -p chirper < dump.sql`
1. Load the files into `/storage/app/public/images`
1. Create a symlink: `sail php artisan storage:link`
1. Ready!

