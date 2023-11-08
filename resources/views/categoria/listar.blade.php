<h2>Categorias</h2>
<ul>
    @foreach($categorias as $categoria)
    <li>{{$categoria->Nombre}}</li>
    @endforeach
</ul>
<br>
<a href="/categoria/insertar">Crear</a>