
create database capstone

create table student
(
	fname varchar(25),
	lname varchar(25),
	stid int(10),
	major1 varchar(25),
	major2 varchar(25),
	minor1 varchar(25),
	minor2 varchar(25),
	level varchar(1),
	status varchar(10),
	password varchar(25)

	primary key (stid)

);

create table courses
	(
		c_code NOT NULL varchar(8),
		c_name NOT NULL varchar(50),
		c_level NOT NULL int,
		c_descrip varchar(500),
		semester int,
		creditnum NOT NULL int


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
		id int not null AUTO_INCREMENT,
		name not null varchar(50),
		department varchar(50)

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





