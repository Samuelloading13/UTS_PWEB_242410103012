@props(['username'])

<nav class="navbar">
    <div class="nav-links">
        <a href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
        <a href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a>
        <a href="{{ route('profile', ['username' => $username]) }}">Profile</a>
    </div>
    <div class="nav-logout">
        <a href="{{ route('login.show') }}" class="logout">Logout</a>
    </div>
</nav>
