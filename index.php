<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="intro_sec">
            <img src="assets/img/logo.png" alt="" class="logo">
            <h1>Board of Intermediate & Secondary Education, Jashore</h1>
            <h2>SSC Result 2022</h2>
        </div>
        <div class="result_sec">
            <div class="titile">
            <strong>Student Result:</strong>
        </div>

        <form method="get" action="result.php">         
            <div class="rslt">
                <label >Student ID:</label>
                <input type="text" name="stdid" class="std_id">      
                <label >Exam Year:</label>
                <input type="text" name="examyear" class="std_year">  
                <button type="submit">Result</button>    
            </div>
        </form>

        </div>

    </div>
    
</body>
</html>