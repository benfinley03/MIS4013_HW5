<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Simple Page with Lodash</h1>

    <h1>Simple Page with Lodash</h1>

    <div id="output"></div>

    <script>
        // Function to generate a random array of positive numbers
        function generateRandomNumbers(count) {
            return Array.from({ length: count }, () => Math.floor(Math.random() * 100) + 1);
        }

        // Generate a random array of positive numbers
        const numbers = generateRandomNumbers(10); // Change 10 to the desired count

        // Use Lodash functions to manipulate the array
        const squaredNumbers = _.map(numbers, n => n * n);
        const evenNumbers = _.filter(numbers, n => n % 2 == 0);

        // Display the results on the page
        document.getElementById('output').innerHTML = `
            <p>Original Numbers: ${numbers.join(', ')}</p>
            <p>Squared Numbers: ${squaredNumbers.join(', ')}</p>
            <p>Even Numbers: ${evenNumbers.join(', ')}</p>
        `;
    </script>

<?php
include "view-footer.php";
?>
