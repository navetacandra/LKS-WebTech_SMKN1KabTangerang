<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">

</head>
<body class="bg-auth">
<main class="w-full bg-auth">
    <div class="c-content">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="auth-content" >
            <div class="w-11 h-full mx-auto">
                <form method="post" action="{{route('logic.register')}}" class="w-full h-full-screen text-center">
                    @csrf
                    @method('POST')
                    <div class="h-full text-left py-4rem-form">
                        <h2 class="fs-24 text-gray-700 fw-500">Register</h2>
                        <div class="relative h-full">
                            <div class="my-1rem w-11">
                                <div class="my-1rem">
                                    <label for="email">Email</label>
                                    <div class="my-05rem">
                                        <input id="email" name="email" class="input w-full" type="email" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="flex-block-sm w-full">
                                    <div class="my-05rem w-10-inp ">
                                        <label for="password">Password</label>
                                        <div class="my-05rem">
                                            <input class="w-10-inp input" id="password" name="password" type="password" placeholder="Password"/>
                                        </div>
                                    </div>
                                    <div class="my-05rem w-10-inp">
                                        <label for="confirm_password">Konfirmasi Password</label>
                                        <div class="my-05rem">
                                            <input class="w-10-inp  input" id="confirm_password" name="confirm_password" type="password" placeholder="Konfirmasi Password"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-block-sm w-full">
                                    <div class="my-05rem w-10-inp ">
                                        <label for="name">Nama</label>
                                        <div class="my-05rem">
                                            <input class="w-10-inp   input" id="name" name="name" type="text" placeholder="Nama"/>
                                        </div>
                                    </div>
                                    <div class="my-05rem w-10-inp ">
                                        <label for="phone_number">Nomor Telepon</label>
                                        <div class="my-05rem">
                                            <input class="input w-10-inp  " id="phone_number" name="phone_number" type="number" placeholder="Nomor telepon"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-1rem absolute w-full bottom-0">
                                <div class="my-1rem">
                                    <div class="block">
                                        <a  href="{{route('register')}}" class="my-1rem nv-a fs-14">Sudah memiliki akun?</a>
                                        <div class="my-1rem">
                                            <button type="submit" class="btn-primary w-full fs-15 ">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
</main>
</body>
</html>
