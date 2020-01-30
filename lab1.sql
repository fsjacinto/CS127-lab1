create database pds;
use pds;

CREATE TABLE personal1(
	csid		int NOT NULL AUTO_INCREMENT,

	lastn		TEXT NOT NULL,
	firstn		TEXT NOT NULL,
	extname 	varchar(5),
	middlen		TEXT NOT NULL,
	birthdate	varchar(50) NOT NULL,
	birthplace  TEXT NOT NULL,
	sex			TEXT NOT NULL,
	civilstatus	TEXT NOT NULL,
	height		varchar(5),
	weight		varchar(5),
	bloodtype	varchar(5),

	gsis		varchar(5),
	pagibig		varchar(50),
	philhealth	varchar(50),
	sss			varchar(50),
	tin 		varchar(50),
	agencyno	varchar(50),
	citizenship	TEXT NOT NULL,
	
	PRIMARY KEY (csid)
);

CREATE TABLE personal2(
	csid		int NOT NULL AUTO_INCREMENT,
	
	rhousenum	varchar(5),
	rstreet		TEXT,
	rsubdi		TEXT,
	rbrgy		TEXT,
	rcity		TEXT,
	rprov		TEXT,
	rzip		varchar(10),

	phousenum	varchar(5),
	pstreet		TEXT,
	psubdi		TEXT,
	pbrgy		TEXT,
	pcity		TEXT,
	pprov		TEXT,
	pzip		varchar(10),

	telnum		varchar(15),
	mobnum		varchar(15),
	email		varchar(30),
	
	PRIMARY KEY (csid)
);

CREATE TABLE family(
	csid		int NOT NULL AUTO_INCREMENT,
	
	slast		TEXT NOT NULL,
	sfirst		TEXT NOT NULL,
	sextname	varchar(5),
	smiddle		TEXT NOT NULL,

	child1		TEXT NOT NULL,
	cbirth1		varchar(20),
	child2		TEXT NOT NULL,
	cbirth2		varchar(20),
	child3		TEXT NOT NULL,
	cbirth3		varchar(20),
	child4		TEXT NOT NULL,
	cbirth4		varchar(20),
	child5		TEXT NOT NULL,
	cbirth5		varchar(20),

	flast		TEXT NOT NULL,
	ffirst		TEXT NOT NULL,
	fextname	varchar(5),
	fmiddle		TEXT NOT NULL,

	mlast		TEXT NOT NULL,
	mfirst		TEXT NOT NULL,
	mmiddle		TEXT NOT NULL,
	
	PRIMARY KEY (csid)
);

CREATE TABLE educational(
	csid		int NOT NULL AUTO_INCREMENT,

	elem		varchar(50),
	edegree		varchar(50),
	efrom		varchar(50),
	eto			varchar(50),
	elevel		varchar(50),
	ehonors		varchar(50),

	secondary	varchar(50),
	sdegree		varchar(50),
	sfrom		varchar(50),
	sto			varchar(50),
	slevel		varchar(50),
	shonors		varchar(50),

	trade		varchar(50),
	tdegree		varchar(50),
	tfrom		varchar(50),
	tto			varchar(50),
	tlevel		varchar(50),
	thonors		varchar(50),

	college		varchar(50),
	cdegree		varchar(50),
	cfrom		varchar(50),
	cto			varchar(50),
	clevel		varchar(50),
	chonors		varchar(50),

	graduate	varchar(50),
	gdegree		varchar(50),
	gfrom		varchar(50),
	gto			varchar(50),
	glevel		varchar(50),
	ghonors		varchar(50),
	
	PRIMARY KEY (csid)
);

CREATE TABLE signdate(
	csid		int NOT NULL AUTO_INCREMENT,

	appsignature	varchar(30),
	appdate			varchar(30),
	
	PRIMARY KEY (csid)
);
