<?php include("header.php"); ?>


<form class="w3-container" action="Ejercicio4/ejercicio4.php" method="post">
    <p>Ingrese nombre del visitante</p>
    <input class="w3-input w3-border w3-border-black" type="text" name="nombreDeVisitante" required>
    <p>Planeta al que pertenece:</p>
    <select class="w3-input w3-border w3-border-black" name="planeta">
        <option value="Tierra">Tierra</option>
        <option value="Marte">Marte</option>
        <option value="Pluton">Pluton</option>
        <option value="Jupiter">Jupiter</option>
    </select>
    <br>
    <input class="w3-btn w3-blue-grey" type="submit" value="Enviar">
</form>



<?php include("footer.php"); ?>
