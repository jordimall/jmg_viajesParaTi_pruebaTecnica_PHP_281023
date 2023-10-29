CREATE DATABASE pruebaSymfony;

USE pruebaSymfony;

CREATE TABLE proveedor (
    ID INT AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    correo_electronico varchar(100) NOT NULL,
    telefono_contacto VARCHAR(9) NOT NULL,
    tipo_proveedor VARCHAR(20) NOT NULL,
    esta_activo BOOLEAN DEFAULT TRUE,
    fecha_insercion DATE NOT NULL,
    fecha_ultima_modificacion DATE,
    constraint CONSTRAIN_ID_PROVEEDORES PRIMARY KEY (ID)
);

insert into proveedor (nombre, correo_electronico, telefono_contacto, tipo_proveedor,esta_activo,fecha_insercion,fecha_ultima_modificacion) values 
('Tan Ilott', 'tilott0@ning.com', '709123456', 'pista', true, '2023-01-12', '2023-09-24'),
('Thane Spaice', 'tspaice1@ibm.com', '356789012', 'pista', false, '2022-10-10', '2022-10-19'),
('Ced Eschalette', 'ceschalette2@time.com', '326812345', 'complemento', true, '2023-04-04', '2022-07-06'),
('Wilhelmina Braid', 'wbraid3@independent.co.uk', '962912345', 'hotel', true, '2023-06-08', '2023-06-08'),
('Pamela Jesty', 'pjesty4@umich.edu', '358123456', 'pista', true, '2022-11-19', '2022-05-12'),
('Fanchon Limmer', 'flimmer5@howstuffworks.com', '612345678','pista', true, '2022-12-15', '2023-05-11'),
('Adelice Yakobowitch', 'ayakobowitch6@ted.com', '943556789', 'complemento', false, '2023-06-30', '2023-05-06'),
('Garvy Delacoste', 'gdelacoste7@4shared.com', '356812345', 'complemento', false, '2022-06-09', '2023-06-02'),
('Sadella Roubay', 'sroubay8@exblog.jp', '384781234', 'complemento', true, '2022-10-04', '2022-07-27'),
('Maurizio Blaycock', 'mblaycock9@seesaa.net', '012345678', 'pista', true, '2022-09-28', '2023-01-09'),
('Jackie Shear', 'jsheara@statcounter.com', '267890123', 'pista', false, '2023-10-04', '2022-06-04'),
('Hercules Matteris', 'hmatterisb@epa.gov', '198534567', 'hotel', true, '2023-06-22', '2023-09-29'),
('Buck Borland', 'bborlandc@pinterest.com', '678901234', 'hotel', false, '2022-07-16', '2022-04-28'),
('Estella Ellum', 'eellumd@spiegel.de', '428367890', 'pista', true, '2023-03-05', '2022-05-05'),
('Sabina Cornall', 'scornalle@tmall.com', '091234567', 'pista', true, '2023-08-22', '2023-02-09'),
('Kristofer Ilyenko', 'kilyenkof@craigslist.org', '712345678', 'pista', true, '2022-09-16', '2023-06-22'),
('Hernando Ridgers', 'hridgersg@umich.edu', '612345678', 'complemento', true, '2023-08-24', '2023-02-03'),
('Eryn Crouch', 'ecrouchh@wordpress.com', '758123456', 'hotel', false, '2023-07-28', '2023-02-06'),
('Ronny Levane', 'rlevanei@joomla.org', '412345678', 'hotel', true, '2022-09-24', '2023-06-13'),
('Katy Aireton', 'kairetonj@theglobeandmail.com', '604912345', 'pista', true, '2022-10-08', '2023-04-05'),
('Dona McWhorter', 'dmcwhorterk@columbia.edu', '789654123',  'pista', true, '2023-09-30', '2022-11-22'),
('Rourke Capelle', 'rcapellel@vinaora.com', '456550987', 'complemento', false, '2022-12-09', '2023-08-29'),
('Creight Lundbech', 'clundbechm@theguardian.com', '403123456', 'complemento', false, '2022-10-16', '2023-04-05'),
('Vicky Lope', 'vlopen@elegantthemes.com', '860399695', 'complemento', true, '2022-08-03', '2022-10-27'),
('Bamby McChesney', 'bmcchesneyo@aboutads.info', '01851234',  'hotel', false, '2023-09-15', '2023-06-11'),
('Dag Birtwistle', 'dbirtwistlep@github.io', '244242345', 'pista', true, '2022-06-06', '2023-07-28'),
('Elli Loachhead', 'eloachheadq@printfriendly.com', '502812345', 'pista', true, '2022-10-30', '2023-02-26'),
('Neysa Ferrao', 'nferraor@umn.edu', '398765432', 'complemento', true, '2023-08-01', '2023-02-19'),
('Allsun Sinnett', 'asinnetts@squidoo.com', '8329123', 'complemento', true, '2023-10-25', '2023-08-15'),
('Zsazsa Chicchelli', 'zchicchellit@twitter.com', '958765432', 'complemento', true, '2022-07-30', '2022-05-22'),
('Florida Andriss', 'fandrissu@flickr.com', '198765432', 'hotel', false, '2022-07-22', '2023-04-17'),
('Ettie Saffell', 'esaffellv@home.pl', '276621234', 'hotel', true, '2023-03-19', '2023-07-15'),
('Mellisent Fetherby', 'mfetherbyw@shutterfly.com', '7123456', 'complemento', true, '2023-04-18', '2022-08-09'),
('Estelle Legon', 'elegonx@cmu.edu', '586123456', 'hotel', true, '2022-06-14', '2023-06-23'),
('Norman Ladds', 'nladdsy@google.com', '963930000', 'hotel', false, '2023-03-16', '2023-04-29'),
('Lance Elsegood', 'lelsegoodz@canalblog.com', '000000000', 'complemento', true, '2022-10-20', '2022-06-13'),
('Andros Kubala', 'akubala10@mozilla.com', '990000000', 'hotel', false, '2022-10-04', '2023-08-10'),
('Alena Hurst', 'ahurst11@pagesperso-orange.fr', '711240000', 'hotel', false, '2023-03-24', '2023-04-10'),
('Loren Ingram', 'lingram12@cloudflare.com', '802590000', 'hotel', false, '2023-06-06', '2023-06-25'),
('Urbain McMurrugh', 'umcmurrugh13@cargocollective.com', '725230000', 'complemento', false, '2023-03-03', '2023-09-19'),
('Gwendolin Igo', 'gigo14@usgs.gov', '713000000', 'hotel', false, '2023-09-19', '2023-10-02'),
('Corinne Rivelin', 'crivelin15@usgs.gov', '712800000', 'complemento', false, '2022-05-28', '2022-07-20'),
('Sharla Kowalik', 'skowalik16@timesonline.co.uk', '390000000', 'hotel', false, '2022-11-25', '2023-03-02'),
('Blair Erricker', 'berricker17@google.ca', '550000000', 'hotel', true, '2022-11-30', '2022-09-05'),
('Batholomew Gainsbury', 'bgainsbury18@wikipedia.org', '295000000', 'hotel', true, '2023-10-12', '2022-06-16'),
('Sam Furst', 'sfurst19@elegantthemes.com', '200000000', 'hotel', false, '2023-06-23', '2023-02-05'),
('Kenton Flucks', 'kflucks1a@purevolume.com', '400000000', 'hotel', false, '2022-05-06', '2023-08-31'),
('Gabbie Kinkade', 'gkinkade1b@theguardian.com', '240000000', 'hotel', true, '2023-10-23', '2023-03-02'),
('Vaughn Lindwall', 'vlindwall1c@infoseek.co.jp', '600000000', 'hotel', true, '2022-07-04', '2022-11-07'),
('Aldon Scaife', 'ascaife1d@ed.gov', '200000000', 'complemento', true, '2023-10-26', '2022-09-18');