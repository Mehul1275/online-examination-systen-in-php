# Online Examination System
An Online Examination System (OES) is a web-based platform that simplifies the process of conducting examinations by significantly reducing manual work and improving accuracy. This project provides a secure, efficient, and user-friendly platform for administering and managing exams, allowing for automated grading, faster results, and convenient remote access to assessments.

***

### Key Features
The system includes modules and features for both students and administrators to ensure a seamless experience.

#### Student Module
* **User Accounts**: Students can create accounts and log in with unique credentials provided by their college.
* **Exam Accessibility**: Allows students to take exams remotely from anywhere and at any time.
* **Result Tracking**: Students can view their scores and overall performance in a dashboard.
* **Real-time Feedback**: The system provides a platform for students to submit feedback or report problems.

#### Admin Module
* **Admin Authentication**: Admins and examiners can log in with secure credentials to access the system.
* **Exam Management**: Admins can create new exams, define details (date, time, duration), and set question formats.
* **User Management**: Admins have the ability to manage student, examiner, and other admin accounts.
* **Exam Administration**: Admins can oversee the exam process, view student submissions, evaluate answers, and publish results.

***

### Technology Stack
This project is built using a combination of front-end and back-end technologies.

* **Frontend**: HTML, CSS, JavaScript
    * Styling is enhanced with Bootstrap, Tailwind CSS, and custom CSS.
* **Backend**: PHP
* **Database**: MySQL
* **Server Environment**: WAMP, XAMPP, MAMP, or LAMP.

***

### Installation Instructions
Follow these steps to set up and run the project on your local machine.

1.  **Download and Extract Files**: Unzip the project files and move the extracted folder to your local server's directory (e.g., `C:/xampp/htdocs/` for XAMPP).
2.  **Database Configuration**:
    * Open `phpMyAdmin` in your browser.
    * Create a new database named `project`.
    * Import the `project.sql` file from the `database` folder into the newly created database.
3.  **Run the Application**:
    * Open your web browser and navigate to `http://localhost/online-examination-system-in-php-master/index.php`.

***

### Admin Login Details
To access the admin dashboard, use the following credentials:

* **Login ID**: `admin@gmail.com`
* **Password**: `123456`

You can access the admin login page at `http://localhost/online-examination-system-in-php-master/admin.php`.

***

### Diagrams
The project includes several diagrams to illustrate its architecture and flow.

* **Data Flow Diagram (DFD)**: Shows the flow of data between users (Student, Admin), the frontend, the backend server, and the database.
* **Entity-Relationship (ER) Diagram**: Defines the relationships between entities (Admin, Student, Exam, Question, Answer, Result) within the MySQL database.
* **User Process Flow Diagram**: Outlines the sequence of actions for students and administrators, from logging in to completing tasks like taking an exam or managing users.

***

### Known Issues
* High traffic or simultaneous user logins may cause server overload, leading to slow response times or system crashes.
* Poor internet connectivity can disrupt the examination process.

***

### Future Improvements
* **Role-Based Access Control (RBAC)**: Implement different access levels for students, teachers, and administrators to enhance system security and management.
* **Mobile App Integration**: Develop a mobile-friendly application for Android and iOS to increase accessibility for students.
