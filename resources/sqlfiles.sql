mysql -u root

create database sepm;
use sepm;

drop table location;
drop table admins;
drop table users;

create table location(
	loc_id serial primary key,
	suburb varchar(100),
	location varchar(300),
	site_type varchar(100),
	opening_hour varchar(100),
	waittime varchar(100),
	phone varchar(100),
	legend varchar(100));
	
	describe location;

create table admins(
admin_id serial primary key,
username varchar(50),
password char(40));

create table users(
user_id serial primary key,
fullname varchar(100),
phone int(20),
email varchar(100));

	
	
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Aughtie Walk - Albert Park','23 Aughtie Dr, Albert Park, VIC, 3206','Drive-Thru','10am-4pm','Not available','N/A','drive.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Port Melbourne Respiratory Clinic','405 Bay St, Port Melbourne, VIC 3207','GP Clinic','9am-5pm','Not available','(03) 8686 0500','GP.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Bourke Street Melbourne CBD','227 Bourke St, Melbourne, VIC 3000','Walk-In','8am-8pm','90 minutes','N/A','walk.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Montague St - South Melbourne','120 Montague St, South Melbourne, VIC 3205','Walk-In','8am-8pm','35 minutes','N/A','walk.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Alfred Health - The Alfred Hospital','55 COMMERCIAL RD, MELBOURNE VIC 3004','Hospital','8am-4pm','Not available','(03) 9076 2000','hospital.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Prahran Respiratory Clinic (Star Health - Prahran Town Hall)','180 Greville St, Prahran VIC 3181','Walk-In','9am-4pm','Not available','(03) 8644 3311','walk.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Melbourne Pathology - Balaclava','Carlisle Street, Balaclava VIC 3183','Pathology Clinic','8am-5pm','Not available','(03) 9527 9699','patho.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('4 Cyte Pathology - Melbourne CBD','231 Russell St, Melbourne, VIC 3000','Pathology Clinic','8am-4pm','Not available','0466 613 194','patho.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('St Vincents Hospital Melbourne - Fever Clinic','41 Victoria Parade, Fitzroy VIC 3065','Hospital','8am-6pm','Not available','(03) 9231 2211','hospital.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Fitzroy Respiratory Clinic (Victorian Aboriginal Health Service)','186 Nicholson St, Fitzroy VIC 3065','GP Clinic','10am-4pm','Not available','(03) 9419 3000','GP.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('CoHealth Collingwood','365 Hoddle St, Collingwood VIC 3066','Walk-In','8:30am-5pm','Not available','(03) 9448 5528','walk.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('The Royal Melbourne Hospital','300 Grattan St, Parkville VIC 3050','Hospital','24hrs','Not Available','(03) 9342 7000','hospital.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('The Royal Childrens Hospital Melbourne','50 Flemington Rd, Parkville VIC 3052','Hospital','24hrs','Not Available','(03) 9345 5522','hospital.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Melbourne Pathology North Melbourne','70 Alfred St, North Melbourne VIC 3051','Pathology Clinic','8:30am-4:30pm','Not Available','(03) 9287 7700','patho.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('4Cyte Pathology - Fairfield','202 Station St, Fairfield VIC 3078','Pathology Clinic','8am-5pm','Not Available','0434 991 642','patho.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Melbourne Pathology Moonee Ponds','14 Pascoe Vale Rd, Moonee Ponds VIC 3039','Pathology Clinic','8am-4pm','Not Available','(03) 9326 1418','patho.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Melbourne Showgrounds','Epsom Rd, Ascot Vale VIC 3032','Drive-Thru','8:00am-8:00pm','Not Available','(03) 9281 7444','drive.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Hampstead Medical Maidstone','44 Hampstead Rd, Maidstone VIC 3012','Walk-In','9am-6pm','Not Available','(03) 318 4322','walk.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('cohealth Footscray - Paisley St','78 Paisley St, Footscray VIC 3011','Walk-In','8:30am-5pm','Not Available','(03) 9448 5502','walk.png');
INSERT INTO `location`(`suburb`, `location`, `site_type`, `opening_hour`, `waittime`,`phone`,`legend`) VALUES ('Altona North Respiratory Clinic','6/230 Blackshaws Rd, Altona North VIC 3025','Walk-In','8am-4:30pm','Not Available','(03) 9393 3977','walk.png');

INSERT INTO `admins`(`username`,`password`) VALUES ('root','password');