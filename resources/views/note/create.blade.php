<x-layout>
    <div class="note-container single-note">
        <h1>Create new note</h1>
        <form action="{{route('note.store')}}" method="POST" class="note">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here..."></textarea>
            <div class="note-btn">
                <a href="{{route('note.index')}}" class="note-cancel-btn">Cancel</a>
                <button class="note-submit-btn">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
