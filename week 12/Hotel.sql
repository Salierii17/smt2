
-- create database hotel add table room and type
CREATE DATABASE Hotel


CREATE TABLE  room (
  room_id INT NOT NULL,
  room_name VARCHAR(30) NOT NULL,
  type_id CHAR(3) NOT NULL,
  PRIMARY KEY (room_id,type_id),
  FOREIGN KEY (type_id) REFERENCES type(type_id)
  );
  
CREATE TABLE types (
  	type_id CHAR (3) NOT NULL,
    type_name VARCHAR(20) NOT NULL, 
  	PRIMARY KEY (type_id)  
  )

CREATE TABLE Customer(
	cus_id CHAR(10) NOT NULL,
  cus_user VARCHAR(50) NOT NULL,
  cus_pass CHAR(10) NOT NULL,
  cus_name VARCHAR(30) NOT NULL,
  cus_address VARCHAR(200) NOT NULL,
  PRIMARY KEY(cus_id)
)

CREATE TABLE booking(
	book_id char(5) NOT NULL,
  start_date date NOT NULL,
  end_date date NOT NULL,
  cus_id CHAR(10) NOT NULL,
  room_id CHAR(3) NOT NULL,
  PRIMARY KEY(book_id),
  FOREIGN KEY(cus_id) REFERENCES Customer(cus_id),
  FOREIGN KEY(room_id) REFERENCES Room(room_id)
)







