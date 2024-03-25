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

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

select {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
}

option[value=""] {
    font-style:italic;
    color:#ffd42f;
}
</style>
<a href="{{route('inicio')}}">Regresar</a>
<h3 >Edición de producto</h3>
    <form action="{{route('product.update',$product->id)}}" method="post">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{$product->name}}">
        <label for="">Descripción</label>
        <textarea name="description" cols="30" rows="10">{{$product->description}}</textarea>
        <label for="">Talla</label>
        <input type="text" name="size" value="{{$product->size}}">
        <label for="">Precio unitario</label>
        <input type="number" name="price" id="" value="{{$product->price}}">
        <select name="category_id" id="category_id">
        <option value="">Seleccionar categoria</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
        @endforeach
        </select>
        <br></br>
        <button type="submit">Crear</button>
    </form>