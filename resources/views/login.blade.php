<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Login | Gifts Shop</title>
</head>
<body class="login" style="height:100vh">
    <div class="container-fluid py-3 px-5 ">
      <h1 class="mt-3 h1 fw-bold text-center">ONLINE JOURNALS AND GIFTS STORE</h1>
        <div class="row my-5 d-flex justify-content-center align-items-center" >
            <div class="col col-6 py-4 d-flex justify-content-center align-items-center text-white" style="
                backdrop-filter: blur(15px) saturate(100%); border-radius:0.5rem;">
                <form class="w-75" method="GET" action="signin">
                    <h1 class="fw-light">Login</h1>
                    <!-- Email input -->
                    <div class="form-outline mb-4 mt-3">
                      <input type="email" name="email" placeholder="Enter Email Address" id="form1Example1" class="form-control" />
                      <label class="form-label" for="form1Example1">Email address</label>
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" name="password" placeholder="Enter your password" id="form1Example2" class="form-control" />
                      <label class="form-label" for="form1Example2">Password</label>
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn w-100 btn-block text-white" style="background:#1a134d !important;">Sign in</button>
                    @if (session('error'))
                      <div class="alert alert-danger error-message text-center" style="padding:1rem ;background: rgb(252, 161, 168); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(237, 73, 86)">{{ session('error') }}</div>
                    @endif
                    <p class="text-center mt-3">Don't you have an account? <a href="signup" style="color: #ce44a3 !important;" class="fw-bold">Signup</a></p>
                  </form>
                  
            </div>
        </div>
    </div>
</body>
</html>