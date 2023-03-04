

    @include('../menu')
    <div class="container">
        <a href="/produit/add" type="button" class="btn btn-primary btn-xs"><i class="fas fa-plus"></i> Ajouter un produit</a>
        <br>
		<h1>Liste des produits</h3>
		<table class="table table-lg">
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
                    <th>Quantite</th>
                    <th>Prix</th>
                    <th>Categorie</th>
                    <th>Fournisseur</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody>
                @foreach ($produits as $produit) 
				<tr>
					<td>{{$produit->id}}</td>
					<td>{{$produit->nom}}</td>
                    <td>{{$produit->quantite}}</td>
                    <td>{{$produit->prix}}</td>
                    <td>{{$produit->categorie->nom}}</td>
                    <td>{{$produit->fournisseur->nom}}</td>
                    <td>
                        <a href="{{route('edit_produit',$produit->id)}}" class="color-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{route('delete_produit',$produit->id)}}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet produit?');"><i class="fas fa-trash-alt"></i></a>

                    </td>
                    
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

    
</body>
</html>