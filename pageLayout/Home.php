<?php 
        $title="Home";
        require_once "../function.php";
        require "./featuresPages/head.php";
        require "./featuresPages/nav.php";
?>
    
    <?php for($i=1;$i<15;$i++): ?>
        <section>
            <pre><?php/* print_r($_COOKIE)*/?></pre>
            <article>
                <h2><?=$i?>) Lorem ipsum dolor sit amet.</h2>
                <div class="img">
                    <img src="./contenuimage/<?=$i?>.jpg" alt="image">
                    <div class="imh-apropos">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Dolorem, quidem dolores numquam et asperiores corrupti 
                            maxime quaerat ullam consequatur incidunt velit ipsa maiores quisquam.</p>
                    </div>
                </div>
            </article>
        </section>
    <?php endfor ?>

<?php 
    require "./featuresPages/foot.php";
?>