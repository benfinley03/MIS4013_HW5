<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Simple Page with Lodash</h1>

    <div id="output"></div>

    <script>
        // Sample array of numbers
        const numbers = [1, 2, 3, 4, 5];

        // Use Lodash functions to manipulate the array
        const squaredNumbers = _.map(numbers, n => n * n);
        const evenNumbers = _.filter(numbers, n => n % 2 === 0);

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
