<?php
$pageTitle = "Anime.js";
include "view-header.php";
?>
<h1>Anime.js</h1>


<div id="animated-square" style="width: 100px; height: 100px; background-color: #3498db;"></div>

    <script>
        anime({
            targets: '#animated-square',
            translateX: 500, 
            translateY: 200,
            rotate: '10turn',
            scale: 4, 
            backgroundColor: '#e74c3c',
            duration: 3000, 
            easing: 'easeInOutQuad',
            delay: 400,
            loop: true
        });
    </script>


<?php
include "view-footer.php";
?>
