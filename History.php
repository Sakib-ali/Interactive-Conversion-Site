<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>History page</title>
</head>
<body>
	<?php include 'Header.php';?>
	<p><h1>History</h1></p><br>
	<form action="History.php" method="Get">
        
        <select name="from" id="con" >
          <option value="" selected="selected"></option>
          <option >Inch to Feet</option>
          <option >Feet to Inch</option>
          <option >Kilobytes to Megabytes</option>
          <option >Megabytes to Kilobytes</option>
         
        </select>
        <input type="submit" name="search" value="Search" onclick="searchs()">
    </form>
<script src="History.js"></script>
</body>
</html>