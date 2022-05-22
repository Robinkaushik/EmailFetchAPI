<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
    <script type="text/javascript">
        function showmsg(){
            alert("data saved succesfully") ;
        }
    </script>
    <style>
        * {
            font-family: 'DM Serif Display', serif;

        }

        #about_content {
            text-align: justify;
            font-size: 1em;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand" href="index.html">Yoga Retreat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_us">ABOUT US</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Yoga Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.html#comm_p">Meditation</a>
                            <a class="dropdown-item" href="index.html#ret_p">Pranayam</a>
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

        <!-- Contat Form Starts -->
        <div class="Custom04">
            <div class="Custom03">
                <div class="para">
                    <form action="conn.php" method="post">
                        <div class="name">
                            <label>name</label>
                            <input type="text" name="name" id="name"><br><br>
                        </div>
                        <div class="email">
                            <label>Email</label>
                            <input type="email" name="email" id="Email"><br><br>
                        </div>
                        <div class="password">
                            <label>Password</label>
                            <input type="password" name="pass" id="Password"><br><br><br>
                        </div>
                        <div class="submit">
                            <input type="submit" onclick="showmsg()" value="Submit" id="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <body>
        </body>

</html>
