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
        <div class="flex items-center justify-center bg-slate-300">
            <img src="images/drum.png" class="w-[670px] h-[500px]" alt="">
        </div>
        <div class="flex justify-center bg-slate-100">
            <div class="w-full">
                <div class="w-full py-20 px-36">
                    <h1 class="text-5xl font-semibold">Melodies</h1>
                </div>
                <div class="w-full mt-16 flex flex-col px-[200px]">
                    <h1 class="mb-5 text-5xl font-semibold">Register</h1>
                    <input class="px-3 py-1 border-2 rounded-lg h-11 border-slate-400" type="text" placeholder="Fullname">
                    <input class="px-3 py-1 mt-5 border-2 rounded-lg h-11 border-slate-400" type="text" placeholder="Email">
                    <input class="px-3 py-1 mt-5 border-2 rounded-lg h-11 border-slate-400" type="password" placeholder="Password">
                    <input class="px-3 py-1 mt-5 border-2 rounded-lg h-11 border-slate-400" type="password" placeholder="Confirm Password">
                    <a href="/" class="flex items-center justify-center py-3 mt-5 text-xl font-semibold text-white transition-all duration-200 rounded-lg bg-slate-400 hover:bg-slate-500">Create Account</a>
                    <div class="w-full pt-5 text-center">
                        <h1>Already have an account? <span><a href="#" class="text-blue-500">Login</a></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 