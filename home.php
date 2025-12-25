<?php
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="main.css">
    <style>
        
    </style>
</head>
<body style="display:flex; justify-content:space-between; align-items:center; flex-direction:column; height:80vh; padding:30px 0" >
    <div style="<?php echo (isset($_GET['page'])) ? 'display:none': '' ?>">
        <nav >
            <ul style="display:flex; justify-content:center; align-items:center;">
                <li><a href="home.php?page=membre">Membres</a></li>
                <li><a href="home.php?page=projet">Projets</a></li>
                <li><a href="home.php?page=activite">Activités</a></li>
            </ul>
        </nav>
    </div>
    <div style="<?php echo (!isset($_GET['page'])) ? 'display:none' : 'display:flex'; ?>">
        <nav class="menu_liste">
            <ul style="display:flex; justify-content:center; align-items:center;">
                <li><a href="index.php?membre_action=creer_membre"><i class='bxr  bx-user-plus' style='color:#ffffff'></i></a></li>
                <li><a href="index.php?membre_action=modifier_membre"><i class='bxr  bx-edit' style='color:#ffffff'></i></a></li>
                <li><a href="index.php?membre_action=supprimer_membre"><i class='bxr  bx-trash' style='color:#ffffff'></i></a></li>
                <li><a href="index.php?membre_action=list_membre"><i class='bxr  bx-contact-book' style='color:#ffffff'></i></a></li>
                <li><a href="index.php?membre_action=list_infos_membre"><i class='bxr  bx-categories' style='color:#ffffff'></i> </a></li>
            </ul>
        </nav>
    </div>
    <div>
        <h2 style="color:green; font-size:5vmin; font-weight:700">Welcome to metis</h2>
    </div>
</body>
</html>