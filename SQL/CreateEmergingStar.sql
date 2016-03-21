Create Database EmergingStar;

Use EmergingStar;

CREATE TABLE posts (
id int NOT NULL AUTO_INCREMENT,		    
post_title varchar(100),
post_content varchar(500),	
date_created TIMESTAMP,
date_updated TIMESTAMP,	
status bool,
PRIMARY KEY(id)
);