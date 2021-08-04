<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	<title>Home Page</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	</head>
	<body>
		<?php include 'Header.php';?>
		<p><h1>Converter</h1></p><br>

		<form method="post" action="/ajax/Home.php" id="converter">
		<label for="from">From:</label>
        <select name="from" id="from" >
          <option value="" selected="selected"></option>
          <option value="inch">Inch</option>
          <option value="feet">Feet</option>
          <option value="kilo">kilobytes</option>
          <option value="mega">megabytes</option>
        </select>
        <label for="to">Into:</label>
        <select name="to" id="to" >
          <option value="" selected="selected"></option>
          <option value="inch">Inch</option>
          <option value="feet">Feet</option>
          <option value="kilo">kilobytes</option>
          <option value="mega">megabytes</option>
        </select>

		<br><br>
		<label for="value">Value:</label><input id="value" type="number" name="value"  ><br><br>
    <label>Result:</label><input id="result" type="number" name="">
		<input id="convert" type="submit" name="results" value="Show" onclick="validate()" >
      



		<script >
      $(document).ready(function() {
        $("#converter").submit(function(e) {
          e.preventDefault();
          amount = $("#value").val();
          from = $("#from").val();
          into = $("#to").val();
          if (value == "" || from == "" || to == ""){
            alert("Please fill out all of the fields!");
            return false;
          }
          
          $.ajax({
            type : "POST",
            url : "Home.php",
            data  : 'value=' + value + '&from=' + from + '&to=' + to,
            success : function(res) {
              $("#result").html(value + " " + $('#from option:selected').text() + " = " + res + " " + $('#into option:selected').text());
            }
          });
        });
      });
	    </script>
	    <script src="conversion.js"></script>
      
	</body>
</html>