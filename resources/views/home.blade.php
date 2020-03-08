@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        Hi <strong>{{ auth()->user()->name }}</strong>, 
                        Anda login sebagai 
                        @can('isSuperadmin')
                            <span class="btn btn-success">Super Admin</span>
                        @elsecan('isAdmin')
                            <span class="btn btn-info">Admin</span>
                        @else
                            <span class="btn btn-warning">User</span>
                        @endcan
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection