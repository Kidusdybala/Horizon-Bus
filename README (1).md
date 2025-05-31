
# 🚌 HORIZON BUS SYSTEM

*Smart & Seamless Bus Booking and Tracking*

![last commit](https://img.shields.io/github/last-commit/your-username/horizon-bus-system)
![language](https://img.shields.io/github/languages/top/your-username/horizon-bus-system)
![PHP](https://img.shields.io/badge/PHP-8.2-blue)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![HTML](https://img.shields.io/badge/HTML-Markup-red)
![CSS](https://img.shields.io/badge/CSS-Styling-blue)

> Effortless intercity bus booking and real-time status tracking for a modern travel experience.

---

## 🚀 Built With

- ![PHP](https://img.shields.io/badge/-PHP-777bb4?logo=php)
- ![MySQL](https://img.shields.io/badge/-MySQL-4479A1?logo=mysql)
- ![HTML5](https://img.shields.io/badge/-HTML5-E34F26?logo=html5&logoColor=white)
- ![CSS3](https://img.shields.io/badge/-CSS3-1572B6?logo=css3)

---

## 📚 Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Running the Application](#running-the-application)
- [API Endpoints](#api-endpoints)
- [Contributing](#contributing)
- [License](#license)

---

## ✨ Features

- 🚍 Bus Booking by Route, Date, and Time
- 🧾 E-Receipts and Booking History
- 🧍 User Registration and Login
- 🗺️ Route and Stop Listings
- 📡 Real-Time Bus Status Tracking
- 📂 Admin Panel: Manage Routes, Buses, Schedules, and Bookings

---

## ✅ Prerequisites

Before you begin, ensure you have the following installed:

- PHP >= 8.2
- MySQL Server
- Apache or any local server (e.g., XAMPP/Laragon)
- Composer (optional for any dependency management)

---

## ⚙️ Installation

1. **Clone the Repository**
```bash
git clone https://github.com/your-username/horizon-bus-system.git
cd horizon-bus-system
```

2. **Start your local server (Apache + MySQL)**

3. **Create the `.env` configuration (if using Composer or custom settings):**
```bash
cp .env.example .env
```

4. **Create a MySQL database:**
```bash
CREATE DATABASE horizon_bus_system;
```

5. **Update `.env` or DB config in `config.php`:**
```bash
DB_HOST=127.0.0.1
DB_NAME=horizon_bus_system
DB_USER=root
DB_PASS=
```

6. **Run database migration (if available):**
```bash
php scripts/migrate.php
```
*(Or import `horizon_bus_system.sql` into phpMyAdmin)*

---

## ▶️ Running the Application

1. **Start Apache and MySQL in XAMPP/Laragon**

2. **Open in browser:**
```bash
http://localhost/horizon-bus-system
```

---

## 🛣️ API Endpoints

> If using API architecture (optional)

- `GET /buses` – List all buses
- `POST /bookings` – Make a booking
- `GET /status/:bus_id` – Track bus location/status
- `POST /login` – User login
- `POST /register` – User registration

Refer to `api/` folder for full REST implementation.

---

## 🤝 Contributing

We welcome contributions!

```bash
# Fork the repository
git checkout -b feature/YourFeature

# Make your changes
git commit -m "Add your feature"
git push origin feature/YourFeature
```

Then open a **Pull Request** 🚀

---

## 📄 License

This project is licensed under the MIT License. See the [`LICENSE`](LICENSE) file for details.
