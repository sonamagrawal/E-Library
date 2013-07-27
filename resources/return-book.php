<!DOCTYPE HTML>
<?php
include_once("config.php");

$query = "select issue_code from issued_books where returned ='N'";
$result = mysql_query($query);
$id = '';
while ($row = mysql_fetch_array($result)) {
    $id .= '"' . $row['issue_code'] . '",';
}
$id_list = '[' . rtrim($id, ",") . ']';
?>
<html>
    <head>
        <title> E-LIBRARY |RETURN BOOK </title>
        <link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
                <div class="span9 well" style="border:1px solid black">
                    <div class="row-fluid">
                        <div class="span12" style="background-color: #808080">
                            <h2><strong>RETURN BOOK</strong></h2>
                        </div>
                    </div>
                    </br>
                    <div class="row-fluid">
                        <div class="span12">
                            <form class="form-inline" action="confirm-return.php" method="POST">
                                <input type="text" required class="span3" name="issue"
                                       placeholder="Select Issue code"
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
