create table utilisateur(email varchar(255), sexe varchar(5), nom varchar(255), prenom varchar(255), date_de_naissance date, rue varchar(255), code_postal  char(5), ville  varchar(255), password  varchar(255), sel  varchar(255), actif boolean, derniere_connexion timestamp, derniere_ip varchar(15), solde double, primary key(email));

create table station(nom_station varchar(255), type varchar(255), primary key(nom_station));

create table ligne(nom_ligne varchar(10) PRIMARY KEY );

create table relier(station_depart varchar(255), station_destination  varchar(255), duree_trajet int, distance real, primary key(station_depart, station_destination));

create table type_incident(type_incident varchar(255) PRIMARY KEY, description_type_incident varchar(255));

create table incident(id_incident int, description_incident varchar(255), type_incident varchar(255), date_debut_incident date, date_fin_incident date, primary key(id_incident), foreign key(type_incident) references type_incident(type_incident));

create table concerner(id_incident int, nom_station varchar(255), nom_ligne varchar(255), primary key(id_incident, nom_station, nom_ligne), foreign key(id_incident) references incident(id_incident), foreign key (nom_station) references station (nom_station), foreign key (nom_ligne) references ligne(nom_ligne));

create table parcourir(nom_ligne varchar(255), nom_station varchar(255), primary key(nom_ligne, nom_station), foreign key (nom_station) references station (nom_station), foreign key (nom_ligne) references ligne(nom_ligne));

create table historique_voyages(id_voyage int, email_utilisateur varchar(255), nom_station_depart varchar(255), nom_station_arrivee varchar(255), date_voyage timestamp, foreign key (nom_station_depart) references station (nom_station), foreign key (nom_station_arrivee) references station (nom_station), foreign key (email_utilisateur) references utilisateur (email) );

create table cheminer(id_voyage int, cheminement int, nom_station_depart varchar(255), nom_station_arrivee varchar(255), nom_ligne varchar(255), PRIMARY KEY(id_voyage, nom_ligne), foreign key (nom_station_depart) references station (nom_station), foreign key (nom_station_arrivee) references station (nom_station), foreign key (nom_ligne) references ligne(nom_ligne) );