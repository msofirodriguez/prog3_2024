<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller/student.controller.php" method="POST" name="formAddStudent">
        <input type="hidden" name="operation" value="add">
        
        <label for="">DNI:</label><input type="text" name="dni"><br>
        <label for="">Nombre:</label><input type="text" name="name"><br>
        <label for="">Apellido:</label><input type="text" name="surname"><br>
        <label for="">Telefono:</label><input type="text" name="phone"><br>
        <label for="">Direccion:</label><input type="text" name="address"><br>
        <label for="">E-mail</label><input type="email" name="email"><br>
        <label for="">Fecha nacimiento:</label><input type="date" name="birthdate"><br>
        <label for="">Contraseña:</label><input type="password" name="password"><br>
        <button type="submit" name="aceptar">Aceptar</button>
        <button type="submit" name="cancelar">Cancelar</button>
    </form>

</body>
</html>
