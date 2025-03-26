@extends('layouts.admin')
@section('content')
    <div class="py-3">
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label"> اسم الصنف </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اسم الصنف">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success" value="حفظ">
            </div>
        </form>
    </div>
@endsection
