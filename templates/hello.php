<!doctype html>
<title>Flask Server</title>
<h1> Bienvenue sur la bibliothèque </h1>
<form method="post">
    <input type="submit" name="mon_bouton" value="Cliquez-moi">
</form>

<?php
if (isset($_POST['mon_bouton'])) {
    echo "Bouton cliqué !";
}
    echo "Bouton cliqué !";
?>
