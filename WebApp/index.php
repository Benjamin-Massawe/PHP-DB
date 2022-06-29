<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ===== Metadata ===== -->
    <meta charset="utf-8">
    <!-- ===== Main CSS ===== -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- ===== Favicon | PageIcon ===== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- ===== Title ===== -->
    <title>Registration Form</title>
</head>

<body>
    <!-- ===== Navigation ===== -->
    <div class="nav">
        <div class="nav-brand">
            <img src="assets/img/logo.png" alt="CBE logo">
        </div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">View Student</a>
            <a href="#">Hostel</a>
        </div>
    </div>

    <!-- ===== Form Wrapper ===== -->
    <div class="form_wrapper">
        <form action="assets/required/save_to_db.php" method="POST">
            <h1>Create Account</h5>
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
                    <input type="text" id="gender" name="gender">
                </div>
                <div class="input-group">
                    <label for="course"> Course </label>
                    <input type="text" id="course" name="course" placeholder="Enter your course">
                </div>
                <div class="submission">
                    <input type="submit" value="Save" class="submit">
                </div>
        </form>
    </div>
    <!-- ===== Form Wrapper ===== -->


     <!-- ===== Scripts ===== -->
     <script src="assets/js/main.js" type="text/javascript"></script>

</body>

</html>