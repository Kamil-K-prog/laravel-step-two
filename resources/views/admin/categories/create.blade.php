@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Добавить категорию</div>
                </div>
                <form action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <label for="newCategoryName">Название категории</label>
                        <input type="text" class="form-control" id="newCategoryName" name="name"
                               placeholder="Введите название" value="{{ old('name') }}" required minlength="3">
                        @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
