<?php
include "header.php";
?>
    <nav>
        <a href="students.php">Students</a>
        <a href="groups.php">Groups</a>
        <a href="lecturers.php" class="active">Lecturers</a>
        <a href="teaching.php">Teaching Process</a>
    </nav>

    <a href="lecturer-create.php">➕</a>

    <table border="1">
        <tr>
            <th>#</th>
            <th>Lecturer name</th>
            <th>Gender</th>
            <th>Degree</th>
            <th>Actions</th>
        </tr>
    </table>

<?php
include "footer.php";
?>
