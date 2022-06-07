<?php include ('php/navbar_out.php'); 

    #echo ' <p style="color:#FF0000";>Red paragraph text</p>';
    error_reporting(0);
    
if(isset($_SESSION['user_message'])){
    echo $_SESSION['user_message'];
    unset($_SESSION['user_message']);
  }
  if(isset($_SESSION['successful'])){
    echo $_SESSION['successful'];
    unset($_SESSION['successful']);
  }
    $id =$_GET['lec_id'];
    $sql = "SELECT * FROM professors WHERE id = '$id'";
    $res = mysqli_query($conn,$sql);
    $sql4 = "SELECT LENGTH(rating) AS REVIEWERS FROM `ratings`WHERE proff_id = $id";
    $reviewers = mysqli_query($conn, $sql4);
    $row4 = mysqli_fetch_assoc($reviewers);
    $sql3 = "SELECT AVG(rating) AS avg FROM ratings where proff_id =  $id ";
    $avg =  mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($avg);
    $average =$row3['avg'];
    $reviewers = $row4['REVIEWERS'];
    if ($row4['REVIEWERS'] == 0) {
        $reviewers = 0;
        $average = 0;

    }
    else {
        $reviewers = $row4['REVIEWERS'];
        $average =$row3['avg'];
    }
    

    if($res== true){
        $count = mysqli_num_rows($res);
       if($count==1){
   
           // get the details
           //echo 'Admin available';
           $rows = mysqli_fetch_assoc($res);
           
           $name=$rows['name'];
           $university = $rows ['university'];
          
       }
   }
   
?>


    <!--LECTURER PAGE-->
    <section class="lecturerPage">
        <div class="pageIntroBox">
            <p>Lecturer</p>
   
            <p></p>
        </div>

        <div class="lecturerHero">
            <div class="lecturerDetails">
                <h2><?php echo  $name ?></h2>
                <p><?php echo  $university ?></p>
                <p class="overallRating">Overall Rating <span><?php echo $average; ?> </span></p>
                <p class="ratingsCount">Number Of Ratings <span><?php echo $reviewers;?></span></p>
            </div>
            <div class="lecReviewsHero">
                <p class="reviewsTitle">Lecturer <span>Reviews</span></p>
                <?php
                $sql2 = "SELECT * FROM ratings  WHERE proff_id = '$id'"; // thats works barely we also need to insert this when the user is rating 
                $res2 = mysqli_query($conn,$sql2);
                $count2 =mysqli_num_rows($res2);
                
                if($count2 > 0){
                    // we have data
                    if ($row4['REVIEWERS'] == 0){
                        echo '<p class="noReviews">No reviews yet</p>';
                    }

                    while($rows= mysqli_fetch_assoc($res2))
                    {
                       
                        $name2 = $rows ['username'];
                        $ratings = $rows['rating'];
                        $comments = $rows['comments'];
                        
                        
                       
                ?>
                <!--LECTURER REVIEW -->
                <div class="lecReview">
                    <div class="usersRating">
                        <p><?php echo  $ratings ?></p>
                    </div>
                    <div class="ratingContent">
                        <p id="userName">sdsds</p>
                        <p id="userComments"><?php echo  $comments ?></p>
                        <div class="userAwardTags">
                            <div class="awardTag">
                                Interesting
                            </div>
                            <div class="awardTag">
                                Fun
                            </div>
                            <div class="awardTag">
                                Fast
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                else{
                    echo '<p class="noReviews">No reviews yet</p>';
                }
                ?>
               
            </div>
        </div>
        <div class="center">
        <p> Write a review <a class="addproff" href="user_rates.php?Lec_id=<?php echo $id ?>">Click Here</a>
        </p>
    </div>

    </section>


</body>
<script src="assets/javascript/main.js"></script>
</html>