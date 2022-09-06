<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Número Primo</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('procesoInvertirBits') }}" method="POST">
                {{ csrf_field() }}
                    <div>
                        <label>Ingrese Número</label><br><br>
                        <div>
                            <input type="text" name="decimal" placeholder="Ingrese un numero"><br><br>
                        </div>
                    </div>

                    <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

