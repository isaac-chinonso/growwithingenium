@extends('layout.apps')
@section('title')
Settings || Ingenium Concept LTD
@endsection
@section('content')
<!-- content body -->
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4>
                            @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../app/images/morning1.png">, {{ Auth::user()->fullname }}</h1>
                                @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../app/images/afternoon.png">, {{ Auth::user()->fullname }}</h1>
                                    @elseif (date("H") >= 15 && date("H") < 24)</h1>
                                        <h1 style="font-size: 20px;">Good evening <img src="../app/images/evening.png">, {{ Auth::user()->fullname }}</h1>
                                        @endif
                        </h4>
                        @include('include.success')
                        @include('include.warning')
                        @include('include.error')
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="nav flex-column nav-pills">
                                    <a href="#v-pills-home" data-toggle="pill" class="nav-link active show">Personal Information</a>
                                    <a href="#v-pills-profile" data-toggle="pill" class="nav-link">Password</a>
                                    <a href="#v-pills-messages" data-toggle="pill" class="nav-link">Email</a>
                                    <a href="#v-pills-settings" data-toggle="pill" class="nav-link">Notification</a>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="tab-content">
                                    <div id="v-pills-home" class="tab-pane fade active show">
                                        <h4 class="text-center">Personal Information</h4>
                                        <hr>
                                        <form method="post" action="{{ route('updateprofile', Auth::user()->id) }}">
                                            @csrf
                                            <div class="form-field">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control" name="lname" value="{{ Auth::user()->profile->first()->lname }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control" name="fname" value="{{ Auth::user()->profile->first()->lname }}">
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="form-field">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>fullname</label>
                                                        <input type="text" class="form-control" value="{{ Auth::user()->fullname }}" disables>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="form-field">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Phone Number</label>
                                                        <input type="text" class="form-control" name="phone" value="{{ Auth::user()->profile->first()->lname }}">
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="form-field" align="right">
                                                <button class="btn btn-danger" type="reset">Reset</button>
                                                <button class="btn btn-primary" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="v-pills-profile" class="tab-pane fade">
                                        <div align="center">
                                            <img class="mr-3 rounded-circle" src="../../app/images/avatar/1.jpg">
                                        </div>
                                        <hr>
                                        <form>
                                            <div class="form-field">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Current Password</label>
                                                        <input type="password" class="form-control" name="" placeholder="********">
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>New Password</label>
                                                        <input type="password" class="form-control" name="" placeholder="********">
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control" name="" placeholder="********">
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <button class="btn btn-primary btn-block" type="submit">Update Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="v-pills-messages" class="tab-pane fade">
                                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit
                                            et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                    </div>
                                    <div id="v-pills-settings" class="tab-pane fade">
                                        <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet
                                            qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                    </div>
                                </div>
                            </div>
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