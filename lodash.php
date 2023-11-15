<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Simple Page with Lodash</h1>

    <button onclick="generateRandomNumbers(5)">Generate Numbers</button>
    <div id="output"></div>

    

    <script>
        function generateRandomNumbers(count) {
            return Array.from({ length: count }, () => Math.floor(Math.random() * 100) + 1);
            displayNumbers();
        }

        function getNumbers() {
        const numbers = generateRandomNumbers(5); // Change 10 to the desired count
        const cubedNumbers = _.map(numbers, n => n * n * n);
        const evenNumbers = _.filter(numbers, n => n % 2 == 0);

        }

        function displayNumbers() {
        getNumbers();
        document.getElementById('output').innerHTML = `
            <p>Original Numbers: ${numbers.join(', ')}</p>
            <p>Cubed Numbers: ${cubedNumbers.join(', ')}</p>
            <p>Even Numbers from Original Numbers: ${evenNumbers.join(', ')}</p>
        `;
        }
    </script>

<?php
include "view-footer.php";
?>
