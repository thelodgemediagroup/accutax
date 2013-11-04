<div class="sidebar floatleft">
	<h2><?php echo $sidebar_title; ?></h2>
	<ul>
		<?php 
		foreach ($titles as $title => $link)
		{
			if ($selected == $title)
			{
				echo '<li><a href="'.base_url($link).'" class="sidebar-selected bold">'.$title.'</a></li>';
			}
			else
			{
				echo '<li><a href="'.base_url($link).'" class="bold">'.$title.'</a></li>';
			}
		}
		?>
	</ul>
</div><!--/ .sidebar -->