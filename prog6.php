<?php
$user = "Sriram";

?>
<!DOCTYPE html>
<html>
<head> 
	<style><?php include 'prog6.css'; ?></style>
	<title> program 6 </title>
</head>
<body>
	<h2 class="heading"> <?php echo $user; ?>, Welcome to sample PHP script </h2>
<h2> <?php ?>Displaying number of page visits </h2>
<?php
print "<h3> REFRESH PAGE </h3>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "Total number of views: ".$hits[0];
?>
</body>
</html>