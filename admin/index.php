<?php include_once("connection/db.php"); ?>
<?php
if (isset($_SESSION['admin_name'])) {
} else {
    echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\">";
    exit();
}
?>
<?php
$query = "SELECT * from admin WHERE id = '$admin_id'";
$result = mysqli_query($conn, $query);

while ($rows = mysqli_fetch_assoc($result)) {
    $id = $rows['id'];
    $admin_name = $rows['admin_name'];
    $admin_password = $rows['admin_password'];
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>

<div class="sidebar" id="sidebar_toggle" style="background: #a4133c;">
<button id="hide_btn1" style="background: #fff; float: left;  border: 1px solid #eee; padding: 10px; margin-top: 5px; color: #888;" onclick="panel1()"><i class="fas fa-bars"></i></button>
        <button id="show_btn1" style="display: none; float: left; background: #fff; border: 1px solid #eee; padding: 10px; margin-top: 5px; color: #888;" onclick="panel2()"><i class="fas fa-bars"></i></button>
    <br><br><br>
        <center><img src="images/logo.png" width="120px"></center><br><br><br>
        <button class="sidebar_link" onclick="main1()"><i class="fas fa-home" style="padding-right: 15px;"></i> Dashboard</button>
        <br><br>
        <p style="font-weight: 600; margin-left: 30px; font-size: 12px; color: #98c1d9;">MANAGEMENT</p><br>
        <button class="sidebar_link" onclick="main2()"><i class="fas fa-user" style="padding-right: 15px;"></i> Users</button>
        <br><br>
        <p style="font-weight: 600; margin-left: 30px; font-size: 12px; color: #98c1d9;">Administration</p><br>
        <button class="sidebar_link2" onclick="main3()"><i class="fas fa-users-cog" style="padding-right: 15px;"></i> Manage Admins</button>
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

    function panel3() {
        document.getElementById("sidebar_toggle").style.width = '20%';
        document.getElementById("sidebar_toggle").style.display = 'block';
        document.getElementById("header_toggle").style.width = '80%';
        document.getElementById("body_area").style.width = '80%';
        document.getElementById("show_btn").style.display = 'none';
        document.getElementById("hide_btn").style.display = 'block';
    }
</script>
<div id='body_area'>
<div id="area_1" style="display: block;">
        <div style="padding: 20px 60px;">
            <h1 style="font-size: 28px; font-weight: 600; color: #444;">Dashboard</h1>
            <br>
            <?php
            $sql = "SELECT * FROM users ORDER BY id";

            if ($result = mysqli_query($conn, $sql)) {
                // Return the number of rows in result set
                $admin_rowcount = mysqli_num_rows($result);
            }
            ?>
            <div style="border: 2px solid #ef476f; float: left; margin-right: 15px; margin-top: 15px; background: #f72585; box-shadow: 1px 1px 8px #888; width: 300px; height: 120px; border-radius: 4px;">
                <div style="padding: 20px" onclick="main2()">
                    <i class="fas fa-user" style="padding-right: 30px; font-size: 80px; color: #ffafcc; float: left;"></i>
                    <p style="font-weight: 600; font-size: 18px; color: #ffafcc; line-height: 40px;">Total Profiles</p>
                    <p style="font-weight: 600; font-size: 14px; color: #fff;"><?php echo $admin_rowcount; ?> Members</p>
                </div>
            </div>
            <?php
            $sql = "SELECT * FROM users WHERE sex ='male' ORDER BY id";

            if ($result = mysqli_query($conn, $sql)) {
                // Return the number of rows in result set
                $employees_rowcount = mysqli_num_rows($result);
            }
            ?>
            <div style="border: 2px solid #4361ee; float: left; margin-right: 15px; margin-top: 15px; background: #4361ee; box-shadow: 1px 1px 8px #888; width: 300px; height: 120px; border-radius: 4px;">
                <div style="padding: 20px" onclick="main3()">
                    <i class="fa fa-mars" aria-hidden="true" style="padding-right: 30px; font-size: 80px; color: #90e0ef; float: left;"></i>
                    <p style="font-weight: 600; font-size: 18px; color: #90e0ef; line-height: 40px;">Male</p>
                    <p style="font-weight: 600; font-size: 14px; color: #fff;"><?php echo $employees_rowcount; ?> Members</p>
                </div>
            </div>
            <?php
            $sql = "SELECT * FROM users WHERE sex ='female' ORDER BY id";

            if ($result = mysqli_query($conn, $sql)) {
                // Return the number of rows in result set
                $sub_employees_rowcount = mysqli_num_rows($result);
            }
            ?>
            <div style="border: 2px solid #006d77; float: left; margin-right: 15px; margin-top: 15px; background: #006d77; box-shadow: 1px 1px 8px #888; width: 300px; height: 120px; border-radius: 4px;">
                <div style="padding: 20px" onclick="main4()">
                    <i class="fa fa-venus" aria-hidden="true" style="padding-right: 10px; font-size: 80px; color: #83c5be; float: left;"></i>
                    <p style="font-weight: 600; font-size: 18px; color: #83c5be; line-height: 40px;">Female</p>
                    <p style="font-weight: 600; font-size: 14px; color: #fff;"><?php echo $sub_employees_rowcount; ?> Members</p>
                </div>
            </div>
            <?php
            $sql = "SELECT * FROM users ORDER BY id";

            if ($result = mysqli_query($conn, $sql)) {
                // Return the number of rows in result set
                $sims_rowcount = mysqli_num_rows($result);
            }
            ?>
            <div style="border: 2px solid #fca311; float: left; margin-right: 15px; margin-top: 15px; background: #fca311; box-shadow: 1px 1px 8px #888; width: 300px; height: 120px; border-radius: 4px;">
                <div style="padding: 20px"> 
                    <i class="fas fa-store" style="padding-right: 10px; font-size: 80px; color: #fb5607; float: left;"></i>
                    <p style="font-weight: 600; font-size: 18px; color: #fb5607; line-height: 40px;">Engaged</p>
                    <p style="font-weight: 600; font-size: 14px; color: #fff;"><?php echo $sims_rowcount; ?> Members</p>
                </div>
            </div>
            <div style="border: 2px solid #219ebc; float: left; margin-right: 15px; margin-top: 15px; background: #219ebc; box-shadow: 1px 1px 8px #888; width: 300px; height: 170px; border-radius: 4px;">
                <div style="padding: 20px"> 
                    <form method='post' action='download_date.php'>
                    <!-- Datepicker -->
                    <input type='text' class='datepicker' placeholder="From date" style="background-color: #8ecae6; border: 3px solid white; padding: 3px; color:#eee;" name="from_date" id='from_date' readonly>
                    <br><br>
                    <input type='text' class='datepicker' placeholder="To date" style="background-color: #8ecae6; border: 3px solid white; padding: 3px; color:#eee;" name="to_date" id='to_date' readonly>
                    <!-- Export button -->
                    <input type='submit' value='Export' style="color: #eee; margin: 10px; margin-left: 0px; border: 3px solid white; padding: 3px; width: 80px; background-color: #0096c7;" name='Export'>
                    <a href="download.php"><input type='submit' value='Export All' style="color: #eee; margin: 10px; width:190px; margin-left: 0px; border: 3px solid white; padding: 3px; width: 80px; background-color: #0096c7;"></a>
                    </form>  
                </div>
            </div>
            <script type='text/javascript' >
                $(document).ready(function(){

                // From datepicker
                    $("#from_date").datepicker({ 
                        dateFormat: 'yy-mm-dd',changeYear: true,
                        onSelect: function (selected) {
                        var dt = new Date(selected);
                        dt.setDate(dt.getDate() + 1);
                        $("#to_date").datepicker("option", "minDate", dt);
                    }
                });

                // To datepicker
                    $("#to_date").datepicker({
                            dateFormat: 'yy-mm-dd',changeYear: true,
                            onSelect: function (selected) {
                            var dt = new Date(selected);
                            dt.setDate(dt.getDate() - 1);
                            $("#from_date").datepicker("option", "maxDate", dt);
                        }
                    });
                });
        </script>
            
            <?php 
            $query = "SELECT * FROM `search_name` WHERE 1";
            $result = mysqli_query($conn, $query);
            
            while ($rows = mysqli_fetch_assoc($result)) {
                $id = $rows['id'];
                $search_name_first = $rows['search_name_first'];
            }
            ?>

            
            <?php
                $rename_btn = @$_POST['rename'];
                if($rename_btn){
                $str = "abcdefghijklmnopqrstuvwxyz1234567890";
                $str = str_shuffle($str);
                $str = substr($str, 0, 8);


                $query = "SELECT * FROM `search_name` WHERE 1";
                $result = mysqli_query($conn, $query);

                while ($rows = mysqli_fetch_assoc($result)) {
                $id = $rows['id'];
                $search_name_first = $rows['search_name_first'];
                }

                $query2 = "UPDATE `search_name` SET `search_name_first`='$str.php' WHERE 1";
                $result2 = mysqli_query($conn, $query2);

                rename("../$search_name_first","../$str.php");
                echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\">";
            }
            ?>
            <a href="../<?php echo $search_name_first?>"><div style="border: 2px solid #2b2d42; float: left; margin-right: 15px; margin-top: 15px; background: #2b2d42; box-shadow: 1px 1px 8px #888; width: 300px; height: 170px; border-radius: 4px;">
                <div style="padding: 10px">
                <form method="post" action="index.php" style="display: inline;">
            <input type="submit" name="rename" value="📝 Rename" style=" font-size: 15px; border: none; float: left; background: black; color: #fff; width: 100%; height: 40px; border-radius: 4px;"><br><br>
            </form>
                <p style="font-weight: 600; font-size: 17px; color: #eee; padding: 10px;">Generate Search Page Link</p>
                    <p style="font-weight: 600; font-size: 18px; color: #eee; padding: 10px;"><?php echo $search_name_first?></p>
                </div>
            </div></a>
    </div>
</div>


    <div id="area_2" style="display: none; padding: 30px;">
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #a4133c;
  color: white;
  text-align: center;
}
</style>

