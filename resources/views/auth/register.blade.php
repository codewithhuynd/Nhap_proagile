<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Modern UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-slate-50 flex items-center justify-center min-h-screen p-4">

<div class="bg-white p-8 rounded-2xl shadow-[0_20px_50px_rgba(8,_112,_184,_0.1)] w-full max-w-md border border-gray-100">

    <div class="text-center mb-10">
        <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">
            Tạo tài khoản mới
        </h2>
        <p class="text-gray-500 mt-2">Bắt đầu hành trình</p>
    </div>

    <form method="POST" action="/register" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Họ và tên</label>
            <input type="text" name="name" placeholder="Nguyễn Văn A"
                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all placeholder:text-gray-400">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Email của bạn</label>
            <input type="email" name="email" placeholder="name@company.com"
                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all placeholder:text-gray-400">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Mật khẩu</label>
            <input type="password" name="password" placeholder="••••••••"
                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all placeholder:text-gray-400">
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white font-bold py-3 px-4 rounded-xl hover:bg-blue-700 active:scale-[0.98] transition-all shadow-lg shadow-blue-500/30 mt-2">
            Đăng ký ngay
        </button>

        <p class="text-center text-sm text-gray-600 pt-4">
            Đã có tài khoản? 
            <a href="/login" class="text-blue-600 font-semibold hover:underline">Đăng nhập</a>
        </p>
    </form>
</div>

</body>
</html>