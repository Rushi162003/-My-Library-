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
            /* padding-left: 50px; */
            /* width: 100vw; */
            width: 1260px;
            height: 100vh;
            background-color: #011222;
            overflow: hidden;
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
</head>

<body>
    <header>
        <nav>
            <ul class="menu m-4">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="login_index.html">Login</a></li>
                <li><a href="singup_index.html">Singin</a></li>
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
    </header>
    <section class="row">
        <div class="col-2">
            <div class="vul">
                <div class="vli" id="dashboard"><i class="fa-solid fa-gauge" active></i> <a href="Librarian.html" id="single">Dashboard</a></div>
                <div class="vli" id="add-librarian"><i class="fa-solid fa-user-plus"></i> <a href="add_librarian.html" id="single">Add
                        Librarian</a></div>
                <div class="vli" id="bookstock"><i class="fa-solid fa-address-book"></i> <a href="bookstock.html" id="single">Add
                        Bookstock</a></div>
                <div class="vli" id="add-student"><i class="fa-solid fa-user-plus"></i> <a href="add_student.html" id="single">Add
                        Student</a></div>
                <div class="vli" id="issue-books"><i class="fa-solid fa-book"></i> <a href="issue_book.html" id="single">Issue
                        Books</a></div>
                <div class="vli" id="return-books"><i class="fa-solid fa-rotate-left"></i> <a href="return_book.html" id="single">Return Books</a></div>
                <div class="vli" onclick="index.html" id="logout"><i class="fa-solid fa-right-from-bracket"></i>
                    <a href="index.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="col-9" id="m-dashboard">
            <div class="main">
                <div class="container ">
                    <div class="head text-center">
                        <h3>Add Student</h3>
                    </div>
                    <div class=" row">
                        <div class="col-6">
                            <label for="text">Studnet Id</label>
                            <input placeholder=" Student-id" type="text" id="std-id" name="text" class="input">
                            <label for="text">Student Name</label>
                            <input placeholder=" Student-name" id="std-name" type="text" name="text" class="input">
                            <label for="text">DOB</label>
                            <input placeholder=" Student-dob" type="date" id="std-dob" name="text" class="input">
                            <label for="text" id="description">Description</label><br>
                            <input style="height: 150px; width: 650px;" id="description" placeholder=" type here....." type="text" name="text" class="input description">
                        </div>
                        <div class="col-6">
                            <label for="text">Department</label>
                            <input placeholder=" department" type="text" id="department" name="text" class="input">
                            <label for="text">Mobile Number</label>
                            <input placeholder=" Student-number" id="std-number" type="number" name="text" class="input">
                            <label for="text">Student Email</label>
                            <input placeholder=" Student-email" id="std-email" type="email" name="text" class="input">
                        </div>
                        <div class="button">

                            <button id="bottone5" onclick="validate()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function validate() {
            var id = document.getElementById('std-id').value;
            var dob = document.getElementById('std-dob').value;
            var department = document.getElementById('department').value;
            var name = document.getElementById('std-name').value;
            var number = document.getElementById('std-number').value;
            var email = document.getElementById('std-email').value;

            if (id === "") {
                alert('Enter the student id ');
                return true;
            } else if (department === "") {
                alert('Enter the department');
                return true;
            } else if (dob === "") {
                alert('Enter the student Dob');
                return true;
            } else if (name === "") {
                alert('Enter the student name');
                return true;
            } else if (number === "") {
                alert('Enter the student numbar');
                return true;
            } else if (email === "") {
                alert('Enter the student email');
                return true;
            }

            /*function storeAndNevigate() {
                var input1 = document.getElementById("sid").value;
                var input2 = document.getElementById("sname").value;
    
                localStorage.setItem('userData1', input1);
                localStorage.setItem('userData2', input2);
                window.location.href='page2.html';
    
            }*/

            localStorage.setItem('userId', id);
            localStorage.setItem('userName', name);
            localStorage.setItem('userDepartment', department);
            localStorage.setItem('userDob', dob);
            localStorage.setItem('userNumber', number);
            // localStorage.setItem('userEmail',email);

            window.location.href = 'add_student1.1.php';
        }
    </script>
</body>

</html>