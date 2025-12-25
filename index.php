<?php
    require 'form.php';
    if(isset($_GET['submit'])){
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display:flex;justify-content:center; align-items:center; width:100%; height:100vh;overflow:hidden;">
    <form action="index.php" method="post" style="border:2px solid green; padding:10px 100px; border-radius:20px ;width:25%; position:relative;box-shadow:2px 2px 17px green;">
    <?php
    $form1 = new form($_POST);
    $entite = ($_GET['membre_action'] == 'creer_membre') ? 'Créer un membre' : 
          (($_GET['membre_action'] == 'modifier_membre') ? 'modifier un membre' : 
          (($_GET['membre_action'] == 'supprimer_membre') ? 'Supprimer un membre' : 'Error'));

    $form1->setTitre($entite);
    echo $form1->formTitre();

    echo $form1->input('Nom_complet');
    echo $form1->input('email');
    echo $form1->input('telephone');
    echo $form1->input('assigne');
    echo $form1->submit();
    

    ?>
</form>
</body>
</html>