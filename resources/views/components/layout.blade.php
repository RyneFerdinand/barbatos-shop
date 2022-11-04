<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gray: '#ECECEC'
                    }
                },
                fontFamily: {
                    'montserrat': ['Montserrat', 'sans-serif'],
                    'poppins': ['Poppins', 'sans-serif']
                }
            }
        }
    </script>
    <title>Barbatos Shop</title>
</head>

<body class="bg-gray">
    <header class="flex flex-row px-32 py-3 items-center bg-white w-[100vw] justify-between fixed top-0">
        <div>
            <a href="#" class="text-black text-xl">Barbatos Shop</a>
            <select id="category" name="category" class="ml-5">
                <option value="" disabled selected class="text-black/[40%]">Category</option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
        <div>
            <a href="#" class="mr-5 text-black/[50%]">Login</a>
            <a href="#" class="text-black/[50%]">Register</a>
        </div>
    </header>

    <main class="mt-6">
        @yield('content')
    </main>
</body>

</html>
