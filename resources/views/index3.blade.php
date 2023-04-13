@extends('layouts.main')


@section('judul')
PROFILE PAGE ADMIN
@endsection

    @section('isi')
    <!-- Main content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark">{{ __('Profile Information') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    {{ __('You are logged in!') }}

                    <table class="table table-responsive">
                        <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
                        <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /.content-wrapper -->
@endsection