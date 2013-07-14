<!DOCTYPE HTML>
<?php
include_once("config.php");
?>
<html>
    <head>
        <title> E-LIBRARY |SEARCH BOOK </title>
        <link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php
        $query = "select title,author,category.name as name from books join category on books.category_id = category.category_id";
        $result = mysql_query($query);
        $title = '';
        $author = '';
        $category = '';
        while ($row = mysql_fetch_array($result)) {
            $title .= '"' . $row['title'] . '",';
            $author .= '"' . $row['author'] . '",';
            $category .= '"' . $row['name'] . '",';
        }
        $title_list = '[' . rtrim($title, ",") . ']';
        $author_list = '[' . rtrim($author, ",") . ']';
        $category_list = '[' . rtrim($category, ",") . ']';
        ?>
        <script src="/public_html/jquery/jquery.js"></script>
        <script src="/public_html/js/bootstrap-typeahead.js"></script>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span4" style="border:1px solid black">
                    <div class="row-fluid">
                        <div class="span12">SEARCH BOOK</div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <table class="table well">
                                <form class="form-horizontal" action="index.php" style="border:1px solid yellow">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        TITLE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input
                                                        class="span8" type="text" name="title"
                                                        PLACEHOLDER="Select Title"
                                                        required
                                                        data-provide="typeahead" autocomplete="off"
                                                        data-items="6"
                                                        min-length="1"
                                                        data-source='<?php echo $title_list ?>'>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        AUTHOR &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input class="span8"
                                                                                                     type="text"
                                                                                                     name="title"
                                                                                                     PLACEHOLDER="Select Title"
                                                                                                     required
                                                                                                     data-provide="typeahead"
                                                                                                     autocomplete="off"
                                                                                                     data-items="6"
                                                                                                     min-length="1"
                                                                                                     data-source='<?php echo $author_list ?>'>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        CATEGORY &nbsp <input class="span8" type="text" name="title"
                                                                              PLACEHOLDER="Select Title"
                                                                              required
                                                                              data-provide="typeahead"
                                                                              autocomplete="off"
                                                                              data-items="6"
                                                                              min-length="1"
                                                                              data-source='<?php echo $category_list ?>'>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-actions">
                                                    <button type="RESET" class="btn btn-large btn-primary" name="reset">
                                                        RESET
                                                    </button>
                                                    <button type="SUBMIT" class="btn btn-large btn-success"
                                                            name="submit">GO!
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="span8" style="border:1px solid black">
                    <!--Body content-->
                </div>
            </div>
        </div>

    </body>
</html>