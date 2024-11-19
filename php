<html>
    <head>
        <title>Cours PHP & MySQL</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="cours.css">
    </head>


    <body>
        <h1>Titre principal</h1>
        <?php
            //Affiche "Hello World" avec un retour à la ligne
            echo '<p>Hello World <br>'; //Ceci est un commentaire PHP

            /*Affiche
                Bonjour le Monde
            */
            echo "Bonjour le Monde</p>"; /*Ceci est un commentaire PHP*/
            $prenom = "Kaoutar";
            echo $prenom;
          
        ?>
            <p>Un paragraphe</p>


        <br>

        <?php

            $age = 28; //$age stocke le nombre 28
            echo "la variable \$age contient : ";
            echo $age;
            $distance = 3;
            $fadoua = true;
            echo '<br>';
            echo gettype($age);
            echo '<br>';
            echo gettype($prenom);
            echo '<br>';
            echo gettype($ditance);
            echo '<br>';
            echo gettype($fadoua);
            echo '<br>';
        
         ?>
            
            
    </body>
</html>