<table id="customers">
  <tr>
    <th>Id</th>
    <th>Full Name</th>
    <th>Bride/Groom</th>
    <th>Marital Status</th>
    <th>Date Of Birth</th>
    <th>Primary Number</th>
    <th>Action(s)</th>
    <th>Download</th>
  </tr>
<?php
$query = "SELECT * from users";
$result = mysqli_query($conn, $query);

while ($rows = mysqli_fetch_assoc($result)) {
    $userid = $rows['id'];
    $name = $rows['name'];
    $sex = $rows['sex'];
    if($sex == "male"){
        $sex = "Groom";
    }if($sex == "female"){
        $sex = "Bride";
    }
    $status = $rows['status'];
    if($status == "0"){
        $status = "Un-Married";
    }if($status == "1"){
        $status = "Married";
    }
    $dob = $rows['dob'];
    $phone_number = $rows['phone_number'];

$query2 = "SELECT * FROM `certificate` WHERE user_id ='$userid'";
$result2 = mysqli_query($conn, $query2);

while ($rows = mysqli_fetch_assoc($result2)) {
    $certificate = $rows['certificate_url'];
}

?>
  <tr>
    <td><?php echo $userid;?></td>
    <td><?php echo $name;?></td>
    <td><?php echo $sex;?></td>
    <td><?php echo $status;?></td>
    <td><?php echo $dob;?></td>
    <td><?php echo $phone_number;?></td>
    <td>        <a href='../<?php echo $certificate;?>' target='_blank'><button title='View Image' style='width: 40px; padding: 5px; background: #ffb703; border: 1px solid #ffb703; border-radius: 4px; color: #333; cursor: hand;'><i class='fas fa-archive'></i></button></a>
                <a href="user_profile.php?id=<?php echo $userid; ?>"><button title='Profile' style='background: #537EC5; width: 40px; padding: 5px; background: #3f37c9; border: 1px solid #3f37c9; border-radius: 4px; color: #fff; cursor: hand;'><i class="fas fa-id-card"></i></button></a>
                <a href="delete.php?id=<?php echo $userid;?>"><button title='Delete Id' style='background: red; width: 40px; padding: 5px; background: #e63946; border: 1px solid #e63946; border-radius: 4px; color: #fff; cursor: hand;'><i class='fas fa-trash'></i></button></a></td>
    <td><a href='../<?php echo $certificate;?>' download="certificate_<?php echo $userid; ?>"><button title='Download Certificate' style='width: 40px; padding: 5px; background: green; border: 1px solid green; border-radius: 4px; color: #eee; cursor: hand;'><i class="fas fa-save"></i></button></a></td>
  </tr><?php } ?>
