<!doctype>
<!--
this page needs a better design and for demonstration only
Desription: simple code that reads from an excel file and generates a homepage that runs on a webserver
Usega: to visulize information 
-->
<!--
Date: 2019-09-27
Author: Marwan Chahade
Version: 1.0
-->
<html>
<head>
</head>
<body>

<?php
require_once "Classes/PHPExcel.php";

		$tmpfname = "./../../../home/pi/repos/onScreen/onScreen.xlsx"; #the file to read from, should be a relativ path
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
		#print out the table
		echo "<table align=center style=margin: 0px auto>";
		echo "<tr align=center><th>SW Visualization</th></tr>";

		for ($row = 1; $row <= $lastRow; $row++) {
			 echo "<tr><td>";
			 echo $worksheet->getCell('A'.$row)->getValue();
			 echo "</td><td>";
			 echo $worksheet->getCell('B'.$row)->getValue();
			 echo "</td><td>";
			 echo $worksheet->getCell('C'.$row)->getValue();
			 echo "</td><td>";
			 echo $worksheet->getCell('D'.$row)->getValue();
			 echo "</td><td>";
			 echo $worksheet->getCell('E'.$row)->getValue();
			 echo "</td><tr>";

		}

		echo "</table>";	
?>

</body>
</html>