<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Stop</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body onload="initClock()">
    <nav class="navbar">
        <ul class="nav-list">
            <div class="logo"><img src="img/brand-3.png" alt="logo"></div>
            <li><a href="#Games">Games</a></li>
            <li><a href="#Services">Category</a></li>
            <li><a href="#Shop">Shop</a></li>
            <li><a href="#Hardware">Consoles</a></li>
            <li><a href="linkpages/form.html">Contact Us</a></li>
        </ul>
        <div class="rightnav">
            <?php  if (isset($_SESSION['username'])) : ?>
    	<center><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></center>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
        </div>
    </nav>

    <section class="background firstsecton">
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">Cyberpunk 2077</p>
                <p class="text-small">Become the cyber-enhanced mercenery, V, <br>and explore the futuristic world of
                    Cyberpunk 2077,<br> now enhanced for Playstation 5.</p>
                <div class="button">
                    <a href="C:\Users\User\Downloads\PlayStation-Clone-Website-main\PlayStation-Clone-Website-main\linkpages\p6.html" target="_blank">
    <button class="btn-sm">Buy Now</button></a>
</div>
            </div>
            <div class="secondhalf">
                </*img src="img/header4logo1.png" alt="Gran Turismo" * />
            </div>
        </div>
    </section>

    <section class="secondsection" id="Shop">
        <div class="button-1">
            <a href="linkpages/p2.html" class="btn-sm1"></a>
            <a href="linkpages/p1.html" class="btn-sm2"></a>
            <a href="linkpages/p3.html" class="btn-sm3"></a>
            <a href="linkpages/p4.html" class="btn-sm4"></a>
            <a href="linkpages/p5.html" class="btn-sm5"></a>
        </div>
    </section>

    <section class="background1 thirdsection">
        <div class="box-main1">
            <p class="textbig1">GAMES at 50% off.....</p>
           
            
          
            <div class="button-3">
                <button class="card-1">1</button>
                <button class="card-2">1</button>
                <button class="card-3">1</button>
            </div>
            <div class="button-4">
                <button class="card-14">1</button>
                <button class="card-15">1</button>
                <button class="card-16">1</button>
            </div>
            

</section>

    <section class="fourthsection">
        <div class="box-main2">
            <p class="text1">PLAY HAS NO LIMIT</p>
            <p class="textbig3">Introducing PlayStation 5</p>
            <p class="textsmall2">Unleash new gaming possibilities that you never anticipated</p>
        </div>
    </section>

    <section class="fifthsection" id="Hardware">
        <div class="box-main3">
            <div class="main-p">
                <p class="textbig4">PlayStation 5 Console</p>
                <p class="textsmall3">Experience an all-new generation of incredible<br>PlayStation games.</p>
                <div class="button-4">
                    <button class="btn2">Learn more</button>
                </div>
            </div>
            <div class="playstationimg">
                <img src="img/Playstation.png" alt="PlayStation">
            </div>
        </div>
    </section>

    <section class="background2 sixthsection" id="Games">
        <div class="main-box4">
            <img src="img/header20logo.png" alt="Elden">
            <p class="textbig5">A new fantasy world</p>
            <p class="textsmall4">Become the Elden Lord in an epic adventure from Hidetaka Miyazaki<br> (Dark Souls) and
                George R. R. Martin (A Song of Ice and Fire), out<br> February 25 on PS4 & PS5</p>
            <div class="button-5">
                <button class="btn3">Pre-order now</button>
            </div>
        </div>
    </section>

    <section class="background3 seventhsection">
        <div class="main-box5">
            <p class="textsmall5">New releases</p>
            <p class="text-small5">Great PS5 and PS4 games available now.</p>
            <div class="button-6">
                <button class="card-4">1</button>
                <button class="card-5">1</button>
                <button class="card-6">1</button>
                <button class="card-7">1</button>
                <button class="card-8">1</button>
                <div class="second-card-row">
                    <button class="card-9">1</button>
                    <button class="card-10">1</button>
                    <button class="card-11">1</button>
                    <button class="card-12">1</button>
                    <button class="card-13">1</button>
                </div>
            </div>
        </div>
    </section>

    <section class="nba">
        <div class="nba-main">
            <div class="nbaimg">
                <img src="img/nba.jpg" alt="NBA2K22">
            </div>
            <div class="main-n">
                <p class="textnba">NBA 2K22 MyTEAM offer</p>
                <p class="textnba1">Join PlayStation Plus and get three NBA 2K22 MyTEAM Packs each month* for as
                    long<br> as you are a member through March 2022. An NBA 2K account is required to open<br> MyTEAM
                    Packs in MyTEAM Mode.</p>
                <div class="button-nba">
                    <button class="btn-n">Learn more</button>
                </div>
            </div>
        </div>
    </section>

    <section class="specialsection">
        <div class="mainspecial">
            <p class="sp1">The latest mutiplayer games</p>
            <p class="sp2">Join the PS Plus community in these online games, available now<br>Overcome dynamic
                battlegrounds with the help of your squad, an<br> exhilarating first-person shooter featuring all-out
                warfare on a massive scale.<br><br>NBA 2K22<br><br>
                Craft a roster composed of current stars and NBA legends and build<br> your own dream team in NBA 2K22.
                Compete in real NBA and WNBA <br>environments for an immersive and authentic basketball experience.</p>
            <div class="sp">
                <button class="btn-sp">Find out more</button>
            </div>

        </div>
    </section>

    <section class="eightsection" id="Services">
        <div class="main-box6">
            <p class="textbig6">Explore our Services on Store</p>
            <p class="textsmall6">Deep discounts, curated collections and seasonal sales on PS5, PS4 and PS VR hits, all
                in one<br>place.</p>
            <div class="button-7">
                <button class="deal-1">1</button>
                <button class="deal-2">1</button>
                <button class="deal-3">1</button>
            </div>
        </div>
    </section>

    <section class="ninthsection background4">
        <div class="main-box7">
            <p class="textbig7">Limited time offer<br> on Playstation Store</p>
            <p class="textsmall7">These are the some limited time offers<br> for next months on Playstation platform and
                will not be avaliable any time soon.</p>
            <div class="offer1">
                <button class="offer">Explore the deals</button>
            </div>
            <p class="current">Current time:</p>

            <div class="datetime">
                <div class="date">
                    <span id="dayname">Day</span>,
                    <span id="month">Month</span>
                    <span id="daynum">00</span>,
                    <span id="year">Year</span>
                </div>
                <div class="time">
                    <span id="hour">00</span>:
                    <span id="minutes">00</span>:
                    <span id="seconds">00</span>
                    <span id="period">AM</span>
                </div>
            </div>
            
            <script type="text/javascript">
                function updateClock() {
                    var now = new Date();
                    var dname = now.getDay(),
                        mo = now.getMonth(),
                        dnum = now.getDate(),
                        yr = now.getFullYear(),
                        hou = now.getHours(),
                        min = now.getMinutes(),
                        sec = now.getSeconds(),
                        pe = "AM";

                    if (hou >= 12) {
                        pe = "PM";
                    }
                    if (hou == 0) {
                        hou = 12;
                    }
                    if (hou > 12) {
                        hou = hou - 12;
                    }

                    Number.prototype.pad = function (digits) {
                        for (var n = this.toString(); n.length < digits; n = 0 + n);
                        return n;
                    }

                    var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
                    var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                    var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
                    var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
                    for (var i = 0; i < ids.length; i++)
                        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
                }

                function initClock() {
                    updateClock();
                    window.setInterval("updateClock()", 1);
                }
            </script>
    </section>

    <section class="ten">
        <div class="lastmain">
            <div class="ten1">
                <p>Follow us on other social media platform</p>
            </div>
            <div class="flogo">
                <a href="https://www.instagram.com/"><img src="img/insta.png" alt="instagram"
                        class="insta"></a>
                <a
                    href="https://twitter.com/"><img
                        src="img/twit.png" alt="twitter" class="twit"></a>
                <a href="https://www.youtube.com/"><img src="img/youtube.png" alt="youtube" class="youtube"></a>
            </div>
        </div>
    </section>

    <footer class="foot">
        <p class="footertext">
            Copyright &copy; 2022 - All right reserved
        </p>
    </footer>

</body>

</html>
