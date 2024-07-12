<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../script.js"></script>
    <title>Document</title>
</head>
<body class="bg-rose-900">
    <div class="min-h-screen flex items-center justify-center w-full ">
        <div class="bg-white shadow-md rounded-lg px-8 py-6 max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4 ">Login</h1>
            <form action="#">
                <div class="mb-4">
                    <label for="text" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                    <input type="text" id="text" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="admin" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="******" required>
                </div>
                <button id="login" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-rose-900 hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-offset-2">Se connecter</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('login').addEventListener('click', function(e) {
            localStorage.setItem('role', 'admin');
        });
    </script>
</body>
</html>