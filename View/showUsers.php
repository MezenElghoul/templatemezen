<?php
require_once '../Controller/userController.php';

$userController = new UserController();
$users = $userController->getUsers();

// AJOUT D'UN UTILISATEUR
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addUser'])) {
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $user = new user($First_Name, $Last_Name, $email, $pwd);
    $userController->addUser($user);

    header("Location: ".$_SERVER['PHP_SELF']); 
    exit();
}

// MODIFICATION D'UN UTILISATEUR
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateUser'])) {
    $id = $_POST['id'];
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $email = $_POST['email'];

    $userController->updateUser($id, $First_Name, $Last_Name, $email);

    header("Location: ".$_SERVER['PHP_SELF']); 
    exit(); 
}

// SUPPRESSION D'UN UTILISATEUR
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $userController->deleteUser($id);

    header("Location: ".$_SERVER['PHP_SELF']); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="showlist.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<img src="BACK OFFICE/image.jpeg" alt="background" class="n1">

<div class="container">
    <h2>List Of Users</h2>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $u): ?>
            <tr>
                <td><?php echo htmlspecialchars($u['id']); ?></td>
                <td><?php echo htmlspecialchars($u['First_Name']); ?></td>
                <td><?php echo htmlspecialchars($u['Last_Name']); ?></td>
                <td><?php echo htmlspecialchars($u['email']); ?></td>
                <td><?php echo htmlspecialchars($u['pwd']); ?></td>
                <td>
                    <!-- Modifier -->
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $u['id']; ?>">
                        <input type="hidden" name="First_Name" value="<?php echo $u['First_Name']; ?>">
                        <input type="hidden" name="Last_Name" value="<?php echo $u['Last_Name']; ?>">
                        <input type="hidden" name="email" value="<?php echo $u['email']; ?>">
                        <button type="submit" name="editUser" class="btn-edit"><i class="fas fa-edit"></i></button>
                    </form>

                    <!-- Supprimer -->
                    <a href="?delete=<?php echo $u['id']; ?>" class="btn-delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
            </table>
    <?php if (isset($_POST['editUser'])): ?>
    <h3>Update Users</h3>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
        <label>First_Name:</label>
        <input type="text" name="First_Name" value="<?php echo $_POST['First_Name']; ?>" required>
        <label>Last_Name:</label>
        <input type="text" name="Last_Name" value="<?php echo $_POST['Last_Name']; ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $_POST['email']; ?>" required>
        <button type="submit" name="updateUser" >Mettre à jour</button>
    </form>
    <?php endif; ?>

</div>

</body>
</html>
