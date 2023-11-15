<?php
$pageTitle = "jQuery";
include "view-header.php";
?>
<h1>jQuery</h1>

    <button id="toggleButton">Toggle Paragraph</button>
    <p id="myParagraph">This is like the second coolest thing aside from the animated square that's on in one of the other pages. You can click again to make this paragraph diasppear.</p>

    <script>
        $(document).ready(function() {
            $("#toggleButton").click(function() {
                $("#myParagraph").slideToggle(500, function() {
                });
            });
        });
    </script>

<?php
include "view-footer.php";
?>
