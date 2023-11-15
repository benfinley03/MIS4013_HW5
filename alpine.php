<?php
$pageTitle = "Home";
include "view-header.php";
?>

<body x-data="{ name: '', greeting: 'Hello, Alpine.js!' }">

    <label for="name">Enter your name:</label>
    <input type="text" id="name" x-model="name">

    <h1 x-text="greeting"></h1>

    <button @click="greeting = 'Hello, ' + name + '!'">Update Greeting</button>
<?php
include "view-footer.php";
?>
