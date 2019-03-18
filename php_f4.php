<?php


   $dates =  array(
    array('day' => 3, 'month' => 12, 'year' => 2005),
    array('day' => 30, 'month' => 2, 'year' => 2017),
	      array('day' => 7, 'month' => 9, 'year' => 2019),
    array('day' => 1, 'month' => 11, 'year' => 2014),
   );
$dd=$dates[0]; // first element of the array is date
$mm=$dates[1]; // second element is month
$yy=$dates[2]; // third element is year

for($i=0;$i<count($dates);$i++){
 $c=0;
 foreach($dates[$i] as $key=>$value){
  $c++;
  echo $key."=".$value;
  if($c<count($dates[$i])) echo ",";
 }
 echo "<hr>";
echo var_dump(checkdate($dd,$mm,$yy));

}
