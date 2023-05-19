<h1>Welcome to sql lite database</h1>
<?php

class MyDB extends SQLite3
{
   function __construct()
   {
      $this->open('database/kodeTiger.db');
   }
}
$db = new MyDB();

if (!$db) {
   echo $db->lastErrorMsg();
} else {
   echo "Opened database successfully\n";
}
?>