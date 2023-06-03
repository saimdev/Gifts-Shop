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
        <div class="row">
            <div class="col col-12 mt-5 mb-2 p-4 d-flex justify-content-center flex-column align-items-center">
            <img src="{{asset('/imgs/1.jpg')}}" class="w-50" style="border-radius:0.5rem;" alt="">
            <p class="my-5" style="line-height:2; text-align:justify">Welcome to our Gifts Store, your ultimate destination for unique and memorable gifts. At our Gifts Store, we believe that giving and receiving gifts should be a joyous experience that leaves a lasting impression. We are passionate about curating a diverse collection of products that celebrate special moments, express love and appreciation, and bring smiles to faces.

With years of experience in the gifting industry, we understand the importance of finding the perfect gift for every occasion. Our team of dedicated professionals scours the globe to handpick the finest products, ensuring that each item in our collection is of the highest quality and embodies the essence of thoughtful gifting.

We take pride in offering a wide range of products that cater to different tastes, preferences, and budgets. From elegant home decor and personalized accessories to delightful keepsakes and gourmet treats, our selection is carefully curated to inspire and delight. Whether you're searching for a birthday surprise, a heartfelt anniversary gift, or a token of appreciation, you'll find something special at our Gifts Store.

At our Gifts Store, we strive to provide an exceptional shopping experience for our customers. Our user-friendly website is designed to make browsing and purchasing effortless, and our dedicated customer support team is always ready to assist you with any questions or concerns you may have. We prioritize secure and reliable payment options, ensuring that your transactions are safe and smooth.

We believe in the power of gift-giving to create cherished memories and strengthen relationships. That's why we go above and beyond to ensure that each item is carefully packaged and delivered with love and care. We take pride in our prompt and reliable shipping services, ensuring that your gifts arrive on time, ready to create moments of joy and celebration.

Thank you for choosing our Store as your go-to destination for gifts that make a difference. We are honored to be a part of your special moments and look forward to helping you find the perfect gift that will bring smiles and warm hearts. Start exploring our collection today and discover the joy of giving with our gifts store.</p>
            </div>
        </div>
        @component('components.footer')    
        @endcomponent
    </div>
</body>
</html>