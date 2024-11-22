# Task Manager

The project is a task-tracking application designed to help users manage their daily tasks. Users can create accounts, log in, add tasks, mark tasks as completed, and delete tasks when no longer needed. The application leverages session management, organized task views, and a MySQL database.

---

# Table of Contents

1. [Features](#features)
2. [Concepts](#concepts)
3. [Database Schema](#database-schema)
    - [Table: `users`](#table-users)
    - [Table: `tasks`](#table-tasks)
4. [Installation](#installation)
5. [Project Structure](#project-structure)
    - [Folder and File Descriptions](#folder-and-file-descriptions)



## Features

1. **User Authentication:**
    - Users can register for an account and log in to access their personalized task list.

2. **Task Management:**
    - Add new tasks with a title and description.
    - Mark tasks as completed to differentiate them from pending tasks.
    - Delete tasks that are no longer needed.

3. **Organized Task Display:**
    - Clear and intuitive table view of all tasks.
    - Tasks are categorized based on their status (pending or completed).

---

## Concepts

1. **Session Management:**
    - Secure login and logout functionality using PHP sessions.

2. **Database Interaction:**
    - Tasks and user data are stored and retrieved using **PDO** for secure database access.

3. **Efficient Task Organization:**
    - Use of arrays and database relationships to organize tasks by user.

---

## Database Schema

### Table: `users`
Stores users information.

| Column        | Type                  | Description                                  |
|---------------|-----------------------|----------------------------------------------|
| `user_id`     | `INT (PK, AUTO_INCREMENT)` | Unique identifier for each user.            |
| `username`    | `VARCHAR(50) (UNIQUE)` | Username for logging in.                    |
| `password`    | `VARCHAR(255)`         | Hashed password for secure authentication.  |
| `email`       | `VARCHAR(100) (UNIQUE)` | User's email address.                       |

### Table: `tasks`
Stores tasks information for users.

| Column          | Type                                | Description                                          |
|------------------|-------------------------------------|------------------------------------------------------|
| `task_id`        | `INT (PK, AUTO_INCREMENT)`         | Unique identifier for each task.                    |
| `user_id`        | `INT (FK → users.user_id)`         | Links task to its creator.                          |
| `title`          | `VARCHAR(100)`                     | Title of the task.                                  |
| `description`    | `TEXT`                             | Detailed description of the task.                  |
| `status`         | `ENUM('pending', 'completed')`     | Current status of the task.                        |
| `created_at`     | `DATETIME (DEFAULT CURRENT_TIMESTAMP)` | Timestamp when the task was created.               |
| `completed_at`   | `DATETIME (NULLABLE)`              | Timestamp when the task was completed, if any.     |

---

## Installation

1. **Clone the Repository:**
    ```bash
        git clone https://github.com/Tiffany-Dby/task_manager.git
        cd task_manager
    ```
   
2. **Setup the Database:**

   - Import the task_manager.sql file from the tmDatabase/ directory into your MySQL database.
   - Update tmFunctions/tmDatabase.php with your database credentials.

3. **Configure Your Environment:**

   - Ensure your server supports PHP and MySQL.
   - Place the project folder in your server's root directory (e.g., htdocs for MAMP).

4. **Run the Application:**

   - Open your browser and navigate to http://localhost/task_manager/index.php.

---

## Project structure

### Folder and File Descriptions

```bash
task_manager/
├── tmAssets/
│   ├── tmStyles/
│   │   ├── gardevoir.css               # Normalize css
│   │   ├── index.css                   # Main stylesheet for the app
│   ├── tmImages/
│       ├── tmPresentation.webp         # Image assets for the application
├── tmDatabase/
│   ├── task_manager.sql                # SQL dump for creating the database schema
├── tmFunctions/
│   ├── tmDatabase.php                  # Contains the function to connect to the database
│   ├── tmUser.php                      # Handles user-related database queries (register, login, etc.)
│   ├── tmTask.php                      # Handles task-related database queries (CRUD)
├── tmScripts/
│   ├── tmScript.js                     # JavaScript for additional client-side functionality
├── tmSignOut/
│   ├── tmProcessSignOut.php            # Script for handling user logout
├── tmViews/
│   ├── tmDashboard/
│   │   ├── tmDashboard.php             # Main user dashboard (Work In Progress)
│   ├── tmSignIn/
│   │   ├── tmProcessSignIn.php         # Backend logic for user login
│   │   ├── tmSignIn.php                # Login page view
│   ├── tmSignUp/
│   │   ├── tmProcessSignUp.php         # Backend logic for user registration
│   │   ├── tmSignUp.php                # Registration page view
│   ├── tmTasks/
│       ├── tmAddTask.php               # Backend script for adding tasks
│       ├── tmDeleteTask.php            # Backend script for deleting tasks
│       ├── tmMarkTaskCompleted.php     # Backend script for marking tasks as completed
│       ├── tmTasks.php                 # Task management page view
│       ├── tmViewTasksList.php         # Backend script for displaying task list table
├── index.php                           # Entry point for the application
├── tmFooter.php                        # Footer template for the app
├── tmHeader.php                        # Header template for the app
```

---

## Collaborators

This project was created as part of a school assignment to learn and practice web development using PHP, MySQL, and related technologies.

Contributors:

[![GITHUB](https://img.shields.io/badge/Owen-expert?style=&logo=GITHUB&logoColor=fefefe&labelColor=222529&color=222529)](https://github.com/Owenews)
[![GITHUB](https://img.shields.io/badge/Mehmet-expert?style=&logo=GITHUB&logoColor=fefefe&labelColor=222529&color=222529)](https://github.com/lightace46)
[![GITHUB](https://img.shields.io/badge/Sami-expert?style=&logo=GITHUB&logoColor=fefefe&labelColor=222529&color=222529)](https://github.com/Samp83)
[![GITHUB](https://img.shields.io/badge/Cassandra-expert?style=&logo=GITHUB&logoColor=fefefe&labelColor=222529&color=222529)](https://github.com/CassC17)
[![GITHUB](https://img.shields.io/badge/Tiffany-expert?style=&logo=GITHUB&logoColor=fefefe&labelColor=222529&color=222529)](https://github.com/Tiffany-Dby)
