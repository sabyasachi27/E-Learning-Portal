<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Edit</title>
    <link rel="stylesheet" type="text/css" href="edit-profile-style.css">
</head>
<body>
    <center>
        <div class="box">
            <img src="../img/man.png" alt="Profile Pic">
            <input type="file" name="" id="file" accept="image/*">
            <label for="file">EDIT PIC</label>
            <div class="form">
                <input type="text" name="" placeholder="Enter Your Name">
                <input type="email" name="" placeholder="Enter Your Email">
                <input type="text" name="" placeholder="Enter Your phone no.">
            </div>
            <button style="float:left; margin:10px 0 0 18.2%;" onclick="location.href='stud-profile.php';">BACK</button>
            <button style="float:right; margin:10px 18.2% 0 0;">UPDATE</button>
        </div>
    </center>
</body>
</html>