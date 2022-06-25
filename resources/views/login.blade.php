<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="grid w-full h-screen grid-cols-2">
        <div class="flex justify-center bg-slate-100">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            <div class="w-full">
                <div class="w-full py-20 px-36">
                    <h1 class="text-5xl font-semibold">Melodies</h1>
                </div>
                <form action="{{ Route('post.login') }}" method="post">
                    <div class="w-full mt-16 flex flex-col px-[200px]">
                        <h1 class="mb-5 text-5xl font-semibold">Login</h1>
                            @csrf
                            
                        <input class="px-3 py-1 border-2 rounded-lg h-11 border-slate-400" type="email" name="email" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                        @error('email')
                        <div class="mb-4 invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                        <input class="px-3 py-1 mt-5 border-2 rounded-lg h-11 border-slate-400" type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <button type="submit" class="flex items-center justify-center py-3 mt-5 text-xl font-semibold text-white transition-all duration-200 rounded-lg bg-slate-400 hover:bg-slate-500">Login</button>
                        
                        <div class="w-full pt-5 text-center">
                            <h1>Dont have an account? <span><a href="/register" class="text-blue-500">Register</a></span></h1>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex items-center justify-center bg-slate-300">
            <img src="images/drum.png" class="w-[670px] h-[500px]" alt="">
        </div>
    </div>

</body>
</html>