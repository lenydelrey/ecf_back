<?php
require_once '../securite_et_tests/test_session_log.php';

//dans tout les CAS ou le $session[role]et pas admin on rentre dans le if on est expluser
if($_SESSION['ROLE']!="ADMIN"){
    header('location:.././index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
    <?php  
        // le nom de votre page ici qui sera afficher en haut de votre navigateur
        $titre='Dashboard'; 
        include_once '../includes/head_admin.php';
    ?>    
    <body>
        <?php 
        //menu propre a l'administrateur
            include_once '../includes/menu_admin.php';

        ?>
        <main>
            <!--le nom de votre page ici -->
            <h1> <?= $titre ?> </h1>
            <?php
            include_once '../ecf/crud/read_users_admin.php';
            ?>
          
        </main>
        <?php 
            include_once './script_admin.php';
        ?>
    </body>
</html>
