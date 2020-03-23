<?php

    include ('connexion.php');




    //INSERER CINEMA
 
    $nom_cinema = !empty ($_POST["nom"]) ? $_POST["nom"] :NULL ;
    $ville_cinema = !empty ($_POST["ville"]) ? $_POST["ville"] :NULL ;
    $adresse_cinema = !empty ($_POST["adresse"]) ? $_POST["adresse"] :NULL ;
    $mail_cinema = !empty ($_POST["mail"]) ? $_POST["mail"] :NULL ;
    $telephone_cinema = !empty ($_POST["numero"]) ? $_POST["numero"] :NULL ;
   
   

    $stmt = $bdd->prepare("INSERT INTO cinema (nom_cinema, ville_cinema, adresse_cinema, mail_cinema, telephone_cinema) VALUES (:nom, :ville, :adresse, :mail, :numero)");
    $stmt->bindParam(':nom', $nom_cinema);
    $stmt->bindParam(':ville', $ville_cinema);
    $stmt->bindParam(':adresse', $adresse_cinema);
    $stmt->bindParam(':mail', $mail_cinema);
    $stmt->bindParam(':numero', $telephone_cinema);
    $stmt->execute();


    //INSERER SALLES

    
    $num_salle = !empty ($_POST["num_salle"]) ? $_POST["num_salle"] :NULL ;
    $capacite = !empty ($_POST["capacite"]) ? $_POST["capacite"] :NULL ;
    $id_cinema = !empty ($_POST["id_cinema"]) ? $_POST["id_cinema"] :NULL ;



     $stmt = $bdd->prepare("INSERT INTO salle (numero_salle, capacite_salle, id_cinema) VALUES ( :num_salle, :capacite, :id_cinema)");
    $stmt ->bindParam(':num_salle',$num_salle);
    $stmt ->bindParam(':capacite',$capacite);
    $stmt ->bindParam(':id_cinema',$id_cinema);
    $stmt->execute();


    //INSERER EQUIPEMENT

    $equipement = !empty ($_POST["equipement"]) ? $_POST["equipement"]:NULL;

    $stmt = $bdd->prepare("INSERT INTO equipement (nom_equipement) VALUES ( :equipement)");
    $stmt ->bindParam(':equipement',$equipement);
    $stmt->execute();




































/*------------------------------CINEMA---------------------------------*/


$reponse = $bdd->query('SELECT nom_cinema,ville_cinema,adresse_cinema,mail_cinema,telephone_cinema FROM cinema');
echo "<h1>CINEMAS</h1><br>";


// On affiche le resultat


while ($donnees = $reponse->fetch()){



//On affiche les données dans le tableau

           
         echo "<table>";
        echo "<tr>"; 
        echo "<th> Nom </th>";
        echo "<th> Ville </th>";
        echo "<th> Adresse </th>";
        echo "<th> Mail </th>";
         echo "<th> Telephone </th>";
        echo "</tr>";
        echo "<tr>"; 
        echo "<td> $donnees[nom_cinema] </td>";
        echo "<td> $donnees[ville_cinema] </td>";
        echo "<td> $donnees[adresse_cinema] </td>";
        echo "<td> $donnees[mail_cinema] </td>";
        echo "<td> $donnees[telephone_cinema] </td>";
        echo "</tr>";
        echo "</table>";
        }


/*------------------------------SALLES---------------------------------*/

//CINEMA 1

    echo "<br><h1>Cinema 1</h1> <br>" ;


    $reponse2 = $bdd->query('SELECT numero_salle,capacite_salle FROM salle WHERE id_cinema = 1');
    echo "<h2>SALLES </h2><br>";
     while ($donnees = $reponse2->fetch()){

            echo "<table>";
            echo "<tr>"; 
            echo "<th> Numero salle </th>";
            echo "<th> Capacite </th>";
            echo "</tr>";
            echo "<tr>"; 
            echo "<td> $donnees[numero_salle] </td>";
            echo "<td> $donnees[capacite_salle] </td>";
            echo "</tr>";
            echo "</table>";
            } 



//CINEMA 2
echo "<br><h1>Cinema 2</h1> <br>" ;

$reponse3 = $bdd->query('SELECT numero_salle,capacite_salle FROM salle WHERE id_cinema = 2');
    echo "<h2>SALLES </h2><br>";
     while ($donnees = $reponse3->fetch()){

            echo "<table>";
            echo "<tr>"; 
            echo "<th> Numero salle </th>";
            echo "<th> Capacite </th>";
            echo "</tr>";
            echo "<tr>"; 
            echo "<td> $donnees[numero_salle] </td>";
            echo "<td> $donnees[capacite_salle] </td>";
            echo "</tr>";
            echo "</table>";
            } 



           
//CINEMA 3        
echo "<br><h1>Cinema 3</h1> <br>" ;

$reponse3 = $bdd->query('SELECT numero_salle,capacite_salle FROM salle WHERE id_cinema = 3');
    echo "<h2>SALLES </h2><br>";
     while ($donnees = $reponse3->fetch()){

            echo "<table>";
            echo "<tr>"; 
            echo "<th> Numero salle </th>";
            echo "<th> Capacite </th>";
            echo "</tr>";
            echo "<tr>"; 
            echo "<td> $donnees[numero_salle] </td>";
            echo "<td> $donnees[capacite_salle] </td>";
            echo "</tr>";
            echo "</table>";
            } 




//CINEMA 4        
echo "<br><h1>Cinema 4</h1> <br>" ;


$reponse3 = $bdd->query('SELECT numero_salle,capacite_salle FROM salle WHERE id_cinema = 4');
    echo "<h2>SALLES </h2><br>";
     while ($donnees = $reponse3->fetch()){

            echo "<table>";
            echo "<tr>"; 
            echo "<th> Numero salle </th>";
            echo "<th> Capacite </th>";
            echo "</tr>";
            echo "<tr>"; 
            echo "<td> $donnees[numero_salle] </td>";
            echo "<td> $donnees[capacite_salle] </td>";
            echo "</tr>";
            echo "</table>";
            } 


echo "<br><h1>EQUIPEMENT</h1> <br>" ;

$reponse4 = $bdd->query('SELECT nom_equipement FROM equipement');
     while ($donnees = $reponse4->fetch()){

            echo "<table>";
            echo "<tr>"; 
            echo "<th> Equipement </th>";
            echo "</tr>";
            echo "<tr>"; 
            echo "<td> $donnees[nom_equipement] </td>";
            echo "</tr>";
            echo "</table>";
            } 



?>    