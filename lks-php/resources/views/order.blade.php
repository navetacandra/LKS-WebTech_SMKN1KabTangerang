


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">

</head>
<body>
@include('.body.navbar')
@foreach($data as $item)
    <main class="w-full s-content">
        <div class="c-content">

            <div class="w-11 mx-auto relative py-1rem">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <div class="my-auto">
                                    <div>
                                        <li class="fs-20">{{ $error }}</li>
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('logic.order')}}">
                    @csrf
                    @method('POST')
                    <input type="hidden" id="place_id" name="place_id" value="{{$item->id}}" />
                    <div class="w-full">
                        <div class="my-1rem ">
                            <h1 class="fs-26 my-05rem fw-600 text-gray-700">Order list</h1>
                            <div class="my-05rem">
                                <div class="flex-block-sm">

                                    <div class="w-full">
                                        <div class="py-2rem">
                                            {{--                                    section information--}}
                                            <div class="my-1rem border-b">
                                                <h3 class="fs-26 fw-500">INFORMASI AKUN ANDA</h3>
                                                @foreach($user as $userItem)
                                                    <div class="block my-05rem">
                                                        <div class="flex justify-between my-05rem">
                                                            <h3 class="fs-18 fw-500 text-gray-600">{{$userItem->name}}</h3>
                                                            <h3 class="fs-18 fw-500 text-gray-500">{{$userItem->email}}</h3>
                                                        </div>
                                                        <h1 class="fs-24 fw-600 text-gray-600">Balance : {{$userItem->balance}}</h1>
                                                    </div>
                                                @endforeach
                                            </div>
                                            {{-- section order --}}
                                            <div class="my-1rem border-b">
                                                <h3 class="fs-26 fw-500">TIKET</h3>
                                                <div class="block my-05rem">
                                                    <div class="flex-block-sm">
                                                        <div class="h-order-img">
                                                            <img class="h-full w-full cover radius-8"  src="{{asset($item->image)}}" />
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="mx-1rem-order flex w-full justify-between">
                                                                <h1 class="fs-18 fw-600 ">{{$item->name}}</h1>
                                                                <h1 id="totalPrice" class="fs-18 fw-600 text-price">{{$item->price}}</h1>
                                                            </div>
                                                            <div class="mx-1rem-order">
                                                                <div class="flex my-05rem">
                                                                    <label for="quantity" class="fs-15 fw-400 my-4 text-gray-600">Quantity</label>
                                                                    <input type="number" class="inp-qty" id="quantity" name="quantity" placeholder="0" min="1" max="5" value="1" />
                                                                </div>
                                                            </div>

                                                            <div class="mx-1rem-order">
                                                                <div class="flex my-05rem">
                                                                    <h3 class="fs-15 fw-500 my-4 text-gray-600">Date, </h3>
                                                                    <h3 class="fs-15 fw-500 my-4 text-gray-600">{{$item->location}}</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            {{-- section payment --}}
                                            <div class="my-2rem border-b">
                                                <h3 class="fs-22 fw-500">PEMBAYARAN</h3>
                                                <div class="block my-05rem">
                                                    <div class="flex-block-sm my-05rem">
                                                        <div class="flex my-05rem">
                                                            <input type="radio" class="inp-radio" name="payment_methode" value="cash">
                                                            <p class="fs-15 mx-7 fw-400 text-gray-500">Cash on place (COP)</p>
                                                        </div>
                                                        <div class="flex my-05rem">
                                                            <input type="radio" class="inp-radio" name="payment_methode" value="e-wallet">
                                                            <p class="fs-15 mx-7 fw-400 text-gray-500">E-wallet</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-1rem">
                                <div class="flex justify-between">
                                    <div class="my-1rem">
                                        <h2 class="fs-26 fw-500 text-gray-600">TOTAL</h2>
                                    </div>
                                    <input type="hidden" name="basePrice" id="basePrice" value="{{$item->price}}" />
                                    <div class="my-1rem">
                                        <h2 id="grandTotalDisplay" class="text-price fs-26 fw-500">Rp{{$item->price}}</h2>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="my-1rem">
                                    </div>
                                    <div class="my-1rem">
                                        <button type="submit" class="btn-primary fs-16 text-white fw-400">Pesan Tiket Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="w-11 mx-auto">
                <section class="w-full" id="about">
                    @include('.component.about')
                </section>
            </div>
        </div>
    </main>
@endforeach
@include('.body.footer')
</body>
</html>

<script>
    const quantityInput = document.getElementById('quantity');
    const basePriceInput = document.getElementById('basePrice');
    const grandTotalElement = document.getElementById('grandTotalDisplay');

    quantityInput.addEventListener('input', function () {
        const quantity = parseInt(this.value);
        const basePrice = parseInt(basePriceInput.value);
        const total = quantity * basePrice;

        grandTotalElement.textContent = `Rp${total}`;
    });
</script>

<script>
    // Add the "show" class after a delay (adjust the delay as needed)
    setTimeout(function() {
        document.querySelector('.alert').classList.add('show');
    }, 100); // Example delay of 1000 milliseconds (1 second)

    // Remove the "show" class after 3 seconds
    setTimeout(function() {
        document.querySelector('.alert').classList.remove('show');
    }, 1000); // 1000 milliseconds (1 second) for show + 3000 milliseconds (3 seconds) for display = 4000 milliseconds
</script>
