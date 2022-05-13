<?php 
        $title="Profil";
        require_once "../function.php";
        require "./featuresPages/head.php";
        require "./featuresPages/nav.php";
?>

    <div class="profil-head">
        <div class="profil-head-round">
            <p class="round-image"><img src="./asset/avatar.jpg" alt="profil"></p>
        </div>
    </div>
    <div class="profil-about">
        <h2>mes propos</h2>
    <?php 
        $about=take_user($_COOKIE["email"],$_COOKIE["mdp"],"../");
        foreach($about as $name=>$value)
        {
            echo "<div class=\" profil-about-element\" > <span>".$name."</span> : ".$value." </div> ";
        }
    ?>
    </div>

<?php 
    require "./featuresPages/foot.php";
?>