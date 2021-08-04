<?php include_once("connection/db.php"); ?>
<?php
if (isset($_SESSION['admin_name'])) {
} else {
    echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\">";
    exit();
}
?>

<?php
$admin_id = $_GET['id'];
$query = "SELECT * from admin WHERE id = '$admin_id'";
$result = mysqli_query($conn, $query);

while ($rows = mysqli_fetch_assoc($result)) {
    $id = $rows['id'];
    $admin_name = $rows['admin_name'];
    $email = $rows['email'];
    $admin_password = $rows['admin_password'];
    $user = $rows['user'];
    $status = $rows['status'];
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<div class="sidebar" id="sidebar_toggle" style="background: #a4133c;">
    <br><br><br>
        <p style="font-weight: 600; margin-left: 30px; font-size: 12px; color: #98c1d9;">Dashboard</p><br>
        <button class="sidebar_link2" onclick="main3()"><i class="fas fa-users-cog" style="padding-right: 15px;"></i> Admin Profile</button>
</div>
<div class="header" id="header_toggle">
    <div style="padding: 10px;">
        <button id="hide_btn" style="background: #fff; float: left;  border: 1px solid #eee; padding: 10px; margin-top: 5px; color: #888;" onclick="panel1()"><i class="fas fa-bars"></i></button>
        <button id="show_btn" style="display: none; float: left; background: #fff; border: 1px solid #eee; padding: 10px; margin-top: 5px; color: #888;" onclick="panel2()"><i class="fas fa-bars"></i></button>
        <a href='index.php'><button id="Home" style="background: #fff; float: left;  border: 1px solid #eee; padding: 10px; margin-top: 5px; color: #888; margin-left: 10px;"><i class="fas fa-home"></i></button></a>
        <a href='logout.php'><button id="logout" style="float: right; background: #a4133c; border: 1px solid #a4133c; border-radius: 8px; padding: 10px; margin-top: 5px; color: #fff;" onclick="panel2()"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
        <button style="background: #fff; float: right; border: 0 none; padding: 2px; margin-top: 5px; color: #888; margin-right: 20px;">
            <p style="float: right; font-size: 14px; font-weight: 600; margin-top: 5px; color:#001d3d;">Hello,  <?php echo $admin_name;?> <i class="fas fa-smile-wink" style="color: #e8c15f; font-size: 14px;"></i></p>
            <img src='images/logo.png' width="25px" style="float: right; margin-right: 05px; ">
        </button>
        <button style="background: #fff; float: right; border: 0 none; padding: 2px; margin-top: 5px; color: #888; margin-right: 20px;">
            <label id="seconds" style="float: right; font-size: 14px; font-weight: 600; margin-top: 5px; color:#001d3d;">00</label>
            <f style="float: right; font-size: 14px; font-weight: 600; margin-top: 5px; color:#001d3d;">:</f><label id="minutes" style="float: right; font-size: 14px; font-weight: 600; margin-top: 5px; color:#001d3d;">00</label>
            <f style="float: right; font-size: 14px; font-weight: 600; margin-top: 5px; color:#001d3d;">Time : &nbsp;</f>
        </button>
        <script>
            var minutesLabel = document.getElementById("minutes");
            var secondsLabel = document.getElementById("seconds");
            var totalSeconds = 0;
            setInterval(setTime, 1000);

            function setTime() {
                ++totalSeconds;
                secondsLabel.innerHTML = pad(totalSeconds % 60);
                minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
            }

            function pad(val) {
                var valString = val + "";
                if (valString.length < 2) {
                    return "0" + valString;
                } else {
                    return valString;
                }
            }
        </script>
    </div>
</div>
<style type="text/css">
    .sidebar {
        width: 20%;
        height: 100%;
        background: #001d3d;
        position: fixed;
    }

    .header {
        width: 80%;
        background: #fff;
        border-bottom: 1px solid #eee;
        height: 65px;
        position: absolute;
        right: 0;
    }

    #body_area {
        width: 80%;
        background: #fff;
        right: 0;
        top: 70;
        position: absolute;
    }
</style>
<script>
    function panel1() {
        document.getElementById("sidebar_toggle").style.width = '0%';
        document.getElementById("sidebar_toggle").style.display = 'none';
        document.getElementById("header_toggle").style.width = '100%';
        document.getElementById("body_area").style.width = '100%';
        document.getElementById("show_btn").style.display = 'block';
        document.getElementById("hide_btn").style.display = 'none';
    }

    function panel2() {
        document.getElementById("sidebar_toggle").style.width = '20%';
        document.getElementById("sidebar_toggle").style.display = 'block';
        document.getElementById("header_toggle").style.width = '80%';
        document.getElementById("body_area").style.width = '80%';
        document.getElementById("show_btn").style.display = 'none';
        document.getElementById("hide_btn").style.display = 'block';
    }
</script>
<?php
        $reg = @$_POST['reg'];
        $un = strip_tags(@$_POST['admin_name']);
        $em = strip_tags(@$_POST['email']);
        $user_type = strip_tags(@$_POST['user']);
        $status_type = strip_tags(@$_POST['status']);
        $password = strip_tags(@$_POST['admin_password']);
        if ($reg) {
            $sql = "UPDATE `admin` SET `admin_name`= '$un', `email`= '$em', `admin_password`= '$password', `user`= '$user_type', `status`= '$status_type' WHERE id= '$admin_id'";
            $rt = mysqli_query($conn, $sql);

            if ($rt) {
                echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
            } else {
                echo "<h1> ERROR!</h1> " . $sql;
            }
        }

    ?>
<div id='body_area'>
<div style="padding: 120px;">
    <div style="margin-right: auto; margin-left: auto; width: 950px; border: 2px solid #eee; border-radius: 8px;">
        <div style="padding: 40px;">
            <form action="profile.php?id=<?php echo $admin_id; ?>" method="post">
                <h1 style="font-size: 28px; font-weight: 600; color: #444; line-height: 60px;"><i class="fas fa-plus" style="font-size: 28px;"></i> Assign Handler</h1><br>
                <center><img src='images/assign.svg' width="200"></center><br>
                <input type="text" name="admin_name" value="<?php echo $admin_name;?>" placeholder="Username" class="input_styler2" />
                <input type="email" name="email" value="<?php echo $email;?>" placeholder="Email" class="input_styler2" />
                <select name="user" class="input_styler2">
                    <option active><?php echo $user; ?></option>
                    <option value="">Select Role</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Manager">Manager</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="User">User</option>
                </select><br><br>
                <select name="status" class="input_styler2">
                    <option active><?php echo $status; ?></option>
                    <option value="">Select Status</option>
                    <option value="Active">Active</option>
                    <option value="In-Active">In-Active</option>
                </select><br><br>
                <p style="font-size: 13px; color: #666;">Password</p>
                <input type="text" name="admin_password" value="<?php echo $admin_password;?>" class="input_styler2" /><br><br>
                <input type="submit" name="reg" value="Assign" class="submit_styler">
            </form>
        </div>
    </div>
</div>
</div><?php } ?>
</html>