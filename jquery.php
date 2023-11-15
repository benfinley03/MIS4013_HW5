<?php
$pageTitle = "jQuery";
include "view-header.php";
?>
<h1>jQuery</h1>

    <button id="toggleButton">Toggle Paragraph</button>
    <p id="myParagraph" style="display: none;">This is a hidden paragraph. Click the button to toggle its visibility.</p>

    <script>
        // jQuery code with animations and dynamic text
        $(document).ready(function() {
            $("#toggleButton").click(function() {
                $("#myParagraph").slideToggle(500, function() {
                    // Animation complete callback
                    const buttonText = $(this).is(":visible") ? "Hide Paragraph" : "Show Paragraph";
                    $("#toggleButton").text(buttonText);
                });
            });
        });
    </script>

<?php
include "view-footer.php";
?>
