<?php
error_reporting(0);
function robotRnd () {
$salarycap = 175;
$tas = array ();
for ($i = 0; $i < 14; ++$i) {
do {
$tmp = mt_rand (3, 99);
} while ($tas[$tmp]);
$tas[$tmp] = $i;
}

$tas = array_flip ($tas);
sort ($tas);
$roster= array ($salarycap-$tas[13],
 $tas[13]-$tas[12], 
 $tas[12]-$tas[11], 
 $tas[11]-$tas[10], 
 $tas[10]-$tas[9], 
 $tas[9]-$tas[8], 
 $tas[8]-$tas[7], 
 $tas[7]-$tas[6], 
 $tas[6]-$tas[5], 
 $tas[5]-$tas[4], 
 $tas[4]-$tas[3], 
 $tas[3]-$tas[2], 
 $tas[2]-$tas[1], 
 $tas[1]-$tas[0], 
 $tas[0]);
return $roster;
}

function has_dupes($bots){
 $dupe_array = array();
 foreach($bots as $val){
  if(++$dupe_array[$val] > 1){
   return true;
  }
 }
 return false;
}


function rosterscores($totalscore)
{
$number_of_groups   = 3;
$sum_to             = $totalscore;

$groups             = array();
$group              = 0;

while(array_sum($groups) != $sum_to)
{
    $groups[$group] = mt_rand(0, $sum_to/mt_rand(1,3));

    if(++$group == $number_of_groups)
    {
        $group  = 0;
    }
}
return $groups;
}


do{
$result= robotRnd();
}
while (has_dupes($result));


$capdiff=$result[0]+$result[1];
$capcalc=$capdiff%2;
//echo "capcalc".$capcalc."<br>";
if ($capcalc==0) {
	# code...
	$result[0]=$capdiff/2;
	$result[1]=$capdiff-$result[0]-1;
}
else{
	$result[0]=floor($capdiff/2);
	$result[1]=$capdiff-$result[0];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-offset-3 col-md-6">
<table class="table table-bordered table-hover table-striped table-condensed">
<thead>
	<tr>
	<th>BOT Name</th>
		<th>Speed</th>
		<th>Strength</th>
		<th>Agility</th>
		<th>Total Attribute Score</th>
		</tr>
</thead>
<?php
foreach ($result as $bot) {
	# code...
	?>
	<tr>
	<?php
	$playerscores=rosterscores($bot);
	echo "<td>BOT".rand(1000,9999)."</td>";
	for($k=0;$k<3;$k++) {
		# code...
		echo "<td>".$playerscores[$k]."</td>";
	}
	echo "<td>".$bot."</td>";
	?>
	</tr>
	<?php
}
?>
<tr><td colspan="3">Total Salary Cap</td><td><?php echo array_sum($result);?>
</td></tr>
</table>
</div>
</body>
</html>