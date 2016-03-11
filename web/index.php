<?php 
//debugging
define('YII_DEBUG', true);
//includeing yii's framework itself
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
//Getting the configurations
$config = require(__DIR__ . '/../config/web.php');

//error handling
ini_set('display_errors', true);
//Making and launching Yii application immediately
(new yii\web\Application($config))->run();
?>