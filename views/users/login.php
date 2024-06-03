
<?php
/** @var string $error_message Повідомлення про помилку */
$this->Title = "Логін";
?>
<h1>Вхід</h1>
<form action="" method="post">
    <?php if(!empty($error_message)) : ?>
        <h1><?=$error_message?></h1>
    <?php endif; ?>
    <div class="container">
        <label for="login"><b>Login</b></label>
        <input type="text" placeholder="Enter Username" name="login" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>

</form>