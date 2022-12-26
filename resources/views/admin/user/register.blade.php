<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <div class="container">
        <h2 class="text-center alert alert-info mt-3">Register Here</h2>
        
        <form action="{{url('register')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                {{-- for first name  --}}
                <div class="col-lg-6 co-md-6 col-12">
                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" name="f_name" id="f_name" value="{{old('f_name')}}" placeholder="First Name" class="form-control"/>
                        @if($errors->has('f_name'))<small class="alert text-danger text-bold">{{$errors->first('f_name')}}</small> @endif
                    </div>
                </div>
                {{-- for last name  --}}
                <div class="col-lg-6 co-md-6 col-12">
                    <div class="form-group">
                        <label for="l_name">Last Name</label>
                        <input type="text" name="l_name" id="l_name" value="{{old('l_name')}}" placeholder="Last Name" class="form-control"/>
                        @if ($errors->has('l_name'))
                        <small class="alert text-danger text-bold">{{$errors->first('l_name')}}</small>
                        @endif
                    </div>
                </div>
                {{-- for email  --}}
                <div class="col-lg-6 co-md-6 col-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email" class="form-control"/>
                        @if ($errors->has('email'))
                        <small class="alert text-danger text-bold">{{$errors->first('email')}}</small>
                        @endif
                    </div>
                </div>
                {{-- for phone  --}}
                <div class="col-lg-6 co-md-6 col-12">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" name="phone" id="phone" value="{{old('phone')}}" placeholder="Phone" class="form-control"/>
                        @if ($errors->has('phone'))
                        <small class="alert text-danger text-bold">{{$errors->first('phone')}}</small>
                        @endif
                    </div>
                </div>
                {{-- for Profile  --}}
                <div class="col-lg-6 co-md-6 col-12">
                    <div class="form-group">
                        <label for="profile">Profile Image</label>
                        <input type="file" name="profile" id="profile" placeholder="profile" class="form-control"/>
                        @if ($errors->has('profile'))
                        <small class="alert text-danger text-bold">{{$errors->first('profile')}}</small>
                        @endif
                    </div>
                </div>
                {{-- for password  --}}
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
                        @if ($errors->has('password'))
                        <small class="alert text-danger text-bold">{{$errors->first('password')}}</small>
                        @endif
                    </div>
                </div>
            </div>
                <br/>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                        <button type="submit" name="submit" class="btn btn-primary ml-2">Register</button>
                </div>
                <div class="col-lg-6 col-6 col-12">
                        <a href="{{url('/login')}}">You have already account <spam class="text-danger">Login Here ?</spam></a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>