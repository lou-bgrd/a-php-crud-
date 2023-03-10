<?php require 'database.php';
$id = 0;
if (!empty($_GET['ID'])) {
    $id = $_REQUEST['ID'];
    
}
if (!empty($_POST)) {
    $id = $_POST['id'];
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM crud_table  WHERE ID = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Database::disconnect();
    header("Location: index.php");
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
                <h3>Delete a user</h3>
            </div>
            <br>
            <form class="form-horizontal" action="delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                Are you sure to delete ?
                <br>
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <a class="btn" href="index.php">No</a>
                </div>
            </form>
        </div>
    </div>
    <!-- /container -->
</body>

</html>