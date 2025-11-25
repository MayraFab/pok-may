<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex Laravel</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(180deg, #ff9900, #ff6a00);
            margin: 0;
            padding: 40px;
            color: white;
        }

        h1 {
            text-align: center;
            font-size: 45px;
            font-weight: 900;
            text-shadow: 0px 4px 15px rgba(0,0,0,0.4);
            margin-bottom: 35px;
        }

        /* CONTENEDOR */
        .table-container {
            width: 90%;
            margin: auto;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.35);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* ENCABEZADO */
        thead tr {
            background: #a85c00; /* marrón oscuro combinado */
        }

        th {
            padding: 15px;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #ffe4b5;
        }

        /* FILAS ALTERNADAS */
        tbody tr:nth-child(odd) {
            background: #ffb23c; /* amarillo suave */
        }

        tbody tr:nth-child(even) {
            background: #ff9e1d; /* naranja intermedio */
        }

        /* HOVER */
        tbody tr:hover {
            background: #ffd460; /* amarillo brillante */
            cursor: pointer;
            transition: 0.25s;
        }

        td {
            padding: 15px;
            text-align: center;
            font-size: 17px;
            color: #5a3c00; /* marrón suave */
            font-weight: 600;
        }

        .id-text {
            font-weight: 900;
            color: #7a4a00;
            font-size: 20px;
        }

        img {
            width: 70px;
            height: 70px;
            transition: 0.2s;
            filter: drop-shadow(0 3px 5px rgba(0,0,0,0.3));
        }

        tr:hover img {
            transform: scale(1.15);
        }
    </style>
</head>
<body>

    <h1>Pokédex Laravel</h1>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pokemones as $pokemon)
                    @php
                        $url = $pokemon['url'];
                        $id = explode('/', trim($url, '/'));
                        $id = end($id);
                    @endphp

                    <tr>
                        <td class="id-text">{{ $id }}</td>
                        <td><img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $id }}.png" alt="{{ $pokemon['name'] }}"></td>
                        <td>{{ $pokemon['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</body>
</html>
