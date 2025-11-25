<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {

    // Llamada a la API con User-Agent (evita 403)
    $response = Http::withHeaders([
        'User-Agent' => 'Laravel-Client'
    ])->withoutVerifying()->get('https://pokeapi.co/api/v2/pokemon?limit=20');

    if ($response->failed()) {
        return "Error al conectar con PokeAPI. Código: " . $response->status();
    }

    $data = $response->json();

    if (!isset($data['results'])) {
        return "PokeAPI respondió pero sin datos esperados.";
    }

    $pokemones = $data['results'];

    return view('welcome', compact('pokemones'));
});
