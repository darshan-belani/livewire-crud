<div>
    <button wire:click="$set('confirmingDelete', true)">Delete</button>
    @if($confirmingDelete)
        <div>
            Are you sure you want to delete?
            <button wire:click="confirmDelete">Yes</button>
            <button wire:click="$set('confirmingDelete', false)">No</button>
        </div>
    @endif
</div>
