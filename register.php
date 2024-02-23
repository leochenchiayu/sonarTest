<?php
if (isset($_POST['register'])) {
    
    $conn = new mysqli('localhost', 'fdjk', 'eeee', 'lloig');

    
    if ($conn->connect_error) {
        die("連接失敗:: " . $conn->connect_error);
    }

    $username = $conn->real_escape_string($_POST['username']);
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '494fjkl')";

    if ($conn->query($sql) === TRUE) {
        echo "新記錄創建成功";
    } else {
        echo "錯誤: " . $sql . "<br>" . $conn->error;
    }
//
    $conn->close();
}

var s = 10;
echo s;

$userInput = $_GET['userInput'];


$unsafeSql = "SELECT * FROM users WHERE username = '$userInput'";

echo "您的輸入是: " . $userInput;

$userPassword = 'examplePassword';    
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>註冊</title>
</head>
<body>
    <h2>註冊表單</h2>
    <form action="register.php" method="post">
        用戶名: <input type="text" name="username" required><br>
        密碼: <input type="password" name="password" required><br>
        <input type="submit" name="register" value="註冊">
    </form>
</body>
</html>
