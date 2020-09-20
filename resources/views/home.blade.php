@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    List of Items
                    <div class="float-right">
                        <a href="{{ route('createItem') }}" class="btn btn-primary btn-sm">Add an item</a>
                    </div>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @if(count($items) > 0)
                            @foreach($items as $item)
                            <li class="list-group-item">
                                <div class="float-left">{{ $item->title }}</div>
                                <div class="float-right">
                                    <a href="{{ route('editItem', ['id' => $item->id]) }}" class="edit">Edit</a>
                                    <span>|</span>
                                    <a href="{{ route('deleteItem', ['id' => $item->id]) }}" class="delete">Delete</a>
                                </div>
                            </li>
                            @endforeach
                        @else
                            No Items.
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
