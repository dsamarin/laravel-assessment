@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-3">My Items</h2>
        @if ($cart->count())
            <ul role="list" class="">
                @foreach ($cart as $item)
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="{{ $item->associatedModel->image_src }}"
                                    alt="{{ $item->associatedModel->name }}">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium truncate">
                                    <a
                                        href="{{ route('product', $item->associatedModel) }}">{{ $item->associatedModel->name }}</a>
                                </p>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <p class="text-sm truncate">
                                        Quantity: {{ $item['quantity'] }} |
                                        <input type="hidden" name="product" value="{{ $item->id }}" /><button
                                            type="submit">Remove</a>
                                    </p>
                                </form>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold">
                                @money($item->associatedModel->price)
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div class="flex gap-4">

                <div class="flex-1">
                    <h3 class="text-xl font-bold my-4">Coupon Code</h3>
                    <p>If you have a coupon code, please enter it here.</p>

                    <form action="" method="POST">
                        @csrf
                        <div class="flex items-center w-full h-13 my-5 pl-3 bg-white border rounded-full">
                            <input type="coupon" name="code" id="coupon" placeholder="Apply coupon" value="90OFF8CIG"
                                class="w-full bg-inherit outline-none appearance-none focus:outline-none active:outline-none" />
                            <button type="submit"
                                class="text-sm flex items-center px-3 py-1 text-white bg-gray-800 rounded-full outline-none md:px-4 hover:bg-gray-700 focus:outline-none active:outline-none">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="gift" class="w-8"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z" />
                                </svg>
                                <span class="font-medium mx-3">Apply coupon</span>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="flex-1">
                    <h3 class="text-xl font-bold my-4">Order Details</h3>

                    <p class="mb-6 italic">Shipping and additional costs are calculated based on values you have
                        entered.</p>

                    <div class="flex justify-between border-b">
                        <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                            Subtotal
                        </div>
                        <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                            ${{ \Cart::getSubTotal() }}
                        </div>
                    </div>
                    <div class="flex justify-between pt-4 border-b">
                        <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                            Total
                        </div>
                        <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                            ${{ \Cart::getTotal() }}
                        </div>
                    </div>
                    <a href="#">
                        <button
                            class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                            <svg aria-hidden="true" data-prefix="far" data-icon="credit-card" class="w-8"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z" />
                            </svg>
                            <span class="ml-2 mt-5px">Procceed to checkout</span>
                        </button>
                    </a>
                </div>
            </div>
        @else
            <p>Your shopping cart is empty. Check out our <a href="{{ route('home') }}" class="text-pink-500">hottest
                    products</a>!</p>
        @endif
    </div>
@endsection
