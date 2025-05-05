<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="navbar">
    <div class="container">
        <div class="navbar-logo">
            <div class="text-xl font-bold">
                PT. Smart
            </div>
        </div>
        <div class="navbar-links hidden md:flex">
            <a href="{{ route('dashboard') }}" class="nav-link">☰ Dashboard</a>
            <a href="{{ route('leads.index') }}" class="nav-link">👤 Leads</a>
            <a href="{{ route('products.index') }}" class="nav-link">📦 Produk</a>
            <a href="{{ route('customers.index') }}" class="nav-link">👥 Customer</a>
            @if(Auth::user()?->role === 'admin')
                <a href="{{ route('users.index') }}" class="nav-link">👤 Pengguna</a>
            @endif
        </div>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="menu-btn">☰</button>
        </div>
    </div>

    <div id="mobile-menu" class="mobile-menu hidden">
        <a href="{{ route('dashboard') }}" class="mobile-nav-link">☰ Dashboard</a>
        <a href="{{ route('leads.index') }}" class="mobile-nav-link">👤 Leads</a>
        <a href="{{ route('products.index') }}" class="mobile-nav-link">📦 Produk</a>
        <a href="{{ route('customers.index') }}" class="mobile-nav-link">👥 Customer</a>
        @if(Auth::user()?->role === 'admin')
            <a href="{{ route('users.index') }}" class="mobile-nav-link">👤 Pengguna</a>
        @endif
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    });
</script>
