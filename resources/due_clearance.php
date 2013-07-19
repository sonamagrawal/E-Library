<!DOCTYPE HTML>
<?php
include_once("config.php");
?>


<html>
<head>
    <title> E-LIBRARY |DUE CLEARANCE</title>
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
                    <h2><strong>DUE CLEARANCE</strong></h2>
                </div>
            </div>
            </br>
            <div class="row-fluid">
                <div class="span12">
                    <form class="form-horizontal" action="pay.php" method="POST">
                        <div class="control-group">
                            <label class="control-label" >USER NAME</label>
                            <div class="controls">
                                <input type="text"required class="input-xlarge" id="input01">
                             </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" >ROLL NO.</label>
                            <div class="controls">
                                <input type="text"required class="input-xlarge" id="input02">
                            </div>
                        </div>
                        &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;
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





