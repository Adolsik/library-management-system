<?php require("register.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign Up</title>
</head>
<body class="bg-slate-900">
    <!-- Form -->
    <div class="flex justify-center mt-10">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <div class="grid gap-6 m-6 border-2 border-gray-500 p-5 rounded-lg w-96">
                <div>
                    <span class="inputLabel">Name</span> 
                    <input class="input" type="text" name="name" placeholder="Name" required> 
                </div>
                <div>
                    <span class="inputLabel">Surname</span>
                    <input class="input" type="text" name="surname" placeholder="Surname" required> 
                </div>
                <div>
                    <span class="inputLabel">E-mail</span>
                    <input class="input" type="email" name="email" placeholder="E-mail" required> 
                </div>
                <div>
                    <span class="inputLabel">Password</span> 
                    <input class="input" type="password" name="password" placeholder="Password" required>
                </div>
                <input class="submit" type="submit" value="Sign up">
                <div class="flex justify-start">
                    <?php echo "<span style='color: red; ' >".$infoMsg."</span>" ?>
                </div>
            </div>
        </form>
    </div>
</body>
</html>