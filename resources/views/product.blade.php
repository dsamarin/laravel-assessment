@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6">
        <div class="md:flex md:items-center">
            <div class="w-full h-64 md:w-1/2 lg:h-96">
                <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="{{ $product->image_src }}"
                    alt="{{ $product->name }}">
            </div>
            <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                <h3 class="text-gray-700 uppercase text-lg">{{ $product->name }}</h3>
                <span class="text-gray-500 mt-3">@money($product->price)</span>
                <hr class="my-3">
                <div class="flex items-center mt-6">
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product" value="{{ $product->id }}" />
                        Qty: <input type="number" name="quantity" value="1" min="1" step="1"
                            class="bg-gray-100 appearance-none border-2 border-gray-200 rounded w-20 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" />
                        <button type="submit"
                            class="px-8 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">Order
                            Now</button>
                        <button type="submit"
                            class="mx-2 text-gray-600 border rounded-md p-2 hover:bg-gray-200 focus:outline-none">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>


        <h2 class="text-2xl font-semibold mb-3 mt-6">Similar Products</h2>

        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

            @if ($similar->count())
                @foreach ($similar as $product)
                    <x-products.card :product="$product" />
                @endforeach
            @else
                <p>No similar products could be found.</p>
            @endif
        </div>
    </div>
@endsection
