@section('title', 'آپلود ویدیو')
@extends('layouts.master')
@section('master')
    <div class="row">
        <div class="col-6 mx-auto">

            <form class="mt-4" action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(session()->has('message'))
                <div class="alert alert-success text-right alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ session()->get('message') }}</strong>
                </div>
                <script>
                    $(".alert").alert();
                </script>
                @endif

                <div class="mx-auto">
                    <h4 class="font-weight-bold text-right">آپلود ویدیو</h4>
                    <a href="{{ route('videos.index') }}" class="btn btn-outline-primary">ویدیو ها</a>
                </div>

                <div class="form-group text-right">
                    <label for="title" >عنوان</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                          value="{{ old('title') }}" placeholder="عنوان ویدیو را وارد کنید">
                    @error('title')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="custom-file text-center">
                     <input type="file" name="file" class="custom-file-input @error('file') is-invalid @enderror"
                            id="videoUpload">
                    <label class="custom-file-label" for="customFile">انتخاب فایل</label>

                    @error('file')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <video width="320" height="240" class="mx-auto" style="display:none" controls autoplay>
                    Your browser does not support the video tag.
                </video>

                <button class="btn btn-info btn-md my-3">ثبت</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.getElementById("videoUpload").onchange = function(event) {
        let file = event.target.files[0];
        let blobURL = URL.createObjectURL(file);
        document.querySelector("video").style.display = 'block';
        document.querySelector("video").src = blobURL;
    }
</script>
@endpush
