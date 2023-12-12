<nav class="nv-s">
    <header class="nv-h">
        <div class="nv-c">
            <div class="bx-nv-1">
                <a href="/" class="h-img-logo">
                    <h1 class="fs-nav fw-500">Wisata Tangerang</h1>
                </a>
            </div>
            <div class="bx-nv-2 ">
                <div class="w-full h-full hidden-sm">
                    <ul class="w-full h-full flex">
                        <li class="nv-li">
                            <a href="http://localhost/wordpress-lks/" class="nv-a my-auto fs-15">
                                Home
                            </a>
                        </li>

                        <li class="nv-li">
                            <a href="/detail/1" class="nv-a fs-15">
                                Taman Mangrove
                            </a>
                        </li>
                        <li class="nv-li">
                            <a href="/detail/2" class="nv-a fs-15">
                                Tebing Koja
                            </a>
                        </li>
                        <li class="nv-li">
                            <a href="/history" class="nv-a fs-15">
                                Riwayat
                            </a>
                        </li>
                        @if(@auth()->check())
                            <li class="nv-li">
                                <a href="/profile" class="nv-a fs-15">
                                    {{auth()->user()->name}}
                                </a>
                            </li>
                        @else
                            <li class="nv-li">
                                <a class="nv-a fs-15">
                                    Login
                                </a>
                            </li>
                        @endif

                    </ul>
                </div>
                <div class="hidden-lg">
                    <div class="">
                        <button onclick="toggleDropdown('menu')" class="btn-primary">
                            Menu
                        </button>
                        <div id="menu"  class="fixed top-0 hidden left-0 right-0 w-full bg-white">
                            <div class="py-1em">
                                <ul class="w-full text-center h-full block">
                                    <li class="nv-li-sm">
                                        <a href="http://localhost/wordpress-lks/" class="nv-a my-auto fs-15">
                                            Home
                                        </a>
                                    </li>

                                    <li class="nv-li-sm">
                                        <a href="/detail/1" class="nv-a fs-15">
                                            Taman Mangrove
                                        </a>
                                    </li>
                                    <li class="nv-li-sm">
                                        <a href="/detail/2" class="nv-a fs-15">
                                            Tebing Koja
                                        </a>
                                    </li>
                                    <li class="nv-li-sm">
                                        <a href="/history" class="nv-a fs-15">
                                            Riwayat
                                        </a>
                                    </li>
                                    @if(@auth()->check())
                                        <li class="nv-li-sm">
                                            <a href="/profile" class="nv-a fs-15">
                                                {{auth()->user()->name}}
                                            </a>
                                        </li>
                                        <li class="nv-li-sm">
                                            <form action="{{route('logic.logout')}}" method="post">
                                                @csrf
                                                @method('POST')
                                                <button type="submit"  class="nv-a btn-logout fs-15">
                                                    Logout
                                                </button>
                                            </form>
                                        </li>
                                    @else
                                        <li class="nv-li-sm">
                                            <a class="nv-a fs-15">
                                                Login
                                            </a>
                                        </li>
                                    @endif

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</nav>


<script>
    function toggleDropdown (menuId){

        const toggle = document.getElementById('menu');

        if(toggle.style.display === "block"){
            toggle.style.display = "none"
        }else{
            toggle.style.display = "block"
        }

    }

</script>
