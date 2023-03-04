
    @include('../menu')

    <div class="container">
        <a href="/categorie/add" type="button" class="btn btn-primary btn-xs"><i class="fas fa-plus"></i> Ajouter une catégorie</a>
        <br>
		<h1>Liste de catégories</h3>
		<table class="table table-xs">
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
                    <th>Action</th>
                    
				</tr>
			</thead>
			<tbody>
                @foreach ($categories as $categorie) 
				<tr>
					<td>{{$categorie->id}}</td>
					<td>{{$categorie->nom}}</td>
                    <td>
                        <a href="{{route('edit_categorie',$categorie->id)}}" class="btn btn-xxs btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{route('delete_categorie',$categorie->id)}}" class="btn btn-xxs btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?');"><i class="fas fa-trash-alt"></i></a>
                    </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

    
</body>
</html>