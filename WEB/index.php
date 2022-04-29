<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Woof airlines</title>
        <link rel="stylesheet" href="resources/css/tailwind.css">

        <style>
            .background-animate {
                background-size: 400%;

                -webkit-animation: AnimationName 15s ease infinite;
                -moz-animation: AnimationName 15s ease infinite;
                animation: AnimationName 15s ease infinite;
            }

            @keyframes AnimationName {
                0%,
                100% {
                background-position: 0% 50%;
                }
                50% {
                background-position: 100% 50%;
                }
            }
        </style>

    </head>

    <body class="bg-gradient-to-r from-sky-300 to-sky-700 background-animate">
        <main class="mx-auto flex min-h-screen w-full items-center justify-center text-white">
            <section class="flex w-[30rem] flex-col space-y-10">
                
                <div class="text-center text-4xl font-medium text-slate-500">Log In</div>

                <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
                    <input type="text" placeholder="Email or Username" class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
                </div>

                <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
                    <input type="password" placeholder="Password" class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"/>
                </div>

                <button class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400 ">
                LOG IN
                </button>

                <a href="#" class="transform text-center font-semibold text-gray-500 duration-300 hover:text-gray-300" >
                FORGOT PASSWORD?
                </a>

                <p class="text-center text-lg">
                    No account?
                    <a href="#" class="font-medium text-indigo-300 underline-offset-4 hover:underline">
                    Create One
                    </a>
                </p>

            </section>
        </main>
    </body>
</html>