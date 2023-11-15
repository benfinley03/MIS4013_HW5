<?php
$pageTitle = "jQuery";
include "view-header.php";
?>
<h1>jQuery</h1>

    <button id="toggleButton">Toggle Paragraph</button>
    <p id="myParagraph" style="display: none;">This is a hidden paragraph. Click the button to toggle its visibility.</p>

    <script>
        // jQuery code to toggle paragraph visibility
        $(document).ready(function() {
            $("#toggleButton").click(function() {
                $("#myParagraph").toggle();
            });
        });
    </script>

<?php
include "view-footer.php";
?>
