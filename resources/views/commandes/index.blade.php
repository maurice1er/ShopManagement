   @include('../menu')
    <div class="container">
        <a href="/commande/add" type="button" class="btn btn-primary btn-xs"><i class="fas fa-plus"></i> Ajouter une commande</a>
        <br>
		<h1>Liste des commandes</h3>
		<table class="table table-xs">
			<thead>
				<tr>
					<th>#</th>
					<th>Date</th>
                    <th>Quantite</th>
                    <th>Etat</th>
                    <th>Client</th>
                    <th>Produit</th>
                    <th>Action</th>
                    
				</tr>
			</thead>
			<tbody>
                @foreach ($commandes as $commande) 
				<tr>
					<td>{{$commande->id}}</td>
					<td>{{$commande->date}}</td>
                    <td>{{$commande->quantite}}</td>
                    <td>{{$commande->etat}}</td>
                    <td>{{$commande->client_nom}}</td>
                    <td>{{$commande->produit_nom}}</td>
                    <td>
                        <a href="{{route('edit_commande',$commande->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{route('delete_commande',$commande->id)}}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette commande?');"><i class="fas fa-trash-alt"></i> Delete</a>

                    </td>
                    
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

    
</body>
</html>