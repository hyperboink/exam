## 1. Run these commands in the root directory of the app:
- composer install

## 2. Create .env file and paste the the content of .enve.example file to .evn file and replace/set the following configs:
(Note: Don't forget to create the database in you local which will be set in DB_DATABASE)
- DB_DATABASE=exam_db (or you can modify your db name)
- DB_USERNAME=root (root for default username)
- DB_PASSWORD= (leave blank if there's no password set in your local)

## 3. Run the following commands
- php artisan key:generate
- php artisan migrate

## 4. And then you're good to go!
- php artisan serve

