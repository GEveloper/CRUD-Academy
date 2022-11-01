<?php
include "connection.php";

if ($_POST) {
    $sql = "
    INSERT INTO teaches (lecturer_id, group_id)
    VALUES ('" . $_POST["lecturer_id"] . "', '" . $_POST["group_id"] . "')
    ";
    mysqli_query($link, $sql);
    header('Location: teaching.php');
} else {
    include 'header.php';
?>

<nav>
    <a href="students.php">Students</a>
    <a href="groups.php">Groups</a>
    <a href="lecturers.php" class="active">Lecturers</a>
    <a href="teaching.php">Teaching Process</a>
</nav>

<form action="" method="post">
    <label>Lecturer:</label>
    <select name="lecturer_id">
        <?php
            $sql = "
            SELECT
                lecturers.id,
                lecturers.fullname
            FROM lecturers
            ORDER BY lecturers.id
            ";
            $result = mysqli_query($link, $sql);

            while ($lecturer = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $lecturer["id"] . '">' . $lecturer["fullname"] . '</option>';
            }
        ?>
    </select>
    <br>

    <label>Group:</label>
    <select name="group_id">
        <?php
            $sql = "
            SELECT
                groups.id,
                groups.name
            FROM groups
            ORDER BY groups.id
            ";
            $result = mysqli_query($link, $sql);

            while ($group = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $group["id"] . '">' . $group["name"] . '</option>';
            }
        ?>
    </select>
    <br>

    <input type="submit" value="Assign Lecturer to Group">
</form>

<?php
include 'footer.php';
}
?>
