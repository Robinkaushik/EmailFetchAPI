<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yoga Retreat</title>
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="footer/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="footer/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="footer/assets/css/styles.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="login.js">
    </script>
    <style>
        html,
        body {
            width: 100%;
        }

        section {
            width: 100%;
            margin: 0;
            padding-top: 0;
        }

        * {
            font-family: 'DM Serif Display', serif;

        }

        .leasing {
            text-transform: capitalize;
        }

        .our_partners {
            height: 200px;
            width: 200px;
        }

        .second {
            width: 99%;
            transition: width 1s, height 1s, box-shadow 1s;
            box-shadow: 2px 3px 2px 3px #ccc;
            border: 1px solid #ccc;
        }

        .second:hover {
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand" href="index.php">Yoga Retreat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT US</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Yoga Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#comm_p">Meditation</a>
                            <a class="dropdown-item" href="#ret_p">Pranayam</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#partners">Owner</a>
                    </li>
                </ul>
                <!--  <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
            </div>
        </nav>
        <!-- NAVBAR ENDS -->
        <div class="Custom04">
            <div class="Custom02">
                <!-- <div class="para">
        <h2>LOGIN FORM</h2>
    </div> -->
            </div>
            <div class="Custom03">
                <div class="para">
                    <!-- form starts -->
                    <form id="form_id" action="dashboard.php" method="post" name="myform">
                        <label>User Name :</label>
                        <input type="text" name="username" id="username" /><br><br>
                        <label>Password :</label>
                        <input type="password" name="password" id="password" /><br><br>
                        <input type="button" value="Login" id="submit" onclick="validate()" />
                    </form>
                </div>
            </div>
        </div>



</body>

</html>