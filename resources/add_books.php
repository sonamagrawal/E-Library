<!DOCTYPE html>
<?php
include_once("config.php");

$query = "select distinct name from category";
$result = mysql_query($query);
$id = '';
while ($row = mysql_fetch_array($result)) {
    $id .= '"' . $row['name'] . '",';
}
$id_list = '[' . rtrim($id, ",") . ']';
?>
<html lang="en">
<head>
    <link href="/public_html/css/bootstrap.css" rel="stylesheet">
    <link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="span9 well" style="border:1px solid black">
        <div class="row-fluid">
            <div class="span12" style="background-color: #808080">
                <h2><strong>ADD BOOKS</strong></h2>
            </div>
        </div>
        <br>

        <div class="row-fluid">
            <div class="span12">
                <form action="book!.php" method="post" class=" form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">TITLE</label>

                            <div class="controls">
                                <input type="text" required class="span3" name="title"
                                       placeholder=" Title name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">AUTHOR</label>

                            <div class="controls">
                                <input type="text" required class="span3" name="author"
                                       placeholder=" Author name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">COMPANY</label>

                            <div class="controls">
                                <input type="text" required class="span3" name="company"
                                       placeholder="Company name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">PUBLISHED YEAR</label>

                            <div class="controls">
                                <select required class="span3" name="year">
                                    <?php
                                    for ($i = 1980; $i < 2014; $i++)
                                        echo "<option>$i </option>";
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">NO. OF COPIES</label>

                            <div class="controls">
                                <input required type="number" class="span3" name="copies" min="1" max="50"
                                       placeholder="1">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">CATEGORY</label>

                            <div class="controls">
                                <input required type="text" class="span3" name="category"
                                       placeholder="Category"
                                       autocomplete="off"
                                       data-provide="typeahead"
                                       data-items="6"
                                       min-length="1"
                                       data-source='<?php echo $id_list ?>'>
                            </div>
                        </div>
                        <hr>
                        <div class="row-fluid">
                            <div class="span3">
                                <button  type="submit" class="btn btn-success btn-large"
                                        name="submit"><i class="icon-plus-sign"></i>ADD
                                </button>
                            </div>
                            <div class="span3">
                                <button type="reset" class="btn btn-inverse btn-large" name="reset"><i class="icon-refresh"></i>RESET
                                </button>
                            </div>
                            <div class="span3">
                                <button type="button" class="btn btn-large btn-warning" name="cancel"
                                        onclick="javascript:history.go(-1)">
                                    <i class="icon-remove"></i>CANCEL
                                </button>
                            </div>
                        </div>


                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script src="/public_html/jquery/jquery.js"></script>
<script src="/public_html/js/bootstrap-typeahead.js"></script>
</html>