<?php
include "header.php";
?>
    <nav>
        <a href="students.php">Students</a>
        <a href="groups.php" class="active">Groups</a>
        <a href="lecturers.php">Lecturers</a>
        <a href="teaching.php">Teaching Process</a>
    </nav>

    <table border="1">
        <tr>
            <th>#</th>
            <th>Group name</th>
            <th>Department</th>
            <th>Year</th>
            <th>Total students</th>
            <th>Actions</th>
        </tr>

        <?php
            $sql = "
            SELECT
                groups.id,
                groups.name,
                groups.department,
                groups.year,
                COUNT(students.id) AS total_students
            FROM groups
            LEFT JOIN students ON students.group_id = groups.id
            GROUP BY groups.id
            ORDER BY groups.id
            ";
            $result = mysqli_query($link, $sql);

            while ($group = mysqli_fetch_assoc($result)) {
                echo '<tr id="student-' . $group["id"] . '">';
                echo "<td>" . $group["id"] . "</td>";
                echo "<td>" . $group["name"] . "</td>";
                echo "<td>" . $group["department"] . "</td>";
                echo "<td>" . $group["year"] . "</td>";
                echo "<td>" . $group["total_students"] . "</td>";
                echo '<td><a href="group-delete.php?id=' . $group["id"] . '">❌</a></td>';
                echo "</tr>";
            }
        ?>
    </table>

<?php
include "footer.php";
?>
