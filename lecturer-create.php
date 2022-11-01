<?php
include "connection.php";
?>

<nav>
    <a href="students.php">Students</a>
    <a href="groups.php">Groups</a>
    <a href="lecturers.php" class="active">Lecturers</a>
    <a href="teaching.php">Teaching Process</a>
</nav>

<form action="" method="post">
    <label>Lecturer name:</label>
    <input type="text" name="fullname">
    <br>

    <label>Gender:</label>
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <br>

    <label>Degree:</label>
    <input type="text" name="degree">
    <br>

    <input type="submit" value="Create Lecturer">
</form>

<?php
include 'footer.php';
?>
