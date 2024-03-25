@extends ('Layout.layout')
@section('titulo', 'home')

<style>
  body{
    background-image: url(https://emegebeachhouse.com/wp-content/uploads/2022/05/textura-fondo-blanco-gris-moderno-abstracto-diseno-fondo-poligonal-caotico_266639-1444.png);
    background-size: cover;
    background-position: center;
  }

  table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ffd42f;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ffd42f;
        }

        tr:nth-child(even) {
            background-color: #ffbe77;
        }

        h2{
         text-align: center;
        }

        h3{
            text-align: center;
        }

        h1{
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

</style>

@section ('contenido')
<form action= "{{route('logout')}}" method="post">
@csrf
<button type="submit">Logout</button>
</form>
<h1>
    Bienvenido(a)
</h1>
<br><br>
<h2>Lista de Productos</h2>
<table class="default">
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Size</th>
    <th>Price</th>
    <th>Iva</th>
  </tr>
    <tbody>
        @foreach($product as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->size }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->iva }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<br><br>
<h3 >Creación de producto</h3>
    <form action="{{route('product.create')}}" method="post">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name">
        <label for="">Descripción</label>
        <textarea name="description" cols="30" rows="10"></textarea>
        <label for="">Talla</label>
        <input type="text" name="size">
        <label for="">Precio unitario</label>
        <input type="number" name="price" id="">
        <button type="submit">Crear</button>
      </form>
@endsection