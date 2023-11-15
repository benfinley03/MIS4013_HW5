<?php
$pageTitle = "Anime.js";
include "view-header.php";
?>
<h1>Anime.js</h1>


<div id="animated-square" style="width: 100px; height: 100px; background-color: #3498db;"></div>

    <script>
        // Use Anime.js to create animations
        anime({
            targets: '#animated-square',
            translateX: 250, // Move 250px to the right
            translateY: 100, // Move 100px down
            rotate: '1turn', // Rotate one full turn (360 degrees)
            scale: 2, // Scale the element by a factor of 2
            backgroundColor: '#e74c3c', // Change background color
            duration: 2000, // Animation duration in milliseconds
            easing: 'easeInOutQuad', // Easing function
            delay: 500, // Delay before starting the animation (in milliseconds)
            loop: true
        });
    </script>


<?php
include "view-footer.php";
?>
