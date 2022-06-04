<?php include ('php/navbar_out.php'); 
?>

<!--LECTURERS PAGE-->
<section class="lecturersPage">
    <div class="pageIntroBox">
        <p>Lecturers</p>
        <p></p>
    </div>

    <div class="searchFilterBox">
        <div class="searchBar searchTwo">
            <img src="assets/img/search-icon.png" alt="search-icon">
            <input type="text" placeholder="Find Your Lecturer">
        </div>

        <div class="filterDiv">
            <img src="" alt="">
            <p>FILTERS</p>
        </div>
    </div>
<?php

$search = $_SESSION["add"];
$sql = "SELECT * FROM professors WHERE name LIKE'%$search%'"; # this is the search that we got from index.php
        
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


if($row > 0){
    echo $row ;
    
    while($rows=mysqli_fetch_assoc($result))
    {
      
    
         $id = $rows ['id'];
         $name = $rows ['name'];  
         $sql2 = "SELECT AVG(rating) AS avg FROM ratings where proff_id =  $id ";
         $avg =  mysqli_query($conn, $sql2);
         $row2 = mysqli_fetch_assoc($avg);
    

    }}
else{
    echo "No results found";
}
?>
<?php echo $id; ?>
        <div class="lectrurerCardsContainer">

            <a class="lecHref" href="lecturer.html"> <!--.............LECTURER CARD...........-->
                <div class="lecturerCard">
                    <h2>Jackson, Kiminchi</h2>
                    <p>29 Reviews</p>
                    <p>USIU</p>
                    <p class="lecturerRating">8.4</p>
                    <div class="ratingColorBox"></div>
                </div>
            </a>
           
        </div>
    </section>
    <?php

?>

</body>
<script src="assets/javascript/main.js"></script>
</html>