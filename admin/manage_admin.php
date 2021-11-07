<?php include("connection/header.php"); ?>
</div>
<title>User - Matrimony</title>
<script type="text/javascript" src="assets/scripts/main.js"></script>

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <h1 style="font-size: 28px; font-weight: 600; color: #444;">User Data</h1>
                </div>
            </div>
            <a href="add.php"><button style="background: #a4133c; border: none; float: right; padding: 10px; margin-top: 5px; color: #fff">Add Admins</button></a><br><br><br>
            <div class="row">
                <table class="table table-hover">
                    <thead style="background-color: black; color: white;">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Admin Name</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action(s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * from admin";
                        $result = mysqli_query($conn, $query);

                        while ($rows = mysqli_fetch_assoc($result)) {
                            $id = $rows['id'];
                            $name = $rows['admin_name'];
                            $email = $rows['email'];
                            $user = $rows['user'];
                            $status = $rows['status'];
                        ?>
                            <tr>
                                <td scope="row"><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $user; ?></td>
                                <td><?php echo $status; ?></td>
                                <td><a href='profile.php?id=<?php echo $id; ?>'><button title='Edit Profile' style='background: #537EC5; width: 40px; padding: 5px; background: #3f37c9; border: 1px solid #3f37c9; border-radius: 4px; color: #fff; cursor: hand;'><i class="fas fa-pen-square"></i></button></a>
                                    <a href='delete.php?id=<?php echo $id; ?>'><button title='Delete Id' style='background: red; width: 40px; padding: 5px; background: #e63946; border: 1px solid #e63946; border-radius: 4px; color: #fff; cursor: hand;'><i class='fas fa-trash'></i></button></a>
                                </td>
                            </tr><?php } ?>
                    </tbody>
                </table>

            </div>