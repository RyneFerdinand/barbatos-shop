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
                colors: {
                    gray: '#ECECEC',
                    success: '#4BB543'
                },
                fontFamily: {
                    'montserrat': ['Montserrat', 'sans-serif'],
                    'poppins': ['Poppins', 'sans-serif']
                },
                extend: {
                    keyframes: {
                        transparenting: {
                            '0%, 75%': {
                                opacity: 1
                            },
                            '100%': {
                                opacity: 0,
                            },
                        }
                    },
                    animation: {
                        'slowly-transparent': 'transparenting 3s ease-in-out forwards'
                    },

                }
            }
        }
    </script>
    <title>Barbatos Shop</title>
</head>

<body class="bg-gray overflow-x-hidden">
    <header class="flex flex-row lg:px-32 px-6 py-3 items-center bg-white w-[100vw] justify-between fixed top-0 z-50">
        <div class="flex flex-row items-center">
            <a href="{{ url('/') }}" class="text-black text-xl mr-5">Barbatos Shop</a>
            <div class="flex justify-center">
                <div>
                    <div class="dropdown relative">
                        <button class="dropdown-toggle flex flex-row items-center" type="button" id="dropdownfeature"
                            data-bs-toggle="dropdown">
                            Category
                            <svg data-prefix="fas" data-icon="caret-down" class="w-2 ml-3"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400">
                                <path fill="currentColor"
                                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                                </path>
                            </svg>
                        </button>
                        <div class="dropdown-menu hidden bg-white w-[200px] z-50 pt-2"
                            aria-labelledby="dropdownfeature">
                            @foreach ($categories as $category)
                                <a class="px-5 py-2 dropdown-item block w-full bg-white"
                                    href="{{ url('/category/' . $category->id) }}">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @auth
                @if (Auth::user()->isAdmin === 1)
                    <a href="{{ url('/manage-product') }}" class="text-black text-l mr-5 ml-5">Manage Product</a>
                @endif
            @endauth
        </div>
        @auth
            <div class="flex justify-center gap-4">
                @if (Auth::check() && Auth::user()->isAdmin == 0)
                    <a href="{{ url('/cart') }}">
                        <i class="fa fa-shopping-cart text-xl"></i>
                    </a>
                @endif
                <div class="dropdown relative">
                    <button class="dropdown-toggle flex flex-row items-center" type="button" id="dropdownfeature"
                        data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                        <svg data-prefix="fas" data-icon="caret-down" class="w-2 ml-3" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 400 400">
                            <path fill="currentColor"
                                d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                            </path>
                        </svg>
                    </button>
                    <div class="rounded dropdown-menu hidden bg-white w-[200px] z-50 pt-2 ease-in transition-all origin-center duration-300"
                        aria-labelledby="dropdownfeature">
                        <a href="{{ url('/profile') }}" class="px-5 py-2 block w-full">Profile</a>
                        @if (Auth::check() && Auth::user()->isAdmin == 0)
                            <a href="{{ url('/history') }}" class="px-5 py-2 block w-full">History</a>
                        @endif
                        <a href="{{ url('/logout') }}" class="px-5 py-2 block w-full">Logout</a>
                    </div>
                </div>
            </div>
        @else
            <div>
                <a href="{{ url('/login') }}" class="mr-5 text-black/[50%]">Login</a>
                <a href="{{ url('/register') }}" class="text-black/[50%]">Register</a>
            </div>
        @endauth
    </header>
    @if (session()->has('success'))
        <div class="success-message fixed w-full flex md:top-14 top-[75px] justify-center animate-slowly-transparent opacity-0">
            <p class="bg-success text-white text-lg font-bold rounded-md px-48 py-3">
                {{ session('success') }}
            </p>
        </div>
    @endif

    <main class="mt-20 md:mt-12">
        @yield('content')
    </main>
</body>

</html>
