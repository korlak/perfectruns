<form enctype="multipart/form-data" action="" method="post">
    <?php if (!empty($error_message)) : ?>
        <p><?= $error_message ?></p>
    <?php endif; ?>
    <div class="container">
        <label for="name"><b>Game name</b></label>
        <input type="text" placeholder="Game name" name="name" required>

        <label for="countAchieve"><b>Count Achievements</b></label>
        <input id="countAchieve" type="number" name="countAchieve" max="10000" min="1">

    </div>


    <div class="gamePage">
        <div class="title-frame">
            <div class="title-logo">
                <label for="picture" class="custom-file-upload">
                    Upload Picture
                </label>
                <input accept="image/*" onchange="previewImage(event)" type="file" id="picture" required>
                <img id="preview" alt="Image Preview" width="200px" height="136px">
            </div>
            <div class="title-text">
                <label for="title"><b>Game Title</b></label>
                <input type="text" placeholder="Game title" id="title" required>
            </div>
        </div>
        <div class="about">
            <textarea type="text" placeholder="Game about" name="about" required></textarea>
        </div>
        <div class="achievements">

            <div class="achiv">
                <div class="titleAch">

                </div>
                <div class="aboutAch">312312123</div>
                <div class="ach-img"></div>
                <div class="btnAchCompleted"></div>
                <div class="btnGuides"></div>
            </div>
        </div>
    </div>
    <button type="submit">Register</button>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');
            const label = document.querySelector('.custom-file-upload');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    label.style.display = 'none'
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }
    </script>
</form>

