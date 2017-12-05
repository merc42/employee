<?php
class employee{ 
	var $id;
	var $first_name; 
	var $last_name; 
	var $patronymic;
	var $address;
	var $phone;
	

function add_form(){
	echo '<h2>Добавление информации о сотруднике</h2>';  
	echo '<form name="addform" action="'.$_SERVER['PHP_SELF'].'?action=add" method="post">'; 
	echo '<table>';
	echo '<tr>';
	echo '<td>Фамилия</td>';
	echo '<td><input type="text" name="last_name"required></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Имя</td>';
	echo '<td><input type="text" name="first_name"required></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Отчество</td>';
	echo '<td><input type="text" name="patronymic"required></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Адрес</td>';
	echo '<td><input type="text" name="address"required></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Номер телефона</td>';
	echo '<td><input type="text" name="phone"pattern="[0-9]{7,}"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><br><input type="submit" name="submit" value="Сохранить"></td>';
	echo '<td><br><button type="button" onClick="history.back();">Отменить</button></td>';
	echo '</tr>';
	echo '</table>';
	echo '</f';
}	
	
function add(){
	$this->first_name=mysql_escape_string($_POST['first_name']); 
	$this->last_name=mysql_escape_string($_POST['last_name']);
	$this->patronymic=mysql_escape_string($_POST['patronymic']);
	$this->address=mysql_escape_string($_POST['address']);
	$this->phone=mysql_escape_string($_POST['phone']);
	$query = "INSERT INTO items (first_name, last_name, patronymic, address, phone) VALUES ('".$this->first_name."', '".$this->last_name."','".$this->patronymic."','".$this->address."','".$this->phone."');"; 
	mysql_query ($query);
	header( 'Location: '.$_SERVER['PHP_SELF']);
	die();
}

function show_list(){
	$select_sql = "SELECT id, first_name, last_name, patronymic, address, phone FROM items";
	$result = mysql_query($select_sql);
	echo '<title>Отдел кадров</title>';
	echo '<h2>Данные сотрудников</h2>'; 
	echo '<table border="1" cellpadding="2" cellspacing="0">'; 
	echo '<tr><th>Код сотрудника</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Адрес</th><th>Номер телефона</th>'; 
	while ($row = mysql_fetch_array($result)){
	$this->id=$row['id'];
	$this->last_name =$row['last_name'];
	$this->first_name=$row['first_name'];
	$this->patronymic=$row['patronymic'];
	$this->address=$row['address'];
	$this->phone=$row['phone'];
	echo '<tr>'; 
	echo '<td><center>'.$this->id.'<center></td>'; 
	echo '<td>'.$this->last_name.'</td>'; 
	echo '<td>'.$this->first_name.'</td>'; 
	echo '<td>'.$this->patronymic.'</td>'; 
	echo '<td>'.$this->address.'</td>'; 
	echo '<td>'.$this->phone.'</td>';
	echo '<td><a href="'.$_SERVER['PHP_SELF'].'?action=editform&id='.$this->id.'">Ред.</a></td>'; 
	echo '<td><a href="'.$_SERVER['PHP_SELF'].'?action=delete&id='.$this->id.'">Удл.</a></td>'; 
	}
	echo '</table>';
	echo '</br>';
	echo '<form name="show" action="'.$_SERVER['PHP_SELF'].'?action=addform" method="post">';
	echo'<input type="submit" value="Добавить"></form>';
	echo '<td><a href="'.$_SERVER['PHP_SELF'].'?action=showdel">Уволенные сотрудники</a></td>'; 
}

function edit_form(){
	$this->id=$_GET['id'];
	$query = 'SELECT first_name, last_name, patronymic, address, phone FROM items WHERE id='.$_GET['id']; 
	$res = mysql_query($query); 
	$item = mysql_fetch_array($res);
	$this->last_name=$item['last_name']; 
	$this->first_name=$item['first_name'];
	$this->patronymic=$item['patronymic'];
	$this->address=$item['address'];
	$this->phone=$item['phone'];
	echo '<title>Отдел кадров</title>';
	echo '<h2>Редактирование информации о сотруднике</h2>'; 
	echo '<form name="editform" action="'.$_SERVER['PHP_SELF'].'?action=update&id='.$this->id.'" method="POST">';
	echo '<table>'; 
	echo '<tr>'; 
	echo '<td>Фамилия</td>'; 
	echo '<td><input type="text" name="last_name" value="'.$this->last_name.'"required></td>'; 
	echo '</tr>'; 
	echo '<tr>'; 
	echo '<td>Имя</td>'; 
	echo '<td><input type="text" name="first_name" value="'.$this->first_name.'"required></td>';
	echo '</tr>'; 
	echo '<tr>'; 
	echo '<td>Отчество</td>'; 
	echo '<td><input type="text" name="patronymic" value="'.$this->patronymic.'"required></td>';
	echo '</tr>'; 
	echo '<tr>'; 
	echo '<td>Адрес</td>'; 
	echo '<td><input type="text" name="address" value="'.$this->address.'"required></td>';
	echo '</tr>'; 
	echo '<tr>'; 
	echo '<td>Номер телефона</td>'; 
	echo '<td><input type="text" name="phone" value="'.$this->phone.'"pattern="[0-9]{7,}"></td>';
	echo '</tr>'; 
	echo '<tr>'; 
	echo '<td><br><input type="submit" value="Сохранить"></td>'; 
	echo '<td><br><button type="button" onClick="history.back();">Отменить</button></td>'; 
	echo '</tr>'; 
	echo '</table>'; 
	echo '</form>'; 
}

function update(){ 
	$this->id = $_GET['id'];
	$this->first_name = mysql_escape_string($_POST['first_name']); 
	$this->last_name = mysql_escape_string($_POST['last_name']);
	$this->patronymic= mysql_escape_string($_POST['patronymic']);
	$this->address = mysql_escape_string($_POST['address']);
	$this->phone = mysql_escape_string($_POST['phone']);
	$query = "UPDATE items SET first_name='".$this->first_name."', last_name='".$this->last_name."', patronymic='".$this->patronymic."', address='".$this->address."', phone='".$this->phone."' WHERE id=".$this->id; 
	mysql_query ($query ); 
	header( 'Location: '.$_SERVER['PHP_SELF']);
	die();
}

function delete_line($id){ 
	$this->id = $id; 
	$query = "DELETE FROM items WHERE id=".$id; 
	mysql_query ( $query );
	//header( 'Location: '.$_SERVER['PHP_SELF']);
	die();
} 
 
