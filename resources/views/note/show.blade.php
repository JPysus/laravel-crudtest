<x-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1>Note at: {{$note->created_at}}</h1>
            <div class="note-btn">
                <a href="{{route('note.edit', $note->id)}}" class="note-edit-btn">Edit</a>
                <form action="{{route('note.destroy', $note->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-btn">Delete</button>
                </form>
            </div>
        </div>
        <h1>Create new note</h1>
        <div class="note">
            <div class="note-body">
                {{$note->note}}
            </div>
        </div>
    </div>
</x-layout>
