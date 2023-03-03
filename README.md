Training php by correcting a pre-made CRUD code full of errors<br>
link to the exercise (french) : https://www.copier-coller.com/un-crud-en-php/<br>
MYSQL command to create the database :
DROP TABLE IF EXISTS `crud_table`;
CREATE TABLE IF NOT EXISTS `crud_table` (
`ID` int NOT NULL AUTO_INCREMENT,
`Name` varchar(60) NOT NULL,
`Firstname` varchar(60) NOT NULL,
`Age` int NOT NULL,
`Tel` varchar(11) NOT NULL,
`Pays` varchar(60) NOT NULL,
`Email` varchar(60) NOT NULL,
`Comment` varchar(1000) NOT NULL,
`metier` varchar(60) NOT NULL,
`URL` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `crud_table` (`ID`, `Name`, `Firstname`, `Age`, `Tel`, `Pays`, `Email`, `Comment`, `metier`, `URL`) VALUES
('<!-- YOUR VALUES -->');
COMMIT;
