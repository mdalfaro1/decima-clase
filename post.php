<?php include('header.php');?>
<section>
<?php
$blog = array_map('str_getcsv', file('data/blog.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$nro = $_GET['url'];
?>
<h2><?php echo($blog[$nro]["raza"])?></h2>
<h6><?php echo($blog[$nro]["pais"])?></h6>
<h6><?php echo($blog[$nro]["clasificacion"])?></h6>
<h6><?php echo($blog[$nro]["caracter"])?></h6>
<h6><?php echo($blog[$nro]["size"])?></h6>
<img src="<?php echo($blog[$nro]["image"])?>" class="img-responsive">
</section>
<?php include('footer.php');?>
