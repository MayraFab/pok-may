<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex May :3</title>
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 30px;
            background: linear-gradient(145deg, #ffa9cdff, #ffb7d6);
            color: #fff;
        }

        h2 {
            text-align: center;
            font-size: 55px;
            font-weight: 900;
            margin-bottom: 40px;
            text-shadow: 0 4px 25px rgba(0,0,0,0.35);
            letter-spacing: 2px;
            font-family: 'More Sugar', cursive !important;
        }

        .grid {
            width: 95%;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
        }

        .card {
            background: #ffe5f0;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.25);
            transition: transform .25s, box-shadow .25s;
            border: 4px solid #ff4f8b;
            position: relative;
        }

        .card:hover {
            transform: scale(1.08);
            box-shadow: 0 12px 30px rgba(255, 77, 136, 0.4);
        }

        .dot {
            width: 18px;
            height: 18px;
            background: #ff9fbfff;
            border-radius: 50%;
            position: absolute;
            top: 12px;
        }

        .dot.left {
            left: 12px;
        }

        .dot.right {
            right: 12px;
        }

        .card img {
            width: 120px;
            margin: 10px 0;
            transition: 0.25s;
            filter: drop-shadow(0px 5px 8px rgba(0,0,0,0.25));
        }
        .card:hover img {
            transform: scale(1.2);
        }

        .name {
            font-size: 22px;
            font-weight: 800;
            text-transform: capitalize;
            color: #ff94b8ff;
            margin-top: 5px;
            font-family: 'More Sugar', cursive !important;
        }   

        .id {
            background: #ff4f8b;
            color: white;
            padding: 6px 14px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 8px;
            display: inline-block;
        }

        .screen {
            background: #ffd8e9;
            padding: 10px;
            border-radius: 15px;
            border: 3px solid #ffd9e8ff;
        }

    </style>
</head>
<body>

    <h2>POKÉDEX DE MAY</h2>

    <div class="grid">

        @foreach ($pokemones as $pokemon)
            @php
                $url = $pokemon['url'];
                $id = explode('/', trim($url, '/'));
                $id = end($id);
            @endphp

            <div class="card">


                <span class="dot left"></span>
                <span class="dot right"></span>

                <div class="id">#{{ $id }}</div>

                <div class="screen">
                    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $id }}.png" alt="{{ $pokemon['name'] }}">
                </div>

                <div class="name">{{ $pokemon['name'] }}</div>

            </div>
        @endforeach

    </div>

</body>
</html>
