

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<h1>Modifier un employé</h1>


<form method="POST" action="{{ route('employees.update', $Employee -> id) }}">
    @csrf
    @method('put')
    <div class="mb-3">
      <label  class="form-label">Nom</label>
      <input type="text" value="{{ $Employee -> name }}" name="name" class="form-control">
       </div>
    <div class="mb-3">
      <label class="form-label">Salaire</label>
      <input type="number" value="{{ $Employee -> salary }}" name="salary" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>