<div id="nav-conteneur">
    <nav>
        <div class="logo">
            <i class="fa-solid fa-desktop"></i>
        </div>
        <div class="toggler">
            <i class="fa-solid fa-bars ouvrir"></i>
            <i class="fa-solid fa-xmark fermer"></i>
        </div>
        <ul class="menu">
            <li>
                <a href="../ecf/index.php">Accueil</a>
            </li>
            <li>
                <a href="../ecf/categories.php">Catégories</a>
            </li>
            <!-- a copier et a changer pour rajouter des liens -->

        <!--debut du if -->
            <?php if($role =='ADMIN'): ?>
            <li>
                <a href="../roles/admin.php"><?= $role ?></a>
            </li>
            <?php  endif; ?>
        <!--fin du if   -->
        
        <!--debut du if -->
                <?php  if($role == 'USER'): ?>
            <li>
                <!-- qui dit $email dit $session a recuperer -->
                <a href="../roles/client.php"><?= $email ?></a>
            </li>
                <?php endif; ?>
        <!--fin du if   -->


                <!-- qui dit $connect dit $session a recuperer -->
        <!--debut du if -->
                <?php if ($connect=='no'):  ?>
            <li>
            <button class="btn btn-secondary"><a href="../ecf/login.php">Connexion</a></button>
            </li>
            <li>
            <button class="btn" ><a href="../ecf/inscription.php">Inscription</a></button>
            </li>
        <!--fin du if   -->
            <?php  endif;
                    if ($connect=='yes'): 
                ?>
        <!--debut du if -->        
            <li>
                <a href="../ecf/contact.php">Contact</a>
            </li>
            <li>
                <a href="../ecf/deconnexion.php">Déconnexion</a>
            </li>
                <?php endif;  ?>
        <!--fin du if   -->        
        </ul>
    </nav>
</div> 