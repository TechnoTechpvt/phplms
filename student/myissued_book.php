<?php
          
        include "header.php";
        include "dbcon.php";
         
        ?>


        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>My Issued Books</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>My Issued Book</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                
                             <table class='table table-bordered'>
                                <th>Student Enrollment No</th>
                                     <th>Book Name</th>
                                     <th>Book Issued Date</th>
                                    <?php 
                                    
                                    
                                   $username= $_SESSION["uname"];
                                    $result="SELECT * FROM `issue_books` WHERE student_username='$username'";
                                    $run= mysqli_query($con,$result) or die(mysqli_error($con));
          
                   
            
   
                                  
                                    
             while($row=mysqli_fetch_array($run))
             {
                echo "<tr>";   
                
                echo "<td>"; echo $row['student_enrollment']; echo"</td>";
                echo "<td>"; echo $row['books_name']; echo"</td>";
                echo "<td>"; echo $row['books_issue_date']; echo"</td>";
                 echo "</tr>";
                              

             }
                                    
             echo "</table>"; 
                               
                                    ?>
                                
                                </table>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


       <?php
        include "footer.php";
        ?>