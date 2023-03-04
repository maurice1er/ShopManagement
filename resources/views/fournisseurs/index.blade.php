
    @include('../menu')
    <div class="container">
        <a href="/fournisseur/add" type="button" class="btn btn-primary btn-xs"><i class="fas fa-plus"></i> Ajouter un fournisseur</a>
        <br>
		<h1>Liste de fournisseurs</h3>
		<table class="table table-xs">
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Action</th>
                    
				</tr>
			</thead>
			<tbody>
                @foreach ($fournisseurs as $fournisseur) 
				<tr>
					<td>{{$fournisseur->id}}</td>
					<td>{{$fournisseur->nom}}</td>
                    <td>{{$fournisseur->prenom}}</td>
                    <td>{{$fournisseur->addresse}}</td>
                    <td>{{$fournisseur->email}}</td>
                    <td>{{$fournisseur->tel}}</td>
                    <td>
                        <a href="{{route('edit_fournisseur',$fournisseur->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{route('delete_fournisseur',$fournisseur->id)}}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?');"><i class="fas fa-trash-alt"></i> Delete</a>

                    </td>
                    
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

    
</body>
</html>