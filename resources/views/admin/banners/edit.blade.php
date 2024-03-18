@extends('admin.layout.layout')
@push('styles')
    <style>
        .img-wrap {
            position: relative;

        }

        .close {
            background: red;
            border-radius: 21px;
            padding: 1px 15px;
            width: 31px;
            height: 31px;
        }

        .img-wrap .close {
            position: absolute;
            top: -15px;
            right: 291px;
            z-index: 100;
            padding-left: 9px;
            padding-top: 3px;

        }
    </style>

@endpush
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header', [
            'page_name' => 'Banners',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'banners',
        ])
        @include('admin.includes.page_main_content', [
            'card_title' => 'Edit Banners',
            'back_link' => route('admin.banners.index'),
        ])
                            <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="title">Banner Title</label>
                                            <input type="text" class="form-control" id="title"
                                                name="title" placeholder="Enter category name"
                                                value="{{ old('title', $banner->title) }}">
                                            @error('title')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="link">Banner link</label>
                                            <input type="text" class="form-control" id="link"
                                                name="link" placeholder="Enter Banner Link"
                                                value="{{ old('link', $banner->link) }}">
                                        </div>


                                    </div>
                                    <div class="row">

                                       
                                        <div class="form-group col-6">
                                            <label for="alt">Banner Alt</label>
                                            <input type="text" class="form-control" id="alt"
                                                name="alt" placeholder="Enter Banner alt"
                                                value="{{ old('alt', $banner->alt) }}">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="type">Banner Type</label>
                                            <select class="form-control" id="type" name="type">
                                                <option value="">select</option>
                                                <option value="Fixed" @if ($banner->type ==='Fixed' ) selected @endif>
                                                    Fixed</option>
                                                <option value="Scroll" @if ($banner->type==='Scroll' ) selected @endif>
                                                    Scroll</option>
                                            </select>
                                            @error('type')
                                            <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                      
                                        {{-- <div class="form-group col-6">
                                            <label for="brand_image">Brand Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="brand_image"
                                                        name="brand_image">

                                                    <label class="custom-file-label" for="brand_image">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-6">
                                            <label for="image">Banner Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image"
                                                        name="image">

                                                    <label class="custom-file-label" for="image">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-6 d-none">
                                            <label for="status">Banner Status</label>
                                            <input type="hidden" class="form-control" id="status" style="background-color: #e9ecef80; color:#333;"
                                                name="status" placeholder="Enter Banner status"
                                               
                                                value="{{ $banner->status }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="sort"> Sort</label>
                                            <input type="text" class="form-control" id="sort"
                                                name="sort" placeholder="Enter sort number" value="{{ old('sort') ,$banner->sort }}">
                                               
                                        </div>

                                    </div>
                                    <div class="row">
                                        
                                        <div class="form-group col-6">
                                            @if (!empty($banner->image))
                                            <div class="img-wrap">
                                                <a href="javascript:void(0);" class="confirmDelete" data-toggle="tooltip"
                                                    title="Delete Image" module="banner-image"
                                                    module_id={{ $banner->id }}>
                                                    {{-- <span class="close">&times;</span> --}}
                                                </a>
                                                <a href="{{ asset('storage/front/image/banners/' . $banner->image) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('storage/front/images/banners/' . $banner->image) }}"
                                                        alt="" srcset="" width="100px" height="80px">
                                                </a>
                                            </div>
                                            @else
                                            <div class="img-wrap">
                                                    <img src="{{ asset('admin/img/no-image.png') }}"
                                                        alt="" srcset="" height="130px" width="150px">
                                            </div>
                                            @endif
                                        </div>



                                    </div>
                                    <hr>
                                    
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection