<div class="container1">
            <div class="titulli">
                <h1>Enchanted Day</h1>

            </div>

            <div class="navigation">
            <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == true): ?>
                            <a href="View/Dashboard.php">Dashboard</a>
                        <?php endif; ?>
                <a href="HomePage.php">Home</a>
                <div class="dropdown">
                    <a href="#">Services</a>
                    <div class="permbajtja">
                        <a href="Venues.php">Venues</a>
                        <a href="Catering&Cakes.php">Catering & Cakes</a>
                        <a href="Photos&Videos.php">Photo & Video</a>
                        <a href="Decorating.php">Decoration</a>
                        <a href="Beauty.php">Beauty</a>
                    </div>
                </div>
                <a href="Budget.php">Budget</a>
                <a href="ContactUs.php">Contact Us</a>
                <div class="dropdown">
                <a href="SignUp.php" id="signup">Sign Up</a>
                <div class="permbajtja">
                <a href="Signout.php">Sign Out</a></div></div>

                <form action="/search" method="get" class="search">
                    <input type="text" name="search" placeholder="Search..." class="inputi">
                    <button type="submit"><img src="Fotot/search.png" ></button>
                </form>
            </div>
        </div>