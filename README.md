# Point of Sale (POS) System - Assignment Complete 🚀

This repository contains the completed assignment for the Point of Sale (POS) / Inventory Management System. The project has been upgraded with a complete Customer Management module and integrated seamlessly into the POS and Invoice system.

## 👨‍💻 Author

**Md. Shakil Khan**

## 🎯 Completed Requirements (Features)

### Task 1 & 2: Customer Management (CRUD)

- **Database:** Created a `customers` table with `name`, `email`, `mobile`, and `description` fields.
- **Functionality:** Fully functional Create, Read, Update, and Delete (CRUD) operations for customers.
- **API & Frontend:** Integrated smooth frontend interactions using Axios for API calls.

### Task 3: POS Interface Enhancements

- **Customer Selection:** Added a dynamic "Customer Dropdown" right next to the Category filter on the POS page.
- **Cart UI Update:** When a customer is selected from the dropdown, their name instantly appears inside the Cart section.
- **Validation:** Implemented strict validation so that a salesman **cannot** finalize an invoice without selecting a customer first.

### Task 4: Invoice Details & Print View

- **Database Integration:** Modified the `invoices` table to include `customer_id` and established a Foreign Key relationship with the `customers` table.
- **Invoice Modal:** The "View Invoice" modal now proudly displays the selected Customer's Name and Mobile Number (styled beautifully in red as per requirements).
- **Print View:** The exact same customer details are successfully carried over to the printable invoice window.
- **Fallback Logic:** Handles deleted or missing customers gracefully (e.g., showing "Walk-in Customer").

## 🛠️ Technologies Used

- **Backend:** Laravel, MySQL/PostgreSQL
- **Frontend:** Blade Templates, Bootstrap 5, Vanilla JavaScript
- **API Calls:** Axios

## 🎥 Project Presentation Video

[👉 Click here to watch the presentation video](https://drive.google.com/file/d/1PMTW3sPHdVuRIYZctU2DJEdS23KYgtDc/view?usp=sharing)

## ⚙️ How to Run the Project Locally

1. Clone the repository.
2. Run `composer install` to install PHP dependencies.
3. Copy `.env.example` to `.env` and configure your database credentials.
4. Run `php artisan key:generate`.
5. Run `php artisan migrate:fresh --seed` (to apply all tables including the new relationships).
6. Start the server using `php artisan serve`.
