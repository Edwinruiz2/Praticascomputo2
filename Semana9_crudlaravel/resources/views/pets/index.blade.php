<h1>Listado de mascota</h1>

<a href="{{url('/pet/create')}}">Nueva mascota</a>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th></th>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($pets as $pet)
        <td>{{$pet->id}}</td>
        <td>{{$pet->name}}</td>
        <td>{{$pet->age}}</td>
        <td>
            <a href="{{url('/pet/'.$pet->id.'/edit')}}">Editar</a>
        </td>
        <td>
            <form action="{{url('/pet/'.$pet->id) }}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" value="Eliminar"
                onclick="return confirm('Desea eliminar el registro?')"
                >
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>

</table>