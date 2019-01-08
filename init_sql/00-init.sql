CREATE DATABASE `db_location` DEFAULT CHARACTER SET utf8 ;
USE `db_location` ;

-- cette ordre de création de la base de données s'appelle migration
-- cela te permet d'applatir ta base de données et de la recréer sur différents serveurs
-- avec la meme script pour indiquer une étape de création.

-- C'est donc pour cette raison qu'on retirera les instructions de DROP IF EXISTS.
-- On les mettra à la place dans un fichier reset.sql dans l'ordre inverse de création
-- Dans la pratique un ficher .sql représentant une migration aura sa version up and down (ou create and delete)
-- Dans notre cas ici, nous nous limiterons simplement au fichier init.sql et reset.sql pour un soucis de clareté
-- les chiffres devant le nom des fichiers sont là pour indiquer l'ordre de création

-- remarks:
-- first work in english so english equivalent for table name (ex: fournisseurs => providers)
-- database table name should be plural (ex: users instead of user)

-- call sql command `source filename.sql` to execute statement inside file (ex: source 01-users.sql)
-- make the previous call for each file below
-- we will see later how to use a regex to accelerate that process

-- 01-clients.sql
-- 02-agences.sql
-- 03-agents.sql
-- 04-users.sql
-- 05-transactions.sql
-- 06-fournisseurs.sql
-- 07-chauffeurs.sql
-- 08-mecaniciens.sql
-- 09-modeles.sql
-- 10-categories.sql
-- 11-vehicules.sql
-- 12-catalogues.sql
-- 13-etat_vehicules.sql
-- 14-revision_vehicules.sql
-- 15-clients_agences.sql
-- 16-transac_vehicules.sql
-- 17-ventes.sql
-- 18-achats.sql
-- 19-paiements.sql
-- 20-paiements.sql
-- 21-tarifs.sql
-- 22-locations.sql
-- 23-reservations.sql
-- 24-factures.sql
-- 25-etat_chauffeurs.sql
-- 26-contrats.sql
-- 27-detail_paiements.sql
-- 28-retour_vehicules.sql
