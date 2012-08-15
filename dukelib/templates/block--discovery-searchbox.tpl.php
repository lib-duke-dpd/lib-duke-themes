<?php

?>

<div id="searchTabs">
	<ul>
	<?php foreach($tabs as $index => $tab): ?>
	<li id="<?php echo $tab['id']; ?>"
		<?php if($index == 0): ?>
		<?php echo ' class="currentSearchTab"'; ?>
		<?php endif; ?>
	>
		<a onclick="activateTab(this); return false;"><span><?php echo $tab['label']; ?></span></a>
	</li>
	<?php endforeach; ?>
	</ul>
</div>
