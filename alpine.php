<?php
$pageTitle = "Home";
include "view-header.php";
?>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<body x-data="{ messages: <?php echo json_encode(['Hello', 'Bonjour', 'Hola', 'Ciao']); ?>, currentIndex: 0 }">

    <h1 x-text="messages[currentIndex]"></h1>

    <button @click="changeMessage">Change Message</button>

    <script>
        // Alpine.js data initialization
        document.addEventListener('alpine:init', () => {
            Alpine.data('messages', () => ({
                currentIndex: 0,
                messages: <?php echo json_encode(['Hello', 'Bonjour', 'Hola', 'Ciao']); ?>,
                changeMessage() {
                    this.currentIndex = (this.currentIndex + 1) % this.messages.length;
                },
            }));
        });
    </script>
<?php
include "view-footer.php";
?>
