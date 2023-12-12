<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">

</head>
<body>
@include('.body.navbar')
<main class="w-full">
    <div class="s-content">
        <div class="c-content">
            <div class="w-full py-1rem">
                @if($errors->any())
                    <div class="alert alert-success">
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

                <div class="w-full">
                    <div class="my-1rem ">
                        <h1 class="fs-26 my-05rem fw-600 text-gray-700">History list</h1>
                        <div class="my-1rem">
                            <div class="w-full">
                                <ul class="block">

                                    @foreach($data as $item)
                                        <li class="w-full my-1rem mx-auto">
                                            @include('component.card.history-card' , ['item' => $item])
                                        </li>
                                    @endforeach
                                </ul>
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
