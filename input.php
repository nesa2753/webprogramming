<form method="post" action=" >
Name: <input name="username">
<button type="submit">send</button>
</form>

<?php 
if(isset($_POST["username"])) {

$name=htmlspecialchars($_POST["username"]);
echo "Hello," . $name;
}
?>