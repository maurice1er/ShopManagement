
	@include('../menu')
    <div class="container">
		<h3>Ajouter un produit</h3>
		<form action="{{route('add_produit')}}" method="POST">
            @csrf
        
			<div class="row">
				<div class="col col-md-4">
					<div class="form-group">
						<label for="nom">Nom :</label>
						<input type="text" class="form-control" id="nom" name="nom" required >
					</div>
				</div>
				<div class="col col-md-4">
					<div class="form-group">
						<label for="nom">quantite:</label>
						<input type="number" class="form-control" id="nom" name="quantite" required min="1">
					</div>
				</div>
				<div class="col col-md-4">
					<div class="form-group">
						<label for="nom">prix:</label>
						<input type="number" class="form-control" id="nom" name="prix" required min="1" >
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col col-md-6">
					
					<div class="form-group">
						<a href="{{route('add_categorie')}}" class="color-primary"><i class="fas fa-plus btn-add"></i></a>
						<label for="nom">categorie:</label><br>
						<select class="form-select form-select-lg" name="categorie_id" aria-label="Default select example">
							@foreach ($categorie as $c)
							<option value="{{$c->id}}" >{{$c->nom}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col col-md-6">
					<div class="form-group">
						<a href="{{route('add_fournisseur')}}" class="color-primary"><i class="fas fa-plus btn-add"></i></a>
						<label for="nom">fournisseur:</label>
						<select class="form-select form-select-lg mb-3" name="fournisseur_id"aria-label=".form-select-lg example">
							@foreach ($fournisseur as $f )
							<option value="{{$f->id}}">{{$f->nom}}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Ajouter</button>
		</form>
	</div>


</body>
</html>