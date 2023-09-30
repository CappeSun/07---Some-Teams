<?php $properties = ['league','last-time-champions','city','nickname','url'];		//Prepare what to look for ?>

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
				if (!isset($teams[$key][$property]))		//Check wether a team-array has a specific property, like 'nickname', and print "-" if not
					echo "-";
				else if ($property == 'url'){			//Check wether a specific property is named 'url', and if so, enclose it in anchor tags (also, for whatever reason I had to include brackets for this statement, the HTML tags is my guess) ?>
					<a href="<?= $teams[$key][$property]; ?>"><?= $teams[$key][$property]; ?></a><?php
				} else
					echo $teams[$key][$property] == null ? "-" : $teams[$key][$property];		//Check wether a property has the value null, and if so, print "-"
				?>
			</td>
		<?php } ?>
		</tr>
	<?php } ?>
</table>