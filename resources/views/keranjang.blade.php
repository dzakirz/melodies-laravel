@extends('layouts.keranjang')

@section('container')
    <div class="w-[500px]">
        <h1 class="mt-[30px] text-2xl font-semibold">Keranjang</h1>
    <div class="w-full mt-10 flex justify-between items-center">
        <div class="w-[300px] h-32 flex items-center">
            <img class="h-full w-36 bg-slate-300" src="images/3.png" alt="">
            <div class="ml-2">
                <h1 class="font-semibold">Drum</h1>
                <p class="text-sm font-light ">Quantity 1</p>
                <p class="text-sm">Rp.10.500.000</p>
            </div>
        </div>
        <div class="w-20 h-24  flex flex-col items-center ">
            <input type="checkbox" class="border-2 mt-[40px]">
            <a class="mt-5 text-sm underline" href="/">Hapus</a>
        </div>
    </div>
        <div class="w-full ">
            <div class="h-[.5px] w-full bg-gray-400 mt-5 mb-[100px]"></div>
        </div>
        <div class="w-full flex flex-col items-end">
            <div class=" w-[300px] mt-10 pt-5 flex flex-col justify-end ">
                <div class="w-full flex justify-between text-sm font-normal">
                    <h1>Subtotal</h1>
                    <h1>Rp10.500.000</h1>
                </div>
                <div class="w-full ">
                    <div class="h-[.5px] w-full bg-gray-400 my-3 "></div>
                </div>
                <div class="w-full flex justify-between text-sm font-normal">
                    <h1>Total</h1>
                    <h1>Rp.10.500.000</h1>
                </div>
                <a href="/checkout" class="py-3 w-full bg-gray-800 hover:bg-gray-900 cursor-pointer text-white rounded-sm flex justify-center mt-3">
                    Checkout
                </a>
            </div>
        </div>   
    </div>         
@endsection