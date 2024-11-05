<!DOCTYPE html>
<html>
<head>
    <title>Online Registration Form</title>
    <style>
        .required { color: red; }
        .form-container { width: 50%; margin: 0 auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="number"], input[type="email"] { width: 100%; padding: 8px; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Online Registration Form</h2>
        <form action="display.php" method="POST">
            <div class="form-group">
                <label>Last Name <span class="required">*</span></label>
                <input type="text" name="lastName" required>
            </div>
            <div class="form-group">
                <label>First Name <span class="required">*</span></label>
                <input type="text" name="firstName" required>
            </div>
            <div class="form-group">
                <label>Middle Initial</label>
                <input type="text" name="middleInitial" maxlength="1">
            </div>
            <div class="form-group">
                <label>Age <span class="required">*</span></label>
                <input type="number" name="age" required>
            </div>
            <div class="form-group">
                <label>Contact No. <span class="required">*</span></label>
                <input type="text" name="contactNo" required>
            </div>
            <div class="form-group">
                <label>E-mail <span class="required">*</span></label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Address <span class="required">*</span></label>
                <input type="text" name="address" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
