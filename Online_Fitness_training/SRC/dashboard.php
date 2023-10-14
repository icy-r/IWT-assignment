<?php
include ("header.php");
?>
<link rel="stylesheet" href="style/dashboard.css">
<meta http-equiv="refresh" content=";" />
<div class="homepage">
    <div class="container1">
        <div class="user">
            <div class="user-image">
                <img src="images/profile-circle.jpeg" alt="user">
            </div>
            <div class="user-name">
                <h1>
                    Hello user!
                    <!--<?php
                    session_start();
                    echo $_SESSION['user_name'];
                    ?>-->
                </h1>
            </div>
        </div>
        <div class="dashboard">
            <div class="workout-plans">
                <div class="workout-icon">
                    <img src="images/workout.jpeg" alt="workout">
                </div>
                <div class="workout-type">
                    <h3>
                         <?php /*
                       include ("config.php");
                        $sql = "SELECT * FROM workout";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                        $workout_type = $row['w_type'];
                        echo $workout_type;
                        */ ?>   
                        basic plan
                    </h3>
                </div>
                <div class="goto-workout-button">
                    <a href="workout.php">
                        <button>
                            Go to Workout Page.
                        </button>
                    </a>
                </div>
            </div>
            <div class="nutrition-plans">
                <div class="nutrition-icon">
                    <img src="images/nutrition.jpeg" alt="nutrition">
                </div>
                <div class="nutrition-type">
                    <h3>
                        <?php /*
                        include ("config.php");
                        $sql = "SELECT * FROM nutrition";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                        $nutrition_type = $row['n_type'];
                        echo $nutrition_type;
                        */ ?>
                        basic plan
                    </h3>
                </div>
                <div class="goto-nutrition-button">
                    <a href="nutrition.php">
                        <button>
                            Go to Nutrition Page.
                        </button>
                    </a>
                </div>
            </div>
            <div class="progress-report">
                <div class="progress-icon">
                    <img src="images/progress.jpeg" alt="progress">
                </div>
                <div class="progress-type">
                    <h3>
                        <?php /*
                        include ("config.php");
                        $sql = "SELECT * FROM progress";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                        $progress_type = $row['p_type'];
                        echo $progress_type;
                        */ ?>
                        basic plan
                    </h3>
                </div>
                <div class="goto-progress-button">
                    <a href="progress.php">
                        <button>
                            Go to Progress Page.
                        </button>
                    </a>
                </div>
            </div>
            <div class="profile-settings">
                <div class="profile-icon1">
                    <img src="images/profile-circle.jpeg" alt="profile">
                </div>
                <div class="profile-type">
                    <h3>
                        <?php /*
                        include ("config.php");
                        $sql = "SELECT * FROM profile";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                        $profile_type = $row['pr_type'];
                        echo $profile_type;
                        */ ?>
                        Profile
                    </h3>
                </div>
                <div class="goto-profile-button">
                    <a href="profile.php">
                        <button>
                            Go to Profile Page.
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="quick-access">
            <div class="quick-access-title">
                <h1>
                    Quick Access
                </h1>
            </div>
            <div class="quick-access-buttons">
                <div class="quick-access-button">
                    <a href="workout.php">
                        <button>
                            Workout
                        </button>
                    </a>
                </div>
                <div class="quick-access-button">
                    <a href="nutrition.php">
                        <button>
                            Nutrition
                        </button>
                    </a>
                </div>
                <div class="quick-access-button">
                    <a href="progress.php">
                        <button>
                            Progress
                        </button>
                    </a>
                </div>
                <div class="quick-access-button">
                    <a href="profile.php">
                        <button>
                            Profile
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="services">
            <div class="services-title">
                <h1>
                    Services
                </h1>
            </div>
            <div class="tiles">
            <div class="service-tile1">
                <div class="service-tile1-image">
                    <img src="images/workout.jpeg" alt="service1">
                </div>
                <div class="service-tile1-title">
                    <h1>
                        Workout
                    </h1>
                </div>
                <div class="service-tile1-description">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                    </p>
                </div>
                <div class="service-tile1-button">
                    <a href="workout.php">
                        <button>
                            Go to Workout Page.
                        </button>
                    </a>
                </div>
            </div>
            <div class="service-tile2">
                <div class="service-tile2-image">
                    <img src="images/nutrition.jpeg" alt="service2">
                </div>
                <div class="service-tile2-title">
                    <h1>
                        Nutrition
                    </h1>
                </div>
                <div class="service-tile2-description">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                    </p>
                </div>
                <div class="service-tile2-button">
                    <a href="nutrition.php">
                        <button>
                            Go to Nutrition Page.
                        </button>
                    </a>
                </div>
            </div>
            <div class="service-tile3">
                <div class="service-tile3-image">
                    <img src="images/progress.jpeg" alt="service3">
                </div>
                <div class="service-tile3-title">
                    <h1>
                        Progress
                    </h1>
                </div>
                <div class="service-tile3-description">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                    </p>
                </div>
                <div class="service-tile3-button">
                    <a href="progress.php">
                        <button>
                            Go to Progress Page.
                        </button>
                    </a>
                </div>
            </div>
            <div class="service-tile4">
                <div class="service-tile4-image">
                    <img src="images/profile-circle.jpeg" alt="service4">
                </div>
                <div class="service-tile4-title">
                    <h1>
                        Profile
                    </h1>
                </div>
                <div class="service-tile4-description">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                    </p>
                </div>
                <div class="service-tile4-button">
                    <a href="profile.php">
                        <button>
                            Go to Profile Page.
                        </button>
                    </a>
                </div>
            </div>
            </div>
        </div>
        
    </div>


</div>


<?php
 include ("footer.php");
?>