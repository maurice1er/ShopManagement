
	@include('../menu')
    <div class="container">
		<h3>Ajouter un client</h3>
		<form action="{{route('add_client')}}" method="POST">
            @csrf
        
			<div class="row">
				<div class="col col-md-6">
					<div class="form-group">
						<label for="nom">Nom :</label>
						<input type="text" class="form-control" id="nom" name="nom" required>
					</div>
				</div>
				<div class="col col-md-6">
					<div class="form-group">
						<label for="nom">Prenom:</label>
						<input type="text" class="form-control" id="nom" name="prenom" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group">
					<label for="nom">Adresse :</label>
					<input type="text" class="form-control" id="nom" name="addresse" required>
				</div>
			</div>

			<div class="row">
				<div class="col col-md-6">
					<div class="form-group">
						<label for="nom">Email:</label>
						<input type="text" class="form-control" id="nom" name="email" required>
					</div>
				</div>
				<div class="col col-md-6">
					<div class="form-group">
						<label for="nom">Tel :</label>
						<input type="text" class="form-control" id="nom" name="tel" required>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Ajouter</button>
		</form>
	</div>


</body>	
</html>