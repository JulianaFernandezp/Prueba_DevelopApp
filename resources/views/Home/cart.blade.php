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

@section ('contenido')
<a href="{{route('inicio')}}">Regresar</a>
<h1>
    Bienvenido(a)
</h1>
<br><br>
<h2>Carrito de compras</h2>
<table class="default">
  <tr>
    <th>Name</th>
    <th>Cantidad</th>
    <th>Actions</th>
  </tr>
    <tbody>
        @foreach($products as $product)
            <form action="{{route('car.update', $product->id)}}" method="post">
             @csrf
             <tr>
                <td>{{ $product->product->name}}</td>
                <td><input type="number" value="{{$product->cantidad}}" name="cantidad"></td>
                <td>
                <button type="submit">Actualizar</button>
                <a href="{{route('car.delete', $product->id)}}" style="color:white;font-weight:bold;text-decoration: none; padding:10px; background-color:red;border:solid 1px rgb(241, 65, 94);">Eliminar</a>
                </td>
            </tr>
            </form>
        @endforeach
    </tbody>
</table>
@endsection