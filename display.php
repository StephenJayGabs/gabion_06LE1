<?php
require_once 'FormInfoClass.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formInfo = new FormInfoClass();

    // Set the values
    $formInfo->setLastName($_POST['lastName']);
    $formInfo->setFirstName($_POST['firstName']);
    $formInfo->setMiddleInitial($_POST['middleInitial']);
    $formInfo->setAge($_POST['age']);
    $formInfo->setContactNo($_POST['contactNo']);
    $formInfo->setEmail($_POST['email']);
    $formInfo->setAddress($_POST['address']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Information</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
        }
        .info-box {
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin-top: 20px;
        }
        .info-group {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Information</h2>
        
        <div class="info-box">
            <div class="info-group">
                <span class="label">Last Name:</span>
                <?php echo htmlspecialchars($formInfo->getLastName()); ?>
            </div>

            <div class="info-group">
                <span class="label">First Name:</span>
                <?php echo htmlspecialchars($formInfo->getFirstName()); ?>
            </div>

            <div class="info-group">
                <span class="label">Middle Initial:</span>
                <?php echo htmlspecialchars($formInfo->getMiddleInitial()); ?>
            </div>

            <div class="info-group">
                <span class="label">Age:</span>
                <?php echo htmlspecialchars($formInfo->getAge()); ?>
            </div>

            <div class="info-group">
                <span class="label">Contact No:</span>
                <?php echo htmlspecialchars($formInfo->getContactNo()); ?>
            </div>

            <div class="info-group">
                <span class="label">Email:</span>
                <?php echo htmlspecialchars($formInfo->getEmail()); ?>
            </div>

            <div class="info-group">
                <span class="label">Address:</span>
                <?php echo htmlspecialchars($formInfo->getAddress()); ?>
            </div>
        </div>

        <a href="index.php">Back to Form</a>
    </div>
</body>
</html>

<?php
} else {
    header("Location: index.php");
    exit();
}
?>
