<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/path/to/tailwind.css" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <!-- ... -->
    </head>
    <body>
        <div class="fixed flex p-1 px-4 bg-gray-200 w-screen">
            <div class="flex-1 flex-row space-x-6">
                <div class="inline-block">
                    &#x1f525
                </div>
                <a class="inline-block font-bold" href="./index.php">Ammar Abror</a>
                <a class="inline-block" href="./myProject.html">My Project</a>
                <a class="inline-block" href="./aboutMe.html">About Me</a>
                <a class="inline-block" href="./contactMe.html">Contact Me</a>
            </div>
            <div class="flex-2 flex-row-reserve">
                <div class="flex flex-row space-x-4">
                    <p>Follow Me</p>
                    <a class="inline-block font-bold" href="https://www.instagram.com/ammarbror/">
                        <img src="./img/i_instagram.png" style="height: 22px;" alt="Instagram">
                    </a>
                    <a class="inline-block font-bold" href="https://dribbble.com/ammarbror">
                        <img src="./img/i_dribbble.png" style="height: 22px;" alt="Instagram">
                    </a>
                </div>
                
            </div>
        </div>
        <div class="bg-cover bg-center h-screen p-10 pt-16" style="background-image: url(./img/bg.png);">
            <div class="flex flex-row-reverse">
                <div class="space-y-8">
                    <div>
                        <a class="inline-block" href="./myProject.html">
                            <img src="./img/i_folder.png" alt="folder">
                        </a>
                        <p class="mt-1 text-white" style="text-align: center;">My Project</p>
                    </div>
                    <div>
                        <a class="inline-block" href="./aboutMe.html">
                            <img src="./img/i_folder.png" alt="folder">
                        </a>
                        <p class="mt-1 text-white" style="text-align: center;">About Me</p>
                    </div>
                    <div>
                        <a class="inline-block" href="./contactMe.html">
                            <img src="./img/i_folder.png" alt="folder">
                        </a>
                        <p class="mt-1 text-white" style="text-align: center;">Contact Me</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>