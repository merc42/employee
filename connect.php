<?php
mysql_connect("localhost", "046770183_merc42", "12345")
or die("<p>ќшибка подключени¤ к базе данных! " . mysql_error() . "</p>");


mysql_select_db("most-1996_42")
 or die("<p>ќшибка выбора базы данных! ". mysql_error() . "</p>");

?>
