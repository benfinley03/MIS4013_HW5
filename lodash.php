<?php
$pageTitle = "Lodash";
include "view-header.php";
?>

<h1>Simple Page with Lodash</h1>

<button onclick="getAndDisplay()">Generate Numbers</button>
    <div id="output"></div>

    <script>
        function generateRandomNumbers(count) {
            return Array.from({ length: count }, () => Math.floor(Math.random() * 100) + 1);
        }

        function getAndDisplay() {
            const numbers = generateRandomNumbers(5);
            const cubedNumbers = _.map(numbers, n => n * n * n);
            const evenNumbers = _.filter(numbers, n => n % 2 === 0);

            document.getElementById('output').innerHTML = `
                <p>Original Numbers: ${numbers.join(', ')}</p>
                <p>Cubed Numbers: ${cubedNumbers.join(', ')}</p>
                <p>Even Numbers from Original Numbers: ${evenNumbers.join(', ')}</p>
            `;
        }
    </script>
    </script>

<?php
include "view-footer.php";
?>
