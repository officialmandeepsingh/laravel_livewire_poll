<div>
    <form wire:submit.prevent='createPoll'>
        <label>Poll Title</label>
        <input type="text" wire:model.live.debounce.500ms="title" />

        @error('title')
        <div class="text-red-500">{{ $message }}</div>
        @enderror


        <div class="md-4 mt-4 mb-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>
        @error("options")
        <div class="text-red-500">{{ $message }}</div>
        @enderror
        <div>
            @foreach ($options as $index=> $option)
            <div>
                <label>Option {{ $index + 1 }}</label>
                <div class="flex gap-2">
                    <input type="text" wire:model.live="options.{{ $index }}" />
                    <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                </div>
                @error("options.{$index}")
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            @endforeach
        </div>

        <div class="md-4 mt-4 mb-4">
            <button type="submit" class="btn">Create Poll</button>
        </div>
    </form>
</div>