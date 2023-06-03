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
    <title>Admin Panel</title>
</head>
<body class="bg-dark text-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-2 d-flex flex-column justify-content-between p-3" style="background: rgb(128, 128, 128, 0.2); border-radius:0 0.6rem 0.6rem 0">
                <div class="d-flex flex-column">
                    <h3 class="fw-bold">ADMIN PANEL</h3>
                    <a href="/admin" class="text-decoration-underline">
                        Add New Product
                    </a>
                    <a href="/list" class="text-decoration-underline">
                        List of Flowers
                    </a>
                </div>
                <div>
                    <a href="/logout" class="text-danger fw-bold">Logout</a>
                </div>
            </div>
            <div class="col col-10 d-flex flex-column justify-content-center align-items-center">
                <form class="w-75 py-5" method="POST" action="addnewproduct" enctype="multipart/form-data">
                    @csrf
                    <h1 class="fw-light">Add New Flower</h1>
                    <!-- Email input -->
                    <div class="form-outline mb-4 mt-3">
                      <input type="file" name="image" placeholder="Enter Email Address" id="form1Example1" class="form-control" />
                      <label class="form-label" for="form1Example1">Upload Image</label>
                    </div>
                    <div class="form-outline mb-4 mt-3">
                        <input type="text" name="name" placeholder="Enter Name" id="form1Example1" class="form-control" />
                        <label class="form-label" for="form1Example1">Flower Name</label>
                      </div>
                      <div class="form-outline mb-4 mt-3">
                        <textarea name="description" id="" cols="30" rows="3" id="form1Example1" class="form-control"></textarea>
                        <label class="form-label" for="form1Example1">Description</label>
                      </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="number" name="price" placeholder="Enter Price" id="form1Example2" class="form-control" />
                      <label class="form-label" for="form1Example2">Price</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="number" name="quantity" placeholder="Enter Quantity" id="form1Example2" class="form-control" />
                        <label class="form-label" for="form1Example2">Quantity</label>
                    </div>
                    @if (session('error'))
                      <div class="alert alert-danger error-message text-center" style="padding:1rem ;background: rgb(252, 161, 168); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(237, 73, 86)">{{ session('error') }}</div>
                    @endif
                    @if (session('success'))
                      <div class="alert alert-success success-message text-center" style="padding:1rem;background: rgb(152, 255, 183); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(1, 131, 40)">{{ session('success') }}</div>
                    @endif
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-success w-100 btn-block" style="background: #3c6450 !important;">Add Flower</button>
                    
                  </form>
            </div>
        </div>
    </div>
</body>
</html>