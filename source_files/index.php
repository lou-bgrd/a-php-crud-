<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Crud en php</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php

        include './header.html'; ?>

    </header>
    <br>
    <div class="container">
        <br>

        <br>
        <div class="row">
            <a href="add.php" class="btn btn-success">Ajouter un user</a>
            <br>
            <div class="table-responsive">
                <br>
                <table class="table table-hover table-bordered">
                    <br>
                    <thead>
                        <th>Name</th>
                        <th>Firstname</th>
                        <th>Birth date</th>
                        <th>Tel</th>
                        <th>Pays</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th>metier</th>
                        <th>Url</th>
                        <th>Edition</th>
                    </thead>
                    <br>
                    <tbody>
                        <?php include 'database.php'; //on inclut notre fichier de connection 
                        $pdo = Database::connect(); //on se connecte à la base 
                        $sql = 'SELECT * FROM crud_table ORDER BY ID DESC'; //on formule notre requete 
                        foreach ($pdo->query($sql) as $row) {
                            //on cree les lignes du tableau avec chaque valeur retournée
                            echo '<br><tr>';
                            echo '<td>' . $row['Name'] . '</td>';
                            echo '<td>' . $row['Firstname'] . '</td>';
                            echo '<td>' . $row['Age'] . '</td>';
                            echo '<td>' . $row['Tel'] . '</td>';
                            echo '<td>' . $row['Pays'] . '</td>';
                            echo '<td>' . $row['Email'] . '</td>';
                            echo '<td>' . $row['Comment'] . '</td>';
                            echo '<td>' . $row['metier'] . '</td>';
                            echo '<td>' . $row['URL'] . '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-secondary" href="edit.php?ID=' . $row['ID'] . '">Read</a>';
                            // un autre td pour le bouton d'edition    
                            echo '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-success" href="update.php?ID=' . $row['ID'] . '">Update</a>';
                            // un autre td pour le bouton d'update                          
                            echo '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-danger" href="delete.php?ID=' . $row['ID'] . ' ">Delete</a>';
                            // un autre td pour le bouton de suppression     
                            echo '</td>';
                            echo '</tr>';
                            Database::disconnect(); //on se deconnecte de la base
                            ;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>