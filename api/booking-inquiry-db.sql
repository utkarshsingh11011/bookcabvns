-- ════════════════════════════════════════════════════════════
-- Book Cab Varanasi — Booking Inquiries Table
-- Run this on the bookcabvaranasi MySQL database
-- ════════════════════════════════════════════════════════════

CREATE TABLE IF NOT EXISTS `booking_inquiries` (
  `id`                  INT UNSIGNED     NOT NULL AUTO_INCREMENT,
  `inquiry_id`          VARCHAR(20)      NOT NULL COMMENT 'Human-readable ref: BCV-YYYY-XXXXXXX',
  `trip_type`           ENUM('one_way','round_trip','multi_day') NOT NULL DEFAULT 'one_way',
  `origin`              VARCHAR(100)     NOT NULL,
  `destination`         VARCHAR(100)     NOT NULL,
  `travel_date`         DATE             NOT NULL,
  `return_date`         DATE             DEFAULT NULL,
  `passengers`          TINYINT UNSIGNED NOT NULL DEFAULT 1,
  `vehicle_preference`  VARCHAR(50)      DEFAULT NULL,
  `customer_name`       VARCHAR(100)     NOT NULL,
  `customer_phone`      VARCHAR(15)      NOT NULL COMMENT 'Digits only, no country code prefix',
  `instructions`        TEXT             DEFAULT NULL,
  `landing_page`        VARCHAR(255)     DEFAULT NULL,
  `status`              ENUM('new','quoted','confirmed','cancelled') NOT NULL DEFAULT 'new',
  `crm_delivered`       TINYINT(1)       NOT NULL DEFAULT 0,
  `crm_delivered_at`    DATETIME         DEFAULT NULL,
  `notes`               TEXT             DEFAULT NULL COMMENT 'Internal ops notes',
  `created_at`          DATETIME         NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at`          DATETIME         NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

  PRIMARY KEY (`id`),
  UNIQUE  KEY `uq_inquiry_id`    (`inquiry_id`),
  INDEX         `idx_status`     (`status`),
  INDEX         `idx_phone`      (`customer_phone`),
  INDEX         `idx_travel_date`(`travel_date`),
  INDEX         `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
  COMMENT='Stores booking inquiries submitted via the website form';

-- ── Optional: view for operations dashboard ──────────────
CREATE OR REPLACE VIEW `v_pending_inquiries` AS
  SELECT inquiry_id, trip_type, origin, destination, travel_date,
         passengers, vehicle_preference, customer_name, customer_phone,
         landing_page, created_at
  FROM   booking_inquiries
  WHERE  status = 'new'
  ORDER  BY created_at DESC;
