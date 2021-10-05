@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        <form action="{{route('verify')}}" method="post">
                            @csrf
                            <div class="form-group row mb-3">
                                <label for='code' class="label col-md-4">Your Code :</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="code" placeholder="XXXXXX">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-md-6 offset-md-4"> <button class="btn btn-primary" type="submit">
                                        Verify my account
                                    </button></div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
