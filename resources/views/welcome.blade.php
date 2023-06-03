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
    <title>Gifts Shop</title>
</head>
<body class="welcome text-white">
    <div class="container-fluid py-3 px-5">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <a href="/user/{{$email}}"><h4 class="h4">Gifts Store</h4></a>
            </div>
            <div class="d-flex justify-content-around align-items-center">
                <a href="" class="mx-3">About Us</a>
                <a href="" class="mx-3">Blog</a>
                <a href="/shop/{{$email}}" class="mx-3">Shop</a>
                <a href="/cart/{{$email}}" class="mx-3">Cart</a>
                @if ($status==1)
                    <a href="/logout/{{$email}}" class="mx-3">Logout</a>
                @else
                    <a href="/login" class="mx-3">Login</a>
                @endif
            </div>
        </div>
        <div class="row my-4">
            <div class="col col-12 text-center">
                <h1 style="font-family: 'Poiret One', cursive !important;" class="fw-bold">Gifts For Your Relatives</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col col-12 d-flex justify-content-center">
                <div class="card" style="width: 18rem; border:none !important;"><img src="{{asset('/imgs/gift1.jpg')}}" class="card-img-top" style="background: #FEE46C; height:14rem" alt="..."></div>
                <div class="card" style="width: 18rem; border:none !important;"><img src="{{asset('/imgs/gift2.jpg')}}" class="card-img-top" style="height:14rem" alt="..."></div>
                <div class="card" style="width: 18rem; border:none !important;"><img src="{{asset('/imgs/gift3.jpg')}}" class="card-img-top" style="height:14rem" alt="..."></div>
                <div class="card" style="width: 18rem; border:none !important;"><img src="{{asset('/imgs/gift4.jpg')}}" class="card-img-top" style="height:14rem" alt="..."></div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 text-center d-flex justify-content-center align-items-center">
                <div style="border-top:1px solid black; margin-top: 1rem" class="px-3"></div>
                <p class="mx-2" style="margin-top: 2rem;">what we offer</p>
                <div style="border-top:1px solid black; margin-top: 1rem" class="px-3"></div>
            </div>
        </div>
        <div class="row mt-4 mb-5">
            <div class="col col-12 text-center">
                <h2 class="fw-light" style="font-family: 'Poiret One', cursive !important;">Our Gifts</h2>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col col-12">
                <div id="carouselExampleCaptions" class="carousel slide  d-flex justify-content-center" data-bs-ride="carousel">
                    <div class="carousel-inner" >
                        @foreach($sliders as $slider)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <div class="slider-image text-center">
                                    <img src="{{  asset($slider->image1) }}" style="width: 18rem"  class="d-inline-block border text-center rounded" alt="{{ $slider->image1 }}">
                                    <div class="mt-2 py-1">
                                        <p class="fw-bold" style="margin-block-start: 0 !important; margin-block-end:0 !important;">{{$slider->name}}</p>
                                        <p style="margin: 0 !important;">{{$slider->description}}</p>
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
        </div>
        <div class="row" style="margin-top: 10rem;">
            <div class="col col-12 d-flex px-5">
                <img src="{{asset('imgs/reading.jpg')}}" style="border-radius: 0.3rem; width:28rem !important; z-index:360;" alt="">
                <div style="width:223px; border: 1px solid #3c6450; padding:9.3rem 223px; margin-top:-18.7rem; border-radius: 0.3rem;z-index:0; transform: rotate(-6deg);"></div>
                <p class="my-1 mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero rerum nostrum aperiam laborum dolorum alias consequatur consequuntur recusandae aliquid laboriosam.</p>
                <p class="my-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nemo ad dicta culpa dolores repudiandae.</p>
                <a href="/shop/{{$email}}" class="fs-6 fw-bold mt-2" style="color: #3c6450">Next <img src="{{asset('imgs/logos/angle-right.svg')}}" style="background:#75887f;padding: 0.5rem;width:2rem; border-radius:100px;" alt=""></a>
            </div>
            <div class="col col-12 d-flex px-5">
                <img src="{{asset('imgs/potts.jpg')}}" style="border-radius: 0.3rem;width:20rem; z-index:360;" alt="">
                <div style="width:223px; border: 1px solid #3c6450; padding:2rem 159px; margin-left:-20rem; border-radius: 0.3rem;z-index:0; transform: rotate(-8deg)"></div>
                <div class="d-flex flex-column" style="margin-left: 2rem; margin-top:100px;">
                    <h4 class="mt-5">Make A Gift That Grows</h4>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nemo ad dicta culpa dolores repudiandae.</p>
                    <a href="/shop/{{$email}}" class="fs-6 fw-bold mt-2" style="color: #3c6450">Shop Now <img src="{{asset('imgs/logos/angle-right.svg')}}" style="background:#75887f;padding: 0.5rem;width:2rem; border-radius:100px;" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 8rem;">
            <h2 class="fw-light text-center" style="font-family: 'Poiret One', cursive !important;">Instagram Feed</h2>
            <div class="col col-12 d-flex justify-content-center align-items-center" style="margin-top: 2rem;">
                <img src="{{asset('imgs/insta2.jpg')}}" class="mx-3" style="width: 20rem; height:13.3rem !important; border-radius:0.5rem;" alt="">
                <img src="{{asset('imgs/insta3.jpg')}}" class="mx-3" style="width: 20rem; border-radius:0.5rem;" alt="">
                <img src="{{asset('imgs/insta4.jpg')}}" class="mx-3" style="width: 20rem; border-radius:0.5rem;" alt="">
            </div>
        </div>
        @component('components.footer')
            
        @endcomponent
    </div>
</body>
</html>