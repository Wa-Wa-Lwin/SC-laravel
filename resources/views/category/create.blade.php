<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
    <div class="container justify-content-center my-5">
        <div class="d-flex align-items-center justify-content-between">           
            <h1>Category Create Form</h1>   
            <a href="{{ url('/categories') }}" class="btn btn-primary">Back</a>
        </div>      
       <hr>
       <form action="{{ url('/categories') }}" method="post">
          @csrf
          <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
          @error('name') 
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit" class="btn btn-info fs-3">Save</button>
      </form>
    </div>
    
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>