 public function add_del($id, $first, $last, $pat, $address, $phone){ 
	$this->id=$id;
	$this->first_name=$first;
	$this->last_name=$last;
	$this->patronymic=$pat;
	$this->address=$address;
	$this->phone=$phone;
	$query = "INSERT INTO items2 (id, first_name, last_name, patronymic, address, phone) VALUES ('".$id."','".$first."', '".$last."', '".$pat."', '".$address."', '".$phone."');"; 
	header( 'Location: '.$_SERVER['PHP_SELF']);
	mysql_query ( $query ); 
} 
 
function dismissal(){
    
    $this->id=$_GET['id'];
    $select_sql = "SELECT id, first_name, last_name, patronymic, address, phone FROM items WHERE id=".$this->id;
	$result = mysql_query($select_sql);
	while ($row = mysql_fetch_array($result)){
	$this->first_name=$row['first_name'];
	$this->last_name=$row['last_name'];
	$this->patronymic=$row['patronymic'];
	$this->address=$row['address'];
	$this->phone=$row['phone'];
	}
	$this->add_del($this->id, $this->first_name, $this->last_name, $this->patronymic, $this->address, $this->phone);
	$this->delete_line($this->id);
	header( 'Location: '.$_SERVER['PHP_SELF']);
	echo $_SERVER['PHP_SELF'];
	die();
}

function show_del(){
    require 'connect.php';
	$select_sql = "SELECT id, first_name, last_name, patronymic, address, phone FROM items2";
	$result = mysql_query($select_sql);
	echo '<title>Отдел кадров</title>';
	echo '<h2>Данные уволенных сотрудников</h2>'; 
	echo '<table border="1" cellpadding="2" cellspacing="0">'; 
	echo '<tr><th>Код сотрудника</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Адрес</th><th>Номер телефона</th>'; 
	while ($row = mysql_fetch_array($result)){
	$this->id=$row['id'];
	$this->last_name=$row['last_name'];
	$this->first_name=$row['first_name'];
	$this->patronymic=$row['patronymic'];
	$this->address=$row['address'];
	$this->phone=$row['phone'];
	echo '<tr>'; 
	echo '<td><center>'.$this->id.'<center></td>'; 
	echo '<td>'.$this->last_name.'</td>';
	echo '<td>'.$this->first_name.'</td>'; 
	echo '<td>'.$this->patronymic.'</td>';
	echo '<td>'.$this->address.'</td>';
	echo '<td>'.$this->phone.'</td>';
	}
	
	echo '</table>';
	echo '<br>';
	echo '<br><a href="'.$_SERVER['PHP_SELF'].'?action=showlist">Действующие сотрудники</a></br>'; 
	die(mysql_error());
	
}

}
?>
