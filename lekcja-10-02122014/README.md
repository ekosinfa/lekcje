// łączenie z bazą danych

$con = mysqli_connect('host', 'nazwa użytkownika', 'hasło', 'nazwa bazy danych'); 
$query = mysqli_query($con, 'SELECT * FROM test');
$fetch = mysqli_fetch_array($query);
var_dump($fetch);
