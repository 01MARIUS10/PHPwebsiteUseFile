<?php 
        $title="Profil";
        require_once "../core/function.php";
        require "./@shared/head.php";
        require "./@shared/nav.php";
?>
<div class="profil">
    <div class="profil-head">
        <div class="profil-head-round">
            <p class="profil-picture"><img src="./asset/avatar.jpg" alt="profil"></p>
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
</div>

<?php 
    require "./@shared/foot.php";
?>