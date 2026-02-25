@props(['title' => 'Mi App'])
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">

    <header class="py-7 bg-white/5 border-b border-white/10">
        <nav class="flex justify-between items-center px-7">

            {{-- Logo que redirige al index --}}
            <a href="{{ route('page.note.index') }}" class="flex items-center gap-3">
                {{-- Icono de nota/apunte --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 16h8M8 12h8m-8-4h8M4 6h.01M4 10h.01M4 14h.01M4 18h.01M20 6h.01M20 10h.01M20 14h.01M20 18h.01M6 2h12a2 2 0 012 2v16a2 2 0 01-2 2H6a2 2 0 01-2-2V4a2 2 0 012-2z" />
                </svg>

                {{-- Texto opcional --}}
                <span class="text-xl font-bold text-yellow-400 tracking-wide drop-shadow-lg">VhajNotes</span>
            </a>

        </nav>
    </header>

    <main class="bg-white/5 min-h-screen py-10 border-b border-white/10">
        {{ $slot }}
    </main>


    <footer class="text-center bg-white/5 py-7">
        <small>© Author VhajDev{{ date('Y') }}</small>
    </footer>

</body>

</html>
