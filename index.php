<html>
<head><title></title></head>
<body>
<table border="2">
    <?php
    if (isset($_POST ['submit'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        for ($x = 1; $x <= $n1; $x++) {
            echo "<tr>";
            for ($y = 1; $y <= $n2; $y++) {
                echo "<td>";
                echo $x * $y . "</br>";
                echo "</td>";
            }
            echo "</tr>";
        }
    }
    ?>
</table>
<form method="post">
    <label>number1:</label><br/>
    <input type="number" name="n1"/><br/>
    <label>number2:</label><br/>
    <input type="number" name="n2"/><br/>
    <input type="submit" name="submit" value="run"/>
</form>
</body>
</html>