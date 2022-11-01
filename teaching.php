<?php
include "header.php";
?>
    <nav>
        <a href="students.php">Students</a>
        <a href="groups.php">Groups</a>
        <a href="lecturers.php">Lecturers</a>
        <a href="teaching.php" class="active">Teaching Process</a>
    </nav>

    <a href="teaches-create.php">➕</a>

    <table border="1">
        <tr>
            <th>#</th>
            <th>Lecturers name</th>
            <th>Group name</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>

        <?php
            $sql = "
            SELECT
                teaches.id,
                lecturers.fullname,
                groups.name AS group_name,
                groups.department
            FROM teaches
            JOIN lecturers ON lecturers.id = teaches.lecturer_id
            JOIN groups ON groups.id = teaches.group_id
            ORDER BY teaches.id
            ";
            $result = mysqli_query($link, $sql);

            while ($teaches = mysqli_fetch_assoc($result)) {
                echo '<tr id="student-' . $teaches["id"] . '">';
                echo "<td>" . $teaches["id"] . "</td>";
                echo "<td>" . $teaches["fullname"] . "</td>";
                echo "<td>" . $teaches["group_name"] . "</td>";
                echo "<td>" . $teaches["department"] . "</td>";
                echo '<td><a href="teaches-delete.php?id=' . $teaches["id"] . '">❌</a></td>';
                echo "</tr>";
            }
        ?>
    </table>

<?php
include "footer.php";
?>
