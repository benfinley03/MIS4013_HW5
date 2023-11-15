<?php
$pageTitle = "Home";
include "view-header.php";
?>
<body x-data="{ messages: ['Hello', 'Bonjour', 'Hola', 'Ciao'], currentIndex: 0 }">

    <h1 x-text="messages[currentIndex]"></h1>

    <button @click="changeMessage">Change Message</button>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('messages', () => ({
                currentIndex: 0,
                changeMessage() {
                    this.currentIndex = (this.currentIndex + 1) % this.messages.length;
                },
            }));
        });
    </script>
<?php
include "view-footer.php";
?>
