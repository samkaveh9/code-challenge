@section('title', 'ویدیوها')
@extends('layouts.master')
@section('master')
    <div class="jumbotron " style="background-color: #fff !important;">
        <div class="d-flex justify-content-between">
            <div class="font-weight-bold"><h3>ویدیوها</h3></div>
            <div class=""><a href="{{ route('videos.create') }}" class="btn btn-primary">افزودن ویدیو</a></div>
        </div>
    </div>

    <div class="container">
                <div class="row">
                  @if(count($videos) > 0)
                      @foreach($videos as $video)
                            <div class="col-lg-4 mb-4">
                                <div class="card text-right">
                                    <video width="320" height="240" class="card-img-top" controls>
                                        <source src="{{ asset('storage/' . $video->file) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $video->title }}</h5>
                                    </div>
                                </div>
                            </div>
                      @endforeach
                      @else
                        <div class="col-8 mx-auto">
                            <div class="alert alert-warning text-center">
                                <strong class="font-weight-bold">
                                    آیتمی برای نمایش وجود ندارد
                                </strong>
                            </div>
                        </div>
                  @endif
                </div>
            </div>
@endsection
