create table Customers(
    CUSTID VARCHAR(10) NOT NULL PRIMARY KEY,
    CUSTNAME VARCHAR(20) NOT NULL,
    CUSTADDRESS VARCHAR(50) NOT NULL,
    ORDERID VARCHAR(10)
);

CREATE TABLE Orders(
    ORDERID VARCHAR(10) NOT NULL PRIMARY KEY,
    ORDERNAME VARCHAR(20) NOT NULL,
    ORDERDATE DATE NOT NULL,
    QTY INT(3),
    PAYMENTID VARCHAR(10)
);

CREATE TABLE Payments(
    PAYMENTID VARCHAR(10) NOT NULL PRIMARY KEY,
    AMOUNT INT(6) NOT NULL,
    PAYMENTTYPE VARCHAR(10) NOT NULL,
    TAX INT(6)
);

CREATE TABLE Credit(
    CARDNO INT(16) NOT NULL PRIMARY KEY,
    CCNO INT(3) NOT NULL ,
    EXPDATE DATE NOT NULL,
    CARDTYPE VARCHAR(10),
    PAYMENTID VARCHAR(10) NOT NULL
);

CREATE TABLE Admin(
    ADMINID VARCHAR(10) NOT NULL PRIMARY KEY,
    ADMINNAME VARCHAR(20) NOT NULL,
    REGDATE DATE,
    LOGINSTATUS BOOLEAN,
    CUSTID VARCHAR(10) NOT NULL,
    PORTID VARCHAR(10) NOT NULL
);

CREATE TABLE Ports(
    PORTID VARCHAR(10) NOT NULL PRIMARY KEY,
    PORTNAME VARCHAR(20) NOT NULL
);

CREATE TABLE Ships(
    SHIPID VARCHAR(10) NOT NULL PRIMARY KEY,
    ROUTE VARCHAR(10) NOT NULL,
    LOCATION VARCHAR(20) ,
    DOCKTIME TIME,
    NOOFCONTAINERS INT(4),
    WEIGHT INT(4),
    REFUELDURATION INT(3),
    PRICEPERHOUR INT(6),
    ARRIVAL_DATE DATE,
    CONTAINERID VARCHAR(10) NOT NULL,
    PORTID VARCHAR(10) NOT NULL

);

CREATE TABLE Containers(
    CONTAINERID VARCHAR(10) NOT NULL PRIMARY KEY,
    GOODS_NAME VARCHAR(20)
);

CREATE TABLE Stocks(
    CONTAINERID VARCHAR(10) NOT NULL,
    SHIPID VARCHAR(10) NOT NULL,
    RATES INT(6),
    PRICEPERUNIT INT(6),
    PRICETOTAL INT(6),
    QTY INT(4)
);

ALTER TABLE Customers
ADD CONSTRAINT fk_1
FOREIGN KEY (ORDERID)
REFERENCES Orders(ORDERID);

ALTER TABLE Orders
ADD CONSTRAINT fk_2
FOREIGN KEY (PAYMENTID)
REFERENCES Payments(PAYMENTID);

ALTER TABLE Credit
ADD CONSTRAINT fk_3
FOREIGN KEY (PAYMENTID)
REFERENCES Payments(PAYMENTID);

ALTER TABLE Admin
ADD CONSTRAINT fk_4
FOREIGN KEY (CUSTID)
REFERENCES Customers(CUSTID);

ALTER TABLE Admin
ADD CONSTRAINT fk_5
FOREIGN KEY (PORTID)
REFERENCES ports(PORTID);

ALTER TABLE Ships
ADD CONSTRAINT fk_6
FOREIGN KEY (PORTID)
REFERENCES ports(PORTID);

ALTER TABLE Ships
ADD CONSTRAINT fk_7
FOREIGN KEY (CONTAINERID)
REFERENCES Containers(CONTAINERID);

ALTER TABLE Stocks
ADD CONSTRAINT fk_8
FOREIGN KEY (CONTAINERID)
REFERENCES Containers(CONTAINERID);

ALTER TABLE Stocks
ADD CONSTRAINT fk_9
FOREIGN KEY (SHIPID)
REFERENCES Ships(SHIPID);

ALTER TABLE CUSTOMERS
ADD UNIQUE (ORDERID);

ALTER TABLE ORDERS
ADD UNIQUE (PAYMENTID);

ALTER TABLE CREDIT
ADD UNIQUE (PAYMENTID);

ALTER TABLE ADMIN
ADD UNIQUE (CUSTID,PORTID);

ALTER TABLE SHIPS
ADD UNIQUE (PORTID,CONTAINERID);

ALTER TABLE STOCKS
ADD UNIQUE (SHIPID,CONTAINERID);

ALTER TABLE customers DROP FOREIGN KEY fk_1;
ALTER TABLE CUSTOMERS DROP COLUMN ORDERID;

ALTER TABLE ORDERS DROP FOREIGN KEY fk_2;
ALTER TABLE ORDERS DROP COLUMN PAYMENTID;

alter table ORDERS add column CUSTID VARCHAR(10) NOT NULL UNIQUE;
ALTER TABLE Orders
ADD CONSTRAINT fk_2
FOREIGN KEY (CUSTID)
REFERENCES customers(CUSTID);


alter table PAYMENTS add column ORDERID VARCHAR(10) NOT NULL UNIQUE;
ALTER TABLE PAYMENTS
ADD CONSTRAINT fk_10
FOREIGN KEY (ORDERID)
REFERENCES ORDERS(ORDERID);




insert into CUSTOMERS VALUES('10','johar','HAMEEZ'),
('20','SHAHLATIF','BILAL'),
('30','BHAINS COLONY','FAST');

insert into ORDERS(ORDERID,ORDERNAME,ORDERDATE,QTY,CUSTID) VALUES('110','SUGAR','SYS_DATE',1,'10'),
('120','SUGAR','SYS_DATE',2,'20'),
('130','SUGAR','SYS_DATE',3,'30');

insert into PAYMENTS(PAYMENTID,AMOUNT,PAYMENTTYPE,TAX,ORDERID) VALUES('1110',1000,'CREDIT',50,'110'),
('1120',2000,'CREDIT',50,'120'),
('1130',3000,'CREDIT',50,'130');