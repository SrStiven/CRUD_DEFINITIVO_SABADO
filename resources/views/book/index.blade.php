<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Crear libros</h2>
    <form action="{{ route('book.create') }}" method="POST">
        @csrf
        <div>
            <label> Nombre del autor</label>
            <input type="text" name="name" required>
        </div>
         <br>
        <div>
            <label> Titulo del libro</label>
            <input type="text" name="title" required>
        </div>
        <br>
        <div>
            <label> Año de publicacion</label>
            <input type="number" name="age" required min="0">
        </div>
        <br>
        <div>
            <label> Cantidad de libros</label>
            <input type="number" name="count" required min="0">
        </div>
        <br>
        <div>
            <label> Genero del libro</label>
            <select name="gender">
                <option value="">Seleccionar</option>
                <option value="accion">Accion</option>
                <option value="comedia">Comedia</option>
                <option value="ficcion">Ficcion</option>
            </select>
        </div>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <h2>Exportar / importar</h2>
    <a href="{{ route('book.export') }}">Exportar </a>
    <form action="{{ route('book.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Importar</label>
        <input type="file" name="file">
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Titulo</th>
                <th>Año</th>
                <th>Cantidad</th>
                <th>Genero</th>
                <th>Accion</th>
                <th>Accion</th>
            </tr>
        </thead>
        @foreach ($books as $book)
            <tbody>
                <tr>
                    <th>{{$book -> name}}</th>
                    <th>{{$book -> title}}</th>
                    <th>{{$book -> age}}</th>
                    <th>{{$book -> count}}</th>
                    <th>{{$book -> gender}}</th>
                    <th><a href="{{ route('book.edit', $book->id) }}">Editar</a></th>
                    <th><a href="{{ route('book.delete', $book->id) }}">Eliminar</a></th>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>
</html>