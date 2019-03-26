create table stud_score (
	num int not null auto_increment,
	name varchar(12),
	sub1 int,
	sub2 int,
	sub3 int,
	sub4 int,
	sub5 int,
        sum int,
        avg float,
	primary key(num)
);