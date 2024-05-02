

<?php
$env = file_get_contents(".env");

$lines = explode("\n",$env);

foreach($lines as $line){
  preg_match("/([^#]+)\=(.*)/",$line,$matches);
  if(isset($matches[2])){
    putenv(trim($line));
  }
} 

$db = getenv('Database');//returns: localhost

$host = getenv('Host');
$port =getenv('Port');
$user = getenv('User');
$password = getenv('Password');

phpinfo();


//$dbconn = pg_connect("dbname=$db");
//connect to a database named "mary"

//$dbconn2 = pg_connect("host=$host port=$port dbname=$db");
// connect to a database named "mary" on "localhost" at port "5432"

//$dbconn3 = pg_connect("host=sheep port=5432 dbname=mary user=lamb password=foo");
//connect to a database named "mary" on the host "sheep" with a username and password
//user, pass, host, port, and database name.
//$conn_string = "host=$host port=$port dbname=$db user=$user password=$password";

$conn_string = "postgres://$user:$password@$host:$port/$db";



echo $conn_string;
//$dbconn4 = pg_connect('PgSql:host=$host port=$port dbname=$db user=$user password=$password');
//$dbh = new PDO('pgSql:$conn_string');
$dbconn4 = pg_connect($conn_string) ;
if(!$dbconn4){
  echo "Error : Unable to open database\n";
}
$result = pg_query($dbconn4, "select * from sach");
var_dump(pg_fetch_all($result));
//connect to a database named "test" on the host "sheep" with a username and password

//$dbconn5 = pg_connect("host=localhost options='--client_encoding=UTF8'");
//connect to a database on "localhost" and set the command line parameter which tells the encoding is in UTF-8

?>
