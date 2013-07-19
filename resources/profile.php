<!DOCTYPE HTML>
<?php
include_once("config.php");
$_SESSION['u_id'] = '1';

$query = "select title,author,company,published_year,issued_date,return_date from books join issued_books
            on books.book_id_no = issued_books.book_id_no where issued_books.user_id = '" . $_SESSION['u_id'] . "' and issued_books.returned = 'N'";
$result = mysql_query($query);

$fine_query = "select title,author,returned_on,fine_detail.fine as fine from issued_books join books on
               issued_books.book_id_no = books.book_id_no join fine_detail on
               issued_books.issue_code = fine_detail.issue_code where
               issued_books.user_id = '" . $_SESSION['u_id'] . "'and issued_books.fine = 'Y' and
               fine_detail.paid = 'N'";
$result_fine = mysql_query($fine_query);
?>
<html>
    <head>
        <title> E-LIBRARY |DASHBOARD </title>
        <link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">

                <div class="span3" style="border:1px solid black">
                    <div class="row-fluid">
                        <div class="span12">PROFILE</div>
                    </div>
                </div>

                <div class="span9" style="border:1px solid black">
                    <div class="row-fluid">
                        <div class="span12">
                            <table class="table table-hover">
                                <caption><i class="icon-book"></i>BOOKS IN HAND</caption>
                                <thead style="background: peru">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Company</th>
                                        <th>Published On</th>
                                        <th>Issued-Date</th>
                                        <th>Return-Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter = 0;
                                    while ($row = mysql_fetch_array($result)) {
                                        $counter++;
                                        $status = date('Y-m-d ', strtotime($row['return_date'])) < date('Y-m-d ') ? 'warning' : 'success';
                                        echo "<tr class='" . $status . "'>
                                            <td>" . $counter . "</td>
                                            <td>" . $row['title'] . "</td>
                                            <td>" . $row['author'] . "</td>
                                            <td>" . $row['company'] . "</td>
                                            <td>" . $row['published_year'] . "</td>
                                            <td>" . $row['issued_date'] . "</td>
                                            <td>" . $row['return_date'] . "</td>
                                            </tr>";
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <table class="table table-hover">
                                <caption><i class="icon-warning-sign"></i>FINE</caption>
                                <thead style="background: peru">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Return Date</th>
                                        <th>Returned On</th>
                                        <th>Fine</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter = 0;
                                    while ($row1 = mysql_fetch_array($result_fine)) {
                                        $counter++;
                                        echo "<tr class='warning'>
                                            <td>" . $counter . "</td>
                                            <td>" . $row1['title'] . "</td>
                                            <td>" . $row1['author'] . "</td>
                                            <td>" . $row1['return_date'] . "</td>
                                            <td>" . $row1['returned_on'] . "</td>
                                            <td>" . $row1['fine'] . "</td>
                                            </tr>";
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>