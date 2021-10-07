@extends('layouts.app');
@section('content')
    <section class="content container">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class="contact-form p-2">
            @csrf
            <div class="card rounded p-5">
                <h2>Add your Posts Here</h2>
                <div class="col-sm-9 text-secondary">
                    <input type="file" class="form-control custom-select" name="photo" id="photo">
                    @error('avatar')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-sm-9 text-secondary">

                    <textarea name="description" id="description" cols="118" rows="3"></textarea>
                </div>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">
                    ADD POST
                </button>
            </div>

        </form>
    </section>
@endsection
