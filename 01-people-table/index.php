<?php

// Place code here
$people = [
    ['id' => 1, 'first_name' => 'John', 'last_name' => 'Smith', 'email' => 'john.smith@hotmail.com'],
    ['id' => 2, 'first_name' => 'Paul', 'last_name' => 'Allen', 'email' => 'paul.allen@microsoft.com'],
    ['id' => 3, 'first_name' => 'James', 'last_name' => 'Johnston', 'email' => 'james.johnston@gmail.com'],
    ['id' => 4, 'first_name' => 'Steve', 'last_name' => 'Buscemi', 'email' => 'steve.buscemi@yahoo.com'],
    ['id' => 5, 'first_name' => 'Doug', 'last_name' => 'Simons', 'email' => 'doug.simons@hotmail.com'],
];
?>

<!DOCTYPE html>
<html lang="en">

<body>

    <form method="post">

        <table border="1" bgcolor="#ccc" width="100%" cellpadding="3" cellspacing="1">
            <thead class="example_thead_class" id="example_tr_id">
                <th align="left">id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>email</th>
            </thead>
            <script language="javascript">
                function displaynameandemail(first_name, last_name, email) {
                    alert("Name: " + first_name + " " + last_name + "  Email: " + email);
                }
            </script>

            <?php
            foreach ($people as $person) {
                echo '<tr>';
                echo '<td>' . $person['id'] . '</td>';
                echo '<td>' . $person['first_name'] . '</td>';
                echo '<td>' . $person['last_name'] . '</td>';
                echo '<td>' . $person['email'] . '</td>';
                echo '<td>' . '<input type="submit" name="button" value="button" onclick="displaynameandemail(\'' . $person['first_name'] . '\',\'' . $person['last_name'] . '\',\'' . $person['email'] . '\')"/>' . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </form>
</body>

</html>