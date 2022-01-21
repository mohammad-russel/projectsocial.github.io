<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsfeed</title>
    <?php include "css/homepage.php";  ?>

    <?php include "css/profile.php";  ?>
    <style>
        .chathead {
            background: rgb(30, 30, 30);
            height: 60px;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 0px 10px;
        }
        
        .chathead a i {
            width: 100%;
        }
        
        .chathead a i svg {
            width: 40px;
            color: beige;
        }
    </style>

</head>

<body>
    <div class="container">

        <!-- ------------------header-------------------------- -->

        <!-- --------------------content--------------------- -->
        <main>
            <div class="chathead">
                <a href="people.php">
                    <i>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                    </svg>
                </i>
                </a>
            </div>
            <!-- ---------------------user info section------------------------>
            <div class="userfullinfo">
                <div class="usercmb">
                    <div class="coverpic">
                        <img src="usercover/images.jfif" alt="">
                    </div>
                    <div class="userpic">
                        <img src="userimage/user.png" alt="">
                    </div>
                    <div class="namebio">
                        <h2>Mohammad Russel</h2>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, dolorum.
                        </p>
                    </div>
                </div>
                <div class="userinfos">
                    <div class="title">
                        <h2>INFO</h2>
                    </div>
                    <div class="inforoom">
                        <div class="infobox">
                            <i><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" class="svg-inline--fa fa-briefcase fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path>
                                </svg> <span>Web-Designer</span> </i>
                        </div>
                        <div class="infobox">
                            <i><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="graduation-cap" class="svg-inline--fa fa-graduation-cap fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path fill="currentColor" d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z"></path>
                                </svg> <span>Tamirul millat kamil madrasah</span> </i>
                        </div>
                        <div class="infobox">
                            <i><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house-user" class="svg-inline--fa fa-house-user fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M570.69,236.27,512,184.44V48a16,16,0,0,0-16-16H432a16,16,0,0,0-16,16V99.67L314.78,10.3C308.5,4.61,296.53,0,288,0s-20.46,4.61-26.74,10.3l-256,226A18.27,18.27,0,0,0,0,248.2a18.64,18.64,0,0,0,4.09,10.71L25.5,282.7a21.14,21.14,0,0,0,12,5.3,21.67,21.67,0,0,0,10.69-4.11l15.9-14V480a32,32,0,0,0,32,32H480a32,32,0,0,0,32-32V269.88l15.91,14A21.94,21.94,0,0,0,538.63,288a20.89,20.89,0,0,0,11.87-5.31l21.41-23.81A21.64,21.64,0,0,0,576,248.19,21,21,0,0,0,570.69,236.27ZM288,176a64,64,0,1,1-64,64A64,64,0,0,1,288,176ZM400,448H176a16,16,0,0,1-16-16,96,96,0,0,1,96-96h64a96,96,0,0,1,96,96A16,16,0,0,1,400,448Z"></path>
                                </svg> <span>Dhaka, gazipur, malekerbari</span> </i>
                        </div>
                        <div class="infobox">
                            <i><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
                                </svg> <span>single</span> </i>
                        </div>

                    </div>
                </div>
            </div>


            <!-- --------------------Post section---------------------- -->
            <div class="postroom">
                <div class="postbox">

                    <!-- -------------- post head -------------- -->
                    <div class="postheader">
                        <div class="autherinfo">
                            <img src="userimage/user.png" alt="auther">
                            <div class="info">
                                <h3>Mohammad Russel</h3>
                                <p>12.03.22 / 12.32.PM</p>
                            </div>
                        </div>


                    </div>
                    <!-- ----------------- post content ---------------- -->
                    <div class="postcontent">
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus porro earum, facilis nemo eius sit unde temporibus cupiditate quos numquam?</p>
                        </div>
                        <div class="image">
                            <img src="postimage/post2.jpg" alt="ww">
                        </div>
                    </div>
                    <!-- --------------- post footer ---------------- -->
                    <div class="postfooter">
                        <a href="#">
                            <div class="react like" onmousedown="audio.play();" onclick="like()">
                                <i><svg class="svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="thumbs-up" class="svg-inline--fa fa-thumbs-up fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"></path>
                                    </svg></i>
                                <p class="count">133</p>
                            </div>

                        </a>
                        <a href="#">
                            <div class="react comment" onclick="comment()">
                                <i><svg class="svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" class="svg-inline--fa fa-comments fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path>
                                    </svg></i>
                                <p class="count">1333</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="react dislike" onmousedown="disaudio.play();" onclick="dislike()">
                                <i> <svg class="svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="thumbs-down" class="svg-inline--fa fa-thumbs-down fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M0 56v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H24C10.745 32 0 42.745 0 56zm40 200c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24-24-10.745-24-24zm272 256c-20.183 0-29.485-39.293-33.931-57.795-5.206-21.666-10.589-44.07-25.393-58.902-32.469-32.524-49.503-73.967-89.117-113.111a11.98 11.98 0 0 1-3.558-8.521V59.901c0-6.541 5.243-11.878 11.783-11.998 15.831-.29 36.694-9.079 52.651-16.178C256.189 17.598 295.709.017 343.995 0h2.844c42.777 0 93.363.413 113.774 29.737 8.392 12.057 10.446 27.034 6.148 44.632 16.312 17.053 25.063 48.863 16.382 74.757 17.544 23.432 19.143 56.132 9.308 79.469l.11.11c11.893 11.949 19.523 31.259 19.439 49.197-.156 30.352-26.157 58.098-59.553 58.098H350.723C358.03 364.34 384 388.132 384 430.548 384 504 336 512 312 512z"></path>
                                    </svg> </i>
                                <p class="count">133</p>
                            </div>

                        </a>
                    </div>
                    <div class="commentroom" id="cm">
                        <div class="commentbox">
                            <div class="commentimage">
                                <img src="userimage/user.png" alt="">
                            </div>
                            <div class="commenttext">
                                <div class="name">
                                    <h3>mohammad russel</h3>
                                </div>
                                <div class="commentoutput">
                                    <p>wow nice pic Lorem ipsum dolor, elit. Laborum aperiam quia temporibus natus? . hero man</p>
                                </div>
                            </div>
                        </div>
                        <div class="commentbox">
                            <div class="commentimage">
                                <img src="userimage/user.png" alt="">
                            </div>
                            <div class="commenttext">
                                <div class="name">
                                    <h3>mohammad russel</h3>
                                </div>
                                <div class="commentoutput">
                                    <p>w hero man</p>
                                </div>
                            </div>
                        </div>
                        <div class="commentbox">
                            <div class="commentimage">
                                <img src="userimage/user.png" alt="">
                            </div>
                            <div class="commenttext">
                                <div class="name">
                                    <h3>mohammad russel</h3>
                                </div>
                                <div class="commentoutput">
                                    <p>wow nice pic Lorem ipsum dolor, elit. Laborum aperiam quia temporibus natus? . hero maow nice pic Lorem ipsum dolor, elit. Laborum aperiam quia temporibus natus? . hero maow nice pic Lorem ipsum dolor, elit. Laborum
                                        aperiam quia temporibus natus? . hero maow nice pic Lorem ipsum dolor, elit. Laborum aperiam quia temporibus natus? . hero maow nice pic Lorem ipsum dolor, elit. Laborum aperiam quia temporibus natus? . hero man</p>
                                </div>
                            </div>
                        </div>
                        <div class="commentbox">
                            <div class="commentimage">
                                <img src="userimage/user.png" alt="">
                            </div>
                            <div class="commenttext">
                                <div class="name">
                                    <h3>mohammad russel</h3>
                                </div>
                                <div class="commentoutput">
                                    <p>wow nice pic Lorem ipsum dolor, elit. Laborum aperiam quia temporibus natus? . hero man</p>
                                </div>
                            </div>
                        </div>
                        <div class="commentbox">
                            <div class="commentimage">
                                <img src="userimage/user.png" alt="">
                            </div>
                            <div class="commenttext">
                                <div class="name">
                                    <h3>mohammad russel</h3>
                                </div>
                                <div class="commentoutput">
                                    <p>wow nice pic Lorem ipsum dolor, elit. Laborum aperiam quia temporibus natus? . hero man</p>
                                </div>
                            </div>
                        </div>
                        <div class="commentbox">
                            <div class="commentimage">
                                <img src="userimage/user.png" alt="">
                            </div>
                            <div class="commenttext">
                                <div class="name">
                                    <h3>mohammad russel</h3>
                                </div>
                                <div class="commentoutput">
                                    <p>wow nior, elit. Laborum aperiam quia temporibus natus? . hero man</p>
                                </div>
                            </div>
                        </div>
                        <div class="commentinput">
                            <div class="userimg">
                                <img src="userimage/user.png" alt="">
                            </div>
                            <textarea type="text" name="comment" id="commentinput" placeholder="Write comment..."></textarea>
                            <a href="#"><i><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" class="svg-inline--fa fa-paper-plane fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path>
                                    </svg> </i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space"></div>
        </main>
    </div>

