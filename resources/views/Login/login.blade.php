@extends ('Layout.layout')
@section ('titulo', 'login')

<style>
    body{
        background-image: url(https://emegebeachhouse.com/wp-content/uploads/2022/05/textura-fondo-blanco-gris-moderno-abstracto-diseno-fondo-poligonal-caotico_266639-1444.png);
        background-size: cover;
        background-position: center;
    }
        section#contenido {
            margin: 20px; 
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="email"],
        input[type="password"],
        button[type="submit"] {
            margin: 5px; 
            padding: 10px;
            background-color:white; 
            border-color:#ffbe77;
        
        }

        button[type="submit"] {
            background-color: #ffd42f; 
            color: white;
            border: none; 
            cursor: pointer; 
        }

        button[type="submit"]:hover {
            background-color: #ffbe77;
        }

        .logo{
            max-width: 100px;
            margin-bottom: 20px;
        }
    </style>

@section('contenido')
<img src="https://s.tmimgcdn.com/scr/800x500/183700/modelo-de-logotipo-comercial-moderno-de-compras_183766-original.jpg"  alt="logo" class="logo">
<form action = "{{Route('signin')}}" method="post">
@csrf
    <input type="email" name="email"> 
    <input type="password" name="password">
    <button type= "submit">Login</button>
</form>
@endsection

