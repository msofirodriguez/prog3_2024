<?php
    include ("database.class.php)");

    class Student{
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
            $sql="SELECT * FROM students";
            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $allStudents=null;
            if($result){
                while($row=$result->fetch_assoc()){
                    $allStudents[]=$row;
                }
            }

            return $allStudents;
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

        public function getDni(){
            return $this->dni;
    }

    public function setDni($dni){
        return $this->dni=$dni;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        return $this->name=$name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function setSurname($surname){
        return $this->surname=$surname;
    }

    public function getBirthdate(){
        return $this->birthdate;
    }

    public function setBirthdate($birthdate){
        return $this->birthdate=$birthdate;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone){
        return $this->phone=$phone;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setAddress($address){
        return $this->address=$address;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        return $this->email=$email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        return $this->password=$password;
    }
    
    public function getSchool(){
        return $this->school;
    }

    public function setSchool($school){
        return $this->school=$school;
    }
}
?>
