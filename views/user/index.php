<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>User Table</title>
    <style>

          /* تنسيق الجدول */
  table {
    border-collapse: collapse;
    width: auto;
    margin: 20px 0;
  
  }
  
  th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
  }
  
  th {
    background-color: #4CAF50;
    color: white;
  }
  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  /* تنسيق أزرار التحرير والحذف */
  .button-container {
    display: flex;
    align-items: center;
  }
  

  
  .edit-btn, .delete-btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 4px;
    transition: all 0.2s ease-in-out;
    display: inline-block;
    margin-right: 10px;
  }
  .delete-btn {
    background-color: #f44336;
  }
  
  .edit-btn:hover, .delete-btn:hover {
    background-color: #fff;
    color: #4CAF50;
    box-shadow: 0px 0px 5px #4CAF50;
  }
  .beautiful {
  font-weight: bold;
  color:#4CAF50;
  font-size: 30px;
}
  
    </style>
</head>
<body>
<center>
<p><span class="beautiful">User  Table</span> </p>
	<h1></h1>
	<table class="user-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
       
			<?php foreach ($users as $user) : ?>
				<tr>
					<td><?= $user->getId() ?></td>
					<td><?= $user->getName() ?></td>
					<td><?= $user->getEmail() ?></td>
					<td>
                    <div class="button-container">
						<form method="post" action="/Darrebni/HOme%20Task/user-mvcacc/edit?id=<?= $user->getId() ?>">
							<button class="edit-btn" type="submit">Edit</button>
						</form>
						<form method="post" action="delete/?id=<?= $user->getId() ?>" onsubmit="return confirm('Are you sure you want to delete this user?')">
							<button class="delete-btn" type="submit">Delete</button>
						</form>
                    </div>
					</td>
				</tr>
			<?php endforeach; ?>
            </center>
		</tbody>
	</table>
</body>
</html>