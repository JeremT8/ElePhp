
<div class="mb-4">
	<form method="POST">
		<div class="mb-3">
			<label name="skill" class="form-label" for="">Compétence</label>
			<input type="text" name="skill" class="form-control">
		</div>

		<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
	</form>
</div>


<ul>
	<?php foreach($skills as $item): ?>
		<li><?= $item['label'] ?></li>
	<?php endforeach; ?>
</ul>

<!-- <ul>
	<?php foreach($skillsObj as $item): ?>
		<li><?= $item->label ?></li>
	<?php endforeach; ?>
</ul> -->