
<?php
//Vectors_PHP_exercises_to_learn_2.php
echo "I'm in my Vectors_PHP_exercises_to_learn_2.php file";
//Redo this exercise using a foreach loop

$weekdays[]="Monday";
$weekdays[]="Tuesday";
$weekdays[]="Wednesday";
$weekdays[]="Thursday";
$weekdays[]="Friday";
$weekdays[]="Saturday";
$weekdays[]="Sunday";

$i=0;
foreach($weekdays as $wds){
  $i=$i+1;
  $j+=1;
  echo "<p>Using a foreach loop:position i <b>$i</b>  position j <b>$j</b> and content <b> $wds</b></p>";
}

/*for($i=0 ; $i<count($weekdays) ; $i++)
{
    echo "<p>We are accessing to position <b>$i</b> and content <b> $weekdays[$i]</b></p>";
}*/

?>
