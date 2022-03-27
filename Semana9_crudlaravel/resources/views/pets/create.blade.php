<h2>Nueva mascota</h2>
<form action="{{ url('pet') }}" method="post">
    @csrf
    @include ('pets.form')
</form>