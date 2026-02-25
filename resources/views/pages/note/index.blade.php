<x-layouts.app title="Inicio">
    <div class="max-w-4xl mx-auto px-7 sm:px-7 lg:px-0">

        {{-- Header --}}
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold tracking-wide text-yellow-400 drop-shadow-lg">
                Tus Notas
            </h1>

            <a href="{{ route('page.note.create') }}"
                class="bg-green-600 hover:bg-green-500 
                      transition-all duration-300
                      text-white font-medium px-5 py-2 
                      rounded-xl shadow-lg flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Crear Nota
            </a>
        </div>

        {{-- Card contenedora --}}
        <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl shadow-2xl p-6 flex flex-col gap-4">

            @forelse ($notes as $note)
                <div
                    class="flex justify-between items-center py-5 px-4 bg-white/10 rounded-xl hover:bg-white/20 transition-all duration-300">

                    {{-- Info de la nota --}}
                    <div class="flex flex-col gap-1">
                        <h2 class="text-xl font-semibold text-yellow-400">{{ $note->title }}</h2>
                        <p class="text-gray-300">{{ $note->description }}</p>
                    </div>

                    {{-- Iconos de acciones --}}
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-7 items-center justify-end">

                        {{-- View --}}
                        <a href="{{ route('pages.note.show', $note->id) }}"
                            class="text-blue-400 hover:text-blue-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#22b52d"
                                    d="M14 12c-1.095 0-2-.905-2-2c0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3s3-1.358 3-3c0-.092-.02-.178-.027-.268c-.29.165-.619.268-.973.268" />
                                <path fill="#22b52d"
                                    d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316l-.105-.316C21.927 11.617 19.633 5 12 5m0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5c-.504 1.158-2.578 5-7.926 5" />
                            </svg>
                        </a>

                        {{-- Edit --}}
                        <a href="{{ route('pages.note.edit', $note->id) }}"
                            class="text-green-400 hover:text-green-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g fill="none" stroke="#ff9f00" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                    <path
                                        d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                                </g>
                            </svg>
                        </a>

                        {{-- Delete --}}
                        <form action="{{ route('pages.note.destroy', $note->id) }}" method="POST" class="inline-flex">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-400 hover:text-red-500 transition-colors duration-300 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="#f00"
                                        d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                </svg>
                            </button>
                        </form>

                    </div>
                </div>

            @empty
                <div class="text-center py-10 text-gray-400">
                    <p class="text-lg">No notes yet</p>
                    <p class="text-sm mt-2">Create your first note 🚀</p>
                </div>
            @endforelse
            <div class="mt-6">
                {{ $notes->links() }}
            </div>

        </div>
    </div>
</x-layouts.app>
