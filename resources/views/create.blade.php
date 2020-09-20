@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Add an Item</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('save') }}" method="post">

                        @csrf
                        
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Input item here..." >
                        </div>

                        <div class="form-group text-right">
                            <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
                            <button class="btn btn-primary">Add</button>
                        </div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>


       

</div>

@endsection
