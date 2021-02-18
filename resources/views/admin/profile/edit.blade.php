@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Profile</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <label>Email address</label>
                        <div class="form-group">
                            <input type="email" class="form-control">
                        </div>
                        <label>Password</label>
                        <div class="form-group">
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-check mt-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                Subscribe to newsletter
                            </label>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Submit</button>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
