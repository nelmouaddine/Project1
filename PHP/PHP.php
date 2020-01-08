<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exemple 1</title>
</head>
<body>
<?php
class Etudiant {
    public $cne ="";
    public $firstname="";
    public $lastname="";
    public $birthdate ="";
}
$etudiant1= new Etudiant();
$etudiant2= new Etudiant();
$etudiant3= new Etudiant();

echo $etudiant1->cne="Dummy";
//echo $etudiant2;
//echo $etudiant3;
?>
</body>
</html>