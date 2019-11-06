<?php
$_aluno = isset($_POST[aluno]);
$_curso = ($_POST[curso]);
$_horas_de_complementares = ($_POST[_horas_de_complementares]);
$_query = "select * from sakila.usuario where login = '$login'";
$_select = mysql_connect($_query_select);
$_array = mysql_fetch_row($select);
$_
if(mysql_errno($mysql_conect)){

	echo "erro ao conectar ao site";
}else{


header("location: index.php");
}

if($_aluno isset($mysql_connect)){
	echo "ola aluno ";
}else{
	header("location:aluno.php");
}
if($_curso) && ($mysql_connect()){
	echo "entrando na parte de controle de aluno";
}else{
	header("location: aluno.php");
}
if($_array  && (mysql_connect())){
	echo"conectando com o banco de dados";
}else{
	header("location: aluno.php");
}
?>