<?php
include("Model/student.class.php");
$id=$_REQUEST["idStudent"];
$Student= new Student(); //creamos el objeto
    $Student->setIdStudent($id);
    $Student->getStudent();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Modificacion de estudiantes</title>
</head>
<body>
    <form name="editStudent" method="POST" action="controller/student.controller.php">
        <input type="hidden" name="idStudent" value="<?=$Student->getIdStudent()?>">
        <input type="hidden" name="operation" value="update"/>
        <label>DNI:</label><input type="text" name="dni" value="<?=$Student->getDni();?>"><br>;
        <label>Nombre:</label><input type="text" name="name" value="<?=$Student->getName();?>"><br>;
        <label>Apellido:</label><input type="text" name="surname" value="<?=$Student->getSurname();?>"><br>;
        <label>Direcci&oacute;n:</label><input type="text" name="address" value="<?=$Student->getAddress();?>"><br>;
        <label>Tel&eacute;fono:</label><input type="text" name="phone"value="<?=$Student->getPhone();?>"><br>;
        <label>E-mail:</label><input type="email" name="email" value="<?=$Student->getEmail();?>"><br>;
        <label>Fecha Nac:</label><input type="date" name="birthday" value="<?=$Student->getBirthday();?>"><br>;
        <label>Contrase&ntilde;a:</label><input type="text" name="password" value="<?=$Student->getPassword();?>"><br>;
        <label>Colegio</label><input type="text" name="school" value="<?=$Student->getSchool();?>"><br>;
        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
    </form>
</body>
</html>
