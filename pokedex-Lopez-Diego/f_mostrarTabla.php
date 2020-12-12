<?php


    function mostrarPokemons($lista)
    {
        foreach ($lista as $pokemon) {
            echo "<tr>" .
                "<td><p>$pokemon[idPokemon]</p></td>" .
                "<td><img src='$pokemon[gif]' alt='Pokemon' class='w3-image'></td>" .
                "<td><p>$pokemon[nombre]</p></td>" .
                "<td><img src='$pokemon[tipo]' alt='Pokemon' class='w3-image'></td>" .
                "<td><a class='w3-button w3-teal' href='#'>Modificar</a>
                    <a class='w3-button w3-teal' href='#'>Borrar</a></td>" .
                "</tr>";
        }
    }