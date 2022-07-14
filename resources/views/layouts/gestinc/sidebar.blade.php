<header class="header-area header-sticky background-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">
                        <img src="../assets/img/ConvertImage-removebg-preview (1).png" class="navbar-brand-img w-70"
                             alt="main_logo">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="">NEW IN</a></li>
                        <li class="scroll-to-section"><a href="#top" class="">BESTSELLERS</a></li>
                        <li class="scroll-to-section"><a href="#top" class="">CLOTHING</a></li>
                        <li class="scroll-to-section"><a href="#top" class="">WOMENS</a></li>
                        <li class="scroll-to-section"><a href="#top" class="">MENS</a></li>

                        @if (Route::has('login'))
                            <li class="scroll-to-section">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                            <li class="scroll-to-section">
                                <a href="{{ route('login') }}">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="scroll-to-section">
                                    <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth

                        @endif
                        <li class="scroll-to-section"><a href="#men" class="">CART(2)</a></li>
                    </ul>

                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>

        </div>
    </div>

</header>
