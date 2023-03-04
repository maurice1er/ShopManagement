
    @include('../menu')

    <div class="container">
        <a href="/client/add" type="button" class="btn btn-primary btn-xs"><i class="fas fa-plus"></i> Ajouter un client</a>
        <br>
		<h1>Liste des clients</h3>
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
                @foreach ($clients as $client) 
				<tr>
					<td>{{$client->id}}</td>
					<td>{{$client->nom}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->addresse}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->tel}}</td>
                    <td>
                        <a href="{{route('edit_client',$client->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{route('delete_client',$client->id)}}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet client ?');"><i class="fas fa-trash-alt"></i> Delete</a>

                    </td>
                    
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

    
</body>
</html>