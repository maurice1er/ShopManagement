
    @include('../menu')
    <div class="container">
		<h1>Modifier une catégorie</h3>
		<form action="{{route('update_categorie',$c->id)}}" method="POST">
            @csrf
        
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" required value="{{$c->nom}}">
			</div>
			<button type="submit" class="btn btn-primary">Modifier</button>
		</form>
	</div>


</body>
</html>