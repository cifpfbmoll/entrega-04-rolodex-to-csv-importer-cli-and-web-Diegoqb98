# Ejecutar el Proyecto en Local

El proyecto ya está configurado y funcionando en local. 

## ✅ Estado Actual

- ✓ Dependencias instaladas con Composer
- ✓ Archivos de configuración creados
- ✓ Servidor web funcionando
- ✓ Aplicación accesible en http://localhost:8080

## 🚀 Cómo Iniciar el Servidor

### Opción 1: Servidor PHP integrado (RECOMENDADO)

```powershell
cd c:\Users\didac\Desktop\entrega-04-rolodex-to-csv-importer-cli-and-web-Diegoqb98\public
php -S localhost:8080
```

### Opción 2: Comando Spark de CodeIgniter

```powershell
cd c:\Users\didac\Desktop\entrega-04-rolodex-to-csv-importer-cli-and-web-Diegoqb98
php spark serve
```

**Nota:** Si encuentras problemas con `php spark serve`, usa la Opción 1.

## 🌐 Acceder a la Aplicación

Una vez iniciado el servidor, abre tu navegador y ve a:

**http://localhost:8080**

## 📝 Características Disponibles

### Interfaz Web
- Ver lista de contactos: http://localhost:8080/contacts
- Crear nuevo contacto: http://localhost:8080/contacts/create

### Línea de Comandos (CLI)
```powershell
# Importar contactos desde CSV
php contact-importer.php
```

## 🔧 Configuración

El proyecto está configurado con:
- **Entorno:** development
- **Puerto:** 8080
- **URL Base:** http://localhost:8080/
- **Archivo de Contactos:** writable/contacts.csv

## 📁 Estructura del Proyecto

```
├── app/
│   ├── Config/          # Archivos de configuración
│   ├── Controllers/     # Controladores (Home, Contacts)
│   └── Views/          # Vistas (contacts/index, contacts/create)
├── public/             # Punto de entrada web
│   └── index.php
├── writable/           # Directorio de escritura
│   └── contacts.csv    # Archivo de contactos
├── examples/           # Archivos de ejemplo
│   └── sample-contacts.csv
└── .env                # Variables de entorno

```

## 🛠️ Comandos Útiles

```powershell
# Listar comandos disponibles de Spark
php spark list

# Limpiar caché
php spark cache:clear

# Ver rutas disponibles
php spark routes
```

## ⚠️ Solución de Problemas

### El servidor no inicia
1. Verifica que PHP 8.1 o superior esté instalado: `php -v`
2. Asegúrate de estar en el directorio correcto
3. Verifica que el puerto 8080 no esté en uso

### Error 404 en las rutas
- Usa la Opción 1 (servidor PHP integrado) directamente en el directorio `public/`
- Verifica que el archivo `.env` existe y tiene `CI_ENVIRONMENT=development`

### No se pueden guardar contactos
- Verifica permisos de escritura en el directorio `writable/`
- En Windows, asegúrate de tener permisos de escritura

## 📚 Documentación

- [CodeIgniter 4](https://codeigniter.com/user_guide/)
- [Documentación del Proyecto](README.md)

---

**¡El proyecto está listo para usar!** 🎉
