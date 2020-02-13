<?php 

include'../datos/usuarioDao.php';

class UsuarioControlador{

    public function login($usuario,$password){

        $obj_usuario=new Usuario();

        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPassword($password);

        return UsuarioDao::login($obj_usuario);

    }



}
