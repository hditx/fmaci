CREATE USER 'farmacentro'@'%' IDENTIFIED BY 'farmacentro';
GRANT ALL PRIVILEGES ON Farmacentro.* TO 'farmacentro'@'%' IDENTIFIED BY 'farmacentro';
FLUSH PRIVILEGES;