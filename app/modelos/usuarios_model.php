<?php

class usuarios_model {

    private $db;
    private $id;
    private $email;
    private $password;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $correo;
    private $fechaNacimiento;
    private $pais;
    private $ciudad;
    private $direccion;
    private $codPos;
    private $nacionalidad;
    private $permisoConducir;
    private $puestoLaboral;
    private $foto;
    private $resumenProfesional;
    private $fechaCreacion;

    function __construct($db) {
        $this->db = Conectar::conexion();
    }

    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getPais() {
        return $this->pais;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCodPos() {
        return $this->codPos;
    }

    function getNacionalidad() {
        return $this->nacionalidad;
    }

    function getPermisoConducir() {
        return $this->permisoConducir;
    }

    function getPuestoLaboral() {
        return $this->puestoLaboral;
    }

    function getFoto() {
        return $this->foto;
    }

    function getResumenProfesional() {
        return $this->resumenProfesional;
    }

    function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCodPos($codPos) {
        $this->codPos = $codPos;
    }

    function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    function setPermisoConducir($permisoConducir) {
        $this->permisoConducir = $permisoConducir;
    }

    function setPuestoLaboral($puestoLaboral) {
        $this->puestoLaboral = $puestoLaboral;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setResumenProfesional($resumenProfesional) {
        $this->resumenProfesional = $resumenProfesional;
    }

    function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    //Funciones

    function showUser($id) {
        $sql = "SELECT * from usuario WHERE id = '$id';";

        $result = $this->db->query($sql);

        $fila = $result->fetch_assoc();
        return $fila;
    }

}
