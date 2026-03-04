<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form method="POST" action="">
        <table>
            <tr>
                <th>Questions</th>
                <th>Answers</th>
                <th>Max Point</th>
            </tr>
            <tr>
                <td>What is JS?</td>
                <td><input type="text" name="js" class="answer-input" required></td>
                <td>8</td>
            </tr>
            <tr>
                <td>What is React?</td>
                <td><input type="text" name="react" class="answer-input" required></td>
                <td>9</td>
            </tr>
            <tr>
                <td>What is Angular?</td>
                <td><input type="text" name="angular" class="answer-input" required></td>
                <td>10</td>
            </tr>
            <tr>
                <td>What is HTML?</td>
                <td><input type="text" name="html" class="answer-input" required></td>
                <td>8</td>
            </tr>
            <tr>
                <td>What is PHP?</td>
                <td><input type="text" name="php" class="answer-input" required></td>
                <td>10</td>
            </tr>
            <tr>
                <td>What is CSS?</td>
                <td><input type="text" name="css" class="answer-input" required></td>
                <td>10</td>
            </tr>
        </table>

        <div class="student-row">
            <label>Student:</label>
            <input type="text" name="name" placeholder="name" required>
            <input type="text" name="lastname" placeholder="lastname" required>
            <button type="submit">Send</button>
        </div>
    </form>

</body>
</html>