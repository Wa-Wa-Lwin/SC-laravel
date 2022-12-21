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

<div class="container m-4">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h5>Post Edit Form</h5>
                <a href="{{ url('/posts')}}" class="btn btn-secondary">Back</a>
            </div>

                <form action="{{ url('/posts/'. $post->id) }}" method="post">

                {{-- <input type="hidden" name="_token" value="{{csrf_token()}}">
                {{csrf_field()}} --}}
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" value="{{ old('title') ?? $post->title }}" class="form-control @error('title') is-invalid @enderror">

                    @error('title')
                    <span class="invalid-feedback"> {{ $message }} </span>
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="">Content</label>
                    <textarea rows="4" name="content" value="" class="form-control @error('content') is-invalid @enderror"> {{ old('content') ?? $post->content }} </textarea> 

                    <!-- if written in test area, binding values cannot be written in value="" but only between opening and closing tag. -->

                    @error('content')
                    <span class="invalid-feedback"> {{ $message }} </span>
                    @enderror 

                </div>
                <button type=submit class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</body>
</html>
