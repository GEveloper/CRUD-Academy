<?php
include "header.php";
?>
    <nav>
        <a href="students.php" class="active">Students</a>
        <a href="groups.php">Groups</a>
        <a href="lecturers.php">Lecturers</a>
        <a href="teaching.php">Teaching Process</a>
    </nav>

    <a href="student-create.php">➕</a>

    <table border="1">
        <tr>
            <th>#</th>
            <th>Student number</th>
            <th>Student name</th>
            <th>Gender</th>
            <th>Group</th>
            <th>Actions</th>
        </tr>

        <?php
            $sql = "

            SELECT
                students.id,
                students.studnum,
                students.fullname,
                students.gender,
                groups.name AS group_name
            FROM students
            LEFT JOIN groups ON groups.id = students.group_id
            ORDER BY students.id

            ";
            $result = mysqli_query($link, $sql);

            while ($student = mysqli_fetch_assoc($result)) {
                echo '<tr id="student-' . $student["id"] . '">';
                echo "<td>" . $student["id"] . "</td>";
                echo "<td>" . $student["studnum"] . "</td>";
                echo "<td>" . $student["fullname"] . "</td>";
                echo "<td>" . $student["gender"] . "</td>";
                echo "<td>" . $student["group_name"] . "</td>";
                echo '<td><a href="student-delete.php?id=' . $student["id"] . '">❌</a></td>';
                echo "</tr>";
            }
        ?>
    </table>

<?php
include "footer.php";
?>
