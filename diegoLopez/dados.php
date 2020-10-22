<?php include("header.php"); ?>

<form class="w3-container" action="Ejercicio3/ejercicio3.php" method="post">
    <p>Dados a lanzar</p>
    <select class="w3-input w3-border w3-border-black" name="dados">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <br>
    <input class="w3-btn w3-blue-grey" type="submit" value="Lanzar dados!">
</form>

<?php include("footer.php"); ?>
