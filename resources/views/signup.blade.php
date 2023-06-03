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
    <title>Signup | Gifts Shop</title>
</head>
<body class="signup">
    <div class="container-fluid py-3 px-5">
        <div class="row my-5 d-flex justify-content-center align-items-center">
            <div class="col col-6 d-flex justify-content-center text-white py-4" style="
                backdrop-filter: blur(15px) saturate(100%); border-radius:0.5rem;">
                <form class="w-75" method="POST" action="register">
                  @csrf
                    <h1 class="fw-light text-center" style="font-family: 'Poiret One', cursive !important;">Sign Up To Buy Gifts</h1>
                    <div class="form-outline mb-4 mt-3">
                        <input type="text" name="name" placeholder="Username" id="form1Example1" class="form-control" />
                        <label class="form-label" for="form1Example1">Username</label>
                      </div>
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
                    <!-- Submit button -->
                    <button type="submit" class="btn text-white w-100 btn-block" style="background:#1a134d !important;">Sign up</button>
                    @if (session('error'))
                      <div class="alert alert-danger error-message text-center" style="padding:1rem ;background: rgb(252, 161, 168); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(237, 73, 86)">{{ session('error') }}</div>
                    @endif
                    @if (session('success'))
                      <div class="alert alert-success success-message text-center" style="padding:1rem;background: rgb(152, 255, 183); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(1, 131, 40)">{{ session('success') }}</div>
                    @endif
                    <p class="text-center mt-3 fw-bold">Already have an account? <a href="/" style="color: #ce44a3 !important;">Login</a></p>
                  </form>
                  
            </div>
        </div>
    </div>
</body>
</html>