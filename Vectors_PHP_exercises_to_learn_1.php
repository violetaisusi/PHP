
<?php
//Vectors_PHP_exercises_to_learn_1.php
echo "I'm in my Vectors_PHP_exercises_to_learn_1.php file";

$weekdays[]="Monday";
$weekdays[]="Tuesday";
$weekdays[]="Wednesday";
$weekdays[]="Thursday";
$weekdays[]="Friday";
$weekdays[]="Saturday";
$weekdays[]="Sunday";

for($i=0 ; $i<count($weekdays) ; $i++)
{
    echo "<p>We are accessing to position <b>$i</b> and content <b> $weekdays[$i]</b></p>";
}

?>
