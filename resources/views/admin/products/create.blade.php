@extends('layouts.admin')
@section('content')
<div class="py-3">
<form action="{{ route('products.store') }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label"> اسم المنتج </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج">
        </div>
        <div class="mb-3">
            <label for="quantityFormControlInput" class="form-label"> الكمية </label>
            <input type="text" class="form-control" id="quantity" name="quantity">
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput" class="form-label"> السعر </label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
            <label for="descriptionFormControlTextarea1" class="form-label"> وصف المنتج</label>
            <textarea class="form-control" id="desc" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="categoryFormControlSelect" class="form-label">اختر الصنف</label>
            <select name="category" id="category" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-success" value="حفظ">
        </div>
    </form>
</div>

@endsection
