
<body>
	<h1><?= $title ?></h1>

	<?php if ($hasErrors): ?>
		<ul>
			<?php foreach ($errors as $message): ?>
				<li>
					<?= $message ?>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<form method="post">
		<div class="mb-3 form-group">
			<label class="form-label">Identifiant</label>
			<input class="form-control" type="text" name="username">
		</div>
		<div class="mb-3 form-group">
			<label class="form-label">Mot de passe</label>
			<input class="form-control" type="text" name="password" name="password">
		</div>
		<button class="btn btn-primary mt-2"type="submit" name="submit">Valider</button>
	</form>
