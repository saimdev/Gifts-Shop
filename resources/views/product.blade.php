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
    @foreach ($sliders as $slider)
        <title>Buy {{$slider->name}}</title>
    @endforeach
</head>
<body class="productpage text-white">
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
        <div class="row my-5">
            <div class="col col-6">
                <div id="carouselExampleCaptions" class="carousel slide  d-flex justify-content-center" data-bs-ride="carousel">
                    <div class="carousel-inner" >
                        @foreach($sliders as $slider)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <div class="slider-image text-center">
                                    <img src="{{  asset($slider->image1) }}" style="width: 100%; height:400px;"  class="d-inline-block text-center" alt="{{ $slider->image1 }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span><img src="{{asset('/imgs/logos/angle-left.svg')}}" alt="" style="width:1em"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span><img src="{{asset('/imgs/logos/angle-right.svg')}}" alt="" style="width:1rem"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
                
                    <div class="col col-6 d-flex flex-column justify-content-center">
                        @foreach ($sliders as $slider)
                        @php
                            $url= $slider->image1;
                            $contents = file_get_contents($url);
                            $imagename = substr($url, strrpos($url, '/') + 1);
                        @endphp
                        <form action="/{{$email}}/addtocart/{{$slider->name}}/{{$slider->price}}/{{$imagename}}" method="post" class="d-flex flex-column justify-content-center">
                            @csrf
                            <h1 class="fw-light" style="font-family: 'Poiret One', cursive;">{{$slider->name}}</h1>
                            <hr class="w-100">
                            <select name="size" id="" class="w-25">
                                <option value="small" selected>Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                            </select>
                            <input type="number" name="qty" id="" class="my-3 w-25" placeholder="Quantity" required>
                            <h3 class="fw-light my-3" style="font-family: 'Poiret One', cursive;">{{$slider->price}} $</h3>
                            <p><span class="fw-bold">Description: </span>{{$slider->description}}</p>
                            @if (session('empty'))
                                <div class="alert alert-danger error-message text-center" style="padding:1rem ;background: rgb(252, 161, 168); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(237, 73, 86)">{{ session('empty') }}</div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success success-message text-center" style="padding:1rem;background: rgb(152, 255, 183); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(1, 131, 40)">{{ session('success') }}</div>
                            @endif
                            <button type="submit" class="w-100 btn btn-success" style="background: #3c6450 !important;">Add to Cart</button>
                        </form>
                        @endforeach
                    </div>
                
            
        </div>
        <div class="row my-5">
            <h1 class="fw-light" style="font-family: 'Poiret One', cursive;">You May Also Like</h1>
            <div id="carouselExampleCaptions" class="carousel slide  d-flex justify-content-center" data-bs-ride="carousel">
                <div class="carousel-inner" >
                    @foreach($second as $slides)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <div class="slider-image text-center">
                                <img src="{{  asset($slides->image1) }}" style="width: 18rem"  class="d-inline-block text-center" alt="{{ $slides->image1 }}">
                                <div class="mt-2 py-1">
                                    <p class="fw-bold" style="margin-block-start: 0 !important; margin-block-end:0 !important;">{{$slides->name}}</p>
                                    <p style="margin: 0 !important;">{{$slides->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span><img src="{{asset('/imgs/logos/angle-left.svg')}}" alt="" style="width:3rem"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span><img src="{{asset('/imgs/logos/angle-right.svg')}}" alt="" style="width:3rem"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        @component('components.footer')
        @endcomponent
    </div>
</body>
</html>