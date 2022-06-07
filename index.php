<?php include('php/navbar_out.php'); 
$id = $_SESSION['id'];
if(!isset($_SESSION['id'])){
header("Location: login.php");
}
?>


    <section class="landingPage">
        <div class="landingPageHero">
            <h3>Find your <span> Lecturer</span> And Drop a <span>Review</span><?php echo 'this is the id ', $id ?></h3>
             <form action="#"method ='POST'>
                      <div class="searchBar_home">
                        <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder=" Enter Lecs Name"  />
                        <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                          <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                          </svg>
                        </button>
                    </form>
                      </div>
        </div>
    </section>
</body>

<script src="assets/javascript/main.js"></script>
</html>
<?php 

if(isset($_POST['searchQuerySubmit'])){
   echo $search = $_POST['searchQueryInput']; // getting the search inputs 
   $_SESSION['add']= $search; // this moves the search data from the index page to load the search query in the redirected page 
   header('location:lecturers.php');
}
   
?>

<script src="assets/javascript/main.js"></script>
</html>