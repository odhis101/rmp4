<?php include('php/navbar_out.php'); ?>

    <section class="landingPage">
        <div class="landingPageHero">
            <form action = '#' method ='POST'>
            <h3>Find your <span> Lecturer</span> And Drop a <span>Review</span></h3>
            <div class="searchBar">
                <img src="assets/img/search-icon.png" alt="search-icon">
                <input name = search type="text" placeholder="Find Your Lecturer">
            </div>
            </form>
        </div>
    </section>
</body>
<?php 
    if(isset($_POST['search'])){
         $search = $_POST['search'];
         $_SESSION['add']= $search; // this moves the search data from the index page to load the search query in the redirected page 
         header('location:lecturers.php');
    }
   
?>

<script src="assets/javascript/main.js"></script>
</html>