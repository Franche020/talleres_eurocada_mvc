<?php if(isset($alertas)){?>

<div class="alertas">

<?php    if(isset($alertas['error'])) {
foreach($alertas['error'] as $alerta) {
?>
<p class="error"><?php echo $alerta ?></p>


<?php    }}?>
<?php    if(isset($alertas['exito'])){
foreach($alertas['exito'] as $alerta) {
?>
<p class="exito"><?php echo $alerta ?></p>


<?php    }}?>

</div>

<?php } ?>