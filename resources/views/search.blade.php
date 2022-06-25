@extends('layouts.search')


@section('container')
<div class="w-full pt-10 flex ">
        <h1 class="text-gray-600 font-semibold text-xl">Hasil pencarian "Drum"</h1>
</div>
    <div class="container px-5 pt-10 pb-24 mx-auto mb-[151px]">
        <div class="flex flex-wrap -m-4">
            
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:bg-[#c8c8c8]  transition-all duration-300 border">
            <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images/3.png">
            </a>
            <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">GRETESCH</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Drum</h2>
            <p class="mt-1">Rp.10.500.000</p>
            <div class="flex justify-end w-full">
                <div class="flex justify-between w-full">
                    <div class="w-32 flex">
                        <p class="mt-[1px]">Qty: </p>
                        <input type="number" class="py-[2px] px-2 w-14" placeholder="1">
                    </div>
                        <a href="/keranjang">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:bg-[#c8c8c8]  transition-all duration-300 border">
            <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images/7.png">
            </a>
            <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">PEARL</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Drum</h2>
                <p class="mt-1">Rp.15.250.000</p>
                <div class="flex justify-end w-full">
                    <div class="flex justify-between w-full">
                        <div class="w-32 flex">
                            <p class="mt-[1px]">Qty: </p>
                            <input type="number" class="py-[2px] px-2 w-14" placeholder="1">
                        </div>
                        <a href="/login">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection