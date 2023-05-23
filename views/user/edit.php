<h1>Edit User</h1>
<form method="post" action="/Darrebni/HOme%20Task/user-mvcacc/update/?id=<?php echo $user->getid() ?>">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= $user->getName() ?>">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $user->getEmail() ?>">
    </div>
    <button>Update</button>
</form>