## Tarea Opcional - Víctor Daniel Jaramillo Gómez 

El proyecto contiene la solución al enunciado del ejercicio opcional: 

Acceder a la zona de inicio: para acceder a la zona de inicio se debe enviar por la
URL el código: A765. En caso de que el código sea válido se desplegarán 3 enlaces,
el primero a “registrar vehículos”, el segundo a “listar vehículos” y el tercero a
“estadísticas vehículos”. En caso contrario deberá desplegar un mensaje que diga
zona prohibida.
b) Registrar vehículos: Cree un sistema que permita registrar tanto vehículos como
dueños al mismo tiempo. En un mismo formulario recoja todos los datos y registre los
datos de las 2 tablas.
Nota: se recomienda registrar primero los datos de los dueños para evitar problemas
de claves foráneas inexistentes. Registre 2 vehículos y 2 dueños. Verifique
únicamente que la marca sea válida.
c) Listar vehículos: Liste todos los vehículos con los siguientes datos: placa y marca;
para los vehículos tipo Mazda muestre al lado de la placa un mensaje en verde que
diga (“Los de Mazda son los mejores”) y para los vehículos tipo Toyota muestra la
placa en rojo y negrilla.
d) Estadísticas vehículos: Muestre cuántos vehículos de cada tipo existen registrados
en el sistema (por ejemplo: 3 Mazda, 2 Toyota, 0 Chevrolet).

### Pasos para funcionamiento 
1. Descargar y descomprimir el proyecto
2. Desde la consola de linux (o laragon https://laragon.org/download/ u otro similar), navegar hasta la carpeta en la que se descomprimió el proyecto 
3. Ejecutar el comando "composer install" para que se instalen las librerías relacionadas
4. modificar en el archivo de variables de entorno (.env) las líneas 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
según sea el caso de su servidor de bases de datos.
4. Crear en su servidor de bases de datos una base de datos con el mismo nombre que digitó en la variable de entorno 
DB_DATABASE=
5. Ejecutar, desde la consola, el comando "php artisan migrate". Para crear las tablas en el sistema.
6. Ejecutar el comando "php artisan serve --port 80". Para que el proyecto se ejecute en la dirección 127.0.0.1 
7. Navegar por el proyecto. Recuerde que todos los enlaces válidos, a excepción de los enlaces de registro van antecedidos por el código A765.
