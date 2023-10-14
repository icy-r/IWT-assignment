<?php

include("header.php");

?>
<style>
.vidroot{
    
}
.vidtyperoot{
    background-color: rgb(255, 255, 255, 0.2);
    border: 1px solid black;
    border-radius: 10px;
    padding: 5px;   
}
.vidtype{
    
}
.type1, .type2, .type3, .type4{
    background-color: rgb(31, 31, 31, 0.5);
    border-radius: 10px;
    padding: 10px;
}
.type1:hover{
    background-color: rgb(31, 31, 31, 0.8);
    border-radius: 10px;
    padding: 10px;
    transition: 0.3s;
}
.type2:hover{
    background-color: rgb(31, 31, 31, 0.8);
    border-radius: 10px;
    padding: 10px;
    transition: 0.3s;
}
.type3:hover{
    background-color: rgb(31, 31, 31, 0.8);
    border-radius: 10px;
    padding: 10px;
    transition: 0.3s;
}
.type4:hover{
    background-color: rgb(31, 31, 31, 0.8);
    border-radius: 10px;
    padding: 10px;
    transition: 0.3s;
}
.vidtype a{
    background-color: transparent !important;
    position: relative;
    opacity: 1;
    padding: 5px;
    text-decoration: none;
    color: #030101;
    font-size: auto;
    font-weight: bold;
}
.vidtype a::before{
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #030101;
    visibility: hidden;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out 0s;
}
.vidtype a:hover::after{
    visibility: visible;
    transform:scaleX(1);
}
.vidtype{
    display: flex;
    justify-content: space-around;
    
}

.vidtiles{
    display: flex;
    flex-direction: row;   
    justify-content: space-around;
    padding: 10px;
    border-radius: 10px;
    background-color: rgb(255, 255, 255, 0.4);
}
.tile1{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    border-radius: 10px;
    background-color: rgb(255, 255, 255, 0.6);
}
.tile2{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    border-radius: 10px;
    background-color: rgb(255, 255, 255, 0.6);
}
.tile3{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    border-radius: 10px;
    background-color: rgb(255, 255, 255, 0.6);
}
.vidimg img{
    width: 150px;
    height: 150px;
    border-radius: 10px;
}
.vidtitle{
    padding: 10px;
    text-align: left;
    width: 150px;
}
.vidtitle a{
    text-decoration: none;
    color: #030101;
    font-size: 10px;
}
</style>

<div class="vidtyperoot">
    <div class="vidtype">
        <div class="type1">
            <a href="#">Cardio workout</a>
        </div>
        <div class="type2">
            <a href="#">Yoga</a>
        </div>
        <div class="type3">
            <a href="#">Strength</a>
        </div>
        <div class="type4">
            <a href="#">Nutrition</a>
        </div>
    </div>
</div>
<div class="vidroot">
    <div class="recom">    
        <p>
            <strong>
                Recommended for you...
            </strong>
        </p>
        <div class="vidtiles">
            <div class="tile1">
                <div class="vidimg">
                    <a href="#">
                        <img src="images/tile.jpg" alt="video1">
                    </a>
                </div>
                <div class="vidtitle">
                    <a href="#">
                        <p>
                            <strong>10 min Full Body Workout</strong><br><br>
                            Get ready to sweat with this intense 10-minute abs workout! 
                            Follow along with our expert trainer as they guide you through
                            a series of challenging exercises designed to target your core
                            muscles.

                        </p>
                    </a>
                </div>
            </div>
            <div class="tile2">
                <div class="vidimg">
                    <a href="#">
                        <img src="images/tile.jpg" alt="video1">
                    </a>
                </div>
                <div class="vidtitle">
                    <a href="#">
                        <p>
                            <strong>10 min Full Body Workout</strong><br><br>
                            Get ready to sweat with this intense 10-minute abs workout! 
                            Follow along with our expert trainer as they guide you through
                            a series of challenging exercises designed to target your core
                            muscles.
                        </p>
                    </a>
                </div>
            </div>
            <div class="tile3">
                <div class="vidimg">
                    <a href="#">
                        <img src="images/tile.jpg" alt="video1">
                    </a>
                </div>
                <div class="vidtitle">
                    <a href="#">
                        <p>
                            <strong>10 min Full Body Workout</strong><br><br>
                            Get ready to sweat with this intense 10-minute abs workout! 
                            Follow along with our expert trainer as they guide you through
                            a series of challenging exercises designed to target your core
                            muscles.
                        </p>
                    </a>
                </div>
            </div>
    </div>
    <div class="recom">    
    <p>
        <strong>
            newly arrived...
        </strong>
    </p>
    <div class="vidtiles">
        <div class="tile1">
            <div class="vidimg">
                <a href="#">
                    <img src="images/tile.jpg" alt="video1">
                </a>
            </div>
            <div class="vidtitle">
                <a href="#">
                    <p>
                        <strong>10 min Full Body Workout</strong><br><br>
                        Get ready to sweat with this intense 10-minute abs workout! 
                        Follow along with our expert trainer as they guide you through
                        a series of challenging exercises designed to target your core
                        muscles.
                    </p>
                </a>
            </div>
        </div>
        <div class="tile2">
            <div class="vidimg">
                <a href="#">
                    <img src="images/tile.jpg" alt="video1">
                </a>
            </div>
            <div class="vidtitle">
                <a href="#">
                    <p>
                        <strong>10 min Full Body Workout</strong><br><br>
                        Get ready to sweat with this intense 10-minute abs workout! 
                        Follow along with our expert trainer as they guide you through
                        a series of challenging exercises designed to target your core
                        muscles.
                    </p>
                </a>
            </div>
        </div>
        <div class="tile3">
            <div class="vidimg">
                <a href="#">
                    <img src="images/tile.jpg" alt="video1">
                </a>
            </div>
            <div class="vidtitle">
                <a href="#">
                    <p>
                        <strong>10 min Full Body Workout</strong><br><br>
                        Get ready to sweat with this intense 10-minute abs workout! 
                        Follow along with our expert trainer as they guide you through
                        a series of challenging exercises designed to target your core
                        muscles.
                    </p>
                </a>
            </div>
        </div>
</div>

</div>

<?php

include("footer.php");

?>