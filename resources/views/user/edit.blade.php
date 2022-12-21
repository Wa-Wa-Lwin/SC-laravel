<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
    <div class="container justify-content-center my-5">
        <div class="d-flex align-items-center justify-content-between">           
            <h1>User Edit Form</h1>   
            <a href="{{ url('/users'); }}" class="btn btn-primary">BACK</a>
        </div>      
       <hr>
       <form action="{{ url('users/'.$user->id) }}" method="post">
          @csrf
          @method('put')


          <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" value="{{ old('name') ?? $user->name }}" class="form-control @error('name') is-invalid @enderror">
          @error('name') 
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" name="email" value="{{ old('email') ?? $user->email }}" class="form-control @error('email') is-invalid @enderror">
          @error('email') 
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Phone No</label>
          <input type="text" name="phone" value="{{ old('phone') ?? $user->phone }}" class="form-control @error('phone') is-invalid @enderror">
          @error('phone') 
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" name="address" value="{{ old('address') ?? $user->address }}" class="form-control @error('address') is-invalid @enderror">
          @error('address') 
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Role</label>

          <div class="form-outline">
            <select class="form-control" name="role" class="form-control @error('role') is-invalid @enderror">
                <option selected disabled name="role" >Choose</option>
    l            @foreach ($roleList as $role)
                <option name="role" {{($user->role == $role) ? 'selected':''}}>{{ $role }}</option>
                @endforeach
            </select>
         </div>
         
          @error('role') 
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>


        <button type="submit" class="btn btn-info fs-3">Update</button>
      </form>
    </div>
    
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>