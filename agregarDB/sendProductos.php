<style>
  .ok {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #1e6;
	color: #fff
}
.bad {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #a22;
	color: #fff
}
</style>

<?php 

$conex = new mysqli('localhost','root','benja','olimpiadas');


if (isset($_POST['enviar'])) {
  if (!empty($_POST['name']) && !empty($_POST['descripcion']) && !empty($_POST['imagen']) && !empty($_POST['precio'])  && !empty($_POST['cantidad'])) {
    $name = htmlspecialchars($_POST['name']);
    $descripcion = htmlspecialchars($_POST['descripcion']);
    $img = htmlspecialchars($_POST['imagen']);
    $precio = filter_var($_POST['precio'], FILTER_VALIDATE_INT);
    $stock = filter_var($_POST['cantidad'], FILTER_VALIDATE_INT);
    $id_categoria = filter_var($_POST['id'], FILTER_VALIDATE_INT);


      $consulta = $conex->prepare("INSERT INTO productos(nombre_producto,descripcion,img_producto,precio,stock,id_categoria) VALUES(?,?,?,?,?,?)");
      $consulta->bind_param("sssiii",$name,$descripcion,$img,$precio,$stock,$id_categoria);

      if($consulta->execute()){
         header('Location: sendProductosform.php');
      }

      $consulta->close();
  }else{
    echo '<h3 class="bad">¡Por favor complete los campos!</h3>';
  }


}

?>