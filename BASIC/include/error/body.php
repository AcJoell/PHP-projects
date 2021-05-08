<html>
<body>

<h1>Welcome to my home page with INCLUDE!</h1>
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>

<h1>Welcome to my home page with REQUIRE!</h1>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>

</body>
</html>