<h2>Categorias</h2>
<form method="post">
    @csrf
    <label for="nombre">Nombre: </label>    
    <input type="text" name="Nombre" id="Nombre">
    <br>    
    <button type="submit" name="boton" value="guardar">Guardar</button>
</form>