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
        .col-2 .vul {
            float: left;

        }

        body{
            overflow-x: hidden;

        }
        button:hover {
            background-color: rgba(128, 128, 128, 0.51);
        }

        .main {
            padding-top: 20px;
            /* padding-left: 50px; */
            /* width: 100vw; */
            width: 1260px;
            height: 100vh;
            /* background-color: #011222; */
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
        }

        .vli:hover {
            background-color: #011222;
        }

        #id-student {
            color: #56575c;
            text-decoration: none;
            background-color: white;
            padding: 10px;
            border-radius: 50px;
        }

        .col-6 h3 {
            margin-left: 30px;
            color: rgba(255, 255, 255, 0.711);
            font-weight: 350;
            letter-spacing: 1.5px;
        }

        .add-std #id-student {
            float: right;
            margin-right: 20px;
        }

        .droupdown a {
            z-index: 1;
            padding-top: -30px;
        }

        table {
            margin: 50px 500px 0px 20px;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <!-- <header>
        <nav>
            <ul class="menu m-4">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="login_index.php">Login</a></li>
                <li><a href="singup_index.php">Singin</a></li>
                <li><a href="#">Registration</a></li>
                <li><a href="#" id="contact">Contact</a></li>
                <span class="nav-item dropdown" id="profie">
                    <a class="nav-link " href="#">
                        <li><i class="fa-solid fa-user fa-xl" style="color: #56575c;"></i></li>
                        <div class="dropDown">
                            <a class="li" href="#">Student</a>
                        </div>
                    </a>
                </span>
            </ul>
        </nav>
    </header> -->
    <!-- <section class="row">
        <div class="col-2">
            <div class="vul">
                <div class="vli" id="dashboard"><i class="fa-solid fa-gauge" active></i> <a href="Librarian.html"
                        id="single">Dashboard</a></div>
                <div class="vli" id="add-librarian"><i class="fa-solid fa-user-plus"></i> <a href="add_librarian.html"
                        id="single">Add
                        Librarian</a></div>
                <div class="vli" id="bookstock"><i class="fa-solid fa-address-book"></i> <a href="bookstock.html"
                        id="single">Add
                        Bookstock</a></div>
                <div class="vli" id="add-student"><i class="fa-solid fa-user-plus"></i> <a href="add_student.html"
                        id="single">Add
                        Student</a></div>
                <div class="vli" id="issue-books"><i class="fa-solid fa-book"></i> <a href="issue_book.html"
                        id="single">Issue
                        Books</a></div>
                <div class="vli" id="return-books"><i class="fa-solid fa-rotate-left"></i> <a href="return_book.html"
                        id="single">Return Books</a></div>
                <div class="vli" onclick="index.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i>
                    <a href="index.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="col-9" id="m-dashboard">
            <div class="main">
                <div class="row">
                    <div class="col-6">
                        <h3>Appointment</h3>
                    </div>
                    <div class="col-6" id="addstd">
                        <div class="add-std">
                            <a href="add_student_2.php" id="id-student"><i class="fa-solid fa-plus fa-lg"></i> Add
                                Student</a>
                        </div>
                    </div>
                </div>
                <table id="myTable" class="table table-striped table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Student-id</th>
                            <th>Student Name</th>
                            <th>Department</th>
                            <th>DOB</th>
                            <th> Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="st-id"></td>
                            <td id="st-name"></td>
                            <td id="st-de"></td>
                            <td id="st-dob"></td>
                            <td id="st-nu"></td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </section> -->
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
                            <a href="add_student.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"> Add Student</span></a>
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
                    <div class="row">
                        <div class="col-6">
                            <h3>Appointment</h3>
                        </div>
                        <div class="col-6" id="addstd">
                            <div class="add-std">
                                <a href="add_student_2.php" id="id-student"><i class="fa-solid fa-plus fa-lg"></i> Add
                                    Student</a>
                            </div>
                        </div>
                    </div>
                    <table id="myTable" class="table table-striped table-hover table-dark">
                        <thead>
                            <tr>
                                <th>Student-id</th>
                                <th>Student Name</th>
                                <th>Department</th>
                                <th>DOB</th>
                                <th> Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="st-id"></td>
                                <td id="st-name"></td>
                                <td id="st-de"></td>
                                <td id="st-dob"></td>
                                <td id="st-nu"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        var id = localStorage.getItem('userId');
        var name1 = localStorage.getItem('userName');
        var de = localStorage.getItem('userDepartment');
        var dob = localStorage.getItem('userDob');
        var number = localStorage.getItem('userNumber');

        document.getElementById('st-id').innerHTML = id;
        document.getElementById('st-name').innerHTML = name1;
        document.getElementById('st-de').innerHTML = de;
        document.getElementById('st-dob').innerHTML = dob;
        document.getElementById('st-nu').innerHTML = number;

        // var table = document.getElementById("myTable");
        // var row = table.insertRow(0);
        // var cell1 = row.insertCell(0);
        // var cell2 = row.insertCell(1);
        // var cell3 = row.insertCell(2);
        // var cell4 = row.insertCell(3);
        // var cell5 = row.insertCell(4);
        // cell1.innerHTML = id;
        // cell2.innerHTML = name1;
        // cell3.innerHTML = de; 
        // cell4.innerHTML = dob;
        // cell5.innerHTML = number;
    </script>
</body>

</html>