</body>
<script>
    function moreclick() {
        document.querySelector(".editdelete").style.display = "block";
    }

    function cclick() {
        document.querySelector(".editdelete").style.display = "none";
    }
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    var disaudio = new Audio();
    disaudio.src = "media/bruh.mp3";

    var audio = new Audio();
    audio.src = "media/thank.wav";

    function post() {
        if (document.querySelector(".postpopup").style.display === "block") {
            document.querySelector(".postpopup").style.display = "none";
        } else {
            document.querySelector(".postpopup").style.display = "block";
        }
    }

    function info() {
        if (document.querySelector(".infoedit").style.display === "block") {
            document.querySelector(".infoedit").style.display = "none";
        } else {
            document.querySelector(".infoedit").style.display = "block";
        }
    }

    function like() {
        document.querySelector(".like").style.backgroundColor = "rgb(22, 52, 14)";
        document.querySelector(".like .svg").style.color = "green";
        document.querySelector(".like .count").style.color = "green";
    }

    function dislike() {
        document.querySelector(".dislike").style.backgroundColor = "rgb(116, 50, 50)";
        document.querySelector(".dislike .svg").style.color = "red";
        document.querySelector(".dislike .count").style.color = "red";
    }

    function comment() {
        document.querySelector(".comment").style.backgroundColor = "rgb(14, 55, 54)";
        document.querySelector(".comment .svg").style.color = "#009794";
        document.querySelector(".comment .count").style.color = "#009794";
        if (document.querySelector(".commentroom").style.display === "block") {
            document.querySelector(".commentroom").style.display = "none";
        } else {
            document.querySelector(".commentroom").style.display = "block";
        }
    }
</script>

</html>