CREATE DATABASE IF NOT EXISTS muebleria
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE muebleria;

CREATE TABLE IF NOT EXISTS categorias (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  slug VARCHAR(120) NOT NULL UNIQUE
);

CREATE TABLE IF NOT EXISTS productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  categoria_id INT NOT NULL,
  nombre VARCHAR(150) NOT NULL,
  descripcion TEXT,
  precio DECIMAL(10,2) NOT NULL,
  imagen VARCHAR(255) DEFAULT NULL,
  activo TINYINT(1) DEFAULT 1,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

-- opcional: para trazas/pedidos (aquí solo dejamos log)
CREATE TABLE IF NOT EXISTS pedidos_log (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario_ip VARCHAR(45),
  carrito_json JSON,
  total DECIMAL(10,2),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- categorías
INSERT INTO categorias (nombre, slug) VALUES
('Sala','sala'),
('Comedores','comedores'),
('Juegos de Alcoba','juegos-de-alcoba'),
('Otros','otros')
ON DUPLICATE KEY UPDATE nombre=VALUES(nombre);
