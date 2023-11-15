<?php
$pageTitle = "Home";
include "view-header.php";
?>
<body x-data="{ name: '', greeting: 'Hello, Alpine.js!' }">

    <label for="name">Enter your name:</label>
    <input type="text" id="name" x-model="name">

    <h1 x-text="greeting"></h1>

    <button @click="updateGreeting()">Update Greeting</button>

    <script>
        function updateGreeting() {
            // Access Alpine.js data using `Alpine.data('your-element-id')`
            var app = Alpine.data('body');

            // Update the greeting based on the entered name
            app.greeting = 'Hello, ' + app.name + '!';
        }
    </script>
<?php
include "view-footer.php";
?>
