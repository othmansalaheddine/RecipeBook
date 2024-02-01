<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
</head>
<body>
    <h1>Recipe</h1>
    <div>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Delete</th>
            </tr>
            @foreach ($recipe as $rec)
                <tr>
                    <td>{{ $rec->name }}</td>
                    <td>{{ $rec->discription}}</td>
                    <td><img src="{{ asset($rec->image)}}" width="100" height="50" alt="image"></td>
                    <td>
                        <a href="{{ route('recipe.edit' , $rec->id)}}" method = "post">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('recipe.destroy', $rec->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
