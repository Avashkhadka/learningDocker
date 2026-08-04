 create database ;
 
 create table departments(
	department_id int not null primary key auto_increment,
    department_name varchar(100) not null
 );
 
 create table courses(
	course_id int not null primary key auto_increment,
    course_name varchar(200) not null, 
    department_id int,
    foreign key (department_id) references departments(department_id)
 );
 
 create table student(
	student_id int not null primary key auto_increment,
    name varchar(200) not null,
    age int not null,
    address varchar(255),
    email varchar(200) not null unique,
    department_id int,
    foreign key (department_id) references deparements(department_id)
 );
 
 
 create table emrollments(
 enrollment_id int not null primary key auto_increment,
 student_id int,
 foreign key (student_id) references student(student_id)
 ); 