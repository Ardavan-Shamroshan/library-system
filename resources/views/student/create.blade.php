@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">اضافه کردن دانشجو</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('students') }}">لیست دانشجو ها</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('student.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>دانشجو </label>
                            <input type="text" class="form-control" placeholder="دانشجو Name" name="name"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>آدرس</label>
                            <input type="text" class="form-control" placeholder="Address" name="address"
                                value="{{ old('address') }}" required>
                            @error('address')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>جنسیت</label>
                            <select name="gender" class="form-control">
                                <option value="male" selected>مرد</option>
                                <option value="female">زن</option>
                            </select>
                            @error('gender')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>کلاس</label>
                            <input type="text" class="form-control" placeholder="Class" name="class"
                                value="{{ old('class') }}" required>
                            @error('class')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>سن</label>
                            <input type="number" class="form-control" placeholder="Age" name="age"
                                value="{{ old('age') }}" required>
                            @error('age')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>تلفن</label>
                            <input type="phone" class="form-control" placeholder="Phone" name="phone"
                                value="{{ old('phone') }}" required>
                            @error('phone')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>ایمیل</label>
                            <input type="email" class="form-control" placeholder="Email" name="email"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="ثبت">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
