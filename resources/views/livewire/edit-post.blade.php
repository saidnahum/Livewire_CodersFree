<div>
    <a class="btn btn-green" wire:click="$set('open', true)">
        <i class="fas fa-edit"></i>
    </a>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            <strong>Editar el post</strong>
        </x-slot>

        <x-slot name='content'>
            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-600 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">¡Imagen Cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado</span>
            </div>

            @if ($image)
                <img class="mb-4" src="{{ $image->temporaryUrl()}}">
            @else
                {{-- <img src="storage/posts/1a3a660ae2278e980a297e8f9b23b26e.png" > --}}
                <img src="{{ Storage::url($post->image) }}" >
            @endif

            <div class="mb-4">
                <x-jet-label value="Título del post"></x-jet-label>
                <x-jet-input wire:model="post.title" type="text" class="w-full"></x-jet-input>
            </div>

            <div class="mb-4">
                <x-jet-label value="Contenido del post"></x-jet-label>
                <textarea wire:model="post.content" rows="6" class="form-control w-full"></textarea>
            </div>

            <div>
                <input type="file" wire:model="image" id="{{ $identificador }}">
                <x-jet-input-error for='image'></x-jet-input-error>
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save" wire:loading.attr='disabled' class="disabled:opacity-25" > 
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
