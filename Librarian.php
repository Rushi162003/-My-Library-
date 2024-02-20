<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>LMS</title>
    <style>
        .col-2 .vul {
            float: left;

        }

        button:hover {
            background-color: rgba(128, 128, 128, 0.51);
        }

        .main {
            padding-top: 20px;
            padding-left: 50px;
            width: 100vw;
            height: 100vh;
            background-color: #011222;
            /* float: right; */
            /* background-color: yellow; */
        }

        .vul .vli {
            font-size: 20px;
            margin-top: 20px;
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
        }

        .vli a {
            color: white;
            text-decoration: none;
            list-style-type: none;
        }

        .vli:hover {
            background-color: #011222;
        }

        #div10 {
            margin: 10px;
            margin-left: 5px;
            background-color: black;
            height: 120px;
            display: flex;
            align-items: center;
        }

        .student-profile i {
            /* background-color: rgba(221, 0, 255, 0.425); */
            background-color: #f8f8ff;
            color: #0c0c0c;
            padding: 40px 25px;
            border-radius: 50%;
        }

        #student-name {
            margin-bottom: -20px;
            background-color: #f8f8ff;
            color: #0c0c0c;
            border-radius: 5px;
            margin-left: 20px;
            margin-top: 50px;
        }

        #student-name p {
            padding: 5px 15px;
            margin-bottom: -.1px;
        }


        #no-std {
            position: absolute;
            margin-left: 150px;
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        #div2 {
            margin: 10px;
            margin-left: 5px;
            background-color: black;
            height: 120px;
            display: flex;
            align-items: center;
        }

        #div3 {
            margin: 10px;
            margin-left: 5px;
            background-color: black;
            height: 120px;
            display: flex;
            align-items: center;
        }

        #div4 {
            margin: 10px;
            margin-left: 5px;
            background-color: black;
            height: 120px;
            display: flex;
            align-items: center;
        }

        .droupdown a {
            z-index: 1;
            padding-top: -30px;
        }

        .menu li {
            list-style-type: none;
            display: inline-block;
            padding: 10px 20px;
            text-align: center;
        }

        .menu {
            text-align: center;
            text-decoration: none;
        }

        .menu h2 {
            position: absolute;
            text-align: start;
        }

        .menu .user-icon {
            position: absolute;
            text-align: end;
        }
    </style>
</head>

<body>
    <header>
        <!-- <nav>
            <ul class="menu m-4">
                <h2>Dashboard</h2>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="#" id="contact">Contact</a></li>
                <li class="user-icon"><i class="fa-solid fa-user fa-xl" style="color: #56575c;"></i></li>
                <!-- <span class="nav-item dropdown" id="profie"> <a class="nav-link " href="#">
                        <div class="dropDown">
                            <a class="li" href="#">Student</a>
                          </div>
                    </a></span> -->
        <!-- </ul>
        </nav> -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="row">
        <div class="col-2">
            <div class="vul">
                <!-- <div class="vli" id="dashboard"><i class="fa-solid fa-gauge" active></i> <a href="Librarian.php"
                        id="single">Dashboard</a></div> -->
                <div class="vli" id="add-librarian"><i class="fa-solid fa-user-plus"></i> <a href="add_librarian.php" id="single">Add
                        Librarian</a></div>
                <div class="vli" id="bookstock"><i class="fa-solid fa-address-book"></i> <a href="bookstock.php" id="single">Add
                        Bookstock</a></div>
                <div class="vli" id="add-student"><i class="fa-solid fa-user-plus"></i> <a href="add_student.php" id="single">Add
                        Student</a></div>
                <div class="vli" id="issue-books"><i class="fa-solid fa-book"></i> <a href="issue_book.php" id="single">Issue
                        Books</a></div>
                <div class="vli" id="return-books"><i class="fa-solid fa-rotate-left"></i> <a href="return_book.php" id="single">Return Books</a></div>
                <div class="vli" onclick="index.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i>
                    <a href="#" onclick="logout()">Logout</a>
                </div>
            </div>
        </div>
        <div class="col-9" id="m-dashboard">
            <div class="main">
                <div class="target row" id="div1">
                    <div class="col-2" id="div10">
                        <div class="student-profile"><i class="fa-solid fa-user fa-2xl"></i></div>
                        <div id="no-std">
                            <p name="no-student" id="no-student">100</p>
                        </div>
                        <div id="student-name">
                            <p>Students <i class="fa-solid fa-check fa-lg"></i></p>
                        </div>
                    </div>
                    <div class="col-2" id="div2">
                        <div class="student-profile"><i class="fa-solid fa-book fa-2xl"></i></div>
                        <div id="no-std">
                            <p name="no-student" id="no-student">100</p>
                        </div>
                        <div id="student-name">
                            <p>Books <i class="fa-solid fa-check fa-lg"></i></p>
                        </div>
                    </div>
                    <div class="col-2" id="div3">
                        <div class="student-profile"><i class="fa-solid fa-book fa-2xl"></i></div>
                        <div id="no-std">
                            <p>100</p>
                        </div>
                        <div id="student-name">
                            <p>Stock <i class="fa-solid fa-check fa-lg"></i></p>
                        </div>
                    </div>
                    <div class="col-2" id="div4">
                        <div class="student-profile"><i class="fa-solid fa-rotate-left fa-2xl"></i></div>
                        <div id="no-std">
                            <p>100</p>
                        </div>
                        <div id="student-name">
                            <p>Reports <i class="fa-solid fa-check fa-lg"></i></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        function logout() {
            window.close('Librarian.php')
        }
    </script>
</body>

</html>