@extends('layout.app1')
@section('title')
Lessons || Ingenium Concept LTD
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
            <button type="button" class="btn btn-primary btn-sm"><a href="{{ url('admin/create-lesson') }}" class="text-white">Create New Lesson</a></button>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Lessons</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Module</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Worksheet</th>
                                        <th>Cover Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($lesson as $less)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $less->module->name }}</td>
                                        <td>{{ $less->title }}</td>
                                        <td>{{ $less->description }}</td>
                                        <td>{{ $less->worksheet }}</td>
                                        <td><img src="../../upload/{{ $less->source }}" width="70px" height="70px"></td>
                                        <td><i class="fa fa-pencil" data-toggle="modal" data-target="#editexampleModalCenter{{ $less->id }}"></i> &nbsp; &nbsp; <i class="fa fa-trash" data-toggle="modal" data-target="#responsive-modal2{{ $less->id }}"></i></td>

                                        <!-- modal content -->
                                        <div class="modal fade" id="editexampleModalCenter{{ $less->id }}">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Update Module</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <form method="POST" action="{{ route('updatelesson', $less->id) }}">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Module:</label>
                                                                        <select class="form-control" name="module_id">
                                                                            <option selected disabled>Select Another Module</option>
                                                                            @foreach($modules as $mod)
                                                                            <option value="{{ $mod->id }}">{{ $mod->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Title:</label>
                                                                        <input type="text" class="form-control" name="title" value="{{ $less->title }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Module Description:</label>
                                                                <textarea class="form-control" name="description">{{ $less->description }}</textarea>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Worksheet:</label>
                                                                        <input type="text" class="form-control" name="worksheet" value="{{ $less->worksheet }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Update Module</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- modal content -->
                                        <div id="responsive-modal2{{ $less->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Lesson</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete {{ $less->title }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deletelesson', $less->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Lesson</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                    </tr>
                                    <?php $number++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!-- #/ content body -->

@endsection