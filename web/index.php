<?php
define('YII_DEBUG', true);
//Включаем сам фреймворк Yii (1)
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
ini_set('display_errors', true);
//Получаем конфигурацию (2)
$config = require(__DIR__ . '/../config/web.php');
//Создаём и немедленно выполняем приложение(3)
(new yii\web\Application($config))->run();