
	@include('../menu')
    <div class="container">
		<h1>Modifier une commande</h3>
		<form action="{{route('update_commande',$co->id)}}" method="POST">
            @csrf
        
			{{-- <div class="form-group">
				<label for="nom">Date :</label>
				<input type="text" class="form-control" id="nom" name="date" required >
			</div> --}}
			<div class="form-group">
				<label for="nom">quantite:</label>
				<input type="text" class="form-control" id="nom" name="quantite" required value="{{$co->quantite}}" >
			</div>
			<div class="form-group">
				<label for="nom">Produit:</label><br>
				<select class="form-select form-select-lg" name="produit_id" aria-label="Default select example">
					@foreach ($produit as $p)
					<option value="{{$p->id}}" >{{$p->nom}}</option>
					@endforeach
				  </select>
			</div>
			<div class="form-group">
				<label for="nom">Client:</label><br>
				<select class="form-select form-select-lg" name="client_id" aria-label="Default select example">
					@foreach ($client as $c)
					<option value="{{$c->id}}" >{{$c->nom}}</option>
					@endforeach
				  </select>
			</div>
			<div class="form-group">
				<label for="nom">Etat:</label><br>
				<select class="form-select form-select-lg" name="etat" aria-label="Default select example">
					<option value="en cours">En cours</option>
					<option value="livree">Livree</option>
					<option value="annulee">Annulee</option>
				  </select>
			</div>
			
			<button type="submit" class="btn btn-primary">Modifier</button>
		</form>
	</div>


</body>
</html>