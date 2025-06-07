-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 12:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basededatos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tripulacion`
--

CREATE TABLE `tripulacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` varchar(1000) NOT NULL,
  `poder` varchar(1000) NOT NULL,
  `rol` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tripulacion`
--

INSERT INTO `tripulacion` (`id`, `nombre`, `edad`, `poder`, `rol`) VALUES
(1, 'monkey d luffy', '19 años', ', Luffy se comió involuntariamente la fruta Gomu Gomu, una fruta del diablo de tipo paramecia. Esta le da su cuerpo las propiedades de la goma, lo que le permite estirarse, rebotar, doblarse, retorcerse e inflar cualquier parte de su cuerpo.\r\nA nivel defensivo, Luffy, al estar hecho de goma, es completamente inmune a los rayos. Tampoco puede ser dañado por ataques contundentes,incluyendo puñetazos, armas no punzantes, e incluso ser pisado por oponentes gigantescos. Si es golpeado por proyectiles como disparos de armas o balas de cañón, puede hacerlos rebotar hacia el lugar de donde provienen, amenazando potencialmente al que los lanzó.', 'capitan de la tripulacion y siendo el mas fuerte de todos haciendolo el q va enfrente en batalla'),
(2, 'roronoa zoro', '21', 'El estilo de tres espadas (三刀流 santōryū?) es el estilo principal de estilo con espadas de Zoro. Inusualmente para un humano, Zoro es capaz de empuñar tres espadas al mismo tiempo, sosteniendo una en cada mano y otra en su boca. Muchos de los ataques del estilo de tres espadas de Zoro usan las tres espadas para atacar a los oponentes, cortándolos varias veces o cortando a varios oponentes al mismo tiempo.', 'vicecapitan y combatinete de la tripulacion'),
(3, 'nami', '20', 'cuenta con un baston que ocupa como arma ya que libera particulas de frio, carlos y agua , ya con su ingenio hace q mezclando circustancias logre crear rayos, truenos, ilusiones y varias cosas mas', 'navegante y las finanzas del barco'),
(4, 'ussop', '19', 'llamado kabuto negro (escarabajo negro en japonés), la utiliza comúnmente con su forma pequeña cuando quiere acertar desde lejos utiliza un tamaño mas elevado. También hay que añadir a esta arma su munición, las Pop Greens, descubiertas en el Archipiélago Boin donde entreno durante dichos años. Estas Pop Greens son semillas de plantas que suelen ser mortíferas, como plantas carnívoras que crecen a una velocidad instantánea, aunque otra que ha aparecido utilizada por Usopp es una enredadera gigante para parar una avalancha de rocas. Usopp dispara la semilla con su kabuto y allí crece la semilla.', 'francotirador '),
(5, 'sanji', '21', 'Sanji ha aprendido un arte marcial conocido como el Estilo de Pierna Negra.\r\nEn cuanto a sus actuales ataques, Sanji tiene un gran repertorio de patadas y técnicas específicas que utiliza para luchar. Cabe señalar que no dice en voz alta el nombre de un ataque cada vez que pelea con alguien, excepto para los eventos y luchas importantes. La mayoría de sus ataques son dichos en francés y son por lo general términos de comida/cocina que están relacionados de alguna manera a la parte específica del cuerpo del oponente que esta atacando o la naturaleza del ataque en sí mismo.', 'cocinero y combatiente'),
(6, 'chooper', '17', 'Luffy se comió involuntariamente la fruta Gomu Gomu, una fruta del diablo de tipo paramecia. Esta le da su cuerpo las propiedades de la goma, lo que le permite estirarse, rebotar, doblarse, retorcerse e inflar cualquier parte de su cuerpo.', 'medico y en ocasiones combatiende'),
(7, 'robin', '30', 'Robin comió una fruta del diablo llamada fruta Hana Hana, que le permite hacer brotar partes de su cuerpo en cualquier lugar. La mayoría de sus ataques los realiza haciendo brotar manos, casi siempre para neutralizar a un enemigo o desarmarle.\r\n\r\nAl ser un estilo de combate basado en apresar y reducir al enemigo, para causarles daño tiene que retorcer sus huesos, aunque también puede lanzarlos por los aires o golpearles contra el suelo o cualquier objeto cercano.', 'historiadora y combatiente '),
(8, 'franky', '36 años', 'Al haber reconstruido su cuerpo, Franky se hizo un cyborg; mitad humano mitad robot (no un robot como Sanji pensaba), con grandes capacidades de lucha, gracias a que se creó unos brazos más grandes que cuando era Cutty Flam; y que además son resistentes a las balas. Además, como todo su cuerpo es de metal puede ocupar varias partes de su cuerpo y hacerlas armas excepcionales, entre estas puede hacerse un Centauro con sus piernas, arrojar sus \"patillas\" ya que son unos cuchillos e incluso con su boca es capaz de escupir fuego ', 'carpintero y combatiente'),
(9, 'brook', '90', 'Mientras él todavía estaba vivo, Brook consumió la fruta Yomi Yomi, una fruta del diablo de tipo paramecia que permite al usuario que la consuma una única oportunidad para volver a la vida. A pesar de que su alma no fue capaz de encontrar su cuerpo antes de que se descompusiera por completo y se convirtiera en un esqueleto, obtuvo algunas ventajas que de otro modo serían imposibles de hacer sin ser un esqueleto con el apoyo de los poderes de su fruta del diablo. Una ventaja es que, como acaba formado por huesos ligeros, puede utilizar su velocidad y ligereza para correr por el agua, pero, al igual que el resto de usuarios de Frutas del Diablo, aún puede ahogarse cuando se sumerge. Con la ayuda de sus poderes también es capaz de funcionar como un ser humano normal, y conserva toda la fuerza que tenía cuando aún tenía masa muscular real. Él es capaz de realizar actos normales, tales como beber, comer, llorar, digerir, e incluso \"caga\" con normalidad. También ha demostrado que el calcio (', 'musico y combatiente'),
(10, 'jimbe', '46', 'inbe es un maestro del Karate Gyojin, utilizándolo para golpear a muchos oponentes a la vez. Es lo bastante experto como para tener un cinturón negro siendo solo un niño. Su habilidad es tal que incluso no necesita hacer contacto físico con un enemigo para atacarlo, ya que las partículas de agua en el aire se mueven tras algunos segundos de la iniciación del ataque. Otro ejemplo de su fuerza y nivel de Karate Gyojin es que derrotó a Minorhinoceros, un carcelero de Impel Down, con solo un golpe.', 'combatiente y timonel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tripulacion`
--
ALTER TABLE `tripulacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tripulacion`
--
ALTER TABLE `tripulacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
