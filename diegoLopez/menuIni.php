<?php include("header.php"); ?>

    <form class="w3-container"  action="Ejercicio5/ejercicio5.php">
        <input class="w3-check" type="checkbox" name="entrada" value="entrada" >
        <label>Entrada</label>
        <br>
        <input class="w3-check" type="checkbox" name="plato_principal" value="plato_principal">
        <label>Plato Principal</label>
        <br>
        <input class="w3-check" type="checkbox" name="acompanamiento" value="acompanamiento">
        <label>Acompañamiento</label>
        <br>
        <input class="w3-check" type="checkbox" name="postre" value="postre">
        <label>Postre</label>
        <br><br>
        <input class="w3-btn w3-blue-grey" type="submit" value="Pedir">
    </form>

<?php include("footer.php"); ?>