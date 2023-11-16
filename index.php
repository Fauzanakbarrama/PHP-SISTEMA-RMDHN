<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Form Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center h-screen bg-gray-200">

  <div class="p-20 bg-white rounded shadow-lg">
    <h2 class="text-center text-3xl mb-4">Login</h2>
    <form class="flex flex-col space-y-4" action="login.php" method="post">
      <input class="p-4 border rounded" type="text" id="username" placeholder="Enter Your Username" name="username"
        required>
      <input class="p-4 border rounded" type="password" id="password" placeholder="Enter Your Password" name="password"
        required>
      <input class="p-4 text-white bg-blue-500 rounded cursor-pointer hover:bg-blue-700" type="submit" value="Login">
    </form>
  </div>

</body>

</html>