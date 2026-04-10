<?php include("head.html")
?>
<body>
<div class="register">
<form action="connect.php" method="post">
<br><br>
    <label for="username">NAME</label>
    <input type="text" size="20" name="n" placeholder="enter your name" required><br><br>
    <label for="age">AGE</label>
    <input type="number" size="3" name="a" placeholder="enter your age" required><br><br>
    <label for="gender">GENDER</label>
    <input type="radio" value="male" name="g">male
    <input type="radio" value="female" name="g">female
    <input type="radio" value="others" name="g">others<br><br>
    <label for="ticket">TICKET CATEGORY</label>
    <select name="t">
        <option value="KIDS">KIDS</option>
        <option value="TEENAGERS">TEENAGERS</option>
        <option value="ADULTS">ADULTS</option>
        <option value="VISITORS">VISITORS</option>
    </select><br><br>
    <label for="date">DATE</label>
    <input type="date" name="d"><br><br>
<input type="submit" value="REGISTER">
<input type="reset" valur="CANCEL">
</form>
</div>
</body>
<?php include("foot.html")
?>