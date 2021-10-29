<button><a href="{{route('image.create')}}">Add New Image</a></button>


<table border="1px ">
    <th>Name</th>
    <th>Image</th>

    @foreach ($images as $image)
    <tr>
        <td> {{$image->name}}</td>
        <td><img height="50" src="{{asset('storage/images/' . $image->image) }}"></td>
    </tr>
    @endforeach

</table>
