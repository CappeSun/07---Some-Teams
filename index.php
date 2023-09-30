<?php require __DIR__.'/-php/data.php'; 		//Include data.php, containing $teams[] ?>

<?php require __DIR__.'/-php/head.php'; ?>
<body>
	<div>
		<?php require __DIR__.'/-php/teamsCount.php'; 		//Prints number of teams ?>
	</div>
	<?php require __DIR__.'/-php/tablePrint.php'; 			//Prints a table with information about teams ?>
	<div>
		<?php require __DIR__.'/-php/citiesPrint.php'; 		//Prints all included cities ?>
	</div>
</body>
</html>