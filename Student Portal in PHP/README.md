<div align="center">
  <h1>An Interactive Student Portal in PHP</h1>
  <a class="header-badge" target="_blank" href="https://www.linkedin.com/in/khatoonintech/">
  <img src="https://img.shields.io/badge/style--5eba00.svg?label=LinkedIn&logo=linkedin&style=social">
  </a>
  

<sub>Author:
<a href="https://www.linkedin.com/in/Khatoonintech/" target="_blank">Ayesha Noreen</a><br>
<small> <i>#KhatoonInTech CE' 27 @BZU |ByteWise Certified ML/DL Engineer|GSoC Contributor | SWEfellow: Confiniti. ,HeadStarterAI</i> </small>
</sub>
<br>
<br>
<br>

![portal ](../Student%20Portal%20in%20PHP/images/portal.png)

</div>

---
# Table of Contents
- [Overview](#overview)
- [Purpose](#purpose)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
  - [Main Files](#main-files)
  - [Assets](#assets)
  - [MySQL Files](#mysql-files)
  - [Views](#views)
- [Header](#header)
  - [Features](#features)
- [Footer Section](#footer-section)
  - [Features](#features-1)
- [Nav Bar Structure](#nav-bar-structure)
  - [Home](#home)
  - [About BZU](#about-bzu)
- [About Department](#about-department)
  - [About CPE](#about-cpe)
  - [Departmental Vision & Mission](#departmental-vision--mission)
  - [Administration](#administration)
  - [Faculty Members](#faculty-members)
  - [Programs Offered](#programs-offered)
- [Exams & Results](#exams--results)
  - [Admission Schedule](#admission-schedule)
  - [Semester Schedule](#semester-schedule)
  - [All Examination Results](#all-examination-results)
- [Installation](#installation)
  - [Clone the Repository](#clone-the-repository)
  - [Navigate to the Project Directory](#navigate-to-the-project-directory)
  - [Setup the Database](#setup-the-database)
  - [Run the Application](#run-the-application)
- [Usage](#usage)
- [Testing](#testing)
- [Contributing](#contributing)
  - [Code of Conduct](#code-of-conduct)
- [License](#license)



## Overview

The **Student Portal in PHP** is a web-based application designed for educational institutions to manage student records, course registrations, and communication between students and faculty. It is built using PHP and MySQL for the backend and integrates with various frontend technologies like HTML, CSS, and JavaScript to ensure an easy-to-use interface.

## Purpose

The project aims to simplify academic management by providing a centralized platform for students, faculty, and administrators. It offers functionalities such as secure user authentication, course management, assignment submission, result tracking, and real-time communication tools.

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript
- **Frameworks/Libraries**:
  - Bootstrap (for responsive design)
  - jQuery (for enhanced interactivity)


## Project Structure

Here is the structure of the project:

    Student Portal in PHP__|

                                     |-dashbord.php				     
                                     |-index.php				     
                                     |-registration.php				     
                                     |-login.php				     
                                     |-logout.php				     
                                     |-header.php				     
                                     |-no_nav_header.php				     
                                     |-footer.php				     
                                     |-forgetpswd.php				     
                                     |-result.php				     
                                     |-assets----|
                                                       |-small_pixel-7.ttf
                                                       |-images
                                                       |-css---|-style.css
                                     |-MySQL---|
                                                       |-database.php
                                                       |-delete_query.php
                                                       |-sem_1.php
                                                       |-sem_2.php
                                                       |-user_management.sql
                                     |-views---|
                                                     |-uni-vision-mission.php
                                                     |-about-cpe.php
                                                     |-dep-vision-mission.php
                                                     |-admistration.php
                                                     |-faculty.php
                                                     |-programs-offered.php
                                                     |-semSchedule.php
                                                     |-notification.php
                                                     |-TERMS.html
                                                     |-PRIVACY_POLICY.html

![Project Structure](../Student%20Portal%20in%20PHP/images/project_structure.png)

### Main Files
- **dashboard.php**: Displays the main student portal dashboard.
- **index.php**: The homepage of the portal, including login and registration options.
- **registration.php**: Handles user registration.
- **login.php**: Handles user login.
- **logout.php**: Logs out the user.
- **header.php**: The header for the portal, included in most pages.
- **footer.php**: Footer of the portal, included in most pages.
- **forgetpswd.php**: Allows users to reset their password.
- **result.php**: Displays academic results for students.

### Assets
- **small_pixel-7.ttf**: A custom font used across the portal.
- **images**: Folder containing image files used in the portal.
- **style.css**: The primary stylesheet for the portal.

### MySQL Files
- **database.php**: Handles the database connection.
- **delete_query.php**: Contains queries for deleting records from the database.
- **sem_1.php**: Contains data for semester 1.
- **sem_2.php**: Contains data for semester 2.
- **user_management.sql**: SQL script for setting up user management tables in the database.

### Views
- **uni-vision-mission.php**: Page displaying the vision and mission of the university.
- **about-cpe.php**: Page detailing information about the CPE (Center for Professional Education).
- **dep-vision-mission.php**: Page displaying the departmental vision and mission.
- **administration.php**: Information on the department’s administration.
- **faculty.php**: Faculty members of the department.
- **programs-offered.php**: A list of programs offered by the department.
- **semSchedule.php**: Semester schedule page.
- **notification.php**: Displays important announcements or notifications.
- **TERMS.html**: Terms and conditions page.
- **PRIVACY_POLICY.html**: Privacy policy page.

---

## Header
The **Header** is an essential part of every page, providing easy access to the primary navigation and enhancing the user interface.

- **Logo**: Displays the logo of the university or department, which is often clickable and redirects to the homepage (`index.php`).
- **Navigation Links**: Includes links to the main pages of the portal such as Dashboard, About BZU, About Department, Exams & Results, and others.
- **Responsive Design**: The header is responsive, adjusting for various screen sizes (desktop, tablet, mobile).

### Features:
- **Quick Access**: Users can quickly navigate to critical sections such as their dashboard or course registration.
- **Dynamic Content**: The header adjusts based on user authentication status, providing different options for logged-in users versus visitors (e.g., login/register buttons).

![header ](../Student%20Portal%20in%20PHP/images/header.png)

---

## Footer Section

The **Footer** provides additional information and links that are common across the site, such as legal notices and external resources.

- **Contact Information**: Contains the university's contact details, including email, phone numbers, and links to social media accounts.
- **Additional Navigation**: Quick links to frequently visited pages, like the Home page, Contact Us, or Help section.
- **Copyright Notice**: Displays a copyright message indicating the ownership and rights of the portal's content.

### Features:
- **Consistent Access**: No matter where users are on the site, the footer remains accessible and provides essential legal and contact information.
- **Branding**: Reinforces the university's branding and offers a professional finish to each page.

![footer ](../Student%20Portal%20in%20PHP/images/footer.png)

---

## Nav Bar Structure

The navigation bar of the portal is organized into the following categories:

![navbar ](../Student%20Portal%20in%20PHP/images/Nav_Bar.png)
<br>
|-Home (dashbord.php)
|-About BZU
                    |_University Vision & Mission  (uni-vision-mission.php)
|-About Department
                                 |_About CPE  (about-cpe.php)
                                 |_Departmental Vision & Mission  (dep-vision-mission.php)
                                 |_Administration  (admistration.php)
                                 |_Faculty Members  (faculty.php)
                                 |_Programs Offered (programs-offered.php)
|-Exams & Results
                                 |_Admission Schedule (notification.php)
                                 |_Semester Schedule (semSchedule.php)
                                 |_All Examination Results (result.php)

![navbar ](../Student%20Portal%20in%20PHP/images/navbar.png)
                                 

### Home
- **dashbord.php**: The main dashboard of the portal, displaying relevant student information.
![portal ](../Student%20Portal%20in%20PHP/images/portal.png)


### About BZU
- **University Vision & Mission**: The vision and mission statement of the university [University Vision & Mission](../views/uni-vision-mission.php).
  ![about uni ](../Student%20Portal%20in%20PHP/images/uni_mission.png)


## About Department

### About CPE
- **File:** [`about-cpe.php`](../views/about-cpe.php)
- **Description:** This page provides detailed information about the Center for Professional Education (CPE), including its mission, history, and objectives. It aims to introduce students and visitors to the role and impact of CPE in the academic community.
- **Image Preview:**  
  ![About CPE](../Student%20Portal%20in%20PHP/images/about_cpe1.png)
  ![About CPE](../Student%20Portal%20in%20PHP/images/about_cpe2.png)


### Departmental Vision & Mission
- **File:** [`dep-vision-mission.php`](../views/dep-vision-mission.php)
- **Description:** This file contains the vision and mission statements of the department. It explains the department's core values, goals, and aspirations to shape future professionals and make meaningful contributions to the field.
- **Image Preview:**  
  ![Departmental Vision & Mission](../Student%20Portal%20in%20PHP/images/dep_vision_mission1.png)
  ![Departmental Vision & Mission](../Student%20Portal%20in%20PHP/images/dep_vision_mission2.png)
  ![Departmental Vision & Mission](../Student%20Portal%20in%20PHP/images/dep_vision_mission3.png)


### Administration
- **File:** [`admistration.php`](../views/admistration.php)
- **Description:** This page provides an overview of the department’s administrative structure. It includes information about the key figures in administration, their roles, and responsibilities.
- **Image Preview:**  
  ![Administration](../Student%20Portal%20in%20PHP/images/administration.png)

### Faculty Members
- **File:** [`faculty.php`](../views/faculty.php)
- **Description:** The faculty page presents a list of department faculty members, showcasing their profiles, academic backgrounds, research interests, and contact details. It serves as a point of connection between students and faculty.
- **Image Preview:**  
  ![Faculty Members](../Student%20Portal%20in%20PHP/images/faculty1.png)
  ![Faculty Members](../Student%20Portal%20in%20PHP/images/faculty2.png)
  ![Faculty Members](../Student%20Portal%20in%20PHP/images/faculty3.png)


### Programs Offered
- **File:** [`programs-offered.php`](../views/programs-offered.php)
- **Description:** This page lists all the academic programs available within the department. It includes program descriptions, course requirements, and details about specializations to help students choose a suitable academic path.
- **Image Preview:**  
  ![Programs Offered](../Student%20Portal%20in%20PHP/images/programs_offered1.png)
  ![Programs Offered](../Student%20Portal%20in%20PHP/images/programs_offered2.png)
  ![Programs Offered](../Student%20Portal%20in%20PHP/images/programs_offered3.png)


---

## Exams & Results

### Admission Schedule
- **File:** [`notification.php`](../views/notification.php)
- **Description:** This page displays the admission schedule for the upcoming academic term, including deadlines, requirements, and other important information for prospective students.
- **Image Preview:**  
  ![Admission Schedule](../Student%20Portal%20in%20PHP/images/admission_schedule.png)

### Semester Schedule
- **File:** [`semSchedule.php`](../views/semSchedule.php)
- **Description:** This file contains the academic semester schedule, listing important dates, holidays, exam periods, and deadlines, helping students to plan their semester effectively.
- **Image Preview:**  
  ![Semester Schedule](../Student%20Portal%20in%20PHP/images/semester_schedule1.png)
  ![Semester Schedule](../Student%20Portal%20in%20PHP/images/semester_schedule2.png)


### All Examination Results
- **File:** [`result.php`](../result.php)
- **Description:** The examination results page allows students to view their grades and performance for completed courses and exams. It provides a secure way for students to access their academic achievements.
- **Image Preview:**
The interface of **result form**  looks like this: 
  ![Examination Results](../Student%20Portal%20in%20PHP/images/examination_results1.png)

The interface of **Result Card** looks like this  
  ![Examination Results](../Student%20Portal%20in%20PHP/images/examination_results2.png)

The interface of **Error Message: Access Denied** appears when incorrect Name or Roll Number is added:  
  ![Examination Results](../Student%20Portal%20in%20PHP/images/examination_results3.png)

The interface of **Error Message: Still Pending** appears when next/upcoming semester is choosen or when the result is not announced yet:  
  ![Examination Results](../Student%20Portal%20in%20PHP/images/examination_results4.png)


---


## Installation

To set up the Student Portal locally, follow these steps:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/KhatoonInTech/PHP_Full_Stack.git
   ```

2. **Navigate to the Project Directory**
   ```bash
   cd PHP_Full_Stack/Student\ Portal\ in\ PHP
   ```

3. **Setup the Database**
   - Import the SQL file located in the `database` folder into your MySQL database using a tool like phpMyAdmin or command line.
   - Update the database connection settings in `config.php` with your database credentials:
     ```php
     $dbHost = 'localhost';
     $dbUser = 'your_username';
     $dbPass = 'your_password';
     $dbName = 'student_portal';
     ```
![Database Config](../Student%20Portal%20in%20PHP/images/db.png)

4. **Run the Application**
   - Start your local server (e.g., XAMPP or MAMP).
   - Access the application via your web browser at `http://localhost/Student_Portal_in_PHP`.

## Usage

1. **Login as a Student or Admin**
   - Use the provided credentials or register as a new user through the [registration page](../views/registration.php).

2. **Navigate the Dashboard**
   - Access the main dashboard through [dashboard.php](../views/dashbord.php), which provides access to student-specific features.

3. **Explore Academic Information**
   - Visit the **About BZU** and **About Department** sections to view [University Vision & Mission](../views/uni-vision-mission.php), [Department Vision & Mission](../views/dep-vision-mission.php), [Programs Offered](../views/programs-offered.php), and [Faculty Information](../views/faculty.php).

4. **View Exams & Results**
   - Check schedules in [Semester Schedule](../views/semSchedule.php) or view grades in [Results](../result.php).

5. **Access Notifications**
   - Stay updated with important dates through [Admission Schedule](../views/notification.php).


## Testing

To ensure that your installation works correctly:

1. Create test users (students and admin) in your database.
2. Log in using these test accounts.
3. Test all functionalities .
![Register](../Student%20Portal%20in%20PHP/images/register.png)
![Login](../Student%20Portal%20in%20PHP/images/login.png)


   

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Make your changes and commit them (`git commit -m 'Add some feature'`).
4. Push to your branch (`git push origin feature/YourFeature`).
5. Open a pull request explaining your changes.

### Code of Conduct

Please adhere to our [Code of Conduct](../views/TERMS.html) while contributing to this project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

<div align="center">
<h3>For any query/help ,please contact our developer:</h3>  
Developer : <a href="https://www.linkedin.com/in/Khatoonintech/" target="_blank">Ayesha Noreen</a><br>
	<small> SWE Fellow @Confiniti Labs </small>
<br> <a href="https://www.github.com/Khatoonintech/" target="_blank"> Don't forget to ⭐ our repo </a><br>


</div>
