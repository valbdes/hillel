<!-- 4. Написать форму регистрации пользователей с обязательными полями: логин (длина поля не более 15

символов), пароль(не меньше 8 символов, можно использовать буквы английского и русского алфавита,

-,_ и цифры), e-mail и информация о себе. В обработчике формы сделать обработку данных полей на

валидность и в тексте “информация о себе” заменить все заглавные буквы на прописные с помощью

регулярки. -->
<form action="login_user.php" name='login_user' method="POST">
    <div class="form-group">
        <input type="text" name="login" placeholder="Login" ><br>
        <input type="password" name="password" placeholder="Password" ><br>
        <input type="email" name="email" placeholder="email@email.com"><br>
        <input type="text" name="info" placeholder="Information"><br>
        <button>Send</button>
    </div>
</form>