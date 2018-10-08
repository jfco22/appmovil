<h1>Nuestro primer módulo en codeigniter!!</h1>

<?php foreach($usuario as $user) : ?>
	
	<p>Nombre: <?php echo $usuario->nombre ?> Password: <?php echo $usuario->password ?></p>
	
<?php endforeach; ?>