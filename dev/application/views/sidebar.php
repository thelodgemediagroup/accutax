<div class="sidebar">
	<ul>
		<?php 
		foreach ($titles as $title)
		{
			if ($selected == $title)
			{
				echo '<li class="selected">'.$title.'</li>';
			}
			else
			{
				echo '<li>'.$title.'</li>';
			}
		}
		?>
	</ul>
</div><!--/ .sidebar -->