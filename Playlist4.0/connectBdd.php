<!-- connecion à la base de données -->

<?php

define('SQL_DSN', 'mysql:dbname=testlist2;host=localhost;chaset=utf8');
// Penser à modifier les deux lignes suivantes selon les paramètre de connexion du SGBD
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', 'admin');

$pdo= new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

 ?>
