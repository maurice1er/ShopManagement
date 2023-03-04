
	@include('../menu')
    <div class="container">
		<h1>Modifier un client</h3>
		<form action="{{route('update_client',$c->id)}}" method="POST">
            @csrf
        
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" required value="{{$c->nom}}">
			</div>
			<div class="corm-group">
				<label for="nom">Prenom:</label>
				<input type="text" class="form-control" id="nom" name="prenom" required value="{{$c->prenom}}">
			</div>
			<div class="corm-group">
				<label for="nom">Adresse :</label>
				<input type="text" class="form-control" id="nom" name="addresse" required value="{{$c->addresse}}">
			</div>
			<div class="corm-group">
				<label for="nom">Email:</label>
				<input type="text" class="form-control" id="nom" name="email" required value="{{$c->email}}">
			</div>
			<div class="form-group">
				<label for="nom">Tel :</label>
				<input type="text" class="form-control" id="nom" name="tel" required value="{{$c->tel}}">
			</div>
			<button type="submit" class="btn btn-primary">Modifier</button>
		</form>
	</div>


</body>
</html>