<x-layouts.app title="Edit">
    <div class="max-w-4xl mx-auto px-7 sm:px-7 lg:px-0"">

        {{-- Botón volver --}}
        <div class="flex justify-end mb-6">
            <a href="{{ route('page.note.index') }}"
                class="bg-red-600 hover:bg-red-500 transition-colors duration-300 
                       text-white font-medium px-5 py-2 rounded-xl shadow-lg">
                ← Return
            </a>
        </div>

        {{-- Card --}}
        <div class="bg-white/5 backdrop-blur-md border border-white/10 
                    rounded-2xl shadow-2xl p-10">

            <h1 class="text-3xl font-bold mb-8 text-center tracking-wide">
                Edit Note
            </h1>

            <form action="{{ route('pages.note.update', $note->id) }}" method="POST" class="flex flex-col gap-6">
                @csrf
                @method('PUT') {{-- Para indicar que es un update --}}

                {{-- Title --}}
                <div class="flex flex-col gap-2">
                    <label for="title" class="text-sm text-gray-300">
                        Title
                    </label>
                    <input type="text" name="title" id="title" value="{{ $note->title }}"
                        placeholder="Insert title..."
                        class="bg-black/40 border border-white/10 
                                  focus:border-green-500 focus:ring-2 focus:ring-green-500/40
                                  transition-all duration-300
                                  rounded-lg px-4 py-3 text-white outline-none" />
                </div>

                {{-- Description --}}
                <div class="flex flex-col gap-2">
                    <label for="description" class="text-sm text-gray-300">
                        Description
                    </label>
                    <textarea name="description" id="description" rows="5" placeholder="Write your note..."
                        class="bg-black/40 border border-white/10 
                                     focus:border-green-500 focus:ring-2 focus:ring-green-500/40
                                     transition-all duration-300
                                     rounded-lg px-4 py-3 text-white outline-none resize-none">{{ $note->description }}</textarea>
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="mt-4 bg-green-600 hover:bg-green-500 
                           transition-all duration-300
                           font-semibold tracking-wide
                           px-6 py-3 rounded-xl shadow-lg cursor-pointer">
                    Update Note
                </button>

            </form>
        </div>
    </div>
</x-layouts.app>
