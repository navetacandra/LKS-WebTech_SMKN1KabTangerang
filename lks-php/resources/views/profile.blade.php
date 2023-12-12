<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
@include('.body.navbar')
<main class="w-full">
    <div class="s-content">
        <div class="c-content">
            <div class="w-full py-1rem">
                <div class="w-full">
                    <div class="my-1rem ">
                        <h1 class="fs-24 my-05rem fw-600 text-gray-600">Informasi akun</h1>
                        <div class="my-05rem">
                            <div class="w-profile">
                                <div class="block">
                                    <div class="border-b my-1rem">
                                        <div class="my-05rem">
                                            <h3 class="fs-22 fw-600 text-gray-600">{{$data->name}}</h3>
                                        </div>
                                        <div class="my-05rem">
                                            <h2 class="fs-24 fw-600-sm text-gray-500">{{$data->email}}</h2>
                                        </div>
                                    </div>
                                    <div class="border-b my-1rem">
                                        <div class="my-05rem">
                                            <h2 class="fs-26 fw-600-sm text-gray-700">Balance : {{$data->balance}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="my-1rem ">
                                        <h1 class="fs-26 my-05rem fw-600 text-gray-700">History list</h1>
                                        <div class="my-1rem">
                                            <div class="w-full">
                                                <ul class="block">

                                                    @foreach($dataOrder as $item)
                                                        <li class="w-full my-1rem mx-auto">
                                                            @include('component.card.history-card' , ['item' => $item])
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--                            <div class="my-2rem">--}}
                                {{--                                <div class="w-full">--}}
                                {{--                                    @include('.component.faq')--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-11 mx-auto">
                <section class="w-full" id="about">
                    @include('.component.about')
                </section>
            </div>
        </div>

    </div>
</main>
@include('.body.footer')
</body>
</html>
