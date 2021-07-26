@extends('Layouts.master')
@section('images')
<img src="../../assets/images/888084082929190.png" alt="profile image" class="img-xs rounded-circle">
@endsection
@section('image')
<img src="../../assets/images/888084082929190.png" alt="profile image">
<p class="text-center font-weight-medium">Demo</p>
@endsection
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <h4 class="page-title">Activities</h4>
                <div class="d-flex align-items-center">
                    <div class="wrapper mr-4 d-none d-sm-block">
                        <p class="mb-0">Summary for
                            <b class="mb-0"><i id="bulan"></i> <i id="tahun"></i></b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <div class="row">
    </div>
</div>

@endsection