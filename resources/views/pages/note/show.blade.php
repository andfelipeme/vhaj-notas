<x-layouts.app title="{{ $note->title }}">
    <div class="max-w-4xl mx-auto px-7 sm:px-7 lg:px-0">

        {{-- Botón volver --}}
        <div class="flex justify-end mb-6">
            <a href="{{ route('page.note.index') }}"
                class="bg-red-600 hover:bg-red-500 transition-colors duration-300 
                       text-white font-medium px-5 py-2 rounded-xl shadow-lg flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Return
            </a>
        </div>

        {{-- Card de nota --}}
        <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl shadow-2xl p-10">

            <h1 class="text-3xl font-bold  text-yellow-400 tracking-wide drop-shadow-lg">
                {{ $note->title }}
            </h1>

            <p class="text-gray-300 text-lg py-7"">
                {{ $note->description }}
            </p>

            <div class="flex flex-col sm:flex-row gap-7">
                {{-- Edit --}}
                <a href="{{ route('pages.note.edit', $note->id) }}"
                    class="bg-green-600 hover:bg-green-500 transition-all duration-300
                          text-white font-medium px-5 py-2 rounded-xl shadow-lg flex items-center gap-2 justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                    </svg>
                    Edit
                </a>

                {{-- Delete --}}
                <form action="{{ route('pages.note.destroy', $note->id) }}" method="POST" class="inline-flex">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-500 transition-all duration-300 w-full cursor-pointer
                                   text-white font-medium px-5 py-2 rounded-xl shadow-lg flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a1 1 0 00-1 1v0a1 1 0 001 1h4a1 1 0 001-1v0a1 1 0 00-1-1m-4 0h4" />
                        </svg>
                        Delete
                    </button>
                </form>
            </div>

        </div>
    </div>
</x-layouts.app>
