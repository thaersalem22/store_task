@extends('layouts.admin')
@section('content')
    <div class="py-3">
        <h2>قائمة المنتجات</h2>
        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">إضافة منتج جديد</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>اسم المنتج</th>
                    <th>الكمية</th>
                    <th>السعر</th>
                    <th>الصنف</th>
                    <th>الوصف</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name ?? 'غير محدد' }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm">تعديل</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('هل أنت متأكد من حذف هذا المنتج؟')">حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">لا توجد منتجات مضافة حاليًا.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
