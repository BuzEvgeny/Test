<?php
class Form
{
private $o = [];
private $i = [];
private $p = [];
private $s = [];
private $c;
private $form;

function open( $o){
	$this->o = $o;
	foreach($o as $key => $value){
		
		$res .=  $key. "=" ."\"{$value}\"" . " ";
	}
	$this->form = '<form '.$res .'>';
}	
function input($i){
	$this->i = $i;
	foreach($i as $key => $value){
		
		$res .= $key. "=" ."\"{$value}\"" . " ";
	}
	$this->form .= '<input '. $res .'>'. '<br>'. '<br>';
		
}
function password($p){
	$this->p = $p;
	foreach($p as $key => $value){
		
		$res .=  $key. "=" ."\"{$value}\"" . " ";
	}
	$this->form .= '<input '. $res .'>'. '<br>'. '<br>';
}
function submit($s){
	$this->s = $s;
	foreach($s as $key => $value){
		
		$res .=  $key. "=" ."\"{$value}\"" . " ";
	}
	$this->form .= '<input '. $res .'>'. '<br>'. '<br>';
}
function close(){
	$this->form .= '</form>';
}
function render()
	{
echo $this->form ;
	}
}


$form = new Form();
$form->open(['action'=>'index.php', 'method'=>'POST']);
$form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
$form->password(['type'=>'text', 'placeholder'=>'Ваш пароль', 'name'=>'pass']);
$form->submit(['type'=>'submit','value'=>'Отправить']);
$form->close();
$form->render();