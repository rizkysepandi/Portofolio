<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('BUMDES/assets/logo/icon-siabdes.png')}}" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="{{asset('css/sign-in.css')}}" rel="stylesheet">
    <title>SIABDES | Login</title>
    
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <form style="margin-top: -10rem" action="/login" method="post">
            @csrf
            <div class="justify-content-center">
                <img src="{{asset('BUMDES/assets/logo/logo-btp.jpg')}}" alt="logo-btp" width="100%" height="100%">
                <img class="mb-4" src="{{asset('BUMDES/assets/halaman_awal/logo-siabdes.jpg')}}" alt="logo-siabdes" width="100%" height="100%">
            </div>
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('loginError')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                        
            @endif
            <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
        
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" 
                required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
        
            <div class="form-text fw-bold">Belum punya akun? <a href="/daftar_user">Daftar disini</a></div>

            <button type="submit" class="w-100 btn btn-lg btn-primary my-3">Login</button>
            <a href="/" type="button" class="w-100 btn btn-lg btn-danger" >Back</a>
          
        </form>
      </main>
</body>
</html>