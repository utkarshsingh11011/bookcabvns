-- Table for Intercity Routes (Start != End)
CREATE TABLE IF NOT EXISTS `intercity_routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_city` varchar(100) NOT NULL,
  `end_city` varchar(100) NOT NULL,
  `route_slug` varchar(200) NOT NULL,
  `ow_dzire` int(11) DEFAULT NULL,
  `ow_ertiga` int(11) DEFAULT NULL,
  `ow_innova` int(11) DEFAULT NULL,
  `ow_tempo` int(11) DEFAULT NULL,
  `rt_dzire` int(11) DEFAULT NULL,
  `rt_ertiga` int(11) DEFAULT NULL,
  `rt_innova` int(11) DEFAULT NULL,
  `rt_tempo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `route_slug` (`route_slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for Local Packages (Start == End)
CREATE TABLE IF NOT EXISTS `local_packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  `pkg8_dzire` int(11) DEFAULT NULL,
  `pkg8_ertiga` int(11) DEFAULT NULL,
  `pkg8_innova` int(11) DEFAULT NULL,
  `pkg8_tempo` int(11) DEFAULT NULL,
  `pkg12_dzire` int(11) DEFAULT NULL,
  `pkg12_ertiga` int(11) DEFAULT NULL,
  `pkg12_innova` int(11) DEFAULT NULL,
  `pkg12_tempo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `city_name` (`city_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample Data: Intercity (Varanasi to Prayagraj)
INSERT INTO `intercity_routes` (`start_city`, `end_city`, `route_slug`, `ow_dzire`, `ow_ertiga`, `ow_innova`, `ow_tempo`, `rt_dzire`, `rt_ertiga`, `rt_innova`, `rt_tempo`) VALUES
('Varanasi', 'Prayagraj', 'varanasi-prayagraj', 3250, 4000, 4750, 7000, 6500, 8000, 9500, 14000);

-- Sample Data: Local Package (Varanasi)
INSERT INTO `local_packages` (`city_name`, `pkg8_dzire`, `pkg8_ertiga`, `pkg8_innova`, `pkg8_tempo`, `pkg12_dzire`, `pkg12_ertiga`, `pkg12_innova`, `pkg12_tempo`) VALUES
('Varanasi', 2000, 2400, 3500, 5000, 2600, 3200, 4500, 6000);
