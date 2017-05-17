<?php include('header.php');?>
<section>
<h2>Visualización</h2>
<?php
$viz = array_map('str_getcsv', file('data/blog.csv'));
array_walk($viz, function(&$a) use ($viz) {$a = array_combine($viz[0], $a);});
array_shift($viz);
$all = count($viz);
?>
<table class="table table-hover">
<tr>
  <th>Raza</th>
  <th>País</th>
  <th>Tamaño</th>
  <th>Clasificación</th>
  <th>Carácter</th>

</tr>

<?php for($n=0; $n < $all; $n++){?>
  <tr>
    <td><?php echo($viz[$n]["raza"]);?></td>
    <td><?php echo($viz[$n]["pais"]);?></td>
    <td><?php echo($viz[$n]["size"]);?></td>
    <td><?php echo($viz[$n]["clasificacion"]);?></td>
    <td><?php echo($viz[$n]["caracter"]);?></td>
  </tr>
<?php };?>

</table> <br>

<img src="imagen/grafico-perros.png" class="img-responsive">


</section><br>
<?php include('footer.php');?>
