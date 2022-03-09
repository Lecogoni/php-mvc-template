<h1>Bonjour 
<?php 
 echo $tuto['prenom'].' '.$tuto['nom']
?> 
</h1>


<?php

// CONNECT THE EXTERNAL DB 


$host = '172.17.0.1:3307'; 
$user = 'root'; 
$password = 'root';
$db = 'php-decouverte';

$dsn = "mysql:host={$host};dbname={$db};";

try {
  $dbh = new PDO($dsn, $user, $password);
  // $dbh = new PDO('mysql:host=127.0.0.1;port=3306;dbname=test;charset=utf8', 'root', 'root');
  echo "Connected successfully"; 

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    echo "dans le cul lulu"; 
    die();  
}

?>