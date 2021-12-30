@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Upload Image</h1>

        <div class="upload-image-form-ctr">
            <form action="{{ route('store_image') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 col-form-label">Upload your image here</label>
                    <div class="custom-file mb-2">
                        <input type="file" name="upload_img" class="custom-file-input @error('upload_img') is-invalid @enderror" id="fileInput">
                    </div>

                    @error('upload_img')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @error('failed')
                    <div class="form-group row mb-0">
                        <div class="col-md-10 offset-md-2">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    </div>
                @enderror

                @if (session()->has('success'))
                    <div class="form-group row mt-3 mb-0">
                        <div class="col-md-10 offset-1">
                            <div class="alert alert-success" role="alert">
                                <strong>{{ session()->get('success') }}</strong>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="button-container">
                    <button type="submit" class="btn btn-primary col-sm-2 p-2 mt-3">Upload</button>
                </div>
            </form>
        </div>
    </div>
@endsection