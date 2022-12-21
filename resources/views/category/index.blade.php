<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
    <div class="container justify-content-center my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Category List</h1>

            <a href="{{ url('categories/create') }}" class="btn btn-primary">Add New</a>
        </div>      
       <hr>
       @if(session()->has('msg'))
        <div class="alert alert-success">
            <span>{{ session()->get('msg') }}</span>
            <button data-bs-dismiss="alert" class="btn btn-close float-end"></button>
        </div>
       @endif
       <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <form action="{{ url('categories/'.$category->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ url('categories/'.$category->id.'/edit') }}" class="btn btn-info">Edit</a>
                        <button class="btn btn-danger" onclick="return confirm('are you sure to delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
       </table>
       {{ $categories->links() }}
    </div>
    
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>