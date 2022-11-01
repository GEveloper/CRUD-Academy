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

        <?php
            $sql = "
            SELECT
                lecturers.id,
                lecturers.fullname,
                lecturers.gender,
                lecturers.degree
            FROM lecturers
            ORDER BY lecturers.id
            ";
            $result = mysqli_query($link, $sql);

            while ($lecturer = mysqli_fetch_assoc($result)) {
                echo '<tr id="student-' . $lecturer["id"] . '">';
                echo "<td>" . $lecturer["id"] . "</td>";
                echo "<td>" . $lecturer["fullname"] . "</td>";
                echo "<td>" . $lecturer["gender"] . "</td>";
                echo "<td>" . $lecturer["degree"] . "</td>";
                echo '<td><a href="lecturer-delete.php?id=' . $lecturer["id"] . '">❌</a></td>';
                echo "</tr>";
            }
        ?>
    </table>

<?php
include "footer.php";
?>
