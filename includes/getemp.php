<!-- php script for fetching employee from mysql database -->
<?php $sql = "SELECT * FROM employee_details_table";
$result = $link->query($sql); ?>
<?php
if ($result->num_rows > 0) { //the num_rows is a default fuction which is used to calculate the no of rows in  th e db//
    while ($row = $result->fetch_assoc()) {
        echo "<tr class='emp-column'>";
        echo "<td>" . $row["emp_id"] . "</td>";
        echo "<td>" . $row["First_name"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Mobile_Number"] . "</td>";
        echo "<td>" . $row["Gender"] . "</td>";
        echo "<td>" . $row["Date_of_Birth"] . "</td>";
        echo "<td>" . $row["Country"] . "</td>";

        echo "<td>";
        echo "<button class='dot material-symbols-outlined' id='dot-menu' onclick=openMenu(" . $row["emp_id"] . ")>";
        echo "more_horiz";
        echo "<div class='dropdown-content' id='dropdown-content-menu'>";
        echo "</div>";
        echo "</button>";

        echo "</td>";
        echo "</tr>";
    }
} else {
    // echo "No employee data found";
}

?>