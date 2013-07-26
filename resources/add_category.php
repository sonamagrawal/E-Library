<!DOCTYPE HTML>
<html lang="en">
<head>
    <link href="/public_html/css/bootstrap.css" rel="stylesheet">
    <link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3" style="border:1px solid black">
        </div>

        <div class="span9 " style="border:1px solid black">
            <div class="row-fluid">
                <div class="span12" style="background-color: #808080">
                    <h2><strong>ADD NEW CATEGORY</strong></h2>
                </div>
            </div>
            <br>

            <div class="row-fluid">
                <div class="span12">
                    <form action="category!.php" method="post" class=" form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label">CATEGORY NAME:</label>

                                <div class="controls">
                                    <input type="text" required class="span3" name="name">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="submit">ADD</button>
                                <button type="reset" class="btn btn-success" name="reset">RESET</button>
                            </div>
						</fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>