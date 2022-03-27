<h2>Editar registro de mascota</h2>

<form action="{{ url('/pet/'.$pet->id) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    @include('pets.form')
</form>