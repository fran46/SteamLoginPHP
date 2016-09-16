# SteamLoginPHP
Inicio de sesión en Steam mediante PHP

__Note__: Al usar esta libreria aceptas los [Terminos de uso del API de Steam](https://steamcommunity.com/dev/apiterms)

# Instalación
Descargamos los ficheros a nuestro servidor y abrimos '/steamauth/configuracion.php'.
Editamos las siguientes lineas para proporcionar nuestra ApiKey y nuestro dominio:

```php
$steamauth['apikey'] = ""; // Introduce tu ApiKey http://steamcommunity.com/dev/apikey
$steamauth['dominio'] = ""; // Introduce tu la URL de tu dominio
```

Opcionalmente, podemos añadir tambien la url de redirección trás el Login o Cierre de sesión:

```php
$steamauth['logoutpage'] = ""; // Introduce la página a mostrar despues de hacer el login (partiendo desde esta carpeta) por ejemplo "../index.php", o dejalo en blanco "" para redirigir a la página en la que estes
$steamauth['loginpage'] = ""; // Introduce la página a mostrar despues de cerrar sesión (partiendo desde esta carpeta) por ejemplo "../adios.php", o dejalo en blanco "" para redirigir a la página en la que estes
```

Una vez echo esto podemos ejecutar el archivo index.php y probar la funcionalidad.
