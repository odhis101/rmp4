<?php include ('php/navbar_out.php'); ?>

    <div class="menu-links">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="university.html">Universities</a></li>
            <li><a href="lecturers.html">Lecturers</a></li>
        </ul>
    </div>
<?php
echo "<div class>";
echo $id =$_GET['lec_id'];


?>
    <!--LECTURER PAGE-->
    <section class="lecturerPage">
        <div class="pageIntroBox">
            <p>Lecturer</p>
            <p></p>
        </div>

        <div class="lecturerHero">
            <div class="lecturerDetails">
                <h2>Jackson, Kiminchi</h2>
                <p>USIU</p>
                <p class="overallRating">Overall Rating <span>8.4</span></p>
                <p class="ratingsCount">Number Of Ratings <span>43</span></p>
            </div>
            <div class="lecReviewsHero">
                <p class="reviewsTitle">Lecturer <span>Reviews</span></p>

                <!--LECTURER REVIEW -->
                <div class="lecReview">
                    <div class="usersRating">
                        <p>8.4</p>
                    </div>
                    <div class="ratingContent">
                        <p id="userName">Reviewer</p>
                        <p id="userComments">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
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

                
                <!--LECTURER REVIEW -->
                <div class="lecReview">
                    <div class="usersRating">
                        <p>8.4</p>
                    </div>
                    <div class="ratingContent">
                        <p id="userName">Reviewer</p>
                        <p id="userComments">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
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

            </div>
        </div>


    </section>


</body>
<script src="assets/javascript/main.js"></script>
</html>