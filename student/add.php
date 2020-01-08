<?php
$nameError = $emailError = $mobileError ="";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    if(!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $nameError = "Le nom saisi est incorrect.";
    }
    if(!preg_match("/^[0-9]{10}$/", $mobile)) {
        $mobileError = "Le format du numéro de tél. est incorrect.";
    }
    if(!preg_match("/^[a-zA-Z0-9\.\-_]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/", $email)) {
        $emailError = "Le format de l'email est incorrect.";
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Ajout d'un étudiant</title>
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>
<div class="content">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="cne">CNE</label>
        <input type="text" name="cne"/><br>
        <label for="name">Nom</label>
        <input type="text" name="name"/><br>
        <span class="error"><?php echo $nameError; ?></span><br>
        <label for="birth_date">Date de naissance</label>
        <input type="text" name="birth_date"/><br>
        <label for="address">Adresse</label>
        <input type="text" name="address"/><br>
        <label for="email">Email</label>
        <input type="text" name="email"/><br>
        <span class="error"><?php echo $emailError; ?></span><br>
        <label for="mobile">Tél</label>
        <input type="text" name="mobile"/>
        <span class="error"><?php echo $mobileError; ?></span><br>
        <input type="submit" value="Envoyer"/>
    </form>
</div>
</body>
</html>
