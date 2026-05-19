@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-6">

    <h2 class="text-xl font-bold mb-4">Create Support Ticket</h2>

    <form action="{{ route('support.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="subject" placeholder="Subject"
               class="w-full border p-2 mb-3 rounded" required>

        <textarea name="description" placeholder="Describe your issue"
                  class="w-full border p-2 mb-3 rounded"></textarea>

        <select name="priority" class="w-full border p-2 mb-3 rounded">
            <option value="low">Low</option>
            <option value="medium" selected>Medium</option>
            <option value="high">High</option>
        </select>

        <input type="file" name="attachment" class="mb-3">

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Submit Ticket
        </button>

    </form>

</div>
@endsection