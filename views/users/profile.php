<?php
$this->Title = "Профіль";
?>
<div style="display: flex;flex-direction: row;">

    <div>

        <img class="profilePicture" src="<?php ?>#" alt="">
        <div>userName</div>
        <div>Edit Profile</div>
        <div>About</div>
    </div>
    <div>
        <pre>

        <?php
        var_dump($_SESSION);
        ?>
        </pre>
    </div>
</div>
<?php

?>

