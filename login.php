<?php
function dd(...$params)
{
    foreach ($params as $param) {
        var_dump($param);
    }
    die;
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    var_dump($_POST);
    var_dump('check user credentials');
}

$username = $_POST['username'];
$plain_text_password = $_POST['password'];
?>

<div class="container">
    <div class="card p-5 my-5">
        <h4 class="text-muted">Log in</h4>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username <i class="fa-solid fa-user"></i></label>
                <input type="text" name="Username" id="username" class="form-control" placeholder="mariorossi" aria-describedby="helpId">
                <small id="helpusername" class="text-muted">Type here your username</small>
            </div>
            <div class="mb-3 d-flex flex-column">
                <label for="password" class="form-label">Password </label>
                <input type="password" name="password" id="password">
                <small id="helppassword" class="text-muted">Type here your password</small>
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
    </div>
</div>