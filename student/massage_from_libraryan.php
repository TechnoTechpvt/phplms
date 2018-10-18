<?php
        include "dbcon.php";
        include "header.php";
$dusername=$_SESSION["uname"];
$qry="UPDATE `massage` SET `read1`='yes' WHERE dusername='$dusername'";
$res=mysqli_query($con,$qry);
        ?>


        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
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
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                
                             
                                <?php 
                                    
                                    $name=$_SESSION['uname'];
                                 //  $qry="SELECT * FROM `massage` WHERE `dusername`='$name'";
                                    
                                     //$res=mysqli_query($con,"SELECT * FROM `massage` WHERE dusername='$name'");
                                  //  $res=mysqli_query($con,$qry);
                                 //while($row=mysqli_fetch_array($res))
                                 
                                     
                                     
                                     
                                     
                                // echo"<tr>";
                                // echo"<td>"; echo $row['title']; echo"</td>";
                                     
                               
                                    
                                    $res=mysqli_query($con,"SELECT * FROM `messages` WHERE dusername='$name'");
           echo "<table class='table table-bordered'>";
             echo "<tr>";
                                echo "<th>"; echo "Libraryan Name"; echo"</th>";
                echo "<th>"; echo "Title"; echo"</th>";
                echo "<th>"; echo "Massage";  echo"</th>";
               
                             echo "</tr>";

             while($row=mysqli_fetch_array($res))
             {
                 $susername=$row['susername'];
                 
                 $res1=mysqli_query($con,"SELECT * FROM `student_regstration` WHERE username='$susername'");
                 
                  while($row1=mysqli_fetch_array($res1))
                                   {
                                       
                                       
                                  $fullname=$row1['firstname'];     
                                   }
                 
                 
                  echo "<tr>";
                 echo "<td>"; echo $fullname; echo"</td>";
                echo "<td>"; echo $row["title"]; echo"</td>";
                
                 
                echo "<td>"; echo $row["msg"]; echo"</td>";
                
                             echo "</tr>";

             }
             echo "</table>"; 
                                
                                     
                                 
                                    ?>
                                
                               
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


       <?php
        include "footer.php";
        ?>