</table>

    </div>


<div id="area_3" style="display: none; padding: 30px;">
<a href="add.php"><button style="background: #a4133c; border: none; float: right; padding: 10px; margin-top: 5px; color: #fff">Add Admins</button></a><br><br><br>
<table id="customers">
  <tr>
    <th>Id</th>
    <th>Admin Name</th>
    <th>E-Mail</th>
    <th>Role</th>
    <th>Status</th>
    <th>Action(s)</th>
  </tr>
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
    <td><?php echo $id;?></td>
    <td><?php echo $name;?></td>
    <td><?php echo $email;?></td>
    <td><?php echo $user;?></td>
    <td><?php echo $status;?></td>
    <td><a href='profile.php?id=<?php echo $id; ?>'><button title='Edit Profile' style='background: #537EC5; width: 40px; padding: 5px; background: #3f37c9; border: 1px solid #3f37c9; border-radius: 4px; color: #fff; cursor: hand;'><i class="fas fa-pen-square"></i></button></a>
        <a href='delete.php?id=<?php echo $id; ?>'><button title='Delete Id' style='background: red; width: 40px; padding: 5px; background: #e63946; border: 1px solid #e63946; border-radius: 4px; color: #fff; cursor: hand;'><i class='fas fa-trash'></i></button></a></td>
  </tr><?php } ?>
</table>

    </div>
    <script>
    function main1() {
        $('#area_1').show();
        $('#area_2').hide();
        $('#area_3').hide();
    }
    function main2() {
        $('#area_1').hide();
        $('#area_2').show();
        $('#area_3').hide();
    }
    function main3() {
        $('#area_1').hide();
        $('#area_2').hide();
        $('#area_3').show();
    }
    </script>
    </html>