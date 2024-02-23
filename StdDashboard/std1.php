<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="std1.css">
  <title>Student Login</title>
</head>
<style>
  .container {
    width: 700px;
    margin-top: 20px;
    /* display: flex; */
    /* justify-content: center; */
}
.main
{
    /* display: flex;
    justify-content: center;
    align-items: center; */
    margin-left:80%;
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
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
  <div class="d-flex align-items-start mt-3">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link mb-3" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa-solid fa-house"></i> Home</button>
      <button class="nav-link mb-3 active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa-regular fa-address-card"></i>   Registration</button>
      <button class="nav-link mb-3" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
      <button class="nav-link mb-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
    </div>
    <div class="tab-content d-flex justify-content-center" id="v-pills-tabContent">
      <div class="tab-pane fade " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
      <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="main">
          <div class="container">
            <div class="head text-center">
              <h3>Add Student</h3>
            </div>
            <form action="" method="post">
              <div class=" row">
                <div class="col-6">
                  <label for="text">Studnet Id</label>
                  <input placeholder=" Student-id" disabled type="text" id="std-id" readonly name="text" class="input">
                  <label for="text">Student Name</label>
                  <input placeholder=" Student-name" autocomplete="none" id="std-name" type="text" name="name" class="input">
                  <label for="text">DOB</label>
                  <input placeholder=" Student-dob" autocomplete="none" type="date" id="std-dob" name="dob" class="input">
                  <label for="text" id="description">Description</label><br>
                  <input style="height: 150px; width: 650px;" autocomplete="none" id="description" placeholder=" type here....." type="text" name="des" class="input description">
                </div>
                <div class="col-6">
                  <label for="text">Department</label>
                  <input placeholder=" department" autocomplete="none" type="text" id="department" name="department" class="input">
                  <label for="text">Mobile Number</label>
                  <input placeholder=" Student-number" autocomplete="none" id="std-number" type="number" name="mobile" class="input">
                  <label for="text">Student Email</label>
                  <input placeholder=" Student-email" autocomplete="none" id="std-email" type="email" name="email" class="input">
                </div>
                <div class="button">
                  <button id="bottone5">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
  </div>
</body>

</html>