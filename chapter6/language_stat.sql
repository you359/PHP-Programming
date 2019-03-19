  create table language_trend(
  num int not null,
  language char(30) not null,
  1q double,
  2q double,
  3q double,
  4q double,
  status char(1),
  lastrank int,
  primary key(num)
  );
  
insert into language_trend values (1, 'JAVA', 17.2, 16.6, 16.2, 17.4, 'A', 1);
insert into language_trend values (2, 'C', 16.9, 17.5, 18.9, 19.2, 'A', 2);
insert into language_trend values (3, 'C#', 8.6, 7.1, 6.6, 5.9, 'A', 3);
insert into language_trend values (4, 'C++', 5.3, 9.4, 9.2, 9.4, 'A', 4);
insert into language_trend values (5, 'Objective C', 6.9, 8.5, 9.5, 10.3, 'A', 5);
insert into language_trend values (6, 'PHP', 5.5, 5.4, 5.4, 5.6, 'A', 6);
insert into language_trend values (7, 'VisualBasic', 4.4, 5.5, 5.5, 5.1, 'A', 7);
insert into language_trend values (8, 'Python', 3.2, 3.8, 3.9, 3.9, 'A', 8);
insert into language_trend values (9, 'Perl', 2.8, 2.5, 2.2, 2.2, 'A', 9);
insert into language_trend values (10, 'JavaScript', 2.7, 2.2, 1.4, 1.3, 'A', 10);
insert into language_trend values (11, 'Delphi/Object Pascal', 1.8, 1.2, 1.1, 1, 'A', 11);
insert into language_trend values (12, 'Ruby', 1.5, 1.5, 1.7, 1.8, 'A', 12);
insert into language_trend values (13, 'Lisp', 0.6, 1, 1, 1, 'A', 13);
insert into language_trend values (14, 'Pascal', 0.8, 0.8, 0.8, 0.9, 'A', 15);
insert into language_trend values (15, 'Transact-SQL', 0.8, 0.7, 0.9, 0.6, 'A', 14);
insert into language_trend values (16, 'PL/SQL', 1, 1, 0.6, 0.6, 'C', 19);
insert into language_trend values (17, 'Ada', 0.6, 0.7, 0.7, 0.7, 'B', 17);
insert into language_trend values (18, 'Logo', 0.7, 0.8, 0.5, 0.4, 'C', 25);
insert into language_trend values (19, 'smalltalk', 0.2, 0.2, 0.3, 0.3, 'C', 28);
insert into language_trend values (20, 'Lua', 0.6, 0.6, 0.7, 0.7, 'C', 18);
insert into language_trend values (21, 'MATLAB', 0.6, 1.0, 0.7, 0.7, 'B', 23);
insert into language_trend values (22, 'Visaul Basic.NET', 1.0, 0.5, 0.9, 0.7, 'A', 16);
insert into language_trend values (23, 'Bash', 0.7, 0.7, 0.5, 0.6, 'A', 30);
insert into language_trend values (24, 'Assembly', 0.6, 0.5, 0.5, 0.6, 'B', 21);
insert into language_trend values (25, 'Haskell', 0.3, 0.3, 0.3, 0.3, 'C', 26);
insert into language_trend values (26, 'Erlang', 0.3, 0.4, 0.3, 0.3, 'C', 27);
insert into language_trend values (27, 'OpenCL', 0.2, 0.2, 0.3, 0.3, 'C', 29);
insert into language_trend values (28, 'Scratch', 0.4, 0.5, 0.3, 0.5, 'C', 24);
insert into language_trend values (29, 'SAS', 0.6, 0.4, 0.5, 0.5, 'C', 20);
insert into language_trend values (30, 'Fortran', 0.5, 0.4, 0.5, 1.0, 'C', 22);