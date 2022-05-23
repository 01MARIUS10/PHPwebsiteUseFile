<nav >
        <ul class="nav-ul">
            <li><a href="#" <?php if($title=="Acceuil") echo"class=\"on\" "?>>Acceuil</a></li>
            <li><a href="profil.php" <?php is_on($title,"Profil") ?>>Profil</a></li>
            <li><a href="#" <?php is_on($title,"Message") ?>>Message</a></li>
            <li><a href="#" <?php is_on($title,"Notification") ?>>Notification</a></li>
            <li><a href="#" <?php is_on($title,"Menu") ?>>Menu</a></li>
        </ul>
        <div class="search"><input type="text" placeholder="research" name="research"></div>
</nav>