<!DOCTYPE HTML>
<?php
include_once("config.php");
$title = $_POST['title'] ? strtoupper($_POST['title']) : '%';
$author = $_POST['author'] ? strtoupper($_POST['author']) : '%';
$category = $_POST['category'] ? strtoupper($_POST['category']) : '%';
$query = "select book_id_no,title,author,company,published_year,in_rack,category.name as name from books join category on books.category_id = category.category_id where title like ('" . $title . "') and author like('" . $author . "') and category.name like ('" . $category . "') order by popularity desc,published_year desc,in_rack desc";
$result = mysql_query($query);
?>
<html>
    <head>
        <title> E-LIBRARY |BOOK </title>
        <link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" style="border:1px solid black">
                </div>
                <div class="span9" style="border:1px solid black">
                    <table class="table table-striped">
                        <caption><i class="icon-tags"></i> Matched Result</caption>
                        <thead style="background: peru">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Company</th>
                                <th>Category</th>
                                <th>Published On</th>
                                <th>Available</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 0;
                            while ($row = mysql_fetch_array($result)) {
                                $counter++;
                                $status = $row['in_rack'] == 0 ? 'error' : 'success';
                                echo "<tr class='" . $status . "'>
                                <td>" . $counter . "</td>
                                <td>" . $row['title'] . "</td>
                                <td>" . $row['author'] . "</td>
                                <td>" . $row['company'] . "</td>
                                <td>" . $row['name'] . "</td>
                                <td>" . $row['published_year'] . "</td>
                                <td>" . $row['in_rack'] . "</td>
                                <td><a href='confirm_issue.php?id=" . $row['book_id_no'] . "'><button class='btn btn-info' type='button'>Issue
                                </button></a></td>
                            </tr>";
                            }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>