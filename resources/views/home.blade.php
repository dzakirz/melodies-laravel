@extends('layouts.home')


@section('container')
    <div class="w-full pt-10 flex justify-center">
        <h1 class="text-gray-600 font-bold text-4xl">Produk Kami</h1>
    </div>
    <div class="container px-5 pt-10 pb-24 mx-auto">
        <div class="flex flex-wrap -m-4">
        @unless(count($products)==0)
            
        @foreach($products as $product)
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:bg-[#c8c8c8] transition-all duration-200 border rounded-tl-xl">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $product['gambar'] }}">
                </a>
                <div class="mt-4">
                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $product['merek'] }}</h3>
                    <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product['kategori'] }}</h2>
                    <p class="mt-1">{{ $product['harga'] }}</p>
                </div>
            </div>
        @endforeach

        @else
            <h1>tidak ada product</h1>
        @endunless
        </div>
    </div>
@endsection