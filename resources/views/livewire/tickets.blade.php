<div>
    @foreach($tickets as $ticket)
        <div class="card" wire:click="$emit('selectedTicket',{{ $ticket->id }})">
            <div class="card-body {{ ($active==$ticket->id) ? 'bg-primary': '' }}">
                <p class="card-text">{{ $ticket->question }}</p>
            </div>
        </div>
    @endforeach
</div>
