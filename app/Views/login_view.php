<?= \Config\Services::validation()->listErrors(); ?>
<form action="/" method="post">
   <?= csrf_field() ?>
   <label for="user">Usuario</label>
   <input type="input" name="user" /><br/>
   <br>x/br>
   <label for="pass">Contraseña</label>
   <input type="input" name="pass" /><br />
   <br>x/br>
   <input type="submit" name="submit" value="Entrar" />
   <p><a href="/usuario/create">Registrarse</a></p>
</form>