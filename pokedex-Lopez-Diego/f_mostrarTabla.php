<?php
session_start();
function mostrarPokemons($lista)
{
    $action = !is_null($_SESSION["usuario"]) ? "<td><a class='w3-panel w3-button w3-red w3-round-xxlarge w3-hover-text-red'  href='#'>
                                                        <i class='far fa-edit'></i>
                                                    </a>
                                                    <a class='w3-panel w3-button w3-red w3-round-xxlarge w3-hover-text-red' href='#'>
                                                        <i class='fas fa-trash w3-hover-text-red'></i>
                                                    </a>
                                                </td>" : "";
    foreach ($lista as $pokemon) {
        echo "<tr>" .
             "<td><p>$pokemon[idPokemon]</p></td>" .
             "<td><img src='$pokemon[gif]' alt='Pokemon' class='w3-image'></td>" .
             "<td><p>$pokemon[nombre]</p></td>" .
             "<td><img src='$pokemon[tipo]' alt='Pokemon' class='w3-image'></td>" .
             $action .
             "</tr>";
        }
    }