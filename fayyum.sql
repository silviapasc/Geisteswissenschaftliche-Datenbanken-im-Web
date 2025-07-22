-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2023 at 12:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fayyum`
--

-- --------------------------------------------------------

--
-- Table structure for table `portrait`
--

CREATE TABLE `portrait` (
  `Portrait_ID` int(11) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Artist` varchar(11) DEFAULT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `Medium_Technique` varchar(255) DEFAULT NULL,
  `Picture_Size` varchar(255) DEFAULT NULL,
  `MIME_Type` varchar(255) DEFAULT NULL,
  `Finding_Location` varchar(255) DEFAULT NULL,
  `Museum` varchar(255) DEFAULT NULL,
  `Museum_URL` varchar(500) DEFAULT NULL,
  `Description` varchar(1200) DEFAULT NULL,
  `Rights_and_Reproduction` varchar(255) DEFAULT NULL,
  `Is_Public_Domain` varchar(5) DEFAULT NULL,
  `Portrait_Image_File` varchar(255) NOT NULL,
  `Image_File_URL` varchar(255) DEFAULT NULL,
  `Tags` varchar(255) DEFAULT NULL,
  `Other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portrait`
--

INSERT INTO `portrait` (`Portrait_ID`, `Title`, `Artist`, `Date`, `Medium_Technique`, `Picture_Size`, `MIME_Type`, `Finding_Location`, `Museum`, `Museum_URL`, `Description`, `Rights_and_Reproduction`, `Is_Public_Domain`, `Portrait_Image_File`, `Image_File_URL`, `Tags`, `Other`) VALUES
(35, 'Mumienporträt #35', 'Unbekannt', 'Unbekannt', 'Enkaustik auf Holz', '653 × 1.348 Pixel (263 KB)', 'image/jpeg', 'Antinoupolis, Ägypten', 'Ägyptisches Museum und Papyrussammlung, Berlin', 'https://www.google.com/maps/place/%C3%84gyptisches+Museum+und+Papyrussammlung/@52.5201349,13.3976459,15z/data=!4m6!3m5!1s0x47a851dd6a1d6f33:0xeeaf84690c007229!8m2!3d52.5201349!4d13.3976459!16zL20vMDNxbWsx?entry=ttu', 'Einziges von Albert Gayet im Winter 1906/07 in Antinoupolis (Ägypten) gefundene Porträt, über dessen Fundumstände etwas bekannt ist. Im Dezember 1907 wurde es käuflich erworben durch das Ägyptisches Museum Berlin (Inv.-Nr. Berlin 17900). Bemerkenswert ist die dicke Goldauflage die nur Platz für das Porträt freiläßt', 'Gemeinfrei', 'Yes', 'Fayum-35.jpeg', 'https://commons.wikimedia.org/wiki/File:Fayum-35.jpg', 'Mann', 'Egyptian Museum of Berlin'),
(7, 'Mumienporträt #7', 'Unbekannt', 'Unbekannt', 'Unbekannt', '722 × 1.360 Pixel (331 KB)', 'image/jpeg', 'Hawara, Ägypten', 'Metropolitan Museum of Art, New York', 'https://www.google.com/maps/place/Metropolitan+Museum+of+Art/@40.7794366,-73.9658189,17z/data=!3m1!5s0x89c25896e10b5523:0x6c1168e355509b8b!4m14!1m7!3m6!1s0x89c25896f660c26f:0x3b2fa4f4b6c6a1fa!2sMetropolitan+Museum+of+Art!8m2!3d40.7794366!4d-73.963244!16zL20vMDljN2I!3m5!1s0x89c25896f660c26f:0x3b2fa4f4b6c6a1fa!8m2!3d40.7794366!4d-73.963244!16zL20vMDljN2I?entry=ttu', 'Detail eines noch unvollständigen Mumienporträts, das 1911 von Flinders Petrie in Hawara, ungewöhnlicherweise in einer Grabkammer zusammen mit vier weiteren Mumien gefunden wurde', 'Gemeinfrei', 'Yes', 'Fayum-07.jpeg', 'https://commons.wikimedia.org/wiki/File:Fayum-07.jpg?uselang=de', 'Mann', 'Herkunft: Eigener Scan durch Eloquence'),
(6, 'Mumienporträt #6', 'Unbekannt', 'Mitte des 2. Jahrhunderts n. Chr.', 'Unbekannt', '2.000 × 3.540 Pixel (3,83 MB)', 'image/jpeg', 'Fayyum-Becken, Ägypten', 'Part of the Myers Collection, Eton College, Windsor, England', 'https://www.google.com/maps/place/Eton+Museum+of+Antiquities/@51.4901371,-0.6313143,15z/data=!3m1!4b1!4m6!3m5!1s0x48767b9b1ee0c8b1:0xf4c44d036e448b8e!8m2!3d51.4901385!4d-0.6128604!16s%2Fg%2F11h35fvn27?entry=ttu', 'Porträt eines Mannes mit Bart', 'Gemeinfrei', 'Yes', 'Homme_avec_barbe,_portrait_funéraire,_Fayoum,_Égypte.jpeg', 'https://commons.wikimedia.org/wiki/File:Homme_avec_barbe,_portrait_fun%C3%A9raire,_Fayoum,_%C3%89gypte.jpg?uselang=de', 'Mann', 'Herkunft: Le Musée absolu, Phaidon, 10-2012. Photographer: Yann Forget. Objektposition 51° 29′ 31,37″ N, 0° 36′ 32,32″ W'),
(22, 'Mumienporträt #22', 'Unbekannt', 'vor 300 n. Chr.', 'Unbekannt', '660 × 1.367 Pixel (263 KB)', 'image/jpeg', 'Fayyum-Becken, Ägypten', 'British Museum, London', 'https://www.google.com/maps/place/British+Museum/@51.5194133,-0.1295315,17z/data=!3m1!4b1!4m6!3m5!1s0x48761b323093d307:0x2fb199016d5642a7!8m2!3d51.5194133!4d-0.1269566!16zL20vMDFoYjM?entry=ttu', 'Porträt eines Mannes mit Schwergurt', 'Gemeinfrei', 'Yes', 'Fayum-22.jpeg', 'https://commons.wikimedia.org/wiki/File:Fayum-22.jpg?uselang=de', 'Mann', 'Herkunft: Eigener Scan durch Eloquence. Urheber Unbekannt'),
(50, 'Mumienporträt #50', 'Unbekannt', 'Frühes 3. Jahrhundert', 'Unbekannt', '238 × 446 Pixels (24 KB)', 'image/jpeg', 'Fayyum-Becken, Ägypten', 'Antikensammlung Berlin, Berlin', 'https://www.google.com/maps/place/Altes+Museum/@52.5194665,13.3961696,17z/data=!3m1!4b1!4m6!3m5!1s0x47a851dd6a1d6f33:0xb61e5106fd47fdbb!8m2!3d52.5194665!4d13.3987445!16zL20vMDU5cHEy?entry=ttu', 'Porträt eines Junges', 'Gemeinfrei', 'Yes', 'Fayum-50.jpeg', 'https://commons.wikimedia.org/wiki/File:Fayum-50.jpg', 'Jung', 'Herkunft: Scanned and edited by Eloquence'),
(13, 'Mumienporträt #13', 'Unbekannt', 'Unbekannt', 'Unbekannt', '1.040 × 1.919 Pixel (625 KB)', 'image/jpeg', 'Fayyum-Becken, Ägypten', 'British Museum, London', 'https://www.google.com/maps/place/British+Museum/@51.5194133,-0.1295315,17z/data=!3m1!4b1!4m6!3m5!1s0x48761b323093d307:0x2fb199016d5642a7!8m2!3d51.5194133!4d-0.1269566!16zL20vMDFoYjM?entry=ttu', 'Porträt einer jungen Frau mit Ringelhaarfrisur, die einen violetten Chiton und Mantel sowie Anhänger-Ohrringe trägt', 'Gemeinfrei', 'Yes', 'Fayum-13.jpeg', 'https://commons.wikimedia.org/wiki/File:Fayum-13.jpg?uselang=de', 'Frau', 'Herkunft: Shakko'),
(11, 'Mumienporträt #11', 'Unbekannt', 'Unbekannt', 'Tempera auf Holz', '694 × 1.176 Pixel (197 KB)', 'image/jpeg', 'Fayyum-Becken, Ägypten', 'National Museum of Scotland, Edinburgh', 'https://www.google.com/maps/place/Royal+Museum/@55.9469995,-3.1931415,17z/data=!3m2!4b1!5s0x4887c784db00984f:0xbcf28f76719eeb7d!4m6!3m5!1s0x4887c784d1bae421:0x88cc2703f2beb5c3!8m2!3d55.9469995!4d-3.1905666!16zL20vMDRmZnMx?entry=ttu', 'Porträt einer Frau mit Ringelhaarfrisur, einem orangefarbenen Chiton mit schwarzen Bändern und stabförmigen Ohrringen', 'Gemeinfrei', 'Yes', 'Fayum-11.jpeg', 'https://commons.wikimedia.org/wiki/File:Fayum-11.jpg?uselang=de', 'Frau', 'Herkunft: Eigener Scan durch Eloquence, 2004'),
(34, 'Mumienporträt #34 - als \"L\'Européenne\" bekannt', 'Unbekannt', '100-150 n. Chr.', 'Zedernholz, Wachsfarbe, Gold und Vergoldung', '704 × 1.260 Pixel, (270 KB)', 'image/jpeg', 'Antinoupolis, Ägypten', 'Musée du Louvre, Paris', 'https://www.google.com/maps/place/Louvre/@48.8606111,2.3350691,17z/data=!3m1!4b1!4m6!3m5!1s0x47e671d877937b0f:0xb975fcfa192f84d4!8m2!3d48.8606111!4d2.337644!16zL20vMDRnZHI?entry=ttu', 'Porträt einer Frau, das als \"L\'Européenne\" bekannt ist und in Antinoupolis (Ägypten) gefunden wurde', 'Gemeinfrei', 'Yes', 'Fayum-34.jpeg', 'https://commons.wikimedia.org/wiki/File:Fayum-34.jpg?uselang=de', 'Frau', 'Herkunft: Eigener Scan durch Eloquence, November 2004. Referenzen: https://collections.louvre.fr/ark:/53355/cl010451181 Louvre Numéro principal : MND 2047. Numéro catalogue : P 217. Normdatei wikidata: Q55628466. Louvre: 010451181'),
(51, 'Mumienportrait #51 - von Eutyches', 'Unbekannt', '100-150 n. Chr.', 'Enkaustik auf Holz, Farbe', '659 x 1200 Pixel (174,1 kB)', 'image/jpeg', 'Fayyum-Becken, Ägypten', 'Metropolitan Museum of Art, New York', 'https://www.google.com/maps/place/Metropolitan+Museum+of+Art/@40.7794366,-73.9658189,17z/data=!3m1!5s0x89c25896e10b5523:0x6c1168e355509b8b!4m14!1m7!3m6!1s0x89c25896f660c26f:0x3b2fa4f4b6c6a1fa!2sMetropolitan+Museum+of+Art!8m2!3d40.7794366!4d-73.963244!16zL20vMDljN2I!3m5!1s0x89c25896f660c26f:0x3b2fa4f4b6c6a1fa!8m2!3d40.7794366!4d-73.963244!16zL20vMDljN2I?entry=ttu', 'Nach jahrhundertelanger Fremdherrschaft und der weitflächigen Ansiedlung von Ausländern im Land verfügte Ägypten im zweiten Jahrhundert n. Chr. über eine wahrhaft multikulturelle Gesellschaft. Dieses Bild eines wohlgenährten Jungen mit vertrauensseligen, traurigen Augen, trägt die Inschrift: EUTYCHES DER FREIGELASSENE VON KASANIOS; SOHN VON HERAKLEIDES, EVANDROS (ODER HERAKLEIDES, SOHN VON EVANDROS) ICH SIGNIERTE. Der Junge verstarb offensichtlich früh, nachdem er von Kasanios aus der Sklaverei befreit worden war. Eine der beiden weiteren genannten Personen könnte das Portrait in Auftrag gegeben oder für es bezahlt haben. Es wurde in der griechischen Maltradition angefertigt und in die Leinenbandagen der nach ägyptischer Art einbalsamierten Mumie gesteckt, um sein Gesicht zu bedecken, wie dies in Ägypten Masken seit Jahrtausenden taten. Schenkung von Edward S. Harkness, 1918 (Quelle: https://www.metmuseum.org/de/art/collection/search/547951)', 'Gemeinfrei', 'Yes', 'Fayum-51.jpeg', 'https://images.metmuseum.org/CRDImages/eg/original/DP-25887-001.jpg?_gl=1*ystpn7*_ga*MjgwOTE1ODI4LjE2OTk0NzgxODc.*_ga_Y0W8DGNBTB*MTY5OTQ3ODE4Ni4xLjEuMTY5OTQ3ODIyNy4wLjAuMA..', 'Jung', 'MET-Akzession Nr.: 18.9.2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
