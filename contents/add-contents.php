<?php include_once "../connection.php"; ?>


<?php
	$qry1 = mysqli_query($con, "SELECT * FROM `courses` WHERE `status` = 'active'");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add content</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap');
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background: url(../assets/img/testimonials-bg.jpg) no-repeat center center fixed;
	    background-size: cover;
        margin-top: 40px;
        font-family: 'Baloo Bhai 2', cursive;
    }
    input{
        font-family: 'Baloo Bhai 2', cursive;
    }
    .content-form{
        width: 700px;
        background-color: rgba(0, 0, 0, 0.6);
        margin: auto;
        color: #FFFFFF;
        padding: 10px 0px 10px 0px;
        text-align: center;
        border-radius: 15px 15px 0px 0px;
    }
    .main{
        background-color: rgba(0, 0, 0, 0.5);
        width: 700px;
        margin: auto;
    }
    form{
        padding: 10px;
    }
    .name{
        margin-left: 25px;
        margin-top: 30px;
        width: 125px;
        color: white;
        font-size: 18px;
        font-weight: 700;
    }
    .cont-name{
        position: relative;
        left: 160px;
        top: -37px;
        line-height: 35px;
        width: 400px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
    }
    .link{
        position: relative;
        left: 160px;
        top: -37px;
        line-height: 35px;
        width: 400px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
    }
    .desc{
        position: relative;
        left: 160px;
        top: -37px;
        line-height: 35px;
        width: 400px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
    }
    .option{
        position: relative;
        left: 160px;
        top: -37px;
        line-height: 35px;
        width: 447px;
        height: 38px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
        outline: none;
        overflow: hidden;
        font-family: 'Baloo Bhai 2', cursive;
    }
    .course-fee{
        position: relative;
        left: 160px;
        top: -37px;
        line-height: 35px;
        width: 400px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
    }
    button{
        background-color: #0277bd;
        display: block;
        margin: 10px 0px 0px 244px;
        text-align: center;
        border-radius: 12px;
        border: 2px solid #366473;
        padding: 12px 38px;
        outline: none;
        color: white;
        cursor: pointer;
        font-size: 16px;
        margin-bottom: 15px;
    }
    button:hover{
		background-color: #43abe8;
	}
</style>
<body>
    <div class="content-form"><h1>Add Content</h1></div>
    <div class="main">
        <form action="add-contents-acc.php">
            <h2 class="name">Select course</h2>
            <select name="course" class="option">
                <option disabled="disabled" selected="selected">--choose option</option>
                <?php
				while($row = mysqli_fetch_array($qry1)) {
	
					echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				}
			?>
            </select>
            <h2 class="name">Content Name</h2>
            <input class="cont-name" type="text" name="cont-name" placeholder="Enter content name">

            <h2 class="name">Add link</h2>
            <input type="url" class="link" name="link" placeholder="Enter content link">

            <h2 class="name">description</h2>
            <textarea class="desc" name="content" rows="4" placeholder="Enter content description" required></textarea>

            <h2 class="name">Type</h2>
            <select name="type" class="option">
                <option disabled="disabled" selected="selected">--choose option</option>
                <option value="free">free</option>
                <option value="paid">paid</option>
            </select>
            <h2 class="name">course fee</h2>
            <input type="text" class="course-fee" name="course-fee" placeholder="Enter course fee">
            <br><br>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>