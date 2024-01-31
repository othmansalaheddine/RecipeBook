<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('recipe.store') }}" method="post">
    @csrf
    @method('post')
    
    
    <div>
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Name" />
    </div>

    <div>
        <label for="">Description</label>
        <input type="text" name="description" placeholder="Description" />
    </div>
    <br>
    <div>
        <input type="file" name="filetoupload" placeholder="Upload your image here" />
    </div>
    <br>
    <div>
        <input type="submit" value="Save the recipe" />
    </div>
</form>

</body>
</html>