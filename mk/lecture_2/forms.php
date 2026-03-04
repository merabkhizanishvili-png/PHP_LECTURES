<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 400px;
            margin: auto;
            border: solid 1px black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="worker.php" method="GET">
        <input type="text" placeholder="name" id="name" name="saxeli">
        <br></br>
        <input type="text" placeholder="subject" id="subject" name="sagani">
        <br></br>
        <button >send information (GET)</button>
    </form>
    <h1 id="result"></h1>

    <hr><hr>
    <form action="worker.php" method="post"> 
        <input type="text" placeholder="name" id="name" name="saxeli">
        <br></br>
        <input type="text" placeholder="subject" id="subject" name="sagani">
        <br></br>
        <button >send information (POST)</button>
    </form>

    <script>
        document.getElementById("myForm").addEventListener("submit", function(event) {
            event.preventDefault();

            let name = document.getElementById("name").value;
            let subject = document.getElementById("subject").value;

            document.getElementById("result").textContent =
                name + " studying " + subject;
        });
    </script>
</body>
</html>