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
                </div></div>
                        <br>

                        <div class="row">
                            <table class="table table-hover">
                                <thead style="background-color: black; color: white;">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date Of Birth</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Action</th>
                                        <th scope="col">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * from users order by id desc";
                                    $result = mysqli_query($conn, $query);

                                    while ($rows = mysqli_fetch_assoc($result)) {
                                        $userid = $rows['id'];
                                        $name = $rows['name'];
                                        $sex = $rows['sex'];
                                        if ($sex == "male") {
                                            $sex = "Groom";
                                        }
                                        if ($sex == "female") {
                                            $sex = "Bride";
                                        }
                                        $status = $rows['status'];
                                        if ($status == "0") {
                                            $status = "Un-Married";
                                        }
                                        if ($status == "1") {
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
                                            <th scope="row"><?php echo $userid; ?></th>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $sex; ?></td>
                                            <td><?php echo $status; ?></td>
                                            <td><?php echo $dob; ?></td>
                                            <td><?php echo $phone_number; ?></td>
                                            <td> <a href='../<?php echo $certificate; ?>' target='_blank'><button title='View Image' style='width: 40px; padding: 5px; background: #ffb703; border: 1px solid #ffb703; border-radius: 4px; color: #333; cursor: hand;'><i class='fas fa-archive'></i></button></a>
                                                <a href="user_profile.php?id=<?php echo $userid; ?>"><button title='Profile' style='background: #537EC5; width: 40px; padding: 5px; background: #3f37c9; border: 1px solid #3f37c9; border-radius: 4px; color: #fff; cursor: hand;'><i class="fas fa-id-card"></i></button></a>
                                                <a href="delete.php?id=<?php echo $userid; ?>"><button title='Delete Id' style='background: red; width: 40px; padding: 5px; background: #e63946; border: 1px solid #e63946; border-radius: 4px; color: #fff; cursor: hand;'><i class='fas fa-trash'></i></button></a>
                                            </td>
                                            <td><a href='../<?php echo $certificate; ?>' download="certificate_<?php echo $userid; ?>"><button title='Download Certificate' style='width: 40px; padding: 5px; background: green; border: 1px solid green; border-radius: 4px; color: #eee; cursor: hand;'><i class="fas fa-save"></i></button></a></td>
                                        </tr><?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>