<div class="container-fluid mb-5">
    <div class="row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav d-flex align-items-center">
                        <li class="nav-item"><a class="nav-link" href="{{route('all')}}">Shop</a></li>
                        @auth
                        <li class="nav-item"><a class="nav-link" href="">Skin Quiz</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Create Your Kit</a></li>
                        @endauth
                        <a class="nav-link" href="{{route('blog.index')}}">Blog</a>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    <a class="navbar-brand" href="{{ route('homepage') }}">
                        <svg height="24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.0" viewBox="0 0 2056.8 370.3">
                            <g fill="#FD8B9A">
                                <path d="M353.2 86.7 382.7 231h-59.1l29.6-144.3zM327 3.4l-84.7 344.8h57.1l13.6-68.3h79.9l14 68.3h56.7L379.8 3.4H327zM668.5 3.4v204.9L587.6 3.4h-48.5v344.8h54.3V143.3l81.4 204.9h47.9V3.4zM931.7 66.3c-5.3-8.2-14.5-14-27.6-14h-32v247h32c13.1 0 22.3-5.8 27.6-14 10.2-16 11.6-49.9 11.6-109.9 0-60.1-1.5-93.1-11.6-109.1m40.7 253.3c-14 16-33.9 28.6-66.8 28.6h-87.7V3.4h87.7c32.9 0 52.8 12.6 66.8 28.6 25.7 28.6 25.2 77.5 25.2 143.8-.1 66.4.4 115.3-25.2 143.8M133.9 164.7l-21-8.5-.2-.1-25.8-10.3c-19.6-7.7-29.3-21.7-29.3-38.6v-9.8c0-18.4 1.9-30 9.2-38.3 5.3-6.3 13.6-9.7 26.2-9.7 12.1 0 20.3 3.9 25.2 9.2 7.8 8.7 9.7 20.3 9.7 38.7h54.2c0-36.3-5.8-57.6-22.3-74.1C145.3 8.7 123 .5 93 .5 62.5.5 39.7 9.7 25.7 23.3c-17 16.4-22 39.2-22.3 72.8v13.7c0 41.7 16.6 64.7 48.2 77.6l21 8.5.2.1 25.8 10.3c19.6 7.7 29.3 21.1 29.3 37.9v10.5c0 18.4-1.9 30-9.2 38.3-5.3 6.3-13.6 9.7-26.2 9.7-12.1 0-20.3-3.9-25.2-9.2-7.7-8.7-9.7-20.3-9.7-38.7H3.3c0 36.3 5.8 57.6 22.3 74.1 14.5 14.5 36.8 22.8 66.8 22.8 30.5 0 53.3-9.2 67.3-22.8 16.9-16.4 21.9-39.3 22.2-72.9v-14.4c.2-41.7-16.4-64-48-76.9"></path>
                            </g>
                            <path fill="#FD8B9A" d="M1981.4 348.5V213.3l66.8-209.7h-59.5l-34.4 136.6-33.9-136.6h-60.1v.1l66.9 209.6v135.2zM1674.8 348.5V201.4l2-.2 73 147.3h54.8L1721.7 176l82.9-172.4h-54.8l-73 147.3-2-.2V3.6h-54.3v344.9zM1403.6 187.4l21 8.5.2.1 25.8 10.3c19.6 7.7 29.3 21.7 29.3 38.6v9.8c0 18.4-1.9 30-9.2 38.3-5.3 6.3-13.6 9.7-26.2 9.7-12.1 0-20.3-3.9-25.2-9.2-7.8-8.7-9.7-20.3-9.7-38.7h-54.2c0 36.3 5.8 57.6 22.3 74.1 14.5 14.5 36.8 22.8 66.8 22.8 30.5 0 53.3-9.2 67.3-22.8 16.9-16.4 21.9-39.3 22.3-72.9v-13.7c0-41.7-16.6-64.7-48.2-77.6l-21-8.5-.2-.1-25.8-10.3c-19.6-7.7-29.3-21.1-29.3-37.9V97.4c0-18.4 1.9-30 9.2-38.3 5.3-6.3 13.6-9.7 26.2-9.7 12.1 0 20.3 3.9 25.2 9.2 7.7 8.7 9.7 20.3 9.7 38.7h54.2c0-36.3-5.8-57.6-22.3-74.1C1497.3 8.7 1475 .4 1445 .4c-30.5 0-53.3 9.2-67.3 22.8-16.9 16.4-21.9 39.3-22.2 72.9v14.4c0 41.6 16.6 64 48.1 76.9M1149.1 308.4c-22.2 0-38-19.2-38-46.8 0-19.7 8.9-39.4 29.1-60.1l50.8 78.9c-12.9 18.1-26.2 28-41.9 28m-1-264.7c13.3 0 23.7 10.8 23.7 27.6 0 23.7-8.4 36.5-24.1 53.7-14.8-19.7-23.2-36.5-23.2-51.8-.1-18.2 8.8-29.5 23.6-29.5m96.6 234.1c14.2-25.3 25.9-62.9 29.3-98.9h-45.1c-2.2 19.4-6.7 38.7-13.2 52.5l-41.9-64.6c27.6-28.6 44.8-55.2 44.8-96.6 0-40.9-23.2-73.4-71-73.4-38.9 0-70 26.6-70 78.4 0 29.6 14.3 53.2 37 83.8-33.5 34-52.2 66-52.2 106 0 56.2 34.5 90.2 82.3 90.2 32 0 52.7-13.3 72-35l19.2 31.1h54.7l-45.9-73.5z"></path>
                        </svg>
                    </a>
                    <ul class="navbar-nav d-flex align-items-center">
                        <!-- Right links -->
                        <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0 text-uppercase">
                            <li class="nav-item text-center mx-2 mx-lg-1">
                                <a class="nav-link" href="#!">
                                    <div>
                                        <i class="bi bi-search-heart fs-5"></i>
                                    </div>
                                    Search
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person fs-5"></i><br>
                                    @auth
                                    Hi, {{ Auth::user()->name }}
                                    @else
                                    Account
                                    @endauth
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @guest
                                    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                                    @endguest

                                    @auth
                                    <li><a class="dropdown-item" href="">My Account</a></li>
                                    <li><a class="dropdown-item" href="#">Wishlist</a></li>
                                    <li><a class="dropdown-item" href="#">Orders</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="text-center">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-dark">Logout</button>
                                        </form>
                                    </li>
                                    @endauth
                                </ul>
                            </li>

                            <li class="nav-item text-center mx-2 mx-lg-1">
                                <a class="nav-link" href="#!">
                                    <div>
                                        <i class="bi bi-bag-heart fs-5"></i>
                                    </div>
                                    Cart
                                </a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>