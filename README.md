# 🏡 Mueblería - Catálogo de Muebles con Carrito

Sistema de catálogo de muebles con carrito de compras, integración con WhatsApp y correo electrónico.

## 📋 Configuración Inicial

### 1. Base de Datos
Ejecuta el script `db.php` en tu base de datos MySQL:

```bash
mysql -u root -p < db.php
```

**Cambios requeridos en `index.php`:**

```php
define('DB_HOST', 'localhost');      // Tu servidor MySQL
define('DB_NAME', 'muebleria');      // Nombre de la BD
define('DB_USER', 'root');           // Usuario MySQL
define('DB_PASS', 'TU_PASSWORD');    // Contraseña MySQL (⚠️ CAMBIAR)
define('ADMIN_PASS', 'admin123');    // Contraseña panel admin (⚠️ CAMBIAR)
define('WHATSAPP_NUMBER', '573001112233');  // Tu número WhatsApp
define('CONTACT_EMAIL', 'ventas@tudominio.com');
define('MAPS_Q', 'TU_UBICACION');    // Dirección o coordenadas para Google Maps
```

### 2. Directorios Necesarios
- ✅ `assets/uploads/` - Para guardar imágenes de productos
- ✅ `assets/images/` - Imagen por defecto

### 3. Características
- 🛒 Carrito persistente (con sesiones PHP)
- 📲 Integración WhatsApp para pedidos
- ✉️ Envío de cotizaciones por correo
- 🔐 Panel admin simple para CRUD de productos
- 💅 Diseño moderno con glassmorphism

### 4. Rutas Disponibles
- `?` - Inicio (catálogo)
- `?cat=slug` - Categoría específica
- `?view=cart` - Carrito
- `?action=checkout` - Cotización
- `?panel=admin` - Panel administrador

---
**Última actualización:** 2026-05-12
