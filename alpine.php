<?php
$pageTitle = "Home";
include "view-header.php";
?>
<body x-data="{ message: 'Hello, Alpine.js!' }">

    <h1 x-text="message"></h1>

    <button @click="message = 'Hello, World!'">Change Message</button>
<?php
include "view-footer.php";
?>
