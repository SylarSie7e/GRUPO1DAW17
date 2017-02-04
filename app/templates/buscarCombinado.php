  <?php ob_start() ?>

      <form name="formBusqueda" action="index.php?ctl=buscarAlimentosCombinado" method="POST">

          <table>
              <tr>
                  <td>Energia del alimento:</td>
                  <td><input type="number" step="any" name="energia" value="<?php echo $params['energia']?>"></td>
              </tr>
              <tr>
                  <td>nombre alimento:</td>
                  <td><input type="text" name="nombre" value="<?php echo $params['nombre']?>"></td>

                  <td><input type="submit" value="buscar"></td>
              </tr>
          </table>

          </table>

      </form>

      <?php if (count($params['resultado'])>0): ?>
      <table>
         <tr>
             <th>alimento (por 100g)</th>
             <th>energía (Kcal)</th>
             <th>grasa (g)</th>
         </tr>
         <?php foreach ($params['resultado'] as $alimento) : ?>
             <tr>
                 <td><a href="index.php?ctl=ver&id=<?php echo $alimento['id'] ?>">
                         <?php echo $alimento['nombre'] ?></a></td>
                 <td><?php echo $alimento['energia'] ?></td>
                 <td><?php echo $alimento['grasatotal'] ?></td>
             </tr>
         <?php endforeach; ?>

     </table>
      <?php endif; ?>

      <?php $contenido = ob_get_clean() ?>

      <?php include 'layout.php' ?>
