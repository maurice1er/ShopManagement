
	@include('../menu')
    <div class="container">
		<h3>Ajouter une commande</h3>
		<form action="{{route('add_commande')}}" method="POST">
            @csrf
        
			
			<div class="form-group">
				<label for="nom">quantite:</label>
				<input type="number" class="form-control" id="nom" name="quantite" required min="1">
			</div>
			<div class="form-group">
				<a href="{{route('add_produit')}}" class="color-primary"><i class="fas fa-plus btn-add"></i></a>
				<label for="nom">Produit:</label><br>
				<select class="form-select form-select-lg" name="produit_id" aria-label="Default select example">
					@foreach ($produit as $p)
					<option value="{{$p->id}}" >{{$p->nom}}</option>
					@endforeach
				  </select>
			</div>
			<div class="form-group">
				
				<a href="{{route('add_client')}}" class="color-primary"><i class="fas fa-plus btn-add"></i></a>
				<label for="nom">Client:</label><br>
				<select class="form-select form-select-lg" name="client_id" aria-label="Default select example">
					@foreach ($client as $c)
					<option value="{{$c->id}}" >{{$c->nom}}</option>
					@endforeach
				  </select>
			</div>
			
			<button type="submit" class="btn btn-primary">Ajouter</button>
		</form>
	</div>


</body>
</html>