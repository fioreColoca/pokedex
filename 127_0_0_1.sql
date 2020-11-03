-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2020 a las 21:18:37
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemons-coloca-fiorella`
--
CREATE DATABASE IF NOT EXISTS `pokemons-coloca-fiorella` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pokemons-coloca-fiorella`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `Nombre` varchar(25) NOT NULL,
  `Descripcion` varchar(900) NOT NULL,
  `número` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `imagen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`Nombre`, `Descripcion`, `número`, `tipo`, `imagen`) VALUES
('Vaporeon', 'VAPOREON sufrió una mutación repentina y desarrolló aletas y branquias que le permiten vivir bajo el agua. Asimismo, este POKéMON tiene la habilidad de controlar las aguas. ', 6, 'Agua', 'recursos/img/Vaporeon.png'),
('Flareon', 'Flareon es un pokémon de tipo Fuego. Los pokémon tipo Fuego son fuertes contra los pokémon de tipo Planta, Hielo, Bicho, Acero, Hada pero debiles contra los pokémon de tipo Fuego, Agua, Roca, Dragón.', 8, 'Fuego', 'recursos/img/Flareon.png'),
('Umbreon', 'Umbreon es un pokémon de tipo Siniestro. Los pokémon tipo Siniestro son fuertes contra los pokémon de tipo Psíquico, Fantasma pero debiles contra los pokémon de tipo Lucha, Siniestro, Acero, Hada. Los pokémon de tipo Normal, por contra, no les afectan.', 20, 'Oscuro', 'recursos/img/Umbreon.png'),
('Mimikyu', 'Mimikyu es una especie de Pokémon en la franquicia de Pokémon de Nintendo y Game Freak. Fue introducido por primera vez en Pokémon Sol y Luna. Se le conoce como el \"Pokémon Disfrazado\", ya que es un Pokémon que se disfraza para parecerse a Pikachu con el fin de hacer amigos.', 87, 'Fantasmal', 'recursos/img/Mimikyu.png'),
('Absol', 'ABSOL tiene la habilidad de predecir las catástrofes naturales. Este POKéMON vive en hábitats montañosos, hostiles y accidentados de los que rara vez se aleja. Detecta con precisión cualquier cambio producido en la atmósfera o la tierra y predice catástrofes naturales. Es un POKÉMON longevo que vive 100 años.', 134, 'Oscuro', 'recursos/img/Absol.png'),
('Pikachu', 'Pikachu es un pokémon de tipo Eléctrico que que proviene de pichu y que puede evolucionar en raichu.', 1, 'Electrico', 'recursos/img/Pikachu.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Usuario` varchar(25) NOT NULL,
  `Clave` varchar(25) NOT NULL,
  `Email` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Usuario`, `Clave`, `Email`) VALUES
('marta', '123123', 'marta@gmail.com'),
('José', '123123', 'jose@gmail.com'),
('Mariana', '12', 'mariana@gmail.com'),
('Fiorella', '123123', 'fiorecoloca99@gmail.com'),
('Sol', '123123', 'sol@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
