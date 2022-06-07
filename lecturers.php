<?php include ('php/navbar_out.php'); 
?>

<!--LECTURERS PAGE-->
<section class="lecturersPage">
    <div class="pageIntroBox">
        <p>Lecturers</p>
        <p></p>
    </div>

    <div class="searchFilterBox">
            <form action="#"method ='POST'>
                <div class="searchBar_home">
                  <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder=" Enter Lecs Name"  />
                  <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                    </svg>
                  </button>
              </form>
              <?php        
                             if(isset($_POST['searchQuerySubmit'])){
                                   $search = $_POST['searchQueryInput'];               
                                   $_SESSION['add']= $search;
                                   header('location:lecturers.php');
                               }
                              ?>
                                
                </div>
            </div>
          
            <br><br/>
            <div class="lectrurerCardsContainer">
<?php

$search = $_SESSION["add"];

# $sql = "SELECT * FROM professors WHERE name LIKE'%$search%'"; # this is the search that we got from index.php ( for some reason it doesn't work')
$sql = "SELECT * FROM professors WHERE name LIKE'%$search%'";; # t
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if($row > 0){

    while($rows=mysqli_fetch_assoc($result))
    {
  
    
         $id = $rows ['id'];
         $name = $rows ['name'];  
         $university = $rows ['university'];
         $sql2 = "SELECT AVG(rating) AS avg FROM ratings where proff_id =  $id ";
         $avg =  mysqli_query($conn, $sql2);
         $row2 = mysqli_fetch_assoc($avg);
    


?>

      

            <a class="lecHref" href="lecturer_details.php?lec_id=<?php echo $id; ?>"> <!--.............LECTURER CARD...........-->
                <div class="lecturerCard">
                    <h2><?php echo  $name ?> </h2>
                    <p>29 Reviews</p>
                    <p><?php echo  $university ?></p>
                    <p class="lecturerRating"><?php echo $row2['avg']; ?></p>
                    <div class="ratingColorBox"></div>
                </div>
            </a>
           
        
    
    <?php

?>
<?php
    
    }
}


?>
</div>
</div>
<div class="center">
        <p> Professos not availables <a class="addproff" href="">Add proff</a>
        </p>
    </div>

</body>
<script src="assets/javascript/main.js"></script>
</html>