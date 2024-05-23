<?php
    include ("database.class.php)");

    class Student {
        private $idStudent=null;
        private $dni=null;
        private $surname=null;
        private $name=null;
        private $birthdate=null;
        private $phone=null;
        private $adress=null;
        private $email=null;
        private $password=null;
        private $school=null;
        private $conexion=null;

        public function __construct($dni, $surname, $name, $birthday, $phone, $adress, $email, $password, $school){
            $this->dni=$dni;
            $this->surname=$surname;
            $this->name=$name;
            $this->birthdate=$birthdate;
            $this->phone=$phone;
            $this->adress=$adress;
            $this->email=$email;
            $this->password=$password;
            $this->school=$school;
        }

        public function addStudent(){
            //crear la consulta
            $sql="INSERT INTO students (dni, surname, name, birthdate, phone, adress, email, password, school) VALUES (".$this->dni.", '".$this->surname."', '".$this->name."', '".$this->birthdate."', ".$this->phone.", '".$this->adress."', '".$this->email."', '".$this->password."', '".$this->school."')"; 
           
            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $this->conexion->close();

            return $result;
        }

        public function editStudent(){
            $sql="UPDATE students SET dni=".$this->dni.", surname='".$this->surname."', name='".$this->name."', birthdate='".$this->birthdate."', phone=".$this->phone.", adress='".$this->adress."', email='".$this->email."',, password='".$this->password."', school='".$this->school."' WHERE idStudent=".$this->idStudent;

            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $this->conexion->close();

            return $result;
        }

        public function deleteStudent(){
            $sql="DELETE FROM students WHERE idStudent=".$this->idStudent;
            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $this->conexion->close();

            return $result;
        }

        public function getStudent(){
            $sql="SELECT * FROM students WHERE idStudent=".$this->idStudent;
            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $this->conexion->close();
            if(result){
                if($row=$result->fetch_assoc()){
                    $this->dni=$row("dni");
                    $this->surname=$row("surname");
                    $this->name=$row("name");
                    $this->birthdate=$row("birthdate");
                    $this->phone=$row("phone");
                    $this->adress=$row("adress");
                    $this->email=$row("email");
                    $this->password=$row("password");
                    $this->school=$row("school");
                    return true;
                }
            }

            return false;
        }

        public function getAllStudents(){

        }
        //geeter y setter
        //hacer get y set para todos atributos

        public function getIdStudent(){
            return $this->idStudent;
        }

        public function setIdStudent($idStudent){
            $this->idStudent=$idStudent;
        }
    }

?>