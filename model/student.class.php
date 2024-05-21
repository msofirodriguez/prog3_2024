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

        }

        public function deleteStudent(){

        }

        public function getStudent(){

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