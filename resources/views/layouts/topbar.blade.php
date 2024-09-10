<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="#" class="navbar-brand p-0">
        <h1 class="text-primary"><i class="fas fa-leaf me-3"></i>Herby</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse" id="topbarCollapse">
        <a href="{{route('dashboard')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('dashboard')}}#about" class="nav-item nav-link">About</a>
                <a href="{{route('dashboard')}}#ramuan" class="nav-item nav-link">Ramuan Herbal</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        Shopping
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('shoping.index') }}" class="dropdown-item">Semua kategori</a>
                        <a href="{{ route('shoping.index') }}#tanaman" class="dropdown-item">Tanaman & Pohon</a>
                        <a href="{{ route('shoping.index') }}#buah" class="dropdown-item">Biji - bijian & buah</a>
                        <a href="{{ route('shoping.index') }}#bunga" class="dropdown-item">Bunga</a>
                    </div>
                </div>
                  <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        Contact Us
                    </a>
                    <div class="dropdown-menu">
                       <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
                <small><i class="fa fa-home text-primary me-2"></i> Contact Us</small>
            </a>
            <div class="dropdown-menu rounded">
            <a href="https://www.google.com/maps/place/Pangrumasan,+Peundeuy,+Garut+Regency,+West+Java/@-7.5588815,107.892095,6367m/data=!3m2!1e3!4b1!4m6!3m5!1s0x2e66056d39f4f9d5:0x53e5a08c982203ff!8m2!3d-7.5630269!4d107.8998566!16s%2Fg%2F121_5zfv?entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D" class="text-muted small me-4">
            <i class="fas fa-map-marker-alt text-primary me-2"></i>Desa Pangrumasan
        </a>
        <a href="tel:+085724034426" class="text-muted small me-4">
            <i class="fas fa-phone-alt text-primary me-2"></i>+085724034426
        </a>
        <a href="mailto:starblink010@gmail.com" class="text-muted small">
            <i class="fas fa-envelope text-primary me-2"></i>starblink010@gmail.com
        </a>
                    </div>
                    </div>
                </div>
        </div>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
                <small><i class="fa fa-home text-primary me-2"></i> My Dashboard</small>
            </a>
            <div class="dropdown-menu rounded">
                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                <a href="#" class="dropdown-item"><i class="fa fa-user me-2"></i> Register</a>
                <a href="#" class="dropdown-item"><i class="fa fa-sign-in-alt me-2"></i> Login</a>
            </div>
        </div>
    </div>
</nav>
