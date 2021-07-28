<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Crear nuevo post
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nuevo post
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Título del post"/>
                <x-jet-input type="text" class="w-full"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Contenido del post"/>
                <x-jet-input type="text" class="w-full"/>
            </div>
        </x-slot>

        <x-slot name="footer">

        </x-slot>
    </x-jet-dialog-modal>
</div>
