# Zab Shop - E-Commerce Bookstore

Zab Shop is an online bookstore platform that allows users to buy and manage books through a seamless e-commerce experience. It provides various features such as account management, product search, shopping cart functionality, and an admin dashboard with analytics.

## Features

### CRUD Operations
- **Books Management**: Admin users can manage books (create, read, update, and delete book details).
- **Categories Management**: Admin can create, update, and delete categories for better organization of books.
- **Users Management**: Admin can manage user accounts, including activating or deactivating accounts.

### Relations and Migrations
- **Book-Categories Relation**: Each book belongs to a category, and categories can have multiple books.
- **Users and Orders Relation**: A user can place multiple orders, and each order belongs to one user.
- **Order Items**: An order can have multiple items (books), and each item is linked to the specific order and the book purchased.
- **Migrations**: Provided for creating and updating the database schema for the relationships between books, users, orders, and other entities.

### Search Bar
- **Book Search**: Users can search for books by title, author, or keywords using an intuitive search bar.
- **Filter by Category**: Users can filter books by category to narrow down the search results.
- The search bar dynamically fetches results as the user types, providing an instant view of relevant books.

### Categories
- **Book Categories**: Books are organized into categories such as Fiction, Non-fiction, Sci-Fi, Romance, etc.
- **Manage Categories**: Admins can add, update, or delete categories through the admin dashboard.

### Buy Books
- **Add Books to Cart**: Users can browse the available books and add them to their shopping cart.
- **Order and Payment**: Users can place orders for books and make payments through integrated payment gateways (e.g., PayPal, Stripe).
- **Order Confirmation**: Once the purchase is complete, users receive an order confirmation with details.

### Add to Cart
- **Shopping Cart**: Users can add multiple books to their cart before proceeding to checkout.
- **Update Cart**: Users can update the quantity of books in the cart or remove books.
- **Cart Summary**: A cart summary shows the total price, including taxes and shipping fees.

### Login and Register
- **User Registration**: Users can create an account to place orders and track their purchase history.
- **Login**: Registered users can log in using their credentials.
- **Password Reset**: Users can reset their password if they forget it.
- **Authentication**: Secure login and registration system with email verification for new accounts.

### Admin Dashboard with Analytics
- **Admin Login**: Admin users can log in to access the backend dashboard.
- **User Management**: Admin can view, activate/deactivate, or delete users.
- **Order Management**: Admin can view orders placed by customers, including their status and details.
- **Analytics**: Admin has access to sales analytics, such as:
  - Total sales in a specific period.
  - Most popular books and categories.
  - Customer demographics and purchase trends.
  - Inventory tracking and low-stock alerts.

## Technologies Used
- **Backend**: PHP (Laravel / CodeIgniter) or Node.js (Express)
- **Frontend**: HTML, CSS, JavaScript (React.js / Vue.js)
- **Database**: MySQL / PostgreSQL
- **Authentication**: Laravel Passport or JWT (JSON Web Token)
- **Payment Integration**: PayPal, Stripe
- **Analytics**: Admin dashboard for sales data and insights
- **Version Control**: GitHub for version control

## Installation Prerequisites
- PHP >= 7.4 (or Node.js if you're using a JavaScript stack)
- Composer for PHP (or NPM for JavaScript)
- MySQL / PostgreSQL for database management
- Install Dependencies:
Navigate to the project directory and run:

For PHP/Laravel:

composer install
OR for Node.js/Express:

npm install
Set Up Environment Variables:
Copy the .env.example file to .env:


cp .env.example .env
Set Up Database:
Create a database in MySQL/PostgreSQL.
Update .env file with your database credentials.
Run Migrations:
To create the necessary database tables and relations:

For Laravel:

php artisan migrate
OR for Node.js (if you use a migration script):

node migration.js
Serve the Application:
For Laravel (PHP):

php artisan serve
For Node.js:

npm start
Access the Application:
Open a browser and go to http://localhost:8000 (or the specified port) to view the Zab Shop.

Contributing
We welcome contributions to Zab Shop. To contribute:

Fork the repository.
Create a new branch (git checkout -b feature/your-feature).
Make your changes.
Commit your changes (git commit -m 'Add new feature').
Push to your branch (git push origin feature/your-feature).
Create a pull request.
License
Zab Shop is open-source and available under the Web Genixs license.































