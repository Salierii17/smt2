-- 1. CREATE Hotel Database with 2 column
CREATE DATABASE Hotel

CREATE TABLE room (
	room_ID CHAR(3) NOT NULL,
    room_Name VARCHAR(50) NOT NULL,
    type_ID INT NOT NULL,
    PRIMARY KEY (room_ID,type_ID),
    FOREIGN KEY (type_ID) REFERENCES types(type_ID)
    )

    CREATE TABLE types(
    type_ID INT NOT NULL,
    type_Name VARCHAR(50) NOT NULL,
    PRIMARY KEY(type_ID)
)


