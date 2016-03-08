<?PHP
session_start();
function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
}
clearSession();
header('Location: /login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loggin Out</title>
</head>
<body>
	<h1>Loggin ya out</h1>
</body>
</html>