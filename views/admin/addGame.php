<form action="" method="post">
    <?php if(!empty($error_message)) : ?>
        <p><?=$error_message?></p>
    <?php endif; ?>
    <div class="container">
        <label for="name"><b>Game name</b></label>
        <input type="text" placeholder="Game name" name="name" value="<?=$this->controller->post->name ?>" required>



        <label for="title"><b>Game Title</b></label>
        <input type="text" placeholder="Game title" name="title" value="<?=$this->controller->post->title ?>" required>


        <label for="about"><b>Game about</b></label>
        <input type="text" placeholder="Game about" name="about" value="<?=$this->controller->post->about ?>" required>

        <label for="miniPicture"><b>Game miniPicture</b></label>
        <input type="text" placeholder="Game miniPicture" name="miniPicture" value="<?=$this->controller->post->miniPicture ?>" required>

        <label for="picture"><b>Game picture</b></label>
        <input type="text" placeholder="Game picture" name="picture" value="<?=$this->controller->post->picture ?>" required>


        <button type="submit">Register</button>
    </div>

</form>