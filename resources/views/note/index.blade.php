<x-layout>
    <div class="note-container">
        <div class="notes">
            @foreach ($notes as $note)
                
            <div class="note">
                <div class="note-body">
                    {{ Str::words($note -> note, 30) }}
                </div>
                <div class="note-btn">
                    <a href="{{route('note.show', $note->id)}}" class="note-show-btn">View</a>
                    <a href="{{route('note.edit', $note->id)}}" class="note-edit-btn">Edit</a>
                    <form action="{{route('note.destroy', $note->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="note-delete-btn">Delete</button>
                    </form>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
    <a href="{{route('note.create')}}", class="note-create-btn">New Note</a>
    <div style="width:50%; justify-self: center">
        {{$notes->links()}}</div>
</x-layout>
