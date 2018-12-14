CREATE DATABASE IF NOT EXISTS 3DLab CHARACTER SET 'utf8' COlLATE 'utf8_hungarian_ci';

CREATE TABLE IF NOT EXISTS accountok(az int PRIMARY KEY AUTO_INCREMENT, felhNev varchar(30), jelszo varchar(28), email_cim varchar(50), regio_az smallint);

INSERT INTO accountok (az, felhNev, jelszo, email_cim, regio_az)
VALUES
(1, 'user', 'user', 'username@gmail.com', 3),
(2, 'gycsaba', 'gycsaba', 'gyuris.csaba@vasvari.hu', 3),
(3, 'baro', 'baro123', 'balint.robert@vasvari.hu', 3)
;

CREATE USER 'szoftverf'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT USAGE ON *.* TO 'szoftverf'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON 3dlab.* To 'szoftverf'@'localhost' IDENTIFIED BY 'szoftverf';


