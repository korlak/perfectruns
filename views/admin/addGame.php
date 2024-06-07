<form action="" method="post">
    <?php if(!empty($error_message)) : ?>
        <p><?=$error_message?></p>
    <?php endif; ?>
    <div class="container">
        <label for="name"><b>Game name</b></label>
        <input type="text" placeholder="Game name" name="name" required>



        <label for="title"><b>Game Title</b></label>
        <input type="text" placeholder="Game title" name="title"  required>


        <label for="about"><b>Game about</b></label>
        <input type="text" placeholder="Game about" name="about"required>

        <label for="miniPicture"><b>Game miniPicture</b></label>
        <input type="text" placeholder="Game miniPicture" name="miniPicture" required>

        <label for="picture"><b>Game picture</b></label>
        <input type="text" placeholder="Game picture" name="picture"  required>


        <button type="submit">Register</button>
    </div>

</form>