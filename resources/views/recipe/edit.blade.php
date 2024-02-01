<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit the product</h1>
<form action="{{route('recipe.update' , $recipe->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    
    <div>
        <label class="form-label" style="font-family: Georgia, serif; text-decoration: underline">Current Image</label>
        @if($recipe->image)
            <img src="{{ asset($recipe->image) }}" alt="Current Image" width="200" height="200" style="margin-left: 100px" >
        @else
            <p>No image available</p>
        @endif
    </div>
    
    <div>
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Name" value="{{$recipe->name}}" />
    </div>

    <div>
        <label for="">Description</label>
        <input type="text" name="discription" placeholder="Description" value="{{$recipe->discription}}"/>
    </div>
    <br>
    <div>
        <input type="file" name="image" placeholder="Upload your image here" />
    </div>
    <br>
    <div>
        <input type="submit" value="Save the recipe" />
    </div>
</form>

</body>
</html>