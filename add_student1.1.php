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
        body{
            background-color: #FFF3CF;
        }
        .row h3{
            margin: 30px 0 40px 50px;
            font-weight: 600;
            font-size: 35px;
        }
        .row #addstd #id-student{
            float: right;
            margin: 30px 20px 30px 0;
            border: 1px solid #eee;
            background-color: black;
            border-radius: 50px;
            padding: 10px;
            text-decoration: none;
            color: white;
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
                            <a href="add_student2.2.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"> Student Info</span></a>
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
                                <a href="add_student2.2.php" id="id-student"><i class="fa-solid fa-plus fa-lg"></i> Add
                                    Student</a>
                            </div>
                        </div>
                    </div>
                    <table id="myTable" class="table text-center table-dark table-hover table-striped">
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
</body>
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

</html>