<form method="POST">
	<div class="mb-3">
		<label for="titre" class="form-label">Titre</label>
		<input type="text" class="form-control" name="titre">
	</div>
	<div class="mb-3">
		<label for="prix" class="form-label">Prix</label>
		<input type="number" class="form-control" name="prix">
	</div>
	<div class="mb-3">
		<label for="date_publication" class="form-label">Date de publication</label>
		<input type="date" class="form-control" name="date_publication">
	</div>
	<div class="mb-3">
		<label for="id_auteurs" class="form-label">Auteur</label>
		<select class="form-select" name="id_auteurs">
			<?= $authorOptions ?>
		</select>
	</div>
	<div class="mb-3">
		<label for="id_editeurs" class="form-label">Editeur</label>
		<select class="form-select" name="id_editeurs">
			<?= $editorOptions ?>
		</select>
	</div>
	<div class="mb-3">
		<label for="id_genres" class="form-label">Genre</label>
		<select class="form-select" name="id_genres">
			<?= $genreOptions ?>
		</select>
	</div>
	<div class="mb-3">
		<label for="id_langues" class="form-label">Langue</label>
		<select class="form-select" name="id_langues">
			<?= $langueOptions ?>
		</select>
	</div>
	<div class="d-flex justify-content-end">
       <button type="submit" class="btn btn-primary">Valider</button> 
    </div>
</form>