# LevelUp Intern Task

This project is a simple web application for validating credit card information using PHP and JavaScript. It consists of a backend API and a frontend HTML file.

## Prerequisites

- XAMPP or any other web server installed on your local machine.
- A web browser (e.g., Google Chrome, Mozilla Firefox).

## Installation and Setup

1. Clone or download the project repository to your local machine.
2. Navigate to the XAMPP installation directory and locate the `htdocs` folder.
3. Create a new folder named `LevelUp-Intern` inside the `htdocs` folder.
4. Inside the `LevelUp-Intern` folder, create two subfolders: `backend` and `frontend`.
5. Move the `db.php` file to the `backend` folder.
6. Move the `validate.php` file to the `backend` folder.
7. Move the HTML file containing the web app design to the `frontend` folder.

## Importing the Database

1. Open phpMyAdmin by accessing `http://localhost/phpmyadmin` in your web browser.
2. Create a new database named `levelup-test`.
3. Inside the `levelup-test` database, click on the "Import" tab.
4. Click on the "Choose File" button and select the `levelup-test.sql` file from the project repository.
5. Click the "Go" button to import the database structure and sample data.

## Running the Project

1. Start the XAMPP server.
2. Open a web browser and enter the following URL: `http://localhost/LevelUp-Intern/frontend/`.
3. The web app will be displayed in the browser, ready for use.

## Usage

1. Fill in the credit card information fields (cardholder name, card number, expiration month and year, and CVV).
2. Click the submit button to validate the credit card information.
3. If the validation is successful, a success message will be displayed, and the form will be cleared.
4. If there are validation errors, an error message will be displayed indicating the specific errors.

## Troubleshooting

- If you encounter any issues or errors while running the project, please make sure that you have followed the installation and setup instructions correctly.
- Ensure that the XAMPP server is running properly and that the project files are located in the correct directories.

## License

This project is licensed under the [MIT License](LICENSE).

