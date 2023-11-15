<?php
$pageTitle = "Calculator.js";
include "view-header.php";
?>
<h1>Calculator.js</h1>

<div id="calculator"></div>

    <script>
        // Initialize Calculator.js
        const calculator = new Calculator({
            container: '#calculator',
            theme: 'light' // You can change the theme to 'dark' if you prefer
        });
    </script>

<?php
include "view-footer.php";
?>
