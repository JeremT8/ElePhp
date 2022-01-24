<form method="POST">
	<div class="mb-3">
		<label for="persons" class="form-label">Prenom</label>
		<input type="text" class="form-control" name="persons[first_name]">
	</div>
	<div class="mb-3">
		<label for="persons" class="form-label">Nom</label>
		<input type="text" class="form-control" name="persons[last_name]">
	</div>

	<fieldset class="">
		<legend class="">Adresse</legend>
		<div class="mb-3">
			<label for="address" class="form-label">Adresse</label>
			<input type="text" class="form-control" name="address[rue]">
		</div>
		<div class="mb-3">
			<label for="address" class="form-label">Code Postale</label>
			<input type="text" class="form-control" name="address[code_postal]">
		</div>
		<div class="mb-3">
			<label for="address" class="form-label">Ville</label>
			<input type="text" class="form-control" name="address[ville]">
		</div>
	</fieldset>

	<div class="d-flex justify-content-end">
       <button type="submit" class="btn btn-primary">Valider</button> 
    </div>
</form>