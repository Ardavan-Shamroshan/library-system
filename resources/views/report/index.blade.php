@extends("layouts.app")
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <h2 class="admin-heading text-center">گزارشات</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <a href="{{ route('reports.date_wise') }}" class="card-link">
                                <h5 class="card-title mb-0">زمان گزارش</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <a href="{{ route('reports.month_wise') }}" class="card-link">
                                <h5 class="card-title mb-0">گزارش ماهانه</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <a href="{{ route('reports.not_returned') }}" class="card-link">
                                <h5 class="card-title mb-0">برگشت داده نشده</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
