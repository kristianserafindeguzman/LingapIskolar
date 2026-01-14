<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>LingapIskolar</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        />
        <script
            defer
            src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
        @vite("resources/css/app.css")
    </head>
    <body class="flex min-h-screen min-w-screen flex-col overflow-x-hidden">
        <x-header />
        <main
            class="flex h-full flex-1"
            style="
                background-image: url('{{ asset(auth()->check() ? "/img/auth-bg.png" : "/img/public-bg.png") }}');
            "
        >
            @section("main")

            @show
        </main>
    </body>
</html>
