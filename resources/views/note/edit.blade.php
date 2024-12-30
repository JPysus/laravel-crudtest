<x-layout>
    <div class="note-container single-note">
        <h1>Edit new note</h1>
        <form action="{{route('note.update', $note)}}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here...">{{$note->note}}</textarea>
            <div class="note-btn">
                <a href="{{route('note.index')}}" class="note-cancel-btn">Cancel</a>
                <button class="note-submit-btn">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
