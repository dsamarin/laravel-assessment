@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-3">Best of {{ $category }}</h2>

        {{ $products->links() }}

        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

            @if ($products->count())
                @foreach ($products as $product)
                    <x-products.card :product="$product" />
                @endforeach
            @else
                <p>There are no products for this category at the moment.</p>
            @endif
        </div>
    </div>
@endsection
