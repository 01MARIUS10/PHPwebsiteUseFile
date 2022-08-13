<?php 
        $title="Home";
        require_once "../core/function.php";
        require "./@shared/head.php";
        require "./@shared/nav.php";
?>

<div class="home ">
<?php print_r($_COOKIE);?>
    <?php for($i=1;$i<15;$i++): ?>
        <section>
            <article class="publication">
                <h2 class="publication-title"><?=$i?>) Lorem ipsum dolor sit amet.</h2>
                <div class="publication-about">
                    <img src="./contenuimage/<?=$i?>.jpg" alt="image">

                    <div class="publication-about-text">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Dolorem, quidem dolores numquam et asperiores corrupti 
                            maxime quaerat ullam consequatur incidunt velit ipsa maiores quisquam.</p>
                    </div>
                </div>
            </article>
        </section>
    <?php endfor ?>
</div> 

<?php 
    require "./@shared/foot.php";
?>