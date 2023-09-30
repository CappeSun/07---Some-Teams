<?php

foreach ($teams as $key => $value)
	$cities[] = $teams[$key]['city'];

?>

<div class="cities">

<?php

foreach (array_unique($cities) as $value){ ?>
	<h4><?= $value; ?></h4>
<?php } ?>

</div>