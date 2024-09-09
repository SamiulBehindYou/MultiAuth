<h1>Welcome to admin dashboard</h1>


<form method="POST" action="{{ route('admin.logout') }}">
    @csrf

<button type="submit" class="btn btn-primary">Logout</button>
</form>
