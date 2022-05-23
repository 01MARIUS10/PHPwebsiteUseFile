<?php 
        $title="Home";
        require_once "../function.php";
        require "./featuresPages/head.php";
        require "./featuresPages/nav.php";
?>

<div class="home ">
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
    require "./featuresPages/foot.php";
?>