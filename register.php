<?php
include 'index.php';
Head('Login')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Страница регистрации</title>
    </head>

    <!--<body>
    Заполните форму:
    <form method="POST" action="register.php">
    <br><input type="text" name="login" required> - Логин
    <br><input type="email" name="email" required> - E-Mail
    <br><input type="password" name="password" required> -Пароль
    <br><input type="text" name="name" required> - Имя
    <br><br><input type="submit" name="enter" value="Регистрация"> <input type="reset" value="Очистить">
    </form>
    </body>-->

    <div class="wrapper">
        <div class="header"></div>
        <div class="content">
            <?php
            Menu();
            MessageShow()
            ?>
            <div class="Page">
                <form method="POST" action="form/account.php">
                    <br><input type="text" name="login" placeholder="Login" maxlength="10" pattern="[A-Za-z-0-9]{3,10}" title="No more then 10, no less then 3 latin symbols or numbers" required>
                    <br><input type="email" name="email" placeholder="Email" required>
                    <br><input type="password" name="password" placeholder="Password" maxlength="15" pattern="[A-Za-z-0-9]{5,15}" title="No more then 15, no less then 5 latin symbols or numbers" required>
                    <br><input type="text" name="name" placeholder="Name" maxlength="10" pattern="[A-Za-z]{4,10}" title="No more then 10, no less then 4 latin symbols" required>

                    <br><select size="1" name="country">
                        <option selected value="0">I don't know country</option>
                        <option value="1">Belarus</option>
                        <option value="2">Russia</option>
                        <option value="3">Ukraine</option>
                        <option value="4">Poland</option>
                    </select>

                    <div class="capdiv"> <div><img src="captcha.php" class="capimg" alt="Captcha"></div> <input type="text" class="capin" name="captcha"  placeholder="Captch" maxlength="10" pattern="[0-9]{1,5}" title="Numbers only" required> </div>
                    <div><input type="submit" name="enter" value="Registration"> <input type="reset" value="Clear"></div>
                </form>
            </div>
        </div>

<?php Footer() ?>
    </div>
</body>
</html>

