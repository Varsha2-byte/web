<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h2>Student Registration Form</h2>

        <p><strong>Full Name:</strong> <?php echo $_POST['name']; ?></p>
        <p><strong>Nationality:</strong> <?php echo $_POST['nationality']; ?></p>
        <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
        <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
        <p><strong>Gender:</strong> <?php echo $_POST['gender']; ?></p>
        <p><strong>10th Marks (%):</strong> <?php echo $_POST['marks10']; ?></p>
        <p><strong>12th Marks (%):</strong> <?php echo $_POST['marks12']; ?></p>
        <p><strong>Current Age:</strong> <?php echo $_POST['age']; ?></p>
        <p><strong>CGPA (College):</strong> <?php echo $_POST['cgpa']; ?></p>
        <p><strong>Course:</strong> <?php echo $_POST['course']; ?></p>
        <p><strong>Address:</strong> <?php echo $_POST['address']; ?></p>

        <button onclick="window.location.href='index.html'">Back</button>
    </div>

</body>
</html>
