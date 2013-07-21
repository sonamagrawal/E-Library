<!DOCTYPE HTML>
<?php
include_once("config.php");

$query = "select roll_no from student_record ";
$result = mysql_query($query);
$id = '';
while ($row = mysql_fetch_array($result)) {
    $id .= '"' . $row['roll_no'] . '",';
}
$id_list = '[' . rtrim($id, ",") . ']';
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

        <div class="span9 well" style="border:1px solid black">
            <div class="row-fluid">
                <div class="span12" style="background-color: #808080">
                    <h2><strong>DUE_CLEARANCE</strong></h2>
                </div>
            </div>
            </br>
            <div class="row-fluid">
                <div class="span12">
                    <form class="form-inline" action="confirm-due_clearance.php" method="POST">
                        <input type="text" required class="span3" name="issue"
                               placeholder="Enter roll_no"
                               autocomplete="off"
                               data-provide="typeahead"
                               data-items="6"
                               min-length="1"
                               data-source='<?php echo $id_list ?>'>
                        <button type="submit" class="btn btn-success">&nbspGO !&nbsp
                        </button>
                    </form>
                </div>
            </div>
            </br></br></br></br></br></br>
        </div>
    </div>
</div>
</body>
<script src="/public_html/jquery/jquery.js"></script>
<script src="/public_html/js/bootstrap-typeahead.js"></script>
</html>
