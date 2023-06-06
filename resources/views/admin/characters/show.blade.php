@extends('characters.show')
@section('buttons')
    <div class="buttons">
        <div class="d-flex justify-content-end gap-3">
            <button class="btn btn-warning">
                <a class="text-black" href="{{route('admin.characters.edit', $char->id)}}">Edit</a>
            </button>
            <form action="{{route('admin.characters.destroy', $char)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection

@section('characterlink')
{{route('admin.characters.index')}}
@endsection
