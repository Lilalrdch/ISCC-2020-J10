<!DOCTYPE html>
<html>
<head>
    <title>ISCC-2020</title>
</head>
<body>
    <h1>Base Test 01 </h1>
    <?php
    function connect_to_database()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = 'root';
        $databasename = 'BaseTest01';
        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            echo "Connexion réussiee";
            return $pdo;
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }
    }
    $pdo = connect_to_database();
    $produit = $pdo-> query("SELECT * FROM produit")->fetchAll();
    echo"<ul>";
    foreach($produit as $produit){
        echo "<li>$produit[nom]</li>" ; 
    }
    echo"</ul>";
    ?>
</body>
</html>