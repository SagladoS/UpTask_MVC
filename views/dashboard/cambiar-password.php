<?php include_once __DIR__ .'/header-dashboard.php'; ?>

    
<div class="contenedor-sm">
    <?php include_once __DIR__. '/../templates/alertas.php'; ?>

    <a href="/perfil" class="enlace">Volver a Perfil</a>

    <form class="formulario" method="POST" action="/perfil">
        <div class="campo">
            <label for="nombre">Password Actual</label>
            <input type="password" name="password_actual" placeholder="Tu Password actual">
        </div>
        <div class="campo">
            <label for="password">Password Nuevo</label>
            <input type="password" name="password_nuevo" placeholder="Tu password nuevo">
        </div>

        <input type="submit" value="Guardar Cambios">
    </form>
</div>

<?php include_once __DIR__ .'/footer-dashboard.php'; ?>