@extends('layouts.checkout')

@section('container')
<div class="flex flex-col px-48 py-20 ">
    <div class="w-full h-10 ">
        <h1 class="text-3xl font-semibold">
            Checkout
        </h1>
    </div>
    <div class="w-full h-10 mt-5 mb-1">
        <h1 class="text-sm font-normal">
            Lengkapi Data Diri
        </h1>
    </div>
    <div class="w-full h-10 mb-5">
        <div class="grid w-full grid-cols-2 gap-2">
            <input class="px-2 font-light border-2 border-gray-400 rounded " type="text" name="" id="" placeholder="Nama Depan">
            <input class="px-2 font-light border-2 border-gray-400 rounded" type="text" name="" id="" placeholder="Nama Belakang">
        </div>
        <input class="w-full px-2 mt-2 font-light border-2 border-gray-400 rounded" type="text" name="" id="" placeholder="Alamat">
        <input class="w-full px-2 mt-2 font-light border-2 border-gray-400 rounded" type="text" name="" id="" placeholder="Kota">
        <div class="grid items-center justify-center w-full grid-cols-3 gap-2 mt-2">
            <select class="font-light text-gray-400 border-2 border-gray-400 rounded h-7">
                <option value="actual value 1">Kelurahan</option>
                <option value="actual value 2">Display Text 2</option>
                <option value="actual value 3">Display Text 3</option>
            </select>
            <select class="font-light text-gray-400 border-2 border-gray-400 rounded h-7">
                <option value="actual value 1">Kecamatan</option>
                <option value="actual value 2">Display Text 2</option>
                <option value="actual value 3">Display Text 3</option>
            </select>
            <input class="w-full px-2 font-light border-2 border-gray-400 rounded" type="text" name="" id="" placeholder="Kode Pos">
        </div>
            <input class="w-full px-2 mt-2 font-light border-2 border-gray-400 rounded" type="text" name="" id="" placeholder="Nomor Telepon">
            <input class="w-full px-2 mt-2 font-light border-2 border-gray-400 rounded" type="text" name="" id="" placeholder="Pesan (optional)">
        </div>
    </div>
        <div class="flex flex-col px-48 py-20 ">
            <div class="w-full bg-white">
                <div class="w-full h-10 ">
                    <h1 class="text-xl font-light">
                        List Keranjang
                    </h1>
                </div>
                <div class="flex items-center justify-between w-full mt-7">
                    <div class="w-[300px] h-32 flex items-center">
                        <img class="h-full bg-slate-200 w-36" src="images/3.png" alt="">
                        <div class="ml-5">
                            <h1 class="font-semibold">Drum</h1>
                            <p class="text-sm font-light">Quantity 1</p>
                            <p class="text-sm font-semibold">Rp.10.500.000</p>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="h-[.5px] w-full bg-gray-400 mt-5 "></div>
                </div>
                <div class="flex flex-col items-end w-full">
                    <div class=" w-[300px] mt-10 pt-5 flex flex-col justify-end ">
                        <div class="flex justify-between w-full text-sm font-normal">
                            <h1>Subtotal</h1>
                            <h1>Rp.10.500.000</h1>
                        </div>
                        <div class="w-full ">
                            <div class="h-[.5px] w-full bg-gray-400 my-3 "></div>
                        </div>
                        <div class="flex justify-between w-full text-sm font-normal">
                            <h1>Total</h1>
                            <h1>Rp.10.500.000</h1>
                        </div>
                        <a href="/success" class="flex justify-center w-full py-3 mt-3 text-white bg-gray-800 rounded-sm cursor-pointer hover:bg-gray-900">
                            Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection