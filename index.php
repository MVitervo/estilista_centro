
<?php 
require './core/router.php';
require './core/container.php';

$container = new Container();

$container->set(PDO::class, function () {
    return require './database/connection.php';
});

$router = new Router($container);

require './routes/api.php';
require './routes/web.php';

$router->dispatch();

?>