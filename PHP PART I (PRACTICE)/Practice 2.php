<?php
$Fruits = ["Banana", "Cherry", "Grapes", "Orange", "Strawberry"];

echo "<ol>";
for ($i = 0; $i < count($Fruits); $i++) {
    echo "<li>" . $Fruits[$i] . "</li>";
}
echo "</ol>";
?>
