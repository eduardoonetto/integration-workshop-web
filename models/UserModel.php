<?php
class UserModel {
    private $conexion;
    private $table = 'users';
    public function __construct() {
        $this->conexion = require('./config/ConnectionSql.php');
    }

    public function obtenerUsuarios() {
        $query = "SELECT * FROM " . $this->table;
        $resultado = mysqli_query($this->conexion, $query);
        mysqli_close($this->conexion);
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }

    public function obtenerUsuarioByEmail($correo) {
        $query = "SELECT NAME, EMAIL, CHANGE_PASSWORD FROM " . $this->table ." WHERE EMAIL = '" .$correo . "'";
        $resultado = mysqli_query($this->conexion, $query);
        mysqli_close($this->conexion);
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }

    public function insertarUsuario($nombre, $correo) {
        $nombre = mysqli_real_escape_string($this->conexion, $nombre);
        $correo = mysqli_real_escape_string($this->conexion, $correo);

        $query = "INSERT INTO " . $this->table . " (nombre, correo) VALUES ('$nombre', '$correo')";
        mysqli_close($this->conexion);
        return mysqli_query($this->conexion, $query);
    }

    public function login($email, $password)
    {
        $passwordMd5 = md5($password);
        $email = mysqli_real_escape_string($this->conexion, $email);
        $consulta = "SELECT EU.name AS User_Name, EU.email AS User_Email, R.name AS Role_Name FROM USERS EU JOIN USERS_ROLES UR ON EU.id = UR.user_id JOIN ROLES R ON UR.role_id = R.id WHERE EU.email = '$email' AND EU.password = '$passwordMd5'";
        $resultado = mysqli_query($this->conexion, $consulta);

        // Comprobar si se encontró un usuario válido
        if ($resultado) {
            $usuario = mysqli_fetch_assoc($resultado);
            mysqli_free_result($resultado);
            return $usuario;
        } else {
            return false; // Usuario no encontrado
        }
    }
}
