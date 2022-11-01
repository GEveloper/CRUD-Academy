<?php
include "connection.php";

if ($_POST) {
    $sql = "
    INSERT INTO students (studnum, fullname, gender, group_id)
    VALUES ('" . $_POST["studnum"] . "', '" . $_POST["fullname"] . "', '" . $_POST["gender"] . "', '" . $_POST["group_id"] . "')
    ";
    mysqli_query($link, $sql);
    header('Location: students.php');
} else {
    include 'header.php';
?>

<nav>
    <a href="students.php" class="active">Students</a>
    <a href="groups.php">Groups</a>
    <a href="lecturers.php">Lecturers</a>
    <a href="teaching.php">Teaching Process</a>
</nav>

<form action="" method="post">
    <label>Student number:</label>
    <input type="text" name="studnum">
    <br>

    <label>Student name:</label>
    <input type="text" name="fullname">
    <br>

    <label>Gender:</label>
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <br>

    <label>Group ID:</label>
    <input type="text" name="group_id">
    <br>

    <input type="submit" value="Create Student">
</form>

<?php
include 'footer.php';
}
?>
