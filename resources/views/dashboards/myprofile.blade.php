@extends('layouts.dashboard')

@section('title',$title)

@section('content')
    <div class="dashboard-header clearfix">
        <div class="row">
            <div class="col-sm-12 col-md-5"><h4>{{$title}}</h4></div>
            <div class="col-sm-12 col-md-7">
                <div class="breadcrumb-nav">
                    <ul>
                        <li>
                            <a href="{{route('dashboard')}}">Dashboard</a>
                        </li>
                        <li class="active">{{$title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-list">
        <h3 class="heading">Profile Details</h3>
        <div class="dashboard-message contact-2 bdr clearfix">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <!-- Edit profile photo -->
                    <div class="edit-profile-photo">
                        <img src="http://placehold.it/351x351" alt="profile-photo" class="img-fluid">
                        <div class="change-photo-btn">
                            <div class="photoUpload clip-home">
                                <span><i class="fa fa-upload"></i></span>
                                <input type="file" class="upload">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group firstname">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group lastname">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group phone">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group email">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group message">
                                    <label>Personal info</label>
                                    <textarea class="form-control" name="message" placeholder="Personal info"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="dashboard-list">
                <h3 class="heading">Change Password</h3>
                <div class="dashboard-message contact-2">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group current_password">
                                    <label>Current Password</label>
                                    <input type="password" name="current_password" class="form-control" placeholder="Current Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group new_password">
                                    <label>New Password</label>
                                    <input type="password" name="new_password" class="form-control" placeholder="New Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Confirm New Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-md button-theme">Change Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dashboard-list">
                <h3 class="heading">Socials</h3>
                <div class="dashboard-message contact-2">
                    <form action="#" method="GET" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group facebook">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" class="form-control" placeholder="https://www.facebook.com">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group twitter">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" class="form-control" placeholder="https://twitter.com">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group whatsapp">
                                    <label>Whatsapp</label>
                                    <input type="email" name="whatsapp" class="form-control" placeholder="https://www.whatsapp.com">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group website">
                                    <label>Website</label>
                                    <input type="text" name="website" class="form-control" placeholder="www.website.com">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-md button-theme">Send Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p class="sub-banner-2 text-center">© 2018 Theme Vessel. Trademarks and brands are the property of their respective owners.</p>
@endsection

@section('css')

@endsection

@section('js')

@endsection
