SELECT * FROM employees;
////////////////1
SELECT name, salary FROM employees;
////////////////2
SELECT * FROM employees WHERE salary > 50000;
////////////////3
SELECT * FROM  employees WHERE name LIKE 'J%';
////////////////4
SELECT * FROM employees WHERE department_id IN (1,2,3);
////////////////5
SELECT * FROM employees ORDER BY hire_date DESC;
////////////////6
SELECT COUNT(*) FROM employees;
////////////////7
SELECT SUM(salary) FROM employees;
////////////////8
SELECT AVG(salary) FROM employees;
////////////////9
SELECT MIN(salary) FROM employees;
////////////////10
SELECT MAX(salary) FROM employees;
////////////////11
SELECT * FROM employees WHERE salary > 50000;


SELECT department_id, AVG(salary)
FROM employees
GROUP BY department_id
HAVING AVG(salary) > 50000;
////////////////12
CREATE TABLE employees (
    employee_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20),
    position VARCHAR(50)
);

CREAT TABLE employee_details (
    detail_id INT PRIMARY KEY AUTO_INCREMENT,
    employee_id INT ,
    address VARCHAR(100),
    phone_number VARCHAR(15),
    FOREING KEY (employee_id) REFERENCES employees(employee_id)
);
////////////////13
CREAT TABLE departments (
    department_id INT PRIMARY KEY AUTO_INCREMENT,
    department_name VARCHAR(50)
);

CREAT TABLE employees (
    employee_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    position VARCHAR(50),
    department_id INT,
    FOREING KEY (department_id) REFERENCES department(department_id)
);
//////////////////14
CREATE TABLE students (
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    student_name VARCHAR(50)
);

CREATE TABLE courses (
    course_id INT PRIMARY KEY AUTO_INCREMENT,
    course_name VARCHAR(50)
);

CREATE TABLE student_courses (
    student_id INT,
    course_id INT,
    FOREIGN KEY (student_id) REFERENCES students(student_id),
    FOREIGN KEY (course_id) REFERENCES courses(course_id),
    PRIMARY KEY (student_id, course_id)
);
///////////////////15
ALATER TABLE employees
ADD CONSTRAINT fk_department
FOREING KEY (department_id) REFERENCES departments(department_id);
///////////////////16
ALATER TABLE employees
MODIFY name VARCHAR(20) NOT NULL;
///////////////////17
ALATER TABLE employees
ADD CONSTRAINT unique_email UNIQUE (email);
///////////////////
ALATER TABLE employees
ADD CONSTRAINT check_salary
CHECK (salary > 0);
///////////////////
ALATER TABLE employees
ADD COLUMN status VARCHAR(10) DEFAULT 'Active';
///////////////////
CREATE DATABASE company_db;
USE company_db;

CREATE TABLE departments (
    department_id INT PRIMARY KEY AUTO_INCREMENT,
    department_name VARCHAR(20) NOT NULL
);

CREATE TABLE employees (
    employee_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(30) UNIQUE,
    salary DECIMAL(10 ,2) CHECK (salary > 0),
    status VARCHAR(10) DEFAULT 'active',
    department_id INT,
    FONEING KEY (department_id) REFERENCES departments(department_id)
);

CREAT TABLE projects (
    project_id INT PRIMARY KEY AUTTO_INCREMENT,
    project_name VARCHAR(50) NOT NULL,
);

CREATE TABLE employee_projects (
    employee_id INT,
    project_id INT,
    PRIMRY KEY (employee_id, project_id),
    FOREIGN KEY (employee_id) REFERENCES employees(employee_id),
    FOREIGN KEY (project_id) REFERENCES projects(project_id)
);






