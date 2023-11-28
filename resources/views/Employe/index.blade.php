<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Employees list</title>
</head>
<body>
    <h1> La liste des employés</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Ajouter</a>
<table class="table">
    <tr>
        <th>Nom</th>
        <th>Salaire</th>
    </tr>
@foreach($employees as  $value)
<tr>
    <td>{{ $value -> name }}</td>
    <td>{{ $value -> salary }}</td>

<td>
    <form action="{{ route('employees.destroy', $value -> id) }}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" class="btn btn-danger" value="Supprimer">
    </form>
</td>
<td><button class="btn btn-warning">Modifier</button></td>

   
</tr>
@endforeach
    

</table>
{{ $employees -> links() }}
</body>
</html>