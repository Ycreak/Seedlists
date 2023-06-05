## Installation
Run the following commands:

1. Copy the .env file to your directory
1. Install sail: `composer require laravel/sail --dev (make sure composer is correctly installed)`
1. Run sail: `sail up` (if you have the alias installed)
1. Install php dependencies: `sail composer install`
1. Install npm dependencies: `sail npm install`
1. Start VITE for eye candy: `sail npm run dev`
1. Login to docker-mysql: `docker exec -it laravel-seedlists-mysql-1 bash`
2. Login to mysql: `mysql -u root -p` (password in .env)
3. Create the database `chirper`: `CREATE DATABASE chirper;`
4. Grant access to it for user `sail`: `GRANT ALL PRIVILEGES ON chirper.* TO 'sail'@'%';`
5. Flush the privileges: `FLUSH PRIVILEGES`
6. Exit and load the dump: `mysql -u sail -p chirper < dump.sql`
7. Load the files into `/storage/app/public/images`
8. Create a symlink: `sail php artisan storage:link`
9. Ready!

