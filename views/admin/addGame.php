<label for="countAchieve"><b>Count Achievements</b></label>
<input id="countAchieve" type="number" name="countAchieve" max="10000" min="1">
<button class="button-countAchiv" onclick="repeatAchievements()">R</button>
<form action="" method="post" enctype="multipart/form-data" >
    <?php if (!empty($error_message)) : ?>
        <p><?= $error_message ?></p>
    <?php endif; ?>
    <div class="container">
        <label for="name"><b>Game name</b></label>
        <input type="text" placeholder="Game name" name="name" required>
    </div>


    <div class="gamePage">
        <div class="title-frame">
            <div class="title-logo">
                <label for="picture" class="custom-file-upload">
                    Upload Picture
                </label>
                <input accept="image/*" onchange="previewImage(event)" type="file" id="picture" name="picture" required>
                <img id="preview" alt="Image Preview" width="200px" height="136px">
            </div>
            <div class="title-text">
                <label for="title"><b>Game Title</b></label>
                <input type="text" placeholder="Game title" id="title" name="title" required>
            </div>
        </div>
        <div class="about" name="about">
            <textarea style="width: 100%;height: 100%" placeholder="Game about" name="about" required></textarea>
        </div>

<!---->
<!--        <div class="achiv-layer"  id="achievements">-->
<!---->
<!--            <div class="achievements" id="templateAchiv">-->
<!--                <div class="achiv" >-->
<!--                    <div class="titleAch"></div>-->
<!--                    <div class="aboutAch"></div>-->
<!--                    <div class="ach-img">-->
<!--                        <label for="picture" class="custom-file-upload">-->
<!--                            Upload Picture-->
<!--                        </label>-->
<!--                        <input type="file" na required>-->
<!--                    </div>-->
<!--                    <div class="btnAchCompleted"></div>-->
<!--                    <div class="btnGuides"></div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->

    </div>
    <input type="submit" placeholder="Upload"/>

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

        function repeatAchievements() {
            const count = document.getElementById('countAchieve').value;
            const achievementsContainer = document.getElementById('achievements');
            const template = document.getElementById('templateAchiv');

            // Clear previous achievements except the template
            achievementsContainer.appendChild(template);
            for (let i = 0; i < count; i++) {
                const newAchiv = template.cloneNode(true);
                newAchiv.id = ''; // Remove the id to avoid duplicate ids
                achievementsContainer.appendChild(newAchiv);
            }
        }
    </script>
</form>

