<?php

    class Usuario{

        private $name;

        public function getUsuario(){
            echo"<br> Mostrar usuario: ".$this->name;
        }


        public function setUsuario(){
            $this->name = "Alberto";
            return $this->name;
        }

        public function consultaUsuario(){

            $sql0 = "Select * From usuario where estatus = 1 ORDER BY id ASC";
            $consulta0 = mysql_query($sql0)or die("Error de conexión");

            echo"<div class='table-responsive sok_font bg_sok'>";
            echo"<table class='table table-striped'>";
            echo"<tr><td colspan='5' align='center'><strong>Lista de Usuarios</strong></td></tr>";
            echo"<tr><th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th>";

            while($field = mysql_fetch_array($consulta0)){
                $this->Id = $field['id'];
                $this->Nombre = $field['Nombre'];
                $this->ApellidoPaterno = $field['ApellidoPaterno'];
                $this->ApellidoMaterno = $field['ApellidoMaterno'];
                $this->Nivel = $field['Nivel'];
                switch($this->Nivel){
                    case 1:
                        $type = "Administrador";
                        break;
                    case 2:
                        $type = "Maestro";
                        break;
                    case 3:
                        $type = "Alumno";
                        break;
                }
                echo"<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->Nivel</td></tr></tr>";
            }
            echo"</table>";
            echo"</div>";

        }
    }