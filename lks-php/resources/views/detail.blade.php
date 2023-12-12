<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">

</head>
<body>
{{--ini adalah component navbar --}}
@include('.body.navbar')
@foreach($data as $item)
    <main class="w-full s-content">
        <section class="w-full" id="banner">
            @include('.component.banner' , ['item' => $item])
        </section>
        <div class="c-content">
            <div class="w-11 mx-auto">
                <section class="w-full" id="description">
                    @include('.component.description' ,  ['item' => $item])
                </section>
            </div>
            <div class="w-11 mx-auto">
                <section class="w-full" id="faq-ticket">
                    <div class="justify-between flex-block-sm">
                        <div class="w-11 me-auto-sm">
                            @include('.component.faq' ,  ['item' => $item])
                        </div>
                        <div class="w-11 ms-auto-sm">
                            @include('.component.ticket' ,  ['item' => $item])
                        </div>
                    </div>
                </section>
            </div>
            <div class="w-11 mx-auto">
                {{--ini adalah component information --}}
                <section class="w-full" id="information">
                    @include('.component.information' ,  ['item' => $item])
                </section>
            </div>
            <div class="w-11 mx-auto">
                {{--ini adalah component about --}}
                <section class="w-full" id="information">
                    @include('.component.about')
                </section>
            </div>
        </div>
    </main>
@endforeach
{{--ini adalah component footer --}}
@include('.body.footer')
</body>
</html>
