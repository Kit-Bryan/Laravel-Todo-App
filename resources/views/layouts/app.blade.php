<!doctype html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
              crossorigin="anonymous">
        <title>Todo App Demo</title>
    </head>
    <body>
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="flex flex-1 items-center justify-center sm:justify-start">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="h-8 w-auto"
                                 src="https://cdn2.iconfinder.com/data/icons/greenline/512/check-512.png"
                                 alt="Your Company">
                        </div>
                        <a href="/" class="no-underline">
                            <p class="text-white text-2xl text-center mt-2.5 ml-5">
                                To Do App
                            </p>
                        </a>

                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="/" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                   aria-current="page">All Task</a>
                                <a href="/tasks/create"
                                   class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                                    New Task
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container pt-4">
            @yield('content')
        </div>
    </body>
</html>