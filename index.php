<!DOCTYPE html>
<?php
 require_once'connect.php';
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Home Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</head>

<body class="text-center">
    <div class="container-fluid">
        <img src="logo.jpeg" width="60%" height="100px" class="mb-3 mt-5 rounded-pill">

        <ul class="nav nav-tabs justify-content-center" id="myTab">
            <li class="nav-item">
                <a href="#staff" class="nav-link active" data-toggle="tab">Staff Form</a>
            </li>
            <li class="nav-item">
                <a href="#student" class="nav-link" data-toggle="tab">Student Form</a>
            </li>
            <li class="nav-item">
                <a href="#staffStudentRelationship" class="nav-link" data-toggle="tab">View staff/Student Relationship</a>
            </li>
        </ul>

        <div class="tab-content justify-content-center">

            <!-- Staff tab -->

            <div id="staff" class="tab-pane fade show active text-left pt-3 ">
                <div class=" w-50 mx-auto" >
                        <?php

                            if (isset($_POST['staffSubmit'])) {
                            extract($_POST);
                                $sql2 = "SELECT * FROM teacher WHERE staffNo = '$staffNo' ";
                                $query2 = mysqli_query($conn,$sql2) or die(mysqli_error());
                                if (mysqli_num_rows($query2)==1) {
                                    echo '<div class="alert alert-danger">
                                            The Staff number you entered belongs to/have been used by another Staff<br/>
                                         </div>';
                                         header("Location: index.php#staff");

                                } else{
                                    $sql = "INSERT INTO teacher(lname,fname,staffNo,classHeld,level) VALUES('$lname','$fname','$staffNo','$classHeld','$level')";
                                    $query = mysqli_query($conn,$sql) or die(mysqli_error());
                                    echo '<div class="alert alert-success">
                                            '.$fname.' details has been submitted sucessfully<br/>
                                         </div>';
                                    }
                                }

                        ?>
                    <form class="align-self-center" method="POST">
                        <div class="form-group">
                            <label for="staffNo">Staff No.</label>
                            <input type="text" class="form-control " id="staffNo" name="staffNo" required>
                        </div>

                        <div class="form-group">
                            <label for="fname">First name</label>
                            <input type="text" class="form-control " id="fname" name="fname" required>
                        </div>

                        <div class="form-group">
                            <label for="lname">Last name</label>
                            <input type="text" class="form-control " id="lname" name="lname" required>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <input type="text" class="form-control " placeholder="e.g Level 7" id="level" name="level" required>
                        </div>
                        <div class="form-group">
                            <label for="classHeld">Class Held</label>
                            <input type="text" class="form-control " placeholder="e.g JSS 1" id="classHeld" name="classHeld">
                        </div>
                        
                        <center><button class="btn btn-primary btn" name="staffSubmit">Submit</button></center>
                    
                    </form>
                    
                </div>
            </div>

            <!-- Student tab -->

            <div id="student" class="tab-pane fade text-left pt-3">
                <div class=" w-50 mx-auto">
                    <?php

                        if (isset($_POST['studentSubmit'])) {
                            extract($_POST);
                            $sql2 = "SELECT * FROM student WHERE studentNo = '$studentNo' ";
                            $query2 = mysqli_query($conn,$sql2) or die(mysqli_error());
                            if (mysqli_num_rows($query2)==1) {
                                echo '<div class="alert alert-danger">
                                        The Student number you entered belongs to/have been used by another student<br/>
                                     </div>';

                            } 
                            else{
                                $sql = "INSERT INTO student(lname,fname,studentNo,class) VALUES('$lname','$fname','$studentNo','$class')";
                                $query = mysqli_query($conn,$sql) or die(mysqli_error());
                                echo '<div class="alert alert-success">
                                         '.$fname.' details has been submitted sucessfully<br/>
                                     </div>';

                            }
                        }

                    ?>

                    <form class="align-self-center" method="POST">
                        <div class="form-group">
                            <label for="studentNo">Student No.</label>
                            <input type="text" class="form-control" id="studentNo" name="studentNo" required>
                        </div>

                        <div class="form-group">
                            <label for="fname">First name</label>
                            <input type="text" class="form-control" id="fname" name="fname" required>
                        </div>

                        <div class="form-group">
                            <label for="lname">Last name</label>
                            <input type="text" class="form-control" id="lname" name="lname" required>
                        </div>
                        <div class="form-group">
                            <label for="class">Class</label>
                            <input type="text" class="form-control" placeholder="e.g JSS 1" name="class" id="class">
                        </div>
                       

                        <center><button class="btn btn-primary btn" name="studentSubmit">Submit</button></center>
                    </form>
                    
                </div>
            </div>

            <!-- Staff Per student relationship tab -->

            <div id="staffStudentRelationship" class="tab-pane fade text-left pt-3">
                <div class=" w-100 mx-auto">
                    <div class="row">
                        <div class="col-md-5">

                            <form class="align-self-center" method="POST">
                                <div class="form-group">
                                    <label for="class">Class</label>
                                    <input type="text" class="form-control " placeholder="Input a valid staff Number" id="class" name="class" required>
                                </div>
                                <center><button class="btn btn-primary btn" name="viewDetails">View</button></center>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <center><h4 style="color: red">Teacher per student</h4></center>
                            <?php
                             if (isset($_POST['viewDetails'])) {
                            extract($_POST);
                                
                                $staff_sql = "SELECT * FROM teacher WHERE classHeld ='$class'";
                                $staff_query= mysqli_query($conn,$staff_sql) or die(mysqli_error($conn));
                                if (mysqli_num_rows($staff_query)==1) {
                                $staff_result =(mysqli_fetch_array($staff_query));
                                echo 'Staff No.:   '.$staff_result['staffNo'] .'<br>';
                                echo 'Staff Fullname:    '.$staff_result['lname'].'  '.$staff_result['fname'].'<br><br>';
                                }

                                $sql = "SELECT * FROM student JOIN teacher ON student.class= '".$class."'";

                                    $result = mysqli_query($conn, $sql);
                                        if(mysqli_fetch_array($result) > 0) {
                                            echo "<table style= width:100%>";
                     
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                echo "<td>" .$row[0]. "</td>";
                                                echo "<td>" .$row[1]. "</td>";
                                                echo "<td>" .$row[2]. "</td>";
                                                echo "<td>" .$row[3]. "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            
                                        } else {
                                            echo "No records matching your query were found.";
                                        }
                                    
                            }
                               
                            ?>
                            
                        </div>
                    </div>
                        
                </div>
                    
            </div>
        </div>
        <div>
            <footer class="bg-dark h-5 p-3 text-light mt-3">
                Copyright &copy 2021 Contonso Allrights reserved.
                <p>Powered by Michael</p>
            </footer>
        </div>
    </div>
</body>
</html>