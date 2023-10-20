# Integration Workshop Web
Integration Workshop - IPCHILE - Proyecto 2023


## Instrucciones
- Descargar Repositorio y cargarlo en carpeta www/ de wamp
- En Wamp activar en Apache>Modulos la opcion rewrite_module
- abrir archivo httpd.conf como admin en "C:\wamp64\bin\apache\apache2.4.51\conf\httpd.conf" y descomentar la linea

```
# Virtual hosts
Include conf/extra/httpd-vhosts.conf 
```
- Abrir Archivo "C:\wamp64\bin\apache\apache2.4.51\conf\extra\httpd-vhosts.conf" y añadir esto:

```
<VirtualHost *:80>   
    DocumentRoot "C:/wamp64/www/integration-workshop-web"
    ServerName integrations-workshop.com.devel
    ServerAlias www.integrations-workshop.com.devel
    <Directory "C:/wamp64/www/integration-workshop-web">
        Options Indexes FollowSymLinks     
        AllowOverride All
        Order Deny,Allow
        Allow from all
    </Directory> 
</VirtualHost>
```

- Abrir Archivo hosts en C:\Windows\System32\drivers\etc y añadir el dominio configurado en apache

```
127.0.0.1 integrations-workshop.com.devel
```
- Reiniciar Wamp

- En config/ConnectionSql.php cambiar credenciales por las que tengas en tu equipo.

- Cargar Script BD en MySQL
