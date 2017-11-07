drop database d15josjo;
create database d15josjo;
use d15josjo;

/* inrapporteringar */

create table delstracka(
	kod INT,
    stracka VARCHAR(60),
    primary key (kod)
	)engine=innodb;	
    
create table sparrecension(
	recension_titel VARCHAR(60) NOT NULL,
    betygsskala INT,
    fritext VARCHAR (300),
    kod INT,
    primary key (recension_titel),
    foreign key (kod) references delstracka(kod)
	)engine=innodb;	
        
create table arenden(
	arende_titel VARCHAR (60)NOT NULL ,
    fritext VARCHAR (300),
    latitud char(30),
    longitud char(30),
    #bild ,
    utfall VARCHAR(20),
    kod INT,
    primary key (arende_titel),
    foreign key (kod) references delstracka(kod)
	)engine=innodb;	    
   
   
   /* Dagens Valla-tips */
create table valla_tips(
	ansvarig VARCHAR(60),
    huvudansvarig VARCHAR(60),     /* Thomas skall kunna lägga till nya konton */
    tips VARCHAR(150),
    losenord CHAR (6) NOT NULL,
    behorighet VARCHAR (20),         /* Definierar rättighet */
    primary key (ansvarig)
	)engine=innodb;
    
    /* statistik */
create table webbapplikation(
	webb_id INT auto_increment,
    besokare INT,
    primary key (webb_id)
	)engine=innodb;	    
    
create table sparkort(
	kop_id INT auto_increment,
    email VARCHAR(60),
    pris INT,
    antal INT,
    primary key (kop_id)
	)engine=innodb;	    
    
 create table snokanon(
	snokanon_id CHAR(5),
    aktuell_status VARCHAR(60),
    aktuell_plats VARCHAR(30),
    typ VARCHAR(20),
    effektgrad INT(1),
    primary key (snokanon_id)
	)engine=innodb;	      

	/* underentreprenörer */
 create table underentreprenor(
	under_id CHAR(5),
    ansvarig_stracka INT,
    fornamn VARCHAR(30),
    efternamn VARCHAR(30),
    foretagsnamn VARCHAR(30),
    primary key (under_id)
	)engine=innodb;	    
    
    /* insättningar valla-tips */
    insert into valla_tips (huvudansvarig, losenord) values ('thomas.skidloppetab.gmail.com', 'J93S96');
    
	/* insättningar delsträcka */
    insert into  delstracka (kod, stracka) values ('1', 'Hedemora - Norrhyttan');
    insert into  delstracka (kod, stracka) values ('2', 'Norrhyttan - Bondhyttan');
    insert into  delstracka (kod, stracka) values ('3', 'Bondhyttan - Bommansbo');
    insert into  delstracka (kod, stracka) values ('4', 'Bommansbo - Smedjebacken');
    insert into  delstracka (kod, stracka) values ('5', 'Smedjebacken - Björsö');
    insert into  delstracka (kod, stracka) values ('6', 'Björsö - Grängesberg');

	/* insättningar spårrecension */
    insert into sparrecension (recension_titel, betygsskala, fritext, kod) values ('Titel 1', '2', 'Tycker att spårkanterna var dåliga...', '1');
    insert into sparrecension (recension_titel, betygsskala, fritext, kod) values ('Titel 2', '4', 'Väldigt fina spår och härlig omgivning!', '4');
	insert into sparrecension (recension_titel, betygsskala, fritext, kod) values ('Titel 3', '4', 'God kvalité av snö och veden var påfylld. Väldigt givande dag!', '6');
    
	/* insättningar snökanoner */
    insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('14:06', 'Aktiv', 'Grängesberg', 'Tornkanon', '3');
    insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('14:07', 'Avstängd', 'Bondhyttan', 'Tornkanon', '3');
	insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('14:08', 'Aktiv', 'Hedemora', 'Tornkanon', '1');
	insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('14:09', 'Aktiv', 'Smedjebacken', 'Tornkanon', '5');
	insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('14:10', 'Väntar på reperation', 'Bommansbo', 'Tornkanon', '5');
    
	insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('16:01', 'Aktiv', 'Norrhyttan', 'Fläktkanon', '4');
	insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('16:02', 'Avstängd', 'Bondhyttan', 'Fläktkanon', '3');
	insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('16:03', 'Väntar på reperation', 'Björsö', 'Fläktkanon', '3');
	insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('16:04', 'Aktiv', 'Grängesberg', 'Fläktkanon', '5');
    insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('16:05', 'Aktiv', 'Hedemora', 'Fläktkanon', '5');
    insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('16:06', 'Service', 'Bommansbo', 'Fläktkanon', '5');
    insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('16:07', 'Aktiv', 'Smedjebacken', 'Fläktkanon', '5');
    insert into  snokanon (snokanon_id, aktuell_status, aktuell_plats, typ, effektgrad) values ('16:08', 'Service', 'Norrhyttan', 'Fläktkanon', '3');
    
     /* insättningar ärenden */
	insert into  arenden (arende_titel, fritext, latitud, longitud, utfall) values ('Titel 1', 'En stor gran har fallit ner över spåret, svårt att passera.', '60.2775453', '15.985892000000035', 'Avklarad');
    insert into  arenden (arende_titel, fritext, latitud, longitud, utfall) values ('Titel 2', 'Snöbrist i Norrhyttan, skrapar i skidorna i backen', '60.31316460000001', '15.853865799999994', 'Vidarebefodrad');
    insert into  arenden (arende_titel, fritext, utfall, kod) values ('Titel 3', 'Ekorre på spåret!!!','Slängd', '5');
    