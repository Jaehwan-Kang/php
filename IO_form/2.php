<html>
<body>
    <form method="get" action="2.php">
        id :  <input type="text" name="id" />
        password :  <input type="text" name="password" />
       
        <input type="submit" />
    </form>
<?php
echo $_GET['id'].','.$_GET['password'];
?>
</body>
</html>