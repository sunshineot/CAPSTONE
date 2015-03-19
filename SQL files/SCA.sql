
DROP DATABASE IF EXISTS capstone;
CREATE DATABASE capstone;
USE capstone;

CREATE TABLE studentpersonal 
(	
	stid int,
	fname varchar(25),
	lname varchar(25),
	password varchar(25),
	email varchar(50),

	primary key (stid)

);

create table student
	(
		stid int,
		major1 varchar(25),
		major2 varchar(25),
		minor1 varchar(25),
		minor2 varchar(25),
		level int,
		status varchar(10),
		primary key (stid),
		FOREIGN KEY (stid) REFERENCES studentpersonal(stid)
	);

create table courses
	(
		c_code varchar (25),
		c_name varchar (50),
		c_level int,
		c_descrip varchar(500),
		semester int,
		creditnum int,


		primary key (c_code)

	);

create table prereq
(
	id int not null AUTO_INCREMENT,
	c_code varchar(8),
	prereq_code varchar(8),
	primary key (id),
	FOREIGN KEY (c_code) REFERENCES courses(c_code)

);


create table degrees	/*Need to find a away to account for majors and minors */
	(
		id int auto_increment NOT NULL,
		name varchar(50),
		department varchar(50),
		type varchar(50),

		primary key (id)

	);

	create table requirements
		(
			id int not null AUTO_INCREMENT,
			degree_name varchar(50),
			core_course varchar(25),
			primary key (id),
			FOREIGN KEY (core_course) REFERENCES courses(c_code)
			/*FOREIGN KEY (name) REFERENCES courses(c_code)*/
		);



create table lecturer
	(
		lec_id int,
		lec_name varchar(50),
		lec_code varchar(8),

		primary key (lec_id),
		FOREIGN KEY (lec_code) REFERENCES courses(c_code)

	);


create table cxc
	(
		id int not null AUTO_INCREMENT,
		cxc_name not null varchar(50),
		type not null varchar(25),
		primary key(id)
	);





