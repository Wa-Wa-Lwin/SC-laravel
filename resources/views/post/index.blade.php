<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Post Page</h1>
                <div>
                    <h4>{{ $title }}</h4>
                </div>
                <div class="d-flex justify-content-between my-2">
                    <h5>Post Lists</h5>
                    <a href="{{ url('posts/create')}}" class="btn btn-primary">Add New</a>                   
                </div>                
                <hr>
                @if(session()->has('msg')) 
                <div class="alert alert-success"> 
                    <span>{{ session()->get('msg') }} messagehere</span> 
                    <!-- msg from Controller - create -->
                    <button data-bs-dismiss="alert" class="btn btn-close float-end"> </button>                
                </div>
                @endif 
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>content</th>
                            <th>category</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>                                    
                                    <form action="{{ url('/posts/'.$post->id) }}" method="post">
                                    @csrf 
                                    @method('delete')

                                    <table>
                                        <tr>
                                            <td>
                                                <a href="{{ url('/posts/'.$post->id.'/edit') }}" class="btn btn-info">edit</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <a href="{{ url('/posts/' . $post->id . '/comments') }}" class="btn btn-warning m-1">View Comments <span class="badge text-bg-secondary">{{ count($post->comments) }}</span></a>
                                            </td>
                                        </tr>
                                    </table>
                                    </form>                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
