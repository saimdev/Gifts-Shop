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
        <div class="row my-5 d-flex justify-content-center align-items-center" >
            <div class="col col-10 py-4 d-flex justify-content-center align-items-center text-white" style="
                backdrop-filter: blur(15px) saturate(100%); border-radius:0.5rem;">
                <form class="w-75" method="GET" action="/customizecup/{{$email}}/book/40/" id="customDiaryForm">
                    <h1 class="fw-light">Custom Diary</h1>
                    <div class="form-outline mb-4 mt-3">
                      <input type="text" name="input_text" placeholder="Enter Text" id="form1Example1" class="form-control" maxlength="10"  required/>
                      <label class="form-label">Enter Text To Add On Diary</label>
                    </div>
                    <div class="form-outline mb-4 mt-3">
                    <label for="cup_image">Select a Diary Image:</label>
                <div class="row">
                    <div class="col-6">
                        <label>
                            <input type="radio" name="Black Book" value="book1.png" >
                            <img src="{{asset('/imgs/book1.png')}}" alt="Cup 1" class="img-fluid w-50">
                        </label>
                    </div>
                    <div class="col-6">
                        <label>
                            <input type="radio" name="Red Book" value="book2.png" >
                            <img src="{{asset('/imgs/book2.png')}}" alt="Cup 2" class="img-fluid w-50">
                        </label>
                    </div>
                    <div class="col-6 mt-3">
                        <label>
                            <input type="radio" name="Brown Book" value="book3.png" >
                            <img src="{{asset('/imgs/book3.png')}}" alt="Cup 2" class="img-fluid w-50">
                        </label>
                    </div>
                    <div class="col-6">
                        <label>
                            <input type="radio" name="Blue Book" value="book4.png" >
                            <img src="{{asset('/imgs/book4.png')}}" alt="Cup 2" class="img-fluid w-50">
                        </label>
                    </div>
                </div>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn w-100 btn-block text-white" style="background:#1a134d !important;">Check Output</button>
                    @if (session('error'))
                      <div class="alert alert-danger error-message text-center" style="padding:1rem ;background: rgb(252, 161, 168); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(237, 73, 86)">{{ session('error') }}</div>
                    @endif
                  </form>
                  
            </div>
        </div>
        @component('components.footer')
        @endcomponent
    </div>
</body>
<script>

var form = document.getElementById('customDiaryForm');

// Add event listener for form submission
form.addEventListener('submit', function(e) {
  // Get the selected cup image value
  var imagename = document.querySelector('input:checked').value;
  var diaryname = document.querySelector('input:checked').name;
  // Get the input text value
  var inputText = document.getElementById('form1Example1').value;

  // Modify the action attribute with the selected cup image and input text
  form.action = "/customizediary/{{$email}}/diary/40/" + imagename + "/" + diaryname + "/";
});
</script>
</html>