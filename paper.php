<?php
$pageTitle = "Paper.js";
include "view-header.php";
?>
<h1>Paper.js</h1>

<canvas id="myCanvas" resize></canvas>

    <script>
        // Set up Paper.js on the canvas
        paper.setup('myCanvas');

        // Create a colorful circle
        const circle = new Path.Circle({
            center: view.center,
            radius: 50,
            fillColor: {
                gradient: {
                    stops: ['red', 'orange', 'yellow', 'green', 'blue', 'purple']
                },
                origin: circle.position,
                destination: circle.bounds.rightCenter
            }
        });

        // Rotate the circle on mouse move
        function onMouseMove(event) {
            circle.rotate(3);
        }

        // Animate the circle's scale
        function onFrame(event) {
            circle.scale(1.005);
        }
    </script>

<?php
include "view-footer.php";
?>
