<div class="container-fluid">
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 px-0">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="{{$user['photo']}}" alt="Maxwell Admin">
                            </div>
                                <h5 class="user-name">{{$user['name']}}</h5>
                                <h6 class="user-email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c252937351c113d242b393030723f3331">{{$user['email']}}</a></h6>
                            </div>
                            <form action="{{ route('picture', ['id' => $user['id']]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row text-center">
                                    <div class="col-12 padding-0 mb-1">
                                        <input class="form-control" type="file" name="gambar" required>
                                    </div>
                                    <div class="col-12 padding-0">
                                        <input class="btn btn-warning mb-5" type="submit" value="Ganti">
                                    </div>
                                </div>
                            </form>
                            
                            <div class="text-center">
                                <button class="btn btn-dark"><a href="/logout">Logout</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 px-0 ps-1">
                <div class="card h-100">
                <form method="POST" action="{{ route('update', [ 'id' => $user['id']]) }}">
                    @csrf
                    @method("PUT")
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2">Personal Details</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" name="name" class="form-control" id="fullName" placeholder="Enter full name" value="{{ $user['name'] }}">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" name="email" class="form-control" id="eMail" placeholder="Enter email ID" value="{{ $user['email'] }}">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" value="{{ $user['phone_number'] }}">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Gender</label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check form-check-inline">
                                                <input name="gender" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1" value="1">Male</label>
                                              </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check form-check-inline">
                                                <input name="gender" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2" value="2">Female</label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mt-3 mb-2">Address</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="Street">Street</label>
                                    <input type="name" class="form-control" id="Street" placeholder="Enter Street" value="{{ $user['addres'] }}">
                                </div>
                            </div>
                           
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                    <button type="submit" id="submit" name="submit" class="btn btn-outline-warning">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
    </div>
</div>
