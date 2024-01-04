# GQL-PDSS Skeleton

## Instalar

    composer create-project wappcode/gql-pdss-skeleton

Crear archivo config/doctrine.local.php con la configuración de la base de datos

    <?php
    return [
        "driver" => [
            'user'     =>   '',
            'password' =>   '',
            'dbname'   =>   '',
            'driver'   =>   'pdo_mysql',
            'host'   =>     '127.0.0.1',
            'charset' =>    'utf8mb4'
        ],
        "entities" => require __DIR__ . "/doctrine.entities.php"
    ];

Iniciar API con el comándo

    php -S localhost:8000 public/index.php

Para consultar API Graphql la ruta es http://localhost:8000/api

## Configurar como api graphql, rest sin doctrine

Modificar public/index.php

```
// ....
// Actualizar la siguiente linea

$app = new GPDApp($context, $router, $enviroment, $withOutDoctrine = true);

// ....
```

No es necesario crear archivo onfig/doctrine.local.php ni crear una base de datos
