<?php require('database.php');
//on appelle notre fichier de config 
$id = null;
if (!empty($_GET['ID'])) {
    $id = $_REQUEST['ID'];
}
if (null == $id) {
    header("location:index.php");
} else {
    //on lance la connection et la requete
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) .
        $sql = "SELECT * FROM crud_table where ID =?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <br>
    <div class="container">
        <br>
        <div class="span10 offset1">
            <br>
            <div class="row">
                <br>
                <h3>Edition</h3>
            </div>
            <br>
            <div class="form-horizontal">
                <br>
                <div class="control-group">
                    <label class="control-label">Name</label>
                    <br>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['Name']; ?>
                        </label>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <label class="control-label">Firstname</label>
                    <br>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['Firstname']; ?>
                        </label>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <label class="control-label">Email Address</label>
                    <br>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['Email']; ?>
                        </label>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <label class="control-label">Phone</label>
                    <br>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['Tel']; ?>
                        </label>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <label class="control-label">Pays</label>
                    <br>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['Pays']; ?>
                        </label>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <label class="control-label">Metier</label>
                    <br>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['metier']; ?>
                        </label>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <label class="control-label">Url</label>
                    <br>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['URL']; ?>
                        </label>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <label class="control-label">Comment</label>
                    <br>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['Comment']; ?>
                        </label>
                    </div>
                </div>
                <br>
                <div class="form-actions">
                    <a class="btn btn-secondary" href="index.php">Back</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</body>

</html>