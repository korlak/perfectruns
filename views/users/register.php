
<?php
/** @var string $error_message Повідомлення про помилку */
$this->Title = "Реєстрація";
?>
<h1>Реєстрація</h1>
<form action="" method="post">
    <?php if(!empty($error_message)) : ?>
        <p><?=$error_message?></p>
    <?php endif; ?>
    <div class="container">
        <label for="login"><b>Login</b></label>
        <input type="text" placeholder="Enter Username" name="login" value="<?=$this->controller->post->login ?>" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <label for="password2"><b>Repeat Password</b></label>
        <input type="password" placeholder="Enter Password" name="password2" required>

        <label for="password2"><b>Your Nickname</b></label>
        <input type="text" placeholder="Enter Nickname" name="nickname" value="<?=$this->controller->post->nickname ?>" required>

        <button type="submit">Register</button>
    </div>

</form>