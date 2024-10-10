<header>
    <nav class="navbar container-fluid d-flex justify-content-between px-5 py-3 fw-bold">
        <a href="{{url('/')}}" class="text-decoration-none text-black fw-bold m-0">EVENT<span class="text-danger">EASE</span></a>
        <div class="links-container text-decoration-none">
            <ul class="d-flex list-unstyled gap-2  m-0">
                <li><a class="text-decoration-none" href="{{ url('/home') }}">HOME</a></li>
                <li><a class="text-decoration-none" href="{{ url('about') }}">ABOUT</a></li>
                <li><a class="text-decoration-none" href="{{ url('contact')}}">CONTACT US</a></li>
            </ul>
        </div>
        <!-- <button class="adminBtn">
            <a href="{{ route('admin.register') }}" class="text-white text-decoration-none">Admin</a>
        </button> -->
    </nav>
</header>
