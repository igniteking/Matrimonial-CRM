<?php include("connection/header.php"); ?>
</div>
<title>Dashboard - Matrimony</title>
<script type="text/javascript" src="assets/scripts/main.js"></script>

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
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
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Members</div>
                                            <div class="widget-subheading">Total Profiles</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $admin_rowcount; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $sql = "SELECT * FROM users WHERE sex ='male' ORDER BY id";

                            if ($result = mysqli_query($conn, $sql)) {
                                // Return the number of rows in result set
                                $employees_rowcount = mysqli_num_rows($result);
                            }
                            ?>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Male</div>
                                            <div class="widget-subheading">Total Profiles</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $employees_rowcount; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $sql = "SELECT * FROM users WHERE sex ='female' ORDER BY id";

                            if ($result = mysqli_query($conn, $sql)) {
                                // Return the number of rows in result set
                                $sub_employees_rowcount = mysqli_num_rows($result);
                            }
                            ?>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Female</div>
                                            <div class="widget-subheading">Total Profiles</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $sub_employees_rowcount; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $sql = "SELECT * FROM users ORDER BY id";

                        if ($result = mysqli_query($conn, $sql)) {
                            // Return the number of rows in result set
                            $sims_rowcount = mysqli_num_rows($result);
                        }
                        ?><div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Engaged</div>
                                            <div class="widget-subheading">People Engaged</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $sims_rowcount; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Download</div>
                                            <div class="widget-subheading">All user data</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <a href="download.php">
                                                <div class="widget-numbers text-white"><span>Download</span></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type='text/javascript'>
                                $(document).ready(function() {

                                    // From datepicker
                                    $("#from_date").datepicker({
                                        dateFormat: 'yy-mm-dd',
                                        changeYear: true,
                                        onSelect: function(selected) {
                                            var dt = new Date(selected);
                                            dt.setDate(dt.getDate() + 1);
                                            $("#to_date").datepicker("option", "minDate", dt);
                                        }
                                    });

                                    // To datepicker
                                    $("#to_date").datepicker({
                                        dateFormat: 'yy-mm-dd',
                                        changeYear: true,
                                        onSelect: function(selected) {
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
                            if ($rename_btn) {
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

                                rename("../$search_name_first", "../$str.php");
                                echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\">";
                            }
                            ?>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">
                                                <form method="post" action="index.php" style="display: inline;">
                                                    <input type="submit" name="rename" value="📝 Rename" style="font-size: 20px; float: left; border: none; background-color: transparent; color: white; cursor: grab">
                                                </form>
                                            </div>
                                            <div class="widget-subheading"></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><a href="../<?php echo $search_name_first ?>">
                                                        <p style="font-weight: 600; font-size: 18px; color: #eee; padding: 10px;"><?php echo $search_name_first ?></p>
                                            </div>
                                            </a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <form method='post' action='download_date.php'>
                                                    <div class="widget-heading"><input type='text' class='datepicker' placeholder="From date" style="font-size: 20px; background-color: #8ecae6; border: 3px solid white; padding: 3px; color:black;" name="from_date" id='from_date' readonly></div>
                                                    <div class="widget-heading"><input type='text' class='datepicker' placeholder="To date" style="font-size: 20px; background-color: #8ecae6; border: 3px solid white; padding: 3px; color:black;" name="to_date" id='to_date' readonly></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning"><input type='submit' value='Export' style="font-size: 20px; color: #eee; border: 1px solid black; background-color: #0096c7;" name='Export'></div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </body>

                </html>