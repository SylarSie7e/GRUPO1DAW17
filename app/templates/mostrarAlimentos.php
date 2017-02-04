 <?php ob_start() ?>

 <table>
     <tr>
         <th>alimento (por 100g)</th>
         <th>energía (Kcal)</th>
         <th>grasa (g)</th>
         <th>formato xml</th>

     </tr>
     <?php foreach ($params['alimentos'] as $alimento) :?>
     <tr>
         <td><a href="index.php?ctl=ver&id=<?php echo $alimento['id']?>">
                 <?php echo $alimento['nombre'] ?></a></td>
         <td><?php echo $alimento['energia']?></td>
         <td><?php echo $alimento['grasatotal']?></td>
         <td><a href="index.php?ctl=archivoxml&id=<?php echo $alimento['id']?>">Generar xml</a></td>
     </tr>
     <?php endforeach; ?>

 </table>


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>