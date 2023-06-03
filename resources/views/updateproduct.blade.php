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
    <title>Update | Admin Panel</title>
</head>
<body class="bg-dark">
    <div class="d-flex flex-column justify-content-center align-items-center">
        @foreach ($collection as $item)
        <form class="text-white my-5 w-50" method="GET" action="/updateproduct/{{$item->name}}" enctype="multipart/form-data">
            <h1 class="fw-light">Update {{$item->name}}</h1>

            <div class="form-outline mb-4 ">
                <input type="text" name="name" placeholder="Enter Name" value="{{$item->name}}" id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Flower Name</label>
              </div>
              <div class="form-outline mb-4 ">
                <textarea name="description" id="" cols="30" rows="3" id="form1Example1" class="form-control">{{$item->description}}</textarea>
                <label class="form-label" for="form1Example1">Description</label>
              </div>
            <div class="form-outline mb-4">
              <input type="number" name="price" placeholder="Enter Price" value="{{$item->price}}" id="form1Example2" class="form-control" />
              <label class="form-label" for="form1Example2">Price</label>
            </div>
            <div class="form-outline mb-4">
                <input type="number" name="quantity" placeholder="Enter Quantity" value="{{$item->qty}}" id="form1Example2" class="form-control" />
                <label class="form-label" for="form1Example2">Quantity</label>
            </div>
            @if (session('error'))
              <div class="alert alert-danger error-message text-center" style="padding:1rem ;background: rgb(252, 161, 168); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(237, 73, 86)">{{ session('error') }}</div>
            @endif
            @if (session('success'))
              <div class="alert alert-success success-message text-center" style="padding:1rem;background: rgb(152, 255, 183); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(1, 131, 40)">{{ session('success') }}</div>
            @endif
            <!-- Submit button -->
            <button type="submit" class="btn btn-success w-100 btn-block" style="background: #3c6450 !important;">Update</button>
            
          </form>
        @endforeach
    </div>
</body>
</html>