<?php include_once("../admin/connection/db.php"); ?>
<!doctype html>
<html>
    <head>
        <title>How to Export MySQL data to CSV by Date range with PHP</title>
     
        <link href="style.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    </head>
    <body>
        <div >
            
            <form method='post' action='download.php'>

                <!-- Datepicker -->
                <input type='text' class='datepicker' placeholder="From date" name="from_date" id='from_date' readonly>
                <input type='text' class='datepicker' placeholder="To date" name="to_date" id='to_date' readonly>

                <!-- Export button -->
                <input type='submit' value='Export' name='Export'>
            </form>  
        </div>

        <!-- Script -->
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
    </body>
</html>

