<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="formstyle.css">
    <title> Form </title>
</head>

<body>
    <div class="nav">
        <a href="#"> Home</a> | </a> <a href="#">View Student</a>| <a href="#"> Hostel </a>
    </div>
    <div class="form_wrapper">
    <form action="update.php" method="POST">
        <div class="input-group">
            <label for="regno"> 
                Reg. number 
            </label>
            <input type="text" id="regno" name="regno">

        </div>

        <div class="input-group"> 
            <label for="fname">First name </label>
            <input type="text" id="fname" name="fname">
        </div>

        <div class="input-group"> 
            <label for="lname"> Last name </label>
            <input type="text" id="lname" name="lname">
        </div>

        <div class="input-group"> 
            <label for="email"> Gender </label>
            <input type="text" id="email" name="email">
        </div>
        <div class="input-group">
            <input type="submit" value="Save">
        </div>
    </form>

    </div>
</body>

</html>