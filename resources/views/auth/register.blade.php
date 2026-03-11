<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-8 rounded-xl shadow-lg w-96">

    <h2 class="text-2xl font-bold text-center mb-6">
        Đăng ký tài khoản
    </h2>

    <form method="POST" action="/register">

        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">Tên</label>
            <input type="text" name="name"
            class="w-full border rounded-lg p-2 mt-1">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email"
            class="w-full border rounded-lg p-2 mt-1">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password"
            class="w-full border rounded-lg p-2 mt-1">
        </div>

        <button
        class="w-full bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600">
            Đăng ký
        </button>

    </form>

</div>

</body>
</html>