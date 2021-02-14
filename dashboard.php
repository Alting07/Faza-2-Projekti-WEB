<?php
require 'Components/headerwtransparentlogo.php';
include_once 'logic/variables.php';
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $userList = VariablesExample::getUsers();
} else {
    header("Location:login.php");
}
?>


        <div>
            <h1>This is Dashboard page</h1>
            <div>
                <h2>User list:</h2>
                <table>
                    <thead>
                        <tr>
                            <td>Emri</td>
                            <td>Mbiemri</td>
                            <td>Email</td>
                            <td>Detajet</td>
                            <td>Modifiko</td>
                            <td>Fshij</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($userList as $user) {
                        ?>
                            <tr>
                                <td><?php echo $user['userName']; ?></td>
                                <td><?php echo $user['userLastName']; ?></td>
                                <td><?php echo $user['userid']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


        
    </body>
</html>
