
/*
Para crear la base de datos correspondiente al formulario, puede seguir los siguientes pasos:

1.- Abre phpMyAdmin en tu navegador web accediendo a " http://localhost/phpmyadmin ".

2.- Haz clic en "Nuevo" en la barra de navegación izquierda para crear una nueva base de datos.

3.- En el campo "Nombre de la base de datos", ingresa un nombre para tu base de datos. Por ejemplo, puedes usar "formulario_registro_db".

4.- Asegúrese de seleccionar "utf8_general_ci" en el campo "Conjunto de caracteres" y haga clic en el botón "Crear" para crear la base de datos.

5.-Una vez creada la base de datos, haz clic en el nombre de la base de datos en la barra de navegación izquierda para acceder a ella.

6.- En la página de la base de datos, haz clic en la pestaña "SQL" en la parte superior.

7.- En el campo de texto "Ejecutar consulta SQL", puedes ingresar el siguiente código para crear una tabla que coincide con los campos del formulario:
*/


CREATE TABLE usuarios (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  contraseña VARCHAR(50) NOT NULL
);


/*
Después de ingresar el código, haga clic en el botón "Ejecutar" para crear la tabla.
Ahora tienes una base de datos llamada "formulario_registro_db" y una tabla llamada "usuarios" con los campos correspondientes al formulario.

Recuerda que puedes modificar los nombres de la base de datos y la tabla según tus preferencias, pero asegúrate de corregir esos cambios en el archivo "guardar_datos.php" mencionado anteriormente.
*/