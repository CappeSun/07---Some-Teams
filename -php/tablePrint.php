<?php $properties = ['league','last-time-champions','city','nickname','url']; ?>

<table>
	<th>
		<td>League</td>
		<td>Last time champions</td>
		<td>City</td>
		<td>Nickname</td>
		<td>Url</td>
	</th>
	<?php foreach ($teams as $key => $value) { ?>
		<tr>
			<td><?= $key; ?></td>
			<?php foreach ($properties as $property) { ?>
			<td>
				<?php
				if (!isset($teams[$key][$property]))
					echo "-";
				else if ($property == 'url'){ ?>
					<a href="<?= $teams[$key][$property]; ?>"><?= $teams[$key][$property]; ?></a><?php
				} else
					echo $teams[$key][$property] == null ? "-" : $teams[$key][$property];
				?>
			</td>
		<?php } ?>
		</tr>
	<?php } ?>
</table>