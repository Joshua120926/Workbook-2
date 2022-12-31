<?php
// Start the session
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1)
?>

<?php
if (isset($_SESSION["status"])){
    if ($_SESSION["status"] == "loggedIn") {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rain World Fansite - Home</title>
        <link rel="icon" type="image/x-icon" href="https://static.miraheze.org/rainworldwiki/8/86/RW_Karma_5_icon.png">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="home.php">Home</a>
                <a class="navbar-brand" href="login.php">Login</a>
            </div>
        </nav>
        <!-- Header-->
        <header style="background: url(https://static.miraheze.org/rainworldwiki/b/bc/RW_SH_region_art.png); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center; image-rendering: auto; image-rendering: crisp-edges; image-rendering: pixelated; background-color:black"; class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">Rain World Fansite</h1>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
                </div>
            </div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img style="width:500px; height:500px; object-fit:cover; image-rendering: pixelated"; class="rounded-circle" src="https://static.miraheze.org/rainworldwiki/a/ac/Incapacitation_spear.gif" width="700" height="700" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Slugcats</h2>
                            <p>Slugcats are both the primary protagonists and only playable characters in Rain World. They are small white creatures with black eyes, thin arms, comparatively broad legs with small feet, broad-ended ears, and a thick tail that tapers. The player must keep the Slugcat they play as alive as they explore the world, confront strange creatures, and take part in completing challenging achievements. Slugcat has a variety of movement abilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img style="width:500px; height:500px; object-fit:cover; image-rendering: pixelated"; class="rounded-circle" src="https://static.miraheze.org/rainworldwiki/4/4b/Five_Pebbles.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Iterators</h2>
                            <p>Iterators are massive metal superstructures, sometimes called "cans", suspended high above the ground by number of supports. The undersides of the superstructures are frequented by periodic lethal green electric storms. A city can be found on top of each Iterator. Each superstructure contains an internal zero-gravity environment populated with Neuron Flies. There is also a central iterator "puppet" which can be directly communicated with.

</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img style="width:500px; height:500px; object-fit:cover; image-rendering: pixelated"; class="rounded-circle" src="https://static.miraheze.org/rainworldwiki/9/9f/Scavtollcommunication.gif" width="700" height="700" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Scavenger Tolls</h2>
                            <p>Scavenger Tolls are rooms in which a group of Scavengers has set up base around a toll post. Payment is required before passage through the Toll is allowed. When attempting to pass without payment, Scavengers immediately become aggressive, and a reputation penalty is incurred. Stealing items from within a certain radius around the toll post is considered stealing and may also aggravate the Scavengers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 4-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img style="width:500px; height:500px; object-fit:cover; image-rendering: pixelated"; class="rounded-circle" src="https://static.miraheze.org/rainworldwiki/7/7e/Green_lizard_charge_attack.gif" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Lizards</h2>
                            <p>Lizards are the most common species of predator. They are characterised by their typically black bodies and pulsing neon coloration. Whilst the specific abilities of each Lizard varies depending on the subspecies, there are some all species have in common, such as being able to perform charges of varying lengths and speeds, having armored heads that are immune to spears and soft bodies that are not, and access to special creature tunnels to navigate around rooms.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Joshua Rhodes 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

<?php
    } else {
        $_SESSION["errorMessage"] = "You are not logged in.";
        header("Location: index.php");
    }
} else {
    $_SESSION["status"] = "LoggedOut";
}

?>