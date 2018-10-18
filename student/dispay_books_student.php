  


<?php
        include "header.php";
        include "dbcon.php";
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
                                <h2>Display Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                 <form name="form1" action="" method="post">
                                <input type="text" name="bookname" class="form-control" placeholder="enter book name ">
                                    <input type="submit" name="submit1" value="search books" class="btn btn-default">
                                
                                
                                
                                </form>
                                <?php
                                  if(isset($_POST['submit1']))
                                    
                                {
                                      //display serch book
                                      $bookname= $_POST['bookname'];
                                      $i=0;
                                  $res=mysqli_query($con,"SELECT * FROM `add_book` WHERE bookname='$bookname'");
           echo "<table class='table table-bordered'>";
            
echo "<tr>";
             while($row=mysqli_fetch_array($res))
             {
                  
                $i=$i+1;
               
                echo "<td>";  ?> <img src="../librarian/books_image/<?php echo $row['bookimage']; ?>"height="80" width="100"> <?php
                  echo "<br>";
               
                 echo "Book Name = "; echo "<b>";echo $row['bookname'];echo"</b>";
                 
                 echo "<br>";
               echo "Book Price = "; echo $row['bookprice'];
                 echo "<br>";
               echo "avliable Qty = ";  echo "<b>";  echo $row['avliable_qty'];echo"</b>";
                 echo"</td>";
                 
                 if($i==4)
                 {
                     echo "</tr>";
                     echo "<tr>";
                     $i=0;
                 }
             }
                                echo "</tr>";
             echo "</table>";
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                  }
                                else
                                    //display book without seraching
                                {
                                $i=0;
                                  $res=mysqli_query($con,"SELECT * FROM `add_book`");
           echo "<table class='table table-bordered'>";
            
echo "<tr>";
             while($row=mysqli_fetch_array($res))
             {
                  
                $i=$i+1;
               
                echo "<td>";  ?> <img src="../librarian/books_image/<?php echo $row['bookimage']; ?>"height="80" width="100"> <?php
                  echo "<br>";
               
                 echo "Book Name = "; echo "<b>";echo $row['bookname'];echo"</b>";
                 
                 echo "<br>";
               echo "Book Price = "; echo $row['bookprice'];
                 echo "<br>";
               echo "avliable Qty = ";  echo "<b>";  echo $row['avliable_qty'];echo"</b>";
                 echo"</td>";
                 
                 if($i==4)
                 {
                     echo "</tr>";
                     echo "<tr>";
                     $i=0;
                 }
             }
                                echo "</tr>";
             echo "</table>";
                       
                          }      
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