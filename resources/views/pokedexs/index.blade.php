<!DOCTYPE html>
<html>
<head>
    <title>Pokedex List</title>
</head>
<body>
    <h1>Pokedex List</h1>
    <a href="{{ url('/pokedexs/create') }}">Add New Pokemon</a>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>name</th>
                <th>type</th>
                <th>species</th>
                <th>height</th>
                <th>weight</th>
                <th>hp</th>
                <th>attack</th>
                <th>defense</th>
                <th>image_url</th>
                <th>manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pokedexs as $pokedex)
            <tr>
                <td>{{ $pokedex->name }}</td>
                <td>{{ $pokedex->type }}</td>
                <td>{{ $pokedex->species }}</td>
                <td>{{ $pokedex->height }}</td>
                <td>{{ $pokedex->weight }}</td>
                <td>{{ $pokedex->hp }}</td>
                <td>{{ $pokedex->attack }}</td>
                <td>{{ $pokedex->defense }}</td>
                <td><img src="{{ $pokedex->image_url }}" width="80"></td>
                <td>
                    <a href="{{ url('/pokedexs/'.$pokedex->id.'/edit') }}">Edit</a>
                    <form action="{{ url('/pokedexs/'.$pokedex->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
