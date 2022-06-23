@extends('layout.app1')
@section('title')
Edit Resource || Ingenium Concept LTD
@endsection
@section('content')

<!-- content body -->
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>
                    @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../app/images/morning1.png">, {{ Auth::user()->fullname }}</h1>
                        @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../app/images/afternoon.png">, {{ Auth::user()->fullname }}</h1>
                            @elseif (date("H") >= 15 && date("H") < 24)</h1>
                                <h1 style="font-size: 20px;">Good evening <img src="../app/images/evening.png">, {{ Auth::user()->fullname }}</h1>
                                @endif
                </h4>
            </div>
            <button type="button" class="btn btn-primary btn-sm"><a href="{{ url('admin/resource') }}" class="text-white">See all Resources</a></button>

        </div>
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <!-- row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Resource</h4>
                        <form action="{{ route('updateresource', $editresource->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Program Category:</label>
                                        <select class="form-control" name="category_id">
                                        <option selected value="{{ $editresource->resourcecategory->id }}">{{ $editresource->resourcecategory->title }}</option>
                                            <option disabled>Select Category</option>
                                            @foreach($resourcecategory as $reso)
                                            <option value="{{ $reso->id }}">{{ $reso->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Title:</label>
                                        <input type="text" class="form-control" name="title" value="{{ $editresource->title }}">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Description:</label>
                                        <textarea class="form-control" name="description">{{ $editresource->description }}</textarea>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Cover Image:</label>
                                        <input type="file" class="form-control" name="coverimage" value="{{ $editresource->source }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Resource File:</label>
                                        <input type="file" class="form-control" name="rfile" value="{{ $editresource->rfile }}">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Update Resource</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!-- #/ content body -->

@endsection