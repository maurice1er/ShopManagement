
	@include('../menu')
    <div class="container">
		<h1>Modifier un fournisseur</h3>
		<form action="{{route('update_fournisseur',$f->id)}}" method="POST">
            @csrf
        
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" required value="{{$f->nom}}">
			</div>
			<div class="form-group">
				<label for="nom">Prenom:</label>
				<input type="text" class="form-control" id="nom" name="prenom" required value="{{$f->prenom}}">
			</div>
			<div class="form-group">
				<label for="nom">Adresse :</label>
				<input type="text" class="form-control" id="nom" name="addresse" required value="{{$f->addresse}}">
			</div>
			<div class="form-group">
				<label for="nom">Email:</label>
				<input type="text" class="form-control" id="nom" name="email" required value="{{$f->email}}">
			</div>
			<div class="form-group">
				<label for="nom">Tel :</label>
				<input type="text" class="form-control" id="nom" name="tel" required value="{{$f->tel}}">
			</div>
			<button type="submit" class="btn btn-primary">Modifier</button>
		</form>
	</div>


</body>
</html>