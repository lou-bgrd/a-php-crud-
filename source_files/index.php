<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Crud en php</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
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
            <a href="add.php"><button class="bg-emerald-700 rounded-full p-2 text-white">Ajouter un utilisateur</button></a>
            <br>
            <div class="table-responsive">
                <br>
                <table class="border-separate border border-slate-500 table-fixed border-separate">
                    <br>
                    <thead>
                        <tr>
                            <th class="border border-slate-600 p-2">Name</th>
                            <th class="border border-slate-600 p-2">Firstname</th>
                            <th class="border border-slate-600 p-2">Birth date</th>
                            <th class="border border-slate-600 p-2">Tel</th>
                            <th class="border border-slate-600 p-2">Pays</th>
                            <th class="border border-slate-600 p-2">Email</th>
                            <th class="border border-slate-600 p-2">Comment</th>
                            <th class="border border-slate-600 p-2">metier</th>
                            <th class="border border-slate-600 p-2">Url</th>
                            <th class="border border-slate-600 p-2">Edition</th>
                        </tr>
                    </thead>
                    <br>
                    <tbody>
                        <?php include 'database.php'; //on inclut notre fichier de connection 
                        $pdo = Database::connect(); //on se connecte à la base 
                        $sql = 'SELECT * FROM crud_table ORDER BY ID DESC'; //on formule notre requete 
                        foreach ($pdo->query($sql) as $row) {
                            //on cree les lignes du tableau avec chaque valeur retournée
                            echo '<br><tr class="border border-slate-500">';
                            echo '<td class="border border-slate-500">' .  $row['Name'] . '</td>';
                            echo '<td class="border border-slate-500">' .  $row['Firstname'] . '</td>';
                            echo '<td class="border border-slate-500">' .  $row['Age'] . '</td>';
                            echo '<td class="border border-slate-500">' .  $row['Tel'] . '</td>';
                            echo '<td class="border border-slate-500">' .  $row['Pays'] . '</td>';
                            echo '<td class="border border-slate-500">' .  $row['Email'] . '</td>';
                            echo '<td class="border border-slate-500">' .  $row['Comment'] . '</td>';
                            echo '<td class="border border-slate-500">' .  $row['metier'] . '</td>';
                            echo '<td class="border border-slate-500">' .  $row['URL'] . '</td>';
                            echo '<td class="border border-slate-500">';
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