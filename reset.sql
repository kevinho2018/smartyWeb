DROP DATABASE IF EXISTS smartyWeb;

CREATE DATABASE smartyWeb COLLATE utf8_unicode_ci;
USE smartyWeb;

CREATE TABLE member (
mID VARCHAR(200) PRIMARY KEY,
mName VARCHAR(15) NOT NULL,
mEmail VARCHAR(100) NOT NULL,
mPassword VARCHAR(200) NOT NULL) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO member (mID, mName, mEmail, mPassword)
VALUES ('test1', 'name1', 'test1@gmail.com', '11111');
INSERT INTO member (mID, mName, mEmail, mPassword)
VALUES ('test2', 'name2', 'test2@gmail.com', '22222');
INSERT INTO member (mID, mName, mEmail, mPassword)
VALUES ('test3', 'name3', 'test3@gmail.com', '33333');
INSERT INTO member (mID, mName, mEmail, mPassword)
VALUES ('test4', 'name4', 'test4@gmail.com', '44444');
INSERT INTO member (mID, mName, mEmail, mPassword)
VALUES ('test5', 'name5', 'test5@gmail.com', '55555');

SELECT * FROM member;
