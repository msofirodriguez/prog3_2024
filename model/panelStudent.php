<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Student</title>
    <link rel="stylesheet" href="css/alertify.css" />
    <link rel="stylesheet" href="css/themes/default.css" />
</head>


<body>
    <h1> Panel de Estudiantes</h1>
    <table class="table table-light">
        <thead>
            <tr>
                <th>ID Estudiante</th>
                <th> Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Fecha Nacimiento</th>
                <th>Tel&eacute;fono</th>
                <th>Acciones</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
                include("model/student.class.php");
                $student= new Student();
                $allStudents= $student->getAllStudents();

                if($allStudents){
                    foreach($allStudents as $data){
                        print "<tr>";
                            print"<td>".$data["idStudent"]."</td>";
                            print"<td>".$data["surname"]."</td>";
                            print"<td>".$data["name"]."</td>";
                            print"<td>".$data["dni"]."</td>";
                            print"<td>".$data["birthdate"]."</td>";
                            print"<td>".$data["phone"]."</td>";
                            print"<td><button type='button' name='Editar' value='Editar' onclick=\"location.href='formEditStudent.php?idStudent=".$data["idStudent"]."';\"
                             />";
                        print"<td><button type='button' name='Eliminar' value='Eliminar' onclick= /> </td>";
                            print "</tr>";

                    }
                }else{
                    print "no existen estudiantes cargados";
                }

            ?>
        </tbody>
    </table>

</body>
<script src="<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>"></script>
<script src="js/alertify.js"></script>
</html>