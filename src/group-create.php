<?php
include "connection.php";

if ($_POST) {
    $sql = "
    INSERT INTO groups (name, department, year)
    VALUES ('" . $_POST["name"] . "', '" . $_POST["department"] . "', '" . $_POST["year"] . "')
    ";
    mysqli_query($link, $sql);
    header('Location: groups.php');
} else {
    include 'header.php';
?>

<nav>
    <a href="students.php">Students</a>
    <a href="groups.php" class="active">Groups</a>
    <a href="lecturers.php">Lecturers</a>
    <a href="teaching.php">Teaching Process</a>
</nav>

<form action="" method="post">
    <label>Group name:</label>
    <input type="text" name="name">
    <br>

    <label>Department:</label>
    <input type="text" name="department">
    <br>

    <label>Year:</label>
    <input type="text" name="year">
    <br>

    <input type="submit" value="Create Group">
</form>

<?php
include 'footer.php';
}
?>
