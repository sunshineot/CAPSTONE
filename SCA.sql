
DROP DATABASE IF EXISTS capstone;
CREATE DATABASE capstone;
USE capstone;

CREATE TABLE student
(	
	stid int,
	fname varchar(25),
	lname varchar(25),
	major1 varchar(25),
	major2 varchar(25),
	minor1 varchar(25),
	minor2 varchar(25),
	level int,
	status varchar(10),
	password varchar(25),

	primary key (stid)

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


create table degree	/*Need to find a away to account for majors and minors */
	(
		id int auto_increment NOT NULL,
		name varchar(50),
		department varchar(50),

		primary key (id)

	);


create table lecturer
	(
		lec_id int,
		lec_name varchar(50),
		lec_code varchar(8),

		primary key (lec_id),
		FOREIGN KEY (lec_code) REFERENCES courses(c_code)

	);





