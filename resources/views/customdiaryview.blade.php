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
    <title>Custom Diary | Gifts Shop</title>
</head>
<body class="shop text-white">
    <div class="container-fluid py-3 px-5">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <a href="/user/{{$email}}"><h4 class="h4">Gifts Store</h4></a>
            </div>
            <div class="d-flex justify-content-around align-items-center">
                <a href="/about/{{$email}}" class="mx-3">About Us</a>
                <a href="/shop/{{$email}}" class="mx-3">Gifts</a>
                <a href="/custom/{{$email}}" class="mx-3">Custom Gifts</a>
                <a href="/cart/{{$email}}" class="mx-3">Cart</a>
                @if ($status==1)
                    <a href="/logout/{{$email}}" class="mx-3">Logout</a>
                @else
                    <a href="/login" class="mx-3">Login</a>
                @endif
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <form action="/{{$email}}/addtocart/{{$diaryname}}/40/{{$imagename}}" method="post" class="col p-5 col-6 d-flex flex-column justify-content-center align-items-center" style="
            backdrop-filter: blur(15px) saturate(100%); border-radius:0.5rem;">
            @csrf
                <img src="{{ asset($customizedDiaryImage) }}" class="img-fluid w-50" alt="Customized Cup Image">
                <input type="number" name="qty" id="" class="my-3 w-25" placeholder="Quantity" required>
                @if (session('empty'))
                    <div class="alert alert-danger error-message text-center" style="padding:1rem ;background: rgb(252, 161, 168); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(237, 73, 86)">{{ session('empty') }}</div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success success-message text-center" style="padding:1rem;background: rgb(152, 255, 183); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(1, 131, 40)">{{ session('success') }}</div>
                @endif
                <button class="mt-3 w-100 btn text-white" type="submit" style="background: #1a134d !important;">Add to Cart</button>
            </form>
        </div>
        @component('components.footer')
        @endcomponent
    </div>
</body>
</html>