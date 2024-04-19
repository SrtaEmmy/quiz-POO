<h1>renderizando temas</h1>

<?php while($tema = $temas->fetch_object()): ?>

    <form action="index.php?class=tema&method=get_tema" method="post">
        <input type="hidden" name="id_tema" value="<?php echo $tema->id; ?>">
        <input type="submit" value="<?php echo $tema->nombre; ?>">
    </form>

<?php endwhile ?>

