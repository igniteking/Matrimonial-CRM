<?php include("connection/header.php"); ?>
</div>
<title>Add Profile - Matrimony</title>
<script type="text/javascript" src="assets/scripts/main.js"></script>
<link rel="stylesheet" href="css/main.css">

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <h1 style="font-size: 28px; font-weight: 600; color: #444;">User Data</h1>
                </div>
            </div>
            <?php
            $reg1 = @$_POST['reg'];
            $admin_name = strip_tags(@$_POST['admin_name']);
            $email = strip_tags(@$_POST['email']);
            $user = strip_tags(@$_POST['user']);
            $status = strip_tags(@$_POST['status']);
            $admin_password = strip_tags(@$_POST['admin_password']);
            if ($reg1) {
                $sql2 = "INSERT INTO `admin`(`id`, `admin_name`, `email`, `admin_password`, `user`, `status`) VALUES (NULL , '$admin_name', '$email' , '$admin_password', '$user' , '$status')";
                $rt = mysqli_query($conn, $sql2);

                if ($rt) {
                    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
                } else {
                    echo "<h1> ERROR!</h1> " . $sql2;
                }
            }

            ?>
            <div style="margin-right: auto; margin-left: auto; width: 950px; border: 2px solid #eee; border-radius: 8px;">
                <div style="padding: 40px;">
                    <form action="add.php" method="post">
                        <h1 style="font-size: 28px; font-weight: 600; color: #444; line-height: 60px;"><i class="fas fa-plus" style="font-size: 28px;"></i> Assign Handler</h1><br>
                        <center><img src='images/assign.svg' width="200"></center><br>
                        <input type="text" name="admin_name" placeholder="Username" class="input_styler2" />
                        <input type="email" name="email" placeholder="Email" class="input_styler2" />
                        <select name="user" class="input_styler2">
                            <option value="">Select Role</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Manager">Manager</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="User">User</option>
                        </select><br><br>
                        <select name="status" class="input_styler2">
                            <option value="">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="In-Active">In-Active</option>
                        </select><br><br>
                        <p style="font-size: 13px; color: #666;">Password</p>
                        <input type="text" name="admin_password" class="input_styler2" /><br><br>
                        <input type="submit" name="reg" value="Assign" class="submit_styler">
                    </form>
                </div>
            </div>
        </div>
    </div>

    </html>