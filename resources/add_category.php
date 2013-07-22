<!DOCTYPE html>
<?php
include_once("config.php");
if (isset($_REQUEST['submit'])) {
    $category = strtoupper($_POST['category']);
    $error = FALSE;
    $query = "INSERT INTO category (NAME) VALUES ('" . $category . "')";
    $result = mysql_query($query);
}
?>
<html lang="en">
    <head>
        <link href="/public_html/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>

        <form class="well form-horizontal" method="POST">
            <fieldset>
                <legend>NEW BOOK</legend>
                <div class="control-group">
                    <label class="control-label">CATEGORY</label>
                    <div class="controls">
                        <input type="text" class="input-small" name="category" id="category" placeholder="category">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary" name="submit">SAVE</button>
                    <button class="btn">Cancel</button>
                </div>

            </fieldset>
        </form>
    </body>
</html>