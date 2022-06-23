@extends('layout.app1')
@section('title')
Modules || Ingenium Concept LTD
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
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Add New Module</button>
            <!-- modal content -->
            <div class="modal fade" id="exampleModalCenter">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Add New Module</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form method="POST" action="{{ url('admin/save-module') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label">Module Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{ Request::old('name')}}">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Module Description:</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Add Module</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.modal -->

        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modules</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $number = 1; ?>
                                <tbody>
                                    @foreach($modules as $mod)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $mod->name }}</td>
                                        <td>{{ $mod->description }}</td>
                                        <td>
                                            <i class="fa fa-pencil" data-toggle="modal" data-target="#editexampleModalCenter{{ $mod->id }}"></i>&nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-trash" data-toggle="modal" data-target="#responsive-modal2{{ $mod->id }}"></i>
                                        </td>
                                        <!-- modal content -->
                                        <div class="modal fade" id="editexampleModalCenter{{ $mod->id }}">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Update Module</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <form method="POST" action="{{ route('updatemodule', $mod->id) }}">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="control-label">Module Name:</label>
                                                                <input type="text" class="form-control" name="name" value="{{ $mod->name }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label">Module Description:</label>
                                                                <textarea class="form-control" name="description">{{ $mod->description }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Update Module</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal content -->
                                        <div id="responsive-modal2{{ $mod->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Module</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete {{ $mod->name }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deletemodule', $mod->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Module</a>
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