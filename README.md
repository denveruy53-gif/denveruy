# Personal Task Manager

A simple Laravel-based Personal Task Manager that allows users to create, view, edit, update, and delete tasks.

## Project Information

* **Project Code:** WST21-PM-2026-SF
* **Student Name:** DENVER L UY
* **Course & Year:** BSIT & 2ND YEAR
* **Database Used:** SQLite

## Features

* Add Task
  The user enters the task name, description, status, and due date, then saves the task.
  <img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/f21b9e28-3f6e-4064-87bf-e9667f23fbdb" />


* View Tasks
  The saved task appears in the task list.
  <img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/57968e6f-fdf4-4387-a320-4a64cdc6b189" />

  
* Edit Task
  The user selects Edit and modifies the task information.
  <img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/e470af23-56ba-4b6a-a7ec-e97f8ae1ce54" />

* Delete Task
   The user can delete an existing task from the task list.
   <img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/94a761f9-42e7-431a-be35-3f1bf40a53f9" />

* Update Status
  The user can update the status of a task.
  * Pending
    A task can be marked as Pending when it is not yet completed.
    <img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/3f203ec1-add2-415f-a03f-dd6e486417c2" />
    
  * Completed
    A task can be marked as Completed after the task has been finished.
    <img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/1538faf0-1d1f-4916-a20a-5cbc0f5ba50c" />

* Set Due Date
    The user can set a due date for each task.
    <img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/8118ca57-b802-4651-91f6-e769ac341f82" />

* Add Task Description
    The user can add a description to provide additional information about the task.
    <img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/558fa8af-3ded-4663-8276-41b47b184fc9" />


## Technologies Used

* Laravel
* PHP
* SQLite
* Blade Templates
* HTML
* CSS

## Project Description

The Personal Task Manager is a Laravel web application designed to help users manage their daily tasks. Users can add new tasks, view existing tasks, edit task information, update task status, and delete tasks.

## Database

This project uses SQLite as the database.

The `tasks` table contains:

* `id`
* `task_name`
* `description`
* `status`
* `due_date`
* `created_at`
* `updated_at`

## CRUD Operations

The application implements the following CRUD operations:

* **Create** — Add a new task
* **Read** — View all tasks
* **Update** — Edit task details and status
* **Delete** — Remove a task

## Installation

1. Clone the repository.
2. Install dependencies using Composer.
3. Configure the `.env` file.
4. Create the SQLite database.
5. Run the database migrations.
6. Start the Laravel development server.

## Author

**UY DENVER LIBANAN**

