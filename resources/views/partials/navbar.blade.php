<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="/image/lico white.png" alt="" width="160" height="90" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="w3-right w3-hide-small" style="margin-left: 400px;">
                <a href="#projects" style="color: #F7BA07; font-size:24px; margin-right:30px">Projects</a>
                <a href="#about" style="color: white; font-size:24px; margin-right:30px">Event</a>
                <a href="#contact" style="color: white; font-size:24px; margin-right:30px">About Us</a>
                <a href="#contact" style="color: white; font-size:24px; margin-right:30px">Payment</a>
            </div>

            <ul class="navbar-nav">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-hidden" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <h4>Welcome Back, {{ auth()->user()->name }}</h4>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li> --}}
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item" style="margin-left: -100px;">

                    <button href="/login" class="button button1 {{ ($active == "login")?'active':'' }} font-weight-bolder">Login</button>
                </li>
                <li class="nav-item">

                <a href="#contact" style="color: white; font-size:24px; margin-left:100px">Sign Up</a>
                </li>
                @endauth
            </ul>


        </div>
    </div>
</nav>
