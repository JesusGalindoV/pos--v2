<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=pos",
			            "root",
			            "chuchinj002911");

		$link->exec("set names utf8");

		return $link;

	}

}