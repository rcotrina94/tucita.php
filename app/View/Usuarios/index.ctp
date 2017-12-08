<h1> Aqui va la pagina principal de productos </h1>
<table>
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
  </tr>
  <?php foreach ($usuarios as $usuario_php):?>
    <?php $usuario = $usuario_php['Usuario'] ?>
    <tr>
      <td><?php echo $usuario['nombre'];  ?></td>
      <td><?php echo $usuario['apellido'];  ?></td>
      <td><?php echo $usuario['email'];  ?></td>


    </tr>
  <?php endforeach;?>
</table>
