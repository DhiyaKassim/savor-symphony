# Savor Symphony — PHP Header and Footer Project
Name: Dhiya Kassim

A fictional restaurant site demonstrating code reuse from uCertify Lesson 5, especially section 5.2 (include/require) and section 5.2.2 (website templates). The lesson explains reusable templates with require; this assignment specifically asks for include, which is used here. This is original project code, not a copy of the textbook source files.

## Files

- `header.php`: shared HTML document opening, title, site name, and navigation.
- `footer.php`: shared contact information, current copyright year, and closing tags.
- `index.php`: home page; includes the header and footer.
- `menu.php`: menu page; includes the same header and footer, and displays an array using a foreach loop.
- `style.css`: shared responsive design.

## Run with XAMPP

1. Extract the project folder into `C:\xampp\htdocs\savor-symphony`.
2. Open XAMPP Control Panel and start Apache. MySQL is not required.
3. Visit `http://localhost/savor-symphony/index.php` in Chrome.
4. Click Our Menu to check the second page.

PHP must run through a PHP server. Opening the files by double-clicking them will not execute PHP.

Alternatively, with PHP installed, open a terminal inside the project folder and run `php -S localhost:8000`, then visit `http://localhost:8000`.

## How the includes work

Each content page sets `$pageTitle` and runs `include('header.php');`. It then displays its own content and runs `include('footer.php');`. Editing either shared file updates both pages. `date('Y')` supplies the current year, and `number_format()` formats menu prices.

## Submit on GitHub

1. Sign in to GitHub and create a repository named `php-header-footer`.
2. Select Add file → Upload files.
3. Upload all five code files plus this README from the extracted folder.
4. Commit the uploaded files.
5. Copy the repository URL from the browser and submit that URL to your class.

GitHub stores the source code. GitHub Pages does not execute PHP; use XAMPP to demonstrate the working project.

## Manual check

- Open Home and Our Menu; both should show the same navigation and footer.
- Confirm that the menu shows four dishes and prices with two decimal places.
- Resize the browser to confirm that columns stack on a narrow screen.
- Change the site title in header.php and reload both pages to see reuse in action.
