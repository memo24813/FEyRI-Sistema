# Sistema FEyRI
Sistema para el registro de tareas pendientes y soportes en la facultad.
## Ejecucion del proyecto

Una vez abierto el proyecto, vamos a buscar un archivo llamado ***.env.example*** el cual lo vamos a copiar y pegar y lo vamos a renombrar como .env, una vez realizado eso vamos a abrir el archivo y vamos a buscar la siguientes variables y declararlas de esta manera.
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=nombre_base_de_datos
DB_USERNAME=root
DB_PASSWORD=
```

Una vez realizado esto ahora volveremos a la terminal donde tenemos la direccion abierta del proyecto y vamos a escribir los siguientes comandos.
```
composer install
php artisan key:generate
php artisan migrate
php artisan storage:link
```

Una vez realizado todos esos comando nos deberia aparecer ningun error, ahora procederemos a ejecutar los siguientes comandos para las dependencias de node.

```
npm install
```

Una vez realizado esto ahora procedemos a ejecutar laravel mix de webpack.
```
npm run dev
```