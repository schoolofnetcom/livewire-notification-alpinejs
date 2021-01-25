<div>
    <x-notification />

    <form wire:submit.prevent="save" class="w-full space-y-4">
        <!-- Input name -->
	    <div class="w-full mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Nome
            </label>
            <input wire:model="book.name" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" id="name" />
            @if($errors->has('book.name'))
                <p class="text-red-500 text-xs italic">
                    {{ $errors->first('book.name') }}
                </p>
            @endif
    	</div>
        <!-- Input pages -->
        <div class="w-full mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pages">
                Quantidade de Páginas
            </label>
            <input wire:model="book.pages" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" id="pages" />
            @if($errors->has('book.pages'))
                <p class="text-red-500 text-xs italic">
                    {{ $errors->first('book.pages') }}
                </p>
            @endif
    	</div>
        <!-- Input author -->
        <div class="w-full mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="author">
                Autor
            </label>
            <input wire:model="book.author" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" id="author" />
            @if($errors->has('book.author'))
                <p class="text-red-500 text-xs italic">
                    {{ $errors->first('book.author') }}
                </p>
            @endif
    	</div>
        <!-- Submit Button -->
        <button
            class="px-3 py-2 bg-green-400" type="submit">
            Atualizar
        </button>
    </form>
</div>
