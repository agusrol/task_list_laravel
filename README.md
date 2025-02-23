BUILDING

## 🛠 Prerequisites

Before setting up the project, make sure you have **PHP 8.2 or later** installed on your system. It can be obtained from a XAMPP installation or downloaded
separately. Be sure checking in cmd your PHP version.
This project db was setup using Docker. You have the file for making the container in the files, it's the yml. Of course you can use a database directly install on you OS

### 📥 Install Composer
Composer is the dependency manager for PHP. If you haven't installed it yet, download and install it from [getcomposer.org](https://getcomposer.org/).

Once installed, verify it by running:

sh
composer -V

## 📥 Install Dependencies from `composer.json`

If your project already has a `composer.json` file, you can install all required dependencies by running (in the project folder):

sh
composer install


## 📥 Ensure Docker and Docker Compose are installed


docker -v
docker-compose -v

If Docker Compose is not installed, install it from here.
3. Start the container


docker-compose up -d

-d runs it in detached mode (background).


# 📂 Setting Up the Database with Artisan

Laravel provides an easy way to create and manage your database using Artisan commands. Follow these steps to set up your database and seed it with fake data.

---

## 📌 Configure Your Database

First, open the `.env` file and update your database connection settings (in this case I used MySQL you can use another DB, but the Docker uses MySQL)

Laravel allows you to generate fake data using factories. To populate your database, run:

🔄 Seed the Database with Fake Data

Laravel allows you to generate fake data using factories. To populate your database, run:

php artisan db:seed

By default, this command will execute the DatabaseSeeder class located at database/seeders/DatabaseSeeder.php.

If you want to run a specific seeder, use:

php artisan db:seed --class=YourSeederClass




