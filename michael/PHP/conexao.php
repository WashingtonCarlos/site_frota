<?php
/* @author Cesar Szpak - Celke - cesar@celke.com.br
 * @pagina desenvolvida usando FullCalendar e Bootstrap 4,
 * o código é aberto e o uso é free,
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'pmu');
define('PORT', 3306);

$conn = new PDO('mysql:host=' . HOST . ';port='.PORT.';dbname=' . DBNAME . ';', USER, PASS);


?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pmu";


//create connection
$con = mysqli_connect($servername,$username,$password,$dbname);

//check connection
if(!$con){
	die("Connection failed: " . $con->connect_error);
}
?>


