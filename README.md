## Application Scholarship Build with Laravel, PHP, MySQL, HTML, CSS, JavaScript, Bootstrap, and jQuery

This repository contains the code for the Web to Application Scholarship project. The project is built using Laravel, MySQL, HTML, CSS, JavaScript, Bootstrap, and jQuery.

Installation
To get started with this project, follow the steps below:
  1. Clone the repository to your local machine:<br />
  `git clone https://github.com/SatyaNurhutama/application-scholarship.git`
  2. Install the project dependencies:<br />
  `composer install`
  3. Create a new database for the project.<br />
  4. Copy the .env.example file to .env:<br />
  `cp .env.example .env`
  6. Open the .env file and update the following lines with your database information:<br />
  `DB_DATABASE=your_database_name`<br />
  `DB_USERNAME=your_database_username`<br />
  `DB_PASSWORD=your_database_password`<br />
  7. Run the database migrations:<br />
    `php artisan migrate`<br />
  8. Run the seeder:<br />
    `php artisan db:seed --class=ScholarshipsSeeder`<br />
  9. Start the local development server:<br />
    `php artisan serve`<br />
    The application will be available at http://127.0.0.1:8000.
    
## Usage

Once the application is running, you can use the following features:

- View a list of all scholarships.
- Submit an application for the scholarship program.
- View a list of all submitted applications.
    