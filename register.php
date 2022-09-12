<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Registration Form</title>
</head>
<body>

    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="upload-handler.php">
            <h1><b>Registration Form</b></h1>
            
                <label for="compname">Complete Name</label>
                <input type="text" class="form-control" name="compname" placeholder="John Doe" required="required">
                 
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="doe.john@student.auf.edu.ph" required="required">
                     
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="********" required="required">
        
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password" placeholder="********" required="required">
             
                <label for="fileSelect">Picture</label>
                <input type="file" name="fileSelect" id="fileSelect" class="form-control" required><br>
            
            <div class ="text-center">
            <button type="submit" class="btn-default">Submit Registration</button>
            </div>
        </form>
    </div>

</body>
</html>