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
                    <h2><strong>NEW USER REGISTRATION</strong></h2>
                </div>
            </div>
            <br>

            <div class="row-fluid">
                <div class="span12">
                    <form action="teacher_record!.php" method="post" class=" form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label">EMPLOYEE NO.</label>

                                <div class="controls">

                                    <input type="text" required class="span3" name="employeeno">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">FIRST NAME:</label>

                                <div class="controls">
                                    <input type="text" required class="span3" name="firstname" placeholder="eg:rahul">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">LAST NAME:</label>

                                <div class="controls">

                                    <input type="text" required class="span3" name="lastname" placeholder="eg:gupta">
                                </div>
                            </div>





                            <div class="control-group">
                                <label class="control-label">DEPARTMENT</label>

                                <div class="controls">

                                    <select required class="span3" name="department">
                                        <option>COMPUTER SCIENCE</option>
                                        <option>INFORMATION TECHNOLOGY</option>
                                        <option>ELECTRICAL ENGINEERING</option>
                                        <option>ELECTRONICS AND TELECOMMUNICATON</option>
                                        <option>METALLURGICAL ENGINEERING</option>
                                        <option>CHEMICAL ENGINEERING</option>
                                        <option>CIVIL ENGINEERING</option>
                                        <option>MECHANICAL ENGINEERING</option>
                                        <option>LIBRARY</option>
                                        <option>MINING ENGINEERING</option>

                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">DESIGNATION</label>

                                <div class="controls">
                                    <input type="text" required class="span3" name="designation" placeholder="eg:HOD">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="submit">ADD</button>
                                <button type="reset" class="btn btn-success" name="reset">RESET</button>
                            </div>
                        </fieldset>
                    </form>
</body>
</html>