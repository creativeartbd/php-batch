<?php 
$connect = mysqli_connect( 'localhost', 'root', '', 'php007');
if( ! $connect ) {		
	die('OOPs, Something wen\'t wrong');
}