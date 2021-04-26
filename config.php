<?php
class config 
{
private static $pdo = NULL;
public static function getConnexion() 
{
if (!isset(self::$pdo)) 
{
try
{
<<<<<<< HEAD
self::$pdo = new PDO('mysql:host=localhost;dbname=projet', 'root', '',
=======
self::$pdo = new PDO('mysql:host=localhost;dbname=final', 'root', '',
>>>>>>> fc201f0 (Signed-off-by: ahmed bahrouni <ahmed.bahrouni@esprit.tn>)
[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
}
catch(Exception $e)
{
die('Erreur: '.$e->getMessage());
}
}
return self::$pdo;
}
}
?>