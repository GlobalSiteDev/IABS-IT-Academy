<?php
echo 
'<div class="layout-column">
	<p><a href="project.php?file=', $project->projectFile, '">', $project->title , '</a>
	<p> ', $project->preview ,'[...] </p>
	<a href="edit.php"><button class="btn">Edit</button></a>
	<a href="delete.php"><button class="btn">Delete</button></a>
</div>';