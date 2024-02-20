<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="librarian1.css"> -->
    <style>
        .col-2 .vul {
            float: left;

        }

        button:hover {
            background-color: rgba(128, 128, 128, 0.51);
        }

        body {
            background-color: #FFF3CF;

        }

        .main {
            padding-top: 20px;
            padding-left: 50px;
            /* width: 100vw; */
            /* height: 100vh; */
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
            /* box-shadow:5px 5px 15px black; */
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
            color: white;
        }

        #div2 {
            margin: 10px;
            margin-left: 5px;
            background-color: black;
            height: 120px;
            display: flex;
            align-items: center;
            /* box-shadow:5px 5px 15px black; */

        }

        #div3 {
            margin: 10px;
            margin-left: 5px;
            background-color: black;
            height: 120px;
            display: flex;
            align-items: center;
            /* box-shadow:5px 5px 15px black; */

        }

        #div4 {
            margin: 10px;
            margin-left: 5px;
            background-color: black;
            height: 120px;
            display: flex;
            align-items: center;
            /* box-shadow:5px 5px 15px black; */

        }
        #div10:hover,#div2:hover,#div3:hover,#div4:hover
        {
            box-shadow:5px 5px 15px black;
            cursor: pointer;

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
    <title>Document</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Dashboard</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline"> Add Librarian</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"> Add Bookstock</span> </a>
                        </li>
                        <li>
                            <a href="add_student1.1.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline" > Student Info</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline"> Issue Books</span></a>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline"> Return Books</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline"> Logout</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1" id="profile" name="profile">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <div class="main">
                    <div class="target row" id="div1">
                        <div class="col-3 bg-dark" id="div10">
                            <div class="student-profile"><i class="fa-solid fa-user fa-2xl"></i></div>
                            <div id="no-std">
                                <p name="no-student" id="no-student">100</p>
                            </div>
                            <div id="student-name">
                                <p>Students <i class="fa-solid fa-check fa-lg"></i></p>
                            </div>
                        </div>
                        <div class="col-3 bg-dark" id="div2">
                            <div class="student-profile"><i class="fa-solid fa-book fa-2xl"></i></div>
                            <div id="no-std">
                                <p name="no-student" id="no-student">100</p>
                            </div>
                            <div id="student-name">
                                <p>Books <i class="fa-solid fa-check fa-lg"></i></p>
                            </div>
                        </div>
                        <div class="col-3 bg-dark" id="div3">
                            <div class="student-profile"><i class="fa-solid fa-book fa-2xl"></i></div>
                            <div id="no-std">
                                <p>100</p>
                            </div>
                            <div id="student-name">
                                <p>Stock <i class="fa-solid fa-check fa-lg"></i></p>
                            </div>
                        </div>
                        <div class="col-3 bg-dark" id="div4">
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
        </div>
    </div>
    
</body>

</html>