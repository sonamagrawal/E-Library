<!DOCTYPE HTML>
<?php
include_once("config.php");


$query = "select first_name,last_name,enrollment_no,roll_no,branch,semester from student_record";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

?>
<html>
<head>
    <title> E-LIBRARY |DUE_CLEARANCE </title>
    <link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3" style="border:1px solid black">
        </div>
        <div class="span9 well" style="border:1px solid black;font-size: 16px">
            <div class="row-fluid">
                <div class="span12" style="background-color: #808080">
                    <h2><strong>CONFIRM DUE CLEARANCE</strong></h2>
                </div>
            </div>
            </br>
            <form action="due_cleared.php" method="POST">
                <div class="row-fluid">
                    <div class="span4">
                        <b>username : </b> <?php echo $row['first_name'] . " " . $row['last_name'] ?>
                    </div>
                    <div class="span4">
                        <b>roll_no. : </b> <?php echo $row['roll_no'] ?>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span4">
                        <b>enrollment_no.: </b> <?php echo $row['enrollment_no'] ?>
                    </div>
                    <div class="span4">
                        <b>branch : </b> <?php echo $row['branch'] ?>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span4">
                        <b>semester : </b> <?php echo $row['semester'] ?>
                    </div>


                </div>
                </br>
                <hr>
                <div class="row-fluid">
                    <div class="span2">
                        <button id="comfirm" type="submit" class="btn btn-large btn-success"
                                name="confirm"><i class="icon-ok"></i>CONFIRM
                        </button>
                    </div>
                    <div class="span2">
                        <button type="button" class="btn btn-large btn-warning" name="cancel"
                                onclick="javascript:history.go(-1)">
                            <i class="icon-remove"></i>CANCEL
                        </button>
                    </div>
                    <input type="hidden" name="bookID" value='<?php echo $book_id ?>'>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>