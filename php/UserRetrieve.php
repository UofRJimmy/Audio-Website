<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Retrieve</title>
    <link rel="stylesheet" href="../css/styleLogin.css"/>
</head>
<body>
<div class="container">
    <div class="panel">
        <div class="content">
            <div class="switch">
                <h1 id="signUp">forget password</h1>
            </div>

            <form action="">

                <div id="email" class="input" ><input type="text" placeholder="email"></div>
                <p><button id="getemailCode">send code</button></p>
                <div id="emailCode" class="input"><input type="text" placeholder="email code"></div>
                <div id="password" class="input"><input type="password" placeholder="new password"></div>
                <div id="repeat" class="input"><input type="password" placeholder="reenter new password"></div>

                <p>
                    <a id="login" href="./UserLogin.php" class="input">back to login page</a>
                </p>

                <button onclick="location.href='UserLogin.php'" id="reset" type="button">submit change</button>

            </form>
        </div>
    </div>
</div>
</body>


</html>