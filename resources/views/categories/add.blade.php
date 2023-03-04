
    @include('../menu')
    <div class="container">
		<h3>Ajouter une catégorie</h3>
		<form action="{{route('add_categorie')}}" method="POST">
            @csrf
        
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" required>
			</div>
			<button type="submit" class="btn btn-primary">Ajouter</button>
		</form>
	</div>


</body>
</html>