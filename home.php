


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pierpoint | Home</title>
</head>
<body>
    <section class="abt-header">
        <h1>Pier<span>point.</span></h1>
        <?php echo $user_data['username'];?>
        <a href="logout.php">Log Out</a>
       <span class="mouse-abt">
            <span class="mouse-wheel-abt"></span>
        </span>
    </section>

    <section class="mymoney">
        <div class="balances">
            <h1 class="link">Balance</h1>
            <p id="reveal">Ksh.34,567</p>
            <button class="btn" onclick="fadeout()">Hide Balance</button>
            <button class="btn" onclick="fadein()">Show Balance</button>
        </div>
        <div class="transactions">
            <p class="trans">These are all of your previous transactions</p>
            <div class="row-trans">
                <div class="card">
                    <h1 style="color: red;">Withdrawal</h1>
                    <p>Ksh.4,500</p>
                    <p>Via M-Pesa</p>
                    <p></p>
                </div>
                <div class="card">
                    <h1 style="color: red;">Withdrawal</h1>
                    <p>Ksh.14,500</p>
                    <p>Via M-Pesa</p>
                    <p></p>
                </div>
                <div class="card">
                    <h1 style="color: green;">Deposit</h1>
                    <p>Ksh.4,500</p>
                    <p>Via M-Pesa</p>
                    <p></p>
                </div>
            </div> 
            <div class="row-trans">
                <div class="card">
                    <h1 style="color: red;">Withdrawal</h1>
                    <p>Ksh.4,500</p>
                    <p>Via M-Pesa</p>
                    <p></p>
                </div>
                <div class="card">
                    <h1 style="color: green;">Deposit</h1>
                    <p>Ksh.14,500</p>
                    <p>Via M-Pesa</p>
                    <p></p>
                </div>
                <div class="card" >
                    <h1 style="color: red;" >Withdrawal</h1>
                    <p>Ksh.4,500</p>
                    <p>Via M-Pesa</p>
                    <p></p>
                </div>
            </div>      
        </div>
    </section>

    <section class="footer">
        <div class="box-container">
            <div class="box-footer">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#" class="link">Home</a></li>
                    <li><a href="about.html" class="link">About</a></li>
                    <li><a href="services.html" class="link">Services</a></li>
                    <li><a href="careers.html" class="link">Careers</a></li>
                    <li><a href="team.html" class="link">Team</a></li>
                    <li><a href="contact.html" class="link">Contact</a></li> 
                </ul>
            </div>

            <div class="box-footer">
                <h3>Extra Links</h3>
                <ul>
                    <li><a href="#" class="link">Ask a question.</a></li>
                    <li><a href="#" class="link">Privacy Policy.</a></li>
                    <li><a href="#" class="link">Terms of Use.</a></li>
                </ul>
            </div>

            <div class="box-footer">
                <h3>Contact Info</h3>
                <ul>
                    <li><a href="#" >Tel: +254110159554.</a></li>
                    <li><a href="mailto:maildaviesevan@gmail.com" >Email: maildavies@gmail.com</a></li>
                    <li><a href="#" >Address: Nairobi, Kenya.</a></li>
                </ul>
            </div>

            <div class="box-footer">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#" ><img src="images/icons8-facebook.svg" alt="">Facebook</a></li>
                    <li><a href="#" ><img src="images/icons8-instagram.svg" alt="">Instagram</a></li>
                    <li><a href="#" ><img src="images/icons8-linkedin-circled.svg" alt="">LinkedIn</a></li>
                    <li><a href="#" ><img src="images/icons8-whatsapp.svg" alt="">Whatsapp</a></li>
                    <li><a href="#" ><img src="images/icons8-pinterest.svg" alt="">Pinterest</a></li>
                </ul>
            </div>
        </div>
        <div class="credit"><h3>Created by <span>Davies Evan</span> | All rights reserved.</h3></div>
      </section>









    <script>
        function fadeout(){
            var elem = document.getElementById("reveal");

            elem.style.opacity = 0;
            setTimeout(function(){
                elem.style.display = "none";
            },1000);
        }
        function fadein(){
            var elem = document.getElementById("reveal");

            elem.style.display = "block";
            setTimeout(function(){
                elem.style.opacity = 1;
            },10);
        }
    </script>
</body>
</html>