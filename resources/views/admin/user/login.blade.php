<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="container">
        <h2 class="text-center alert alert-info mt-3">Login Here</h2>
        <form action="">
            <div class="row">
                {{-- for username  --}}
                <div class="col-lg-6 co-md-6 col-12">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="email" name="username" id="username" placeholder="Username" class="form-control"/>
                    </div>
                </div>
                {{-- for password  --}}
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
                    </div>
                </div>
            </div>
                <br/>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                        <button type="submit" name="submit" class="btn btn-primary ml-2">Login</button>
                </div>
                <div class="col-lg-6 col-6 col-12">
                        <a href="{{url('/register')}}">Create New Account</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>