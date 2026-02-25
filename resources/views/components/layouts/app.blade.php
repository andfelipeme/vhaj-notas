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
            <a href="{{ route('page.note.index') }}" class="flex items-center gap-3 hover:animate-pulse">
                {{-- Icono de nota/apunte --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 16h8M8 12h8m-8-4h8M4 6h.01M4 10h.01M4 14h.01M4 18h.01M20 6h.01M20 10h.01M20 14h.01M20 18h.01M6 2h12a2 2 0 012 2v16a2 2 0 01-2 2H6a2 2 0 01-2-2V4a2 2 0 012-2z" />
                </svg>

                {{-- Texto opcional --}}
                <span class="text-xl font-bold text-yellow-400 tracking-wide drop-shadow-lg">VhajNotas</span>
            </a>

            <a href="https://github.com/andfelipeme/vhaj-notas" target="_blank" rel="noopener noreferrer"
                class="hover:animate-pulse">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                    <path fill="#F7D549"
                        d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                </svg>
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
