<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<body x-data="{ name: '', greeting: 'Hello, Alpine.js!' }">

    <label for="name">Enter your name:</label>
    <input type="text" id="name" x-model="name">

    <h1 x-text="greeting"></h1>

    <button x-on:click="updateGreeting">Update Greeting</button>

    <script>
        function updateGreeting() {
            Alpine.store('name', function (name) {
                Alpine.store('greeting', 'Hello, ' + name + '!');
            });
        }
    </script>
<?php
include "view-footer.php";
?>
