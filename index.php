<!DOCTYPE html>
<html>

<head>
    <title> Sign In Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
#signup{margin-left: 40%;}

    </style>

</head>

<body class="text-center">
    <img src="bootstrappic.svg" width="50%" height="80px" class="mb-3 mt-5">


    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#login">LOG IN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#signup">REGISTER</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="login" class="container tab-pane active"><br>


            <h2 class="mb-3">Please Sign In</h2>
            <div class="">
                <form>
                    <input type="email" class="w-25 pt-2 pb-2" id="email" placeholder="Email Address" name="email"><br>
                    <input type="password" class=" w-25 pt-2 pb-2 " id="pword" placeholder="Password" name="pword"><br>

                    <label class="form-check form-check-label mt-3" for="check1">
                        <input type="checkbox" class="form-check-input " id="check1" value="Remember" checked>Remember
                        Me
                    </label>

                    <br>

                    <button class="btn btn-lg btn-primary w-25 mb-3">Sign In</button>

                </form>
                <br>
            </div>
        </div>



        <div id="signup" class="container tab-pane text-left pt-3 ">
            <form class="was-validated align-self-center"  >
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control w-25"  placeholder="Enter your name" id="name" required>
                    <div class="valid-feedback">Valid</div>
                    <div class="invalid-feedback">Please fill in details</div>
    
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control w-25" placeholder="Enter your Email Address" id="email" required>
                    <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Please fill in details</div>

                </div>
                <div class="form-group">
                    <label for="pword">Password:</label>
                    <input type="password" class="form-control w-25" placeholder="Enter your password" id="pword" required>
                    <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Please fill in details</div>

                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control w-25" placeholder="Enter your home address" id="address" >
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label"><input type="checkbox" class="form-check-input" name="sex">Male</label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label"><input type="checkbox" class="form-check-input" name="sex">Female</label>
                </div>
                <br><br>
                <div class="form-check">
                    <label class="form-check-label"><input type="radio" class="form-check-input" name="age">20-30</label>
                </div>
                <div class="form-check">
                    <label class="form-check-label"><input type="radio" class="form-check-input" name="age">31-40</label>
                </div>
                <div class="form-check">
                    <label class="form-check-label"><input type="radio" class="form-check-input" name="age">41 and above</label>
                </div>
                <br>


                <button class="btn btn-primary btn-lg w-25">Sign Up</button>
                
            </form>
        </div>
    </div>


</body>

</html>