# 🏨 Hotel Management System

A web-based **Hotel, Lodge, and Resort Management System** built using **PHP** and **MySQLi**.  
This system simplifies the management of **room bookings, guest check-ins/check-outs, billing, and staff operations** in one place.

---

## 🚀 Features

- ✅ Room Booking & Availability Management  
- ✅ Guest Check-in / Check-out System  
- ✅ Billing and Invoice Generation  
- ✅ Staff & Admin Management  
- ✅ Secure Login and Session Handling  
- ✅ Responsive Web Interface  

---

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP (MySQLi Extension)  
- **Database:** MySQL  
- **Server:** Apache (XAMPP / WAMP recommended)

---

## ⚙️ How to Run the Project

Follow these steps to set up the project locally:

### Step 1️⃣ — Clone the Repository
```bash
git clone https://github.com/yourusername/hotel-management-system.git

Step 2️⃣ — Move to Server Directory

Move the project folder to your local server’s htdocs folder:

C:\xampp\htdocs\

Step 3️⃣ — Start XAMPP

Open XAMPP Control Panel

Start Apache and MySQL

Step 4️⃣ — Create the Database

Open phpMyAdmin

Click on New → Create a database (e.g., hotel_db)

Import the provided .sql file from the /database folder

Step 5️⃣ — Configure Database Connection

If needed, open your project’s database connection file (e.g., db_connect.php or config.php) and update:

$host = "localhost";
$user = "root";
$password = "";
$database = "hotel_db";
$conn = mysqli_connect($host, $user, $password, $database);

Step 6️⃣ — Run the Project

Open your browser and type:

👉 http://localhost/hotel-management-system

📊 Database Structure (Example)
Table Name	Description
rooms	Room details and status
guests	Guest personal information
bookings	Booking records
staff	Staff login and details
billing	Payment and invoices

## 🙋‍♀️ Author
- **Arshad Shaikh**
- GitHub: https://github.com/ArshadShaikh-001
- LinkedIn: https://www.linkedin.com/in/arshad-shaikh-911b71346/
