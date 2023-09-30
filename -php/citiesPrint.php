<?php

foreach ($teams as $key => $value)
	$cities[] = $teams[$key]['city'];

foreach (array_unique($cities) as $value){ ?>
	<h3><?= $value; ?></h3>
<?php } ?>