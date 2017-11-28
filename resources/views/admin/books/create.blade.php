@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">





        <form class="form-horizontal" action="{{route('admin.books.store')}}" method="post" id="upload" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.books.partias.form')
            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>

@endsection