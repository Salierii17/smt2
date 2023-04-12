
CREATE TABLE customer(
	cus_id INT NOT NULL AUTO_INCREMENT,
  cus_user VARCHAR(50) NOT NULL,
  cus_pass CHAR(20) NOT NULL,
  cus_name VARCHAR(30) NOT NULL,
  cus_address VARCHAR(200) NOT NULL,
  PRIMARY KEY(cus_id)
);

CREATE TABLE booking(
	book_id INT NOT NULL,
  start_date date NOT NULL,
  end_date date NOT NULL,
  cus_id INT NOT NULL,
  room_id INT NOT NULL,
  PRIMARY KEY(book_id),
  FOREIGN KEY (cus_id) REFERENCES customer(cus_id)
);

CREATE TABLE room (
    room_ID INT NOT NULL,
    room_Name varchar(50) NOT NULL,
    type_ID int  NOT NULL,
    PRIMARY KEY (room_ID)  
  );

CREATE TABLE types (
    type_ID INT NOT NULL PRIMARY KEY,
    type_Name varchar(50) NOT NULL
  ) ;


  ALTER TABLE booking
  ADD FOREIGN KEY (room_id) REFERENCES room (room_id);
  
  ALTER TABLE room
  ADD FOREIGN KEY (type_ID) REFERENCES types (type_ID);







