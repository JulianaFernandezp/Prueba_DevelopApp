<style>
     body{
    background-image: url(https://emegebeachhouse.com/wp-content/uploads/2022/05/textura-fondo-blanco-gris-moderno-abstracto-diseno-fondo-poligonal-caotico_266639-1444.png);
    background-size: cover;
    background-position: center;
  }

    h3{
            text-align: center;
        }


    form {
    width: 300px; 
    margin: 0 auto; 
    padding: 20px; 
    border: 1px solid #ffbe77; 
    border-radius: 5px; 
}

label {
    display: block; 
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
textarea {
    width: 100%; 
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc; 
    border-radius: 3px; 
}

textarea {
    resize: vertical; 
}

button[type="submit"] {
    width: 100%; 
    padding: 10px; 
    background-color: #ffd42f; 
    color: white; 
    border: none; 
    cursor: pointer; 
    align-items: center;
}

button[type="submit"]:hover {
    background-color: #ffbe77; 
}

a{
    width: 30%; 
    padding: 5px; 
    background-color: #ffd42f; 
    color: white; 
    border: none; 
    cursor: pointer; 
}

a:hover{
    background-color: #ffbe77;  
}
</style>
<a href="{{route('inicio')}}">Regresar</a>
<h3 >Edición de categoria</h3>
    <form action="{{route('category.update',$category->id)}}" method="post">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{$category->name}}">
        <button type="submit">Crear</button>
    </form>