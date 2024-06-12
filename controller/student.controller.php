<?php
    include("model/student.class.php");
    $operacion=$_REQUEST["operacion"];

    if($operacion=="add"){
        $student->setIdStudent($_REQUEST ("idStudent"));
        $student->setDni($_REQUEST ("dni"));
        $student->setName($_REQUEST ("name"));
        $student->setSurname($_REQUEST ("surname"));
        $student->setBirthdate($_REQUEST ("birthdate"));
        $student->setAdress($_REQUEST ("adress"));
        $student->setEmail($_REQUEST ("email"));
        $student->setPhone($_REQUEST ("phone"));
        $student->setSchool($_REQUEST ("school"));
        $student->setPassword($_REQUEST ("password"));
        $student->setStudent($_REQUEST ("student"));
        $student->addStudent();

    }else if($operacion=="update"){
        $student->setIdStudent($_REQUEST ("idStudent"));
        $student->setDni($_REQUEST ("dni"));
        $student->setName($_REQUEST ("name"));
        $student->setSurname($_REQUEST ("surname"));
        $student->setBirthdate($_REQUEST ("birthdate"));
        $student->setAdress($_REQUEST ("adress"));
        $student->setEmail($_REQUEST ("email"));
        $student->setPhone($_REQUEST ("phone"));
        $student->setSchool($_REQUEST ("school"));
        $student->setPassword($_REQUEST ("password"));
        $student->editStudent();

    } else if($operacion=="delete"){
        $student->setIdStudent($_REQUEST ("idStudent"));
        $student->setDni($_REQUEST ("dni"));
        $student->setName($_REQUEST ("name"));
        $student->setSurname($_REQUEST ("surname"));
        $student->setBirthdate($_REQUEST ("birthdate"));
        $student->setAdress($_REQUEST ("adress"));
        $student->setEmail($_REQUEST ("email"));
        $student->setPhone($_REQUEST ("phone"));
        $student->setSchool($_REQUEST ("school"));
        $student->setPassword($_REQUEST ("password"));
        $student->deleteStudent();
    }


?>