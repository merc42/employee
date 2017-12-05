<?php
require 'connect.php';
include("employee_class.php"); 


$actions = array('showlist', 'addform', 'add', 'editform', 'update', 'delete', 'showdel');
$action = 'showlist';
if ( isset($_GET['action']) and in_array($_GET['action'], $actions) ) $action= $_GET['action'];

switch ($action) 
{ 
  case 'showlist':    // Список всех записей в таблице БД
    $show=new employee();
	$show ->show_list(); break; 
  case 'addform':     // Форма для добавления новой записи 
    $addform=new employee();
	$addform ->add_form(); break; 
  case 'add':         // Добавить новую запись в таблицу БД
    $add=new employee();
	$add ->add(); break;
  case 'editform':    // Форма для редактирования записи 
    $editform=new employee();
	$editform ->edit_form(); break; 
  case 'update':      // Обновить запись в таблице БД
    $update=new employee();
	$update ->update(); break; 
  case 'delete':      // Удалить запись в таблице БД
    $delete=new employee();
	$delete ->dismissal(); 
	
	//$delete=new employee();
	//$delete ->delete_line($id);
	break;
  case 'showdel':      // Список уволенных сотрудников
    $showdel=new employee();
	$showdel ->show_del(); break;
}
?>
