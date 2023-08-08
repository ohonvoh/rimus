-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 02 août 2023 à 13:48
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rimus`
--

-- --------------------------------------------------------

--
-- Structure de la table `institution`
--



--
-- Déchargement des données de la table `institution`
--

INSERT INTO `institution` (`code`, `libelleCourt`, `libelleLong`, `sigleFr`, `sigleEn`, `type`, `createAt`, `updateAt`) VALUES
('CEDEAO', 'Communauté économique des États de l\'Afrique de l\'Ouest', 'Communauté économique des États de l\'Afrique de l\'Ouest', 'CEDEAO', 'ECOWAS', 0, '2023-07-31 17:18:51', '2023-07-31 17:18:51'),
('UA', 'Union africaine', 'Union africaine', 'UA', 'AU', 1, '2023-08-02 09:04:02', '2023-08-02 09:04:02');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--


--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`code`, `alpha3`, `nom_fr`, `nom_en`, `createAt`, `updateAt`) VALUES
('AD', 'AND', 'Andorre', 'Andorra', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AE', 'ARE', 'Émirats Arabes Unis', 'United Arab Emirates', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AF', 'AFG', 'Afghanistan', 'Afghanistan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AG', 'ATG', 'Antigua-et-Barbuda', 'Antigua and Barbuda', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AI', 'AIA', 'Anguilla', 'Anguilla', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AL', 'ALB', 'Albanie', 'Albania', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AM', 'ARM', 'Arménie', 'Armenia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AN', 'ANT', 'Antilles Néerlandaises', 'Netherlands Antilles', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AO', 'AGO', 'Angola', 'Angola', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AQ', 'ATA', 'Antarctique', 'Antarctica', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AR', 'ARG', 'Argentine', 'Argentina', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AS', 'ASM', 'Samoa Américaines', 'American Samoa', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AT', 'AUT', 'Autriche', 'Austria', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AU', 'AUS', 'Australie', 'Australia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AW', 'ABW', 'Aruba', 'Aruba', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AX', 'ALA', 'Îles Åland', 'Åland Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('AZ', 'AZE', 'Azerbaïdjan', 'Azerbaijan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BA', 'BIH', 'Bosnie-Herzégovine', 'Bosnia and Herzegovina', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BB', 'BRB', 'Barbade', 'Barbados', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BD', 'BGD', 'Bangladesh', 'Bangladesh', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BE', 'BEL', 'Belgique', 'Belgium', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BF', 'BFA', 'Burkina Faso', 'Burkina Faso', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BG', 'BGR', 'Bulgarie', 'Bulgaria', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BH', 'BHR', 'Bahreïn', 'Bahrain', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BI', 'BDI', 'Burundi', 'Burundi', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BJ', 'BEN', 'Bénin', 'Benin', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BM', 'BMU', 'Bermudes', 'Bermuda', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BN', 'BRN', 'Brunéi Darussalam', 'Brunei Darussalam', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BO', 'BOL', 'Bolivie', 'Bolivia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BR', 'BRA', 'Brésil', 'Brazil', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BS', 'BHS', 'Bahamas', 'Bahamas', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BT', 'BTN', 'Bhoutan', 'Bhutan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BV', 'BVT', 'Île Bouvet', 'Bouvet Island', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BW', 'BWA', 'Botswana', 'Botswana', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BY', 'BLR', 'Bélarus', 'Belarus', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('BZ', 'BLZ', 'Belize', 'Belize', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CA', 'CAN', 'Canada', 'Canada', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CC', 'CCK', 'Îles Cocos (Keeling)', 'Cocos (Keeling) Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CD', 'COD', 'République Démocratique du Congo', 'The Democratic Republic Of The Congo', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CF', 'CAF', 'République Centrafricaine', 'Central African', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CG', 'COG', 'République du Congo', 'Republic of the Congo', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CH', 'CHE', 'Suisse', 'Switzerland', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CI', 'CIV', 'Côte d\'Ivoire', 'Côte d\'Ivoire', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CK', 'COK', 'Îles Cook', 'Cook Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CL', 'CHL', 'Chili', 'Chile', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CM', 'CMR', 'Cameroun', 'Cameroon', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CN', 'CHN', 'Chine', 'China', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CO', 'COL', 'Colombie', 'Colombia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CR', 'CRI', 'Costa Rica', 'Costa Rica', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CU', 'CUB', 'Cuba', 'Cuba', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CV', 'CPV', 'Cap-vert', 'Cape Verde', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CX', 'CXR', 'Île Christmas', 'Christmas Island', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CY', 'CYP', 'Chypre', 'Cyprus', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('CZ', 'CZE', 'République Tchèque', 'Czech Republic', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('DE', 'DEU', 'Allemagne', 'Germany', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('DJ', 'DJI', 'Djibouti', 'Djibouti', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('DK', 'DNK', 'Danemark', 'Denmark', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('DM', 'DMA', 'Dominique', 'Dominica', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('DO', 'DOM', 'République Dominicaine', 'Dominican Republic', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('DZ', 'DZA', 'Algérie', 'Algeria', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('EC', 'ECU', 'Équateur', 'Ecuador', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('EE', 'EST', 'Estonie', 'Estonia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('EG', 'EGY', 'Égypte', 'Egypt', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('EH', 'ESH', 'Sahara Occidental', 'Western Sahara', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('ER', 'ERI', 'Érythrée', 'Eritrea', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('ES', 'ESP', 'Espagne', 'Spain', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('ET', 'ETH', 'Éthiopie', 'Ethiopia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('FI', 'FIN', 'Finlande', 'Finland', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('FJ', 'FJI', 'Fidji', 'Fiji', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('FK', 'FLK', 'Îles (malvinas) Falkland', 'Falkland Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('FM', 'FSM', 'États Fédérés de Micronésie', 'Federated States of Micronesia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('FO', 'FRO', 'Îles Féroé', 'Faroe Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('FR', 'FRA', 'France', 'France', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GA', 'GAB', 'Gabon', 'Gabon', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GB', 'GBR', 'Royaume-Uni', 'United Kingdom', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GD', 'GRD', 'Grenade', 'Grenada', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GE', 'GEO', 'Géorgie', 'Georgia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GF', 'GUF', 'Guyane Française', 'French Guiana', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GH', 'GHA', 'Ghana', 'Ghana', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GI', 'GIB', 'Gibraltar', 'Gibraltar', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GL', 'GRL', 'Groenland', 'Greenland', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GM', 'GMB', 'Gambie', 'Gambia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GN', 'GIN', 'Guinée', 'Guinea', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GP', 'GLP', 'Guadeloupe', 'Guadeloupe', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GQ', 'GNQ', 'Guinée Équatoriale', 'Equatorial Guinea', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GR', 'GRC', 'Grèce', 'Greece', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GS', 'SGS', 'Géorgie du Sud et les Îles Sandwich du Sud', 'South Georgia and the South Sandwich Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GT', 'GTM', 'Guatemala', 'Guatemala', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GU', 'GUM', 'Guam', 'Guam', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GW', 'GNB', 'Guinée-Bissau', 'Guinea-Bissau', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('GY', 'GUY', 'Guyana', 'Guyana', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('HK', 'HKG', 'Hong-Kong', 'Hong Kong', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('HM', 'HMD', 'Îles Heard et Mcdonald', 'Heard Island and McDonald Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('HN', 'HND', 'Honduras', 'Honduras', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('HR', 'HRV', 'Croatie', 'Croatia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('HT', 'HTI', 'Haïti', 'Haiti', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('HU', 'HUN', 'Hongrie', 'Hungary', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('ID', 'IDN', 'Indonésie', 'Indonesia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('IE', 'IRL', 'Irlande', 'Ireland', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('IL', 'ISR', 'Israël', 'Israel', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('IM', 'IMN', 'Île de Man', 'Isle of Man', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('IN', 'IND', 'Inde', 'India', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('IO', 'IOT', 'Territoire Britannique de l\'Océan Indien', 'British Indian Ocean Territory', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('IQ', 'IRQ', 'Iraq', 'Iraq', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('IR', 'IRN', 'République Islamique d\'Iran', 'Islamic Republic of Iran', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('IS', 'ISL', 'Islande', 'Iceland', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('IT', 'ITA', 'Italie', 'Italy', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('JM', 'JAM', 'Jamaïque', 'Jamaica', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('JO', 'JOR', 'Jordanie', 'Jordan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('JP', 'JPN', 'Japon', 'Japan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KE', 'KEN', 'Kenya', 'Kenya', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KG', 'KGZ', 'Kirghizistan', 'Kyrgyzstan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KH', 'KHM', 'Cambodge', 'Cambodia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KI', 'KIR', 'Kiribati', 'Kiribati', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KM', 'COM', 'Comores', 'Comoros', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KN', 'KNA', 'Saint-Kitts-et-Nevis', 'Saint Kitts and Nevis', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KP', 'PRK', 'République Populaire Démocratique de Corée', 'Democratic People\'s Republic of Korea', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KR', 'KOR', 'République de Corée', 'Republic of Korea', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KW', 'KWT', 'Koweït', 'Kuwait', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KY', 'CYM', 'Îles Caïmanes', 'Cayman Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('KZ', 'KAZ', 'Kazakhstan', 'Kazakhstan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LA', 'LAO', 'République Démocratique Populaire Lao', 'Lao People\'s Democratic Republic', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LB', 'LBN', 'Liban', 'Lebanon', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LC', 'LCA', 'Sainte-Lucie', 'Saint Lucia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LI', 'LIE', 'Liechtenstein', 'Liechtenstein', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LK', 'LKA', 'Sri Lanka', 'Sri Lanka', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LR', 'LBR', 'Libéria', 'Liberia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LS', 'LSO', 'Lesotho', 'Lesotho', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LT', 'LTU', 'Lituanie', 'Lithuania', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LU', 'LUX', 'Luxembourg', 'Luxembourg', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LV', 'LVA', 'Lettonie', 'Latvia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('LY', 'LBY', 'Jamahiriya Arabe Libyenne', 'Libyan Arab Jamahiriya', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MA', 'MAR', 'Maroc', 'Morocco', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MC', 'MCO', 'Monaco', 'Monaco', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MD', 'MDA', 'République de Moldova', 'Republic of Moldova', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('ME', 'MNE', 'Monténégro', 'Montenegro', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MG', 'MDG', 'Madagascar', 'Madagascar', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MH', 'MHL', 'Îles Marshall', 'Marshall Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MK', 'MKD', 'L\'ex-République Yougoslave de Macédoine', 'The Former Yugoslav Republic of Macedonia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('ML', 'MLI', 'Mali', 'Mali', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MM', 'MMR', 'Myanmar', 'Myanmar', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MN', 'MNG', 'Mongolie', 'Mongolia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MO', 'MAC', 'Macao', 'Macao', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MP', 'MNP', 'Îles Mariannes du Nord', 'Northern Mariana Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MQ', 'MTQ', 'Martinique', 'Martinique', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MR', 'MRT', 'Mauritanie', 'Mauritania', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MS', 'MSR', 'Montserrat', 'Montserrat', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MT', 'MLT', 'Malte', 'Malta', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MU', 'MUS', 'Maurice', 'Mauritius', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MV', 'MDV', 'Maldives', 'Maldives', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MW', 'MWI', 'Malawi', 'Malawi', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MX', 'MEX', 'Mexique', 'Mexico', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MY', 'MYS', 'Malaisie', 'Malaysia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('MZ', 'MOZ', 'Mozambique', 'Mozambique', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NA', 'NAM', 'Namibie', 'Namibia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NC', 'NCL', 'Nouvelle-Calédonie', 'New Caledonia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NE', 'NER', 'Niger', 'Niger', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NF', 'NFK', 'Île Norfolk', 'Norfolk Island', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NG', 'NGA', 'Nigéria', 'Nigeria', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NI', 'NIC', 'Nicaragua', 'Nicaragua', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NL', 'NLD', 'Pays-Bas', 'Netherlands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NO', 'NOR', 'Norvège', 'Norway', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NP', 'NPL', 'Népal', 'Nepal', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NR', 'NRU', 'Nauru', 'Nauru', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NU', 'NIU', 'Niué', 'Niue', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('NZ', 'NZL', 'Nouvelle-Zélande', 'New Zealand', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('OM', 'OMN', 'Oman', 'Oman', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PA', 'PAN', 'Panama', 'Panama', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PE', 'PER', 'Pérou', 'Peru', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PF', 'PYF', 'Polynésie Française', 'French Polynesia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PG', 'PNG', 'Papouasie-Nouvelle-Guinée', 'Papua New Guinea', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PH', 'PHL', 'Philippines', 'Philippines', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PK', 'PAK', 'Pakistan', 'Pakistan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PL', 'POL', 'Pologne', 'Poland', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PM', 'SPM', 'Saint-Pierre-et-Miquelon', 'Saint-Pierre and Miquelon', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PN', 'PCN', 'Pitcairn', 'Pitcairn', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PR', 'PRI', 'Porto Rico', 'Puerto Rico', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PS', 'PSE', 'Territoire Palestinien Occupé', 'Occupied Palestinian Territory', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PT', 'PRT', 'Portugal', 'Portugal', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PW', 'PLW', 'Palaos', 'Palau', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('PY', 'PRY', 'Paraguay', 'Paraguay', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('QA', 'QAT', 'Qatar', 'Qatar', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('RE', 'REU', 'Réunion', 'Réunion', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('RO', 'ROU', 'Roumanie', 'Romania', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('RS', 'SRB', 'Serbie', 'Serbia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('RU', 'RUS', 'Fédération de Russie', 'Russian Federation', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('RW', 'RWA', 'Rwanda', 'Rwanda', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SA', 'SAU', 'Arabie Saoudite', 'Saudi Arabia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SB', 'SLB', 'Îles Salomon', 'Solomon Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SC', 'SYC', 'Seychelles', 'Seychelles', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SD', 'SDN', 'Soudan', 'Sudan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SE', 'SWE', 'Suède', 'Sweden', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SG', 'SGP', 'Singapour', 'Singapore', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SH', 'SHN', 'Sainte-Hélène', 'Saint Helena', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SI', 'SVN', 'Slovénie', 'Slovenia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SJ', 'SJM', 'Svalbard etÎle Jan Mayen', 'Svalbard and Jan Mayen', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SK', 'SVK', 'Slovaquie', 'Slovakia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SL', 'SLE', 'Sierra Leone', 'Sierra Leone', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SM', 'SMR', 'Saint-Marin', 'San Marino', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SN', 'SEN', 'Sénégal', 'Senegal', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SO', 'SOM', 'Somalie', 'Somalia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SR', 'SUR', 'Suriname', 'Suriname', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('ST', 'STP', 'Sao Tomé-et-Principe', 'Sao Tome and Principe', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SV', 'SLV', 'El Salvador', 'El Salvador', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SY', 'SYR', 'République Arabe Syrienne', 'Syrian Arab Republic', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('SZ', 'SWZ', 'Swaziland', 'Swaziland', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TC', 'TCA', 'Îles Turks et Caïques', 'Turks and Caicos Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TD', 'TCD', 'Tchad', 'Chad', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TF', 'ATF', 'Terres Australes Françaises', 'French Southern Territories', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TG', 'TGO', 'Togo', 'Togo', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TH', 'THA', 'Thaïlande', 'Thailand', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TJ', 'TJK', 'Tadjikistan', 'Tajikistan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TK', 'TKL', 'Tokelau', 'Tokelau', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TL', 'TLS', 'Timor-Leste', 'Timor-Leste', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TM', 'TKM', 'Turkménistan', 'Turkmenistan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TN', 'TUN', 'Tunisie', 'Tunisia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TO', 'TON', 'Tonga', 'Tonga', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TR', 'TUR', 'Turquie', 'Turkey', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TT', 'TTO', 'Trinité-et-Tobago', 'Trinidad and Tobago', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TV', 'TUV', 'Tuvalu', 'Tuvalu', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TW', 'TWN', 'Taïwan', 'Taiwan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('TZ', 'TZA', 'République-Unie de Tanzanie', 'United Republic Of Tanzania', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('UA', 'UKR', 'Ukraine', 'Ukraine', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('UG', 'UGA', 'Ouganda', 'Uganda', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('UM', 'UMI', 'Îles Mineures Éloignées des États-Unis', 'United States Minor Outlying Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('US', 'USA', 'États-Unis', 'United States', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('UY', 'URY', 'Uruguay', 'Uruguay', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('UZ', 'UZB', 'Ouzbékistan', 'Uzbekistan', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('VA', 'VAT', 'Saint-Siège (état de la Cité du Vatican)', 'Vatican City State', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('VC', 'VCT', 'Saint-Vincent-et-les Grenadines', 'Saint Vincent and the Grenadines', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('VE', 'VEN', 'Venezuela', 'Venezuela', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('VG', 'VGB', 'Îles Vierges Britanniques', 'British Virgin Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('VI', 'VIR', 'Îles Vierges des États-Unis', 'U.S. Virgin Islands', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('VN', 'VNM', 'Viet Nam', 'Vietnam', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('VU', 'VUT', 'Vanuatu', 'Vanuatu', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('WF', 'WLF', 'Wallis et Futuna', 'Wallis and Futuna', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('WS', 'WSM', 'Samoa', 'Samoa', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('YE', 'YEM', 'Yémen', 'Yemen', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('YT', 'MYT', 'Mayotte', 'Mayotte', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('ZA', 'ZAF', 'Afrique du Sud', 'South Africa', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('ZM', 'ZMB', 'Zambie', 'Zambia', '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('ZW', 'ZWE', 'Zimbabwe', 'Zimbabwe', '2023-07-26 17:05:15', '2023-07-26 17:05:15');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--


--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `password`, `nom`, `prenoms`, `verrouillage`, `level`, `premiereconnexion`, `createAt`, `updateAt`) VALUES
('gnounagnon@gouv.bj', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'NOUNAGNON', 'Gildas', 0, 0, 0, '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('hnondichao@gouv.bj', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'NONDICHAO', 'Hachirou', 0, 0, 0, '2023-07-28 10:43:48', '2023-07-28 10:43:48'),
('lsalanon@gouv.bj', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'SALANON', 'Landry', 0, 0, 0, '2023-07-27 10:59:25', '2023-07-27 10:59:25'),
('nbocovo@gouv.bj', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'BOCOVO', 'Nicaise', 0, 0, 0, '2023-07-28 11:40:01', '2023-07-28 11:40:01'),
('ohonvoh@gouv.bj', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'HONVOH', 'Oméga', 0, 2, 0, '2023-07-25 08:23:04', '2023-07-25 08:23:04'),
('szanvo@gouv.bj', '9d4085ffd414cb441a6944459299ed851e43eb74', 'ZANVO', 'S. K. Hervé', 0, 0, 0, '2023-07-26 17:26:17', '2023-07-26 17:26:17');


INSERT INTO `fonction` (`code`, `libelle`, `createAt`, `updateAt`) VALUES
('PRE', 'Président.e', '2023-08-02 15:07:05', '2023-08-02 15:07:05'),
('CPR', 'Co-Président.e', '2023-08-02 15:07:05', '2023-08-02 15:07:05'),
('PAH', 'Pays hôte', '2023-08-02 15:07:05', '2023-08-02 15:07:05'),
('SGE', 'Secrétaire général.e', '2023-08-02 14:02:02', '2023-08-02 14:02:02');


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
