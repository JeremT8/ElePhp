<h1>Liste des personnes</h1>

<div class="mb-4 mt-3" >
	<h3><strong>Ajout d'une personne</strong></h3>
	<form method="POST" class="row p-4">
		<div class="mb-3 col">
			<label class="form-label"> Prénom </label>
			<input type="text" class="form-control" name="first_name">
		</div>
		<div class="mb-3 col">
			<label class="form-label"> Nom </label>
			<input type="text" class="form-control" name="last_name">
		</div>

		<button class="btn btn-sm btn-success" name="submit">Ajout</button>
	</form>
</div>

<table class="table table-striped table-light table-bordered">
	<thead>
		<tr>
			<td>Prénom</td>
			<td>Nom</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($personList as $person) : ?>
			<tr>
				<td><?= $person->first_name ?></td>
				<td><?= $person->last_name ?></td>
				<td>
					<a href="<?= getLinkToRoute("pdo-persons", ["id" => $person->id, "action" => "delete"]) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Etes vous sur de vouloir supprimer cette personne ?')">Supprimer
					</a>
					<!-- <a href="<?= getLinkToRoute("pdo-persons", ["id" => $person->id, "action" => "delete"]) ?>" class="btn btn-sm btn-danger">Supprimer</a> -->
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>