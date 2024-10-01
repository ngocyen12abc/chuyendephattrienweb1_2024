<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

if (!empty($_GET['id'])) {
    $_id = $_GET['id'];
    $user = $userModel->findUserById($_id);//Update existing user
}


// if (!empty($_POST['submit'])) {

//     if (!empty($_id)) {
//         $userModel->updateUser($_POST);
//     } else {
//         $userModel->insertUser($_POST);
//     }
//     header('location: list_users.php');
// }
if (!empty($_POST['submit'])) {
    $errors = [];

    // Validate name
    if (empty($_POST['name'])) {
        $errors[] = 'Name is required.';
    } elseif (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $_POST['name'])) {
        $errors[] = 'Bắt buộc nhập. Là ký tự hợp lệ: A->Z, a->z, 0->9. Chiều dài từ 5 đến 15 ký tự';
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors[] = 'Password is required.';
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/", $_POST['password'])) {
        $errors[] = 'Bắt buộc nhập.  Phải bao gồm: chữ thường (a->z), chữ HOA (A->Z), số (0-9) và ký tự đặc biệt: ~!@#$%^&*(). Chiều dài từ 5 đến 10 ký tự';
    }

    // Nếu không có lỗi thì tiếp tục thực hiện thêm hoặc cập nhật user
    if (empty($errors)) {
        if (!empty($_id)) { 
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
    <?php if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach ($errors as $error) { ?>
                <p><?php echo $error; ?></p>
            <?php } ?>
        </div>
    <?php } ?>

            <?php if ($user || !isset($_id)) { ?>
                <div class="alert alert-warning" role="alert">
                    User form
                </div>
                <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $_id ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php } else { ?>
                <div class="alert alert-success" role="alert">
                    User not found!
                </div>
            <?php } ?>
    </div>
</body>
</html>