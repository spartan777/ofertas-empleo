<div class="row">
    <div class="col-md-8">
    <form id="miformulario1" action="<?php echo base_url(); ?>internal_private/save_usuario" method="post">
        <div class="form-group">
            <label for="user">Nombre Usuario: </label><br>
            <input type="text" class="form-control" id="user" maxlength="10" name="user" required="" placeholder="Ingresa el nombre del usuario">

        </div>
        <div class="form-group">
            <label for="pass">Contraseña:</label><br>
            <input type="password" class="form-control" id="pass"  name="pass" required="" placeholder="Ingresa la contraseña">

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="<?= base_url(); ?>internal_private/usuarios"><input type="button" class="btn btn-danger" value="Cancelar"></input></a>
        </div>
    </form>
     </div>
</div>