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
        <div class="result_sec">
            <div class="titile">
            <strong>Student Result:</strong>
        </div>

        <form method="get" action="result.php">         
            <div class="rslt">
                <label >Student ID:</label>
                <input type="text" name="id" class="std_id" onkeyup="getRes(this.value)">
            </div>
        </form>
        </div>

        <div id="res"></div>
    </div>


    <script>
        function getRes(sid){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("res").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "result.php?id="+sid+"&year=2022", true);
            xmlhttp.send();
        }


        // function test(){
        //     var xmlhttp = new XMLHttpRequest();
        //     xmlhttp.onreadystatechange = function() {
        //       if (this.readyState == 4 && this.status == 200) {
        //         document.getElementById("res").innerHTML = this.responseText;
        //       }
        //     };
        //     xmlhttp.open("GET", "test.php", true);
        //     xmlhttp.send();
        // }

        // setInterval(function () {
        //     test()
        // }, 50);
    </script>
    
</body>
</html>