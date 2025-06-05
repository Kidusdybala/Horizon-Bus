# HORIZON-BUS-SYSTEM

---

## Built With

![HTML5](https://img.shields.io/badge/-HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/-CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/-PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/-JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/-Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

---

## Table of Contents

- [Overview](#overview)
- [Key Features](#key-features)
- [System Requirements](#system-requirements)
- [Installation Guide](#installation-guide)
- [Database Setup](#database-setup)
- [Running the Application](#running-the-application)
- [API Endpoints](#api-endpoints)
- [Contributing](#contributing)
- [License](#license)

## Overview

Horizon Bus System is a web-based platform that provides:
- Real-time bus scheduling and booking
- Seat reservation management
- Live bus tracking
- Ticket generation and management
- Admin dashboard for fleet control

## Key Features

### User Features
- **Online Booking System**
  - Route selection
  - Seat preference
  - Multiple payment options
- **Real-time Tracking**
  - Live bus location
  - Estimated arrival time
- **Ticket Management**
  - E-ticket generation
  - Booking history
  - Cancellation system

### Admin Features
- **Fleet Management**
  - Bus scheduling
  - Route configuration
  - Driver assignment
- **Reporting**
  - Booking analytics
  - Revenue reports
  - Occupancy rates

## System Requirements

```bash
# Verify PHP version (requires 7.4+)
php -v

# Verify MySQL
mysql --version

# Verify Apache (recommended)
apache2 -v
```

## Installation Guide
1. Clone the repository

   ```bash
   git clone https://github.com/kidusdybala/HORIZON-BUS.git
cd HORIZON-BUS-SYSTEM```

2.Database Setup

1. Create MySQL database

   ```bash
   Database Setup
  mysql -u root -p
CREATE DATABASE horizon_bus;
CREATE USER 'horizon_admin'@'localhost' IDENTIFIED BY 'securepassword';
GRANT ALL PRIVILEGES ON horizon_bus.* TO 'horizon_admin'@'localhost';
FLUSH PRIVILEGES;
exit```
3`Configure database connection
Edit config/database.php:
```bash
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'horizon_admin');
define('DB_PASSWORD', 'securepassword');
define('DB_NAME', 'horizon_bus');
?>
```
## Running the Application
Development
```bash
php -S localhost:8000
```
Production
```bash
# Configure virtual host (Apache example)
sudo nano /etc/apache2/sites-available/horizon.conf
```
API Endpoints
Booking System
```bash
# Check available buses
curl -X GET http://localhost:8000/api/buses?from=Nairobi&to=Mombasa&date=2023-12-25

# Make reservation
curl -X POST http://localhost:8000/api/bookings \
  -H "Content-Type: application/json" \
  -d '{"user_id":123,"bus_id":456,"seats":["A1","A2"],"payment_method":"mpesa"}'
```
## Contributing
Fork the repository

Create feature branch:
```bash
git checkout -b feature/new-feature
```
Commit changes:
```bash
git commit -m "Add new booking feature"
```
Push to branch
```bash
git push origin feature/new-feature
```
## License
MIT License - See LICENSE for details.
```bash
# View license
cat LICENSE
```
