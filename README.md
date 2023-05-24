# 2DAW_22-23_PFC
Este repositorio contiene el proyecto final del curso realizado en el transcurso de marzo a mayo de 2023, mediante el uso de docker-compose.yml. Por si se desea, también se dispondrá del código fuente aunque con las configuraciones del clouding (BBDD y Json-server puestos en el código con la IP '46.183.118.140') y el Powerpoint de la presentación del proyecto
<h2>¿Como instalar el proyecto?</h2>
<p>*Préviamente hay que tener linux en nuestro SO (En mi caso debian 11) y posteriormente docker instalado en nuestro Equipo*</p>
<ul>
  <li>Descargamos el docker-compose.yml que se ofrece en el repositorio</li>
  <li>Una vez descargado, nos situamos en la misma ruta que el .yml y abrimos la terminal</li>
  <li>Ejecutamos el comando 'docker-compose -f {nombre del fichero} up' (el nombre del archivo es docker-compose.yml). Si lo queremos ejecutar en segundo plano,           basta con agrega la opción ‘-d’ al final y también si se llama ‘docker-compose.yml’ con poner ‘docker-compose up -d’ es suficiente.</li>
</ul>
<h2>¿Como usar el proyecto?</h2>
<ul>
  <li>Ponemos la ip del equipo o la palabra locahost (localhost:8080)</li>
</ul>
<h2>Datos extra a saber de los puertos:</h2>
<ul>
  <li>8080: Nos abre el proyecto</li>
  <li>3000: Ejecuta el apartado del json-server</li>
  <li>3306: Configuración del Mysql (al no llevar entorno gráfico, el navegador no puede ejecutarlo)</li>
</ul>
<h1>Trabajo realizado por Mario de la Calle Munguia-2ºDAW</h1>
