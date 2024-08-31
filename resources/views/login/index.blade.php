<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Login Admin</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"
        />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body class="h-full">

        <div class="flex min-h-full flex-col justify-center px-6 py-10 lg:px-8">
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <div
                    class="h-96 flex items-center justify-center bg-gradient-to-r"
                >
                    <div class="relative">
                        <div
                            class="absolute -top-2 -left-2 -right-2 -bottom-2 rounded-lg bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 shadow-lg animate-pulse"
                        ></div>
                        <div
                            id="form-container"
                            class="bg-white p-16 rounded-lg shadow-2xl w-80 relative z-10 transform transition duration-500 ease-in-out"
                        >
                            <h2
                                id="form-title"
                                class="text-center text-3xl font-bold mb-10 text-gray-800"
                            >
                                Login Admin
                            </h2>
                            <form
                                class="space-y-5"
                                action="/login"
                                method="POST"
                            >
                                @csrf
                                <input
                                    class="w-full h-12 border border-gray-800 px-3 rounded-lg"
                                    placeholder="Username"
                                    id=""
                                    name="name"
                                    type="text"
                                />
                                <input
                                    class="w-full h-12 border border-gray-800 px-3 rounded-lg"
                                    placeholder="Password"
                                    id=""
                                    name="password"
                                    type="password"
                                />
                                <button
                                    class="w-full h-12 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="submit"
                                >
                                    Log In
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(session('loginSuccess'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('loginSuccess') }}',
        });
    </script>
@endif

@if(session('loginError'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: '{{ session('loginError') }}',
        });
    </script>
@endif

    </body>
</html>
