INSERT INTO STUDENT
	VALUES	
	(000000001, 1, 'Jesibelle Jenkins', '123 main street', 11111111111),
	(000000002, 1, 'Tom Jones', '321 main street', 11111111112),
	(000000003, 2, 'Kim Jong Un', 'REDACTED', 11111111113),
	(000000004, 2, 'Joseph Stalin', '123 Gulag Street', 11111111114),
	(000000005, 2, 'Adolf Hitler', '123 Reichstag Street', 11111111115),
	(000000006, 1, 'Matt Bryan', '987 main way', 11111111116),
	(000000007, 1, 'Jimmy Jam', '321 main way', 11111111117),
	(000000008, 2, 'Andre Samuel', '4657 Somewhere road', 11111111118),
	(000000009, 2, 'Brian Rums', '3124 Place way', 11111111119),
	(000000010, 2, 'Andrew Bern', '986 Rood street', 11111111110);

INSERT INTO PROFESSOR
	VALUES
	(123456789, 'Bert Macklin', 'Place', 'Los Angeles', 'CA', '15951', 123, 
	1234567, 'M', 'Professor', 50000),
	(987654321, 'Jess Bess', 'Somewhere', 'Fullerton', 'CA', '55555', 321, 
	9876543, 'F', 'Doctor', 60000),
	(111111111, 'Scott Annin', 'Road', 'La Habra', 'CA', '98745', 987, 
	7777777, 'M', 'Doctor', 60000); 


INSERT INTO DEPARTMENT
	VALUES
	(1, 111111111, 'Mathematics', 'Math Building', '11111111111'),
	(2, 987654321, 'Computer Science', 'CS Building', '22222222222');

INSERT INTO COURSE
	VALUES
	(2, 1, 'Calculus', 'Calculus book', 4),
	(3, 2, 'Databases', 'Database book', 4),
	(4, 2, 'Data Structures', 'Data Structure book', 3),
	(1, 1, 'Algebra', 'Basic Algebra Book', 4);

INSERT INTO SECTION
	VALUES
	(1, 1, 123456789, 'MA 102', '08:00:00', '09:50:00', 30),
	(2, 1, 123456789, 'MA 102', '10:00:00', '11:50:00', 30),
	(3, 2, 111111111, 'MA 100', '12:00:00', '13:50:00', 30),
	(4, 2, 111111111, 'MA 100', '14:00:00', '15:50:00', 30),
	(5, 3, 123456789, 'CS 101', '08:00:00', '08:50:00', 30),
	(6, 3, 987654321, 'CS 102', '09:00:00', '09:50:00', 30),
	(7, 4, 987654321, 'CS 104', '10:00:00', '11:50:00', 30),
	(8, 4, 987654321, 'CS 200', '14:00:00', '15:50:00', 30);

INSERT INTO ENROLLMENT 
	VALUES
	(000000001, 1, 'A'),
	(000000001, 8, 'A'),
	(000000001, 3, 'A'),
	(000000002, 2, 'B'),
	(000000002, 5, 'A'),
	(000000002, 3, 'C'),
	(000000003, 1, 'F'),
	(000000003, 8, 'F'),
	(000000003, 3, 'F'),
	(000000009, 6, 'F'),
	(000000004, 5, 'F'),
	(000000004, 7, 'F'),
	(000000006, 7, 'F'),
	(000000006, 3, 'F'),
	(000000004, 1, 'B-'),
	(000000004, 3, 'C+'),
	(000000005, 1, 'A+'),
	(000000006, 1, 'C-'),
	(000000007, 3, 'D-'),
	(000000007, 6, 'D+'),
	(000000008, 8, 'B+'),
	(000000009, 4, 'B+'),
	(000000010, 8, 'F-'),
	(000000010, 4, 'A+'),
	(000000010, 5, 'A+');

INSERT INTO MEETING_DAY
	VALUES
	(1, "Mo"),
	(2, "Tu"),
	(3, "We"),
	(4, "Th"),
	(5, "Fr"),
	(6, "Sa"),
	(7, "Su"),
	(8, "Mo");
