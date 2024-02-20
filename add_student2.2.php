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
        body {
            background-color: #FFF3CF;
        }

        .container {
            width: 700px;
            margin-top: 20px;
            /* display: flex; */
            /* justify-content: center; */
        }

        .head {
            margin-bottom: 30px;
        }

        label {

            margin-top: 20px;
            margin-left: 10px;
        }

        .input {
            width: 300px;
            /* max-width: 220px; */
            height: 45px;
            padding: 12px;
            border-radius: 12px;
            border: 1.5px solid lightgrey;
            outline: none;
            transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            box-shadow: 0px 0px 20px -18px;
            background-color: #97958E;
        }

        .input:hover {
            border: 2px solid lightgrey;
            box-shadow: 0px 0px 20px -17px;
        }

        .input:active {
            transform: scale(0.95);
        }

        .input:focus {
            border: 2px solid grey;
        }

        .input::placeholder {
            color: black;
        }

        .button {
            margin-top: 30px;
            margin-left: 20px;
        }

        #bottone5 {
            align-items: center;
            background-color: #550bdee5;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: .25rem;
            box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
            box-sizing: border-box;
            color: rgba(0, 0, 0, 0.85);
            cursor: pointer;
            display: inline-flex;
            font-family: system-ui, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 600;
            justify-content: center;
            line-height: 1.25;
            min-height: 3rem;
            padding: calc(.875rem - 1px) calc(1.5rem - 1px);
            text-decoration: none;
            transition: all 250ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            width: auto;
        }

        #bottone5:hover,
        #bottone5:focus {
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
            color: rgba(0, 0, 0, 0.65);
        }

        #bottone5:hover {
            transform: translateY(-1px);
        }

        #bottone5:active {
            background-color: #550bdee5;
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
            color: rgba(0, 0, 0, 0.65);
            transform: translateY(0);
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
                    <div class="container ">
                        <div class="head text-center">
                            <h3>Add Student</h3>
                        </div>
                        <form action="action.php" method="post">
                            <div class=" row">
                                <div class="col-6">
                                    <label for="text">Studnet Id</label>
                                    <input placeholder=" Student-id" type="text" id="std-id" readonly name="text" class="input">
                                    <label for="text">Student Name</label>
                                    <input placeholder=" Student-name" id="std-name" type="text" name="name" class="input">
                                    <label for="text">DOB</label>
                                    <input placeholder=" Student-dob" type="date" id="std-dob" name="dob" class="input">
                                    <label for="text" id="description">Description</label><br>
                                    <input style="height: 150px; width: 650px;" id="description" placeholder=" type here....." type="text" name="des" class="input description">
                                </div>
                                <div class="col-6">
                                    <label for="text">Department</label>
                                    <input placeholder=" department" type="text" id="department" name="department" class="input">
                                    <label for="text">Mobile Number</label>
                                    <input placeholder=" Student-number" id="std-number" type="number" name="mobile" class="input">
                                    <label for="text">Student Email</label>
                                    <input placeholder=" Student-email" id="std-email" type="email" name="email" class="input">
                                </div>
                                <div class="button">
                                    <button id="bottone5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    // function validate() {
    //     var id = document.getElementById('std-id').value;
    //     var dob = document.getElementById('std-dob').value;
    //     var department = document.getElementById('department').value;
    //     var name = document.getElementById('std-name').value;
    //     var number = document.getElementById('std-number').value;
    //     var email = document.getElementById('std-email').value;

    //     if (department === "") {
    //         alert('Enter the department');
    //         return true;
    //     } else if (dob === "") {
    //         alert('Enter the student Dob');
    //         return true;
    //     } else if (name === "") {
    //         alert('Enter the student name');
    //         return true;
    //     } else if (number === "") {
    //         alert('Enter the student numbar');
    //         return true;
    //     } else if (email === "") {
    //         alert('Enter the student email');
    //         return true;
    //     }

    //     /*function storeAndNevigate() {
    //             var input1 = document.getElementById("sid").value;
    //             var input2 = document.getElementById("sname").value;
    
    //             localStorage.setItem('userData1', input1);
    //             localStorage.setItem('userData2', input2);
    //             window.location.href='page2.html';
    
    //         }*/

    //     localStorage.setItem('userId', id);
    //     localStorage.setItem('userName', name);
    //     localStorage.setItem('userDepartment', department);
    //     localStorage.setItem('userDob', dob);
    //     localStorage.setItem('userNumber', number);
    //     // localStorage.setItem('userEmail',email);

    //     window.location.href = 'add_student1.1.php';
    // }
</script>

</html>