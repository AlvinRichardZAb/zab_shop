Zab Shop - E-Commerce Bookstore
Zab Shop is an online bookstore platform that allows users to buy and manage books through a seamless e-commerce experience. It provides various features such as account management, product search, shopping cart functionality, and an admin dashboard with analytics.

Features
1. CRUD Operations (Create, Read, Update, Delete)
Books Management: Admin users can manage books (create, read, update, and delete book details).
Categories Management: Admin can create, update, and delete categories for better organization of books.
Users Management: Admin can manage user accounts, including activating or deactivating accounts.
2. Relations and Migrations
Book-Categories Relation: Each book belongs to a category, and categories can have multiple books.
Users and Orders Relation: A user can place multiple orders, and each order belongs to one user.
Order Items: An order can have multiple items (books), and each item is linked to the specific order and the book purchased.
Migrations are provided for creating and updating the database schema for the relationships between books, users, orders, and other entities.

3. Search Bar
Book Search: Users can search for books by title, author, or keywords using an intuitive search bar.
Filter by Category: Users can filter books by category to narrow down the search results.
The search bar dynamically fetches results as the user types, providing an instant view of relevant books.

4. Categories
Book Categories: Books are organized into categories such as Fiction, Non-fiction, Sci-Fi, Romance, etc.
Manage Categories: Admins can add, update, or delete categories through the admin dashboard.
5. Buy Books
Add Books to Cart: Users can browse the available books and add them to their shopping cart.
Order and Payment: Users can place orders for books and make payments through integrated payment gateways (e.g., PayPal, Stripe).
Order Confirmation: Once the purchase is complete, users receive an order confirmation with details.
6. Add to Cart
Shopping Cart: Users can add multiple books to their cart before proceeding to checkout.
Update Cart: Users can update the quantity of books in the cart or remove books.
Cart Summary: A cart summary shows the total price, including taxes and shipping fees.
7. Login and Register
User Registration: Users can create an account to place orders and track their purchase history.
Login: Registered users can log in using their credentials.
Password Reset: Users can reset their password if they forget it.
Authentication: Secure login and registration system with email verification for new accounts.
8. Admin Dashboard with Analytics
Admin Login: Admin users can log in to access the backend dashboard.
User Management: Admin can view, activate/deactivate, or delete users.
Order Management: Admin can view orders placed by customers, including their status and details.
Analytics: Admin has access to sales analytics, such as:
Total sales in a specific period.
Most popular books and categories.
Customer demographics and purchase trends.
Inventory tracking and low-stock alerts.
Technologies Used
Backend: PHP (Laravel / CodeIgniter) or Node.js (Express)
Frontend: HTML, CSS, JavaScript (React.js / Vue.js)
Database: MySQL / PostgreSQL
Authentication: Laravel Passport or JWT (JSON Web Token)
Payment Integration: PayPal, Stripe
Analytics: Admin dashboard for sales data and insights
Version Control: GitHub for version control
Installation
Prerequisites
PHP >= 7.4 (or Node.js if you're using a JavaScript stack)
Composer for PHP (or NPM for JavaScript)
MySQL / PostgreSQL for database management
Steps to Set Up Locally:
Clone the Repository:

bash
Copy code
git clone https://github.com/AlvinRichardZAb/zab_shop.git
Install Dependencies: Navigate to the project directory and run:

bash
Copy code
composer install  # For PHP/Laravel
# OR
npm install      # For Node.js/Express
Set Up Environment Variables: Copy the .env.example file to .env:

bash
Copy code
cp .env.example .env
Set Up Database:

Create a database in MySQL/PostgreSQL.
Update .env file with your database credentials.
Run Migrations: To create the necessary database tables and relations:

bash
Copy code
php artisan migrate  # For Laravel
# OR
node migration.js   # For Node.js (if you use a migration script)
Serve the Application:

For Laravel (PHP):
bash
Copy code
php artisan serve
For Node.js:
bash
Copy code
npm start
Access the Application: Open a browser and go to http://localhost:8000 (or the specified port) to view the Zab Shop.

Contributing
We welcome contributions to Zab Shop. To contribute:

Fork the repository.
Create a new branch (git checkout -b feature/your-feature).
Make your changes.
Commit your changes (git commit -m 'Add new feature').
Push to your branch (git push origin feature/your-feature).
Create a pull request.
License
Zab Shop is open-source and available under the Web Genixs.

![image](https://github.com/user-attachments/assets/988443ab-55aa-4e20-905a-29426e36b2e5)
![image](https://github.com/user-attachments/assets/6e9b02ce-17ca-4693-8919-0c0e7a8f19ca)
![image](https://github.com/user-attachments/assets/426d2415-7900-4390-a395-911192a33dca)
![image](https://github.com/user-attachments/assets/d5422927-a2e7-4df7-bfe0-cf15c96ecfe7
![image](https://github.com/user-attachments/assets/3d8493fb-abf2-45a4-bfd2-d149d170b6a0)
![image](https://github.com/user-attachments/assets/054a94e5-3ab9-4b17-afc1-1dd828864e84)
![image](https://github.com/user-attachments/assets/a9271951-4f1c-4bd6-a176-ee4f5ed505fb)
![image](https://github.com/user-attachments/assets/8dfc3343-ee40-4501-bf55-ea1b7158d990)
![image](https://github.com/user-attachments/assets/f33b2b58-410c-4e71-b645-0d6a1ec23019)
![image](https://github.com/user-attachments/assets/b6d490df-e803-47cf-bb6b-5e6c82ce022c)
![image](https://github.com/user-attachments/assets/b470a92d-a9ec-43d9-810f-6c456508fd2f)
![image](https://github.com/user-attachments/assets/0991ea62-4509-4373-98f1-ef41532d51a6)













