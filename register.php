<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registration Form</title>
</head>
<body>
    <div class="header">
        
    </div>
    <div class="container">   
    <h1>Registration Form</h1>     
        <form method="POST" enctype="multipart/form-data" action="form-handler.php">
                <label for="complete_name">Complete Name</label>
                <input type="text" id="complete_name" name="complete_name" placeholder="Complete Name" required><br>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="email@example.com" required><br>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required><br>

                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" placeholder="Confirm Password" required><br>

                <label for="input_file">Choose File</label>
                <input type="file" id="input_file" name="input_file" required><br>

                <button type="submit">Submit Registration</button>

            </div>
        </form>
    </div>
</body>
</html>
