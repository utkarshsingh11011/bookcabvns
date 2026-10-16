-- Create the main pricing table
CREATE TABLE IF NOT EXISTS `route_rates` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `trip_type` ENUM('intercity', 'local', 'tour_package', 'airport') NOT NULL,
  `origin` VARCHAR(100) NOT NULL DEFAULT 'Varanasi',
  `destination` VARCHAR(255) NOT NULL,
  `vehicle_category` VARCHAR(100) NOT NULL,
  `fare_amount` DECIMAL(10,2) NOT NULL,
  `allowed_distance_km` INT DEFAULT NULL,
  `allowed_hours` INT DEFAULT NULL,
  `extra_charge_notes` VARCHAR(255) DEFAULT 'Toll, Parking Extra',
  `itinerary_highlights` TEXT DEFAULT NULL,
  `trip_duration_days` INT DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 1. SWIFT DZIRE (SEDAN) RATES
INSERT INTO `route_rates` (`trip_type`, `origin`, `destination`, `vehicle_category`, `fare_amount`, `allowed_distance_km`, `extra_charge_notes`, `itinerary_highlights`) VALUES
('intercity', 'Varanasi', 'Gaya / Bodhgaya', 'Swift Dzire', 8500.00, 550, 'Nil', 'Vishnupad Temple, Mahabodhi Temple, 80ft Buddha Statue, Monasteries'),
('intercity', 'Varanasi', 'Allahabad (Prayagraj)', 'Swift Dzire', 3500.00, 265, 'Toll, Parking', 'Triveni Sangam, Sleeping Hanuman Temple, Alopi Devi Temple, Anand Bhavan'),
('intercity', 'Varanasi', 'Ayodhya', 'Swift Dzire', 6500.00, 440, 'Toll, Parking', 'Saryu River, Ram Janmabhoomi, Hanuman Garhi, Sita Rasoi, Kanak Bhawan'),
('intercity', 'Varanasi', 'Vindhyachal (Mirzapur)', 'Swift Dzire', 2500.00, 150, 'Nil', 'Vindhyachal Temple Shaktipeeth'),
('intercity', 'Varanasi', 'Lucknow', 'Swift Dzire', 8500.00, 650, 'Nil', 'Bada Imam Bara, Chota Imambara, Ambedkar Park, The Residency');

INSERT INTO `route_rates` (`trip_type`, `origin`, `destination`, `vehicle_category`, `fare_amount`, `allowed_distance_km`, `allowed_hours`, `extra_charge_notes`, `itinerary_highlights`) VALUES
('local', 'Varanasi', 'Varanasi Local Sightseeing (Full Day)', 'Swift Dzire', 2500.00, 120, 12, 'Parking, Driver Night Extra', 'Kashi Vishwanath, Kal Bhairav, Annapurna, BHU, Sankat Mochan, Sarnath, Ganga Aarti'),
('local', 'Varanasi', 'Varanasi Local Sightseeing (Half Day)', 'Swift Dzire', 1800.00, 80, 8, 'Parking, Driver Night Extra', 'Kashi Vishwanath, Annapurna, Vishalakshi, BHU, Sankat Mochan, Ganga Aarti');


-- 2. FORCE URBANIA (LUXURY VAN) RATES
INSERT INTO `route_rates` (`trip_type`, `origin`, `destination`, `vehicle_category`, `fare_amount`, `allowed_distance_km`, `allowed_hours`, `extra_charge_notes`) VALUES
('airport', 'Varanasi', 'Varanasi Airport Transfer', 'Force Urbania (6-7 Seater)', 1500.00, NULL, NULL, 'Toll, Parking Extra'),
('local', 'Varanasi', 'Varanasi Local 8hr/80km', 'Force Urbania (6-7 Seater)', 2600.00, 80, 8, 'Parking Extra'),
('local', 'Varanasi', 'Varanasi Local 12hr/120km', 'Force Urbania (6-7 Seater)', 3500.00, 120, 12, 'Parking Extra'),
('airport', 'Varanasi', 'Varanasi Airport Transfer', 'Force Urbania (9-12 Seater)', 3000.00, NULL, NULL, 'Toll, Parking Extra'),
('local', 'Varanasi', 'Varanasi Local 8hr/80km', 'Force Urbania (9-12 Seater)', 6500.00, 80, 8, 'Parking Extra');

INSERT INTO `route_rates` (`trip_type`, `origin`, `destination`, `vehicle_category`, `fare_amount`, `allowed_distance_km`, `extra_charge_notes`, `itinerary_highlights`, `trip_duration_days`) VALUES
('tour_package', 'Varanasi', 'Allahabad (Prayagraj)', 'Force Urbania (9-12 Seater)', 10000.00, 250, 'Includes Toll & Parking', 'Triveni Sangam, Sleeping Hanuman Temple, Akshay Vat, Alopi Devi Temple, Anand Bhavan', 1),
('tour_package', 'Varanasi', 'Prayagraj - Sitamarhi - Vindhyachal', 'Force Urbania (9-12 Seater)', 12500.00, 300, 'Includes Toll & Parking', 'Sangam, Sita Samahit Sthal, Vindhyachal Shaktipeeth', 1),
('tour_package', 'Varanasi', 'Vindhyachal - Chunar Fort', 'Force Urbania (9-12 Seater)', 9500.00, 200, 'Includes Toll & Parking', 'Vindhyachal Goddess Durga Temple, Chunar Fort & Famous Pottery', 1),
('tour_package', 'Varanasi', 'Ayodhya Day Trip', 'Force Urbania (9-12 Seater)', 18500.00, 450, 'Includes Toll & Parking', 'Saryu River, Hanuman Garhi, Shri Ram Janmabhoomi, Sita Rasoi, Kanak Bhavan', 1),
('tour_package', 'Varanasi', 'Gaya & Bodhgaya Day Trip', 'Force Urbania (9-12 Seater)', 22500.00, 550, 'Includes Toll & Parking', 'Pind Daan at Vishnupad Temple, Mangala Gauri, Mahabodhi Temple, 80ft Buddha Statue', 1),
('tour_package', 'Varanasi', 'Prayagraj to Ayodhya Pilgrimage Tour', 'Force Urbania (9-12 Seater)', 22500.00, 550, 'Includes Toll & Parking', 'Day 1: Prayagraj Sangam & Temples. Day 2: Ayodhya Ram Janmabhoomi & Saryu River', 2);
