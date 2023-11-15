<?php
$pageTitle = "Home";
include "view-header.php";
?>
<h1>Weather</h1>

<div id="weather-temp">Loading...</div>

<script>
$.ajax({
  url: "/api/getWeather",
  data: {
    zipcode: 73019
  },
  success: function( result ) {
    $( "#weather-temp" ).html( "<strong>" + result + "</strong> degrees" );
  }
});
</script>

<?php
include "view-footer.php";
?>
