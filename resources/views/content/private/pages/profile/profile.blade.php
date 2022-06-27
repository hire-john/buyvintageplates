@extends('layouts.private.admin')
@section('content')
<h1>Account Profile</h1>
<h2>edit your account profile details</h2>
<br/>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      
      <div class="container rounded bg-white mt-5 mb-5">
          <div class="row">
              <div class="col-md-3 border-right">
                  <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    
                  @if(empty(Auth::user()->avatar_url))
                  <img class="rounded-circle" src="/images/default-avatar.jpeg">
                  @else
                  <img class="rounded-circle" src="/images/users/avatar/{{ Auth::user()->avatar_url }}">
                  @endif


                    <span class="font-weight-bold">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                    <span class="text-black-50">{{ Auth::user()->email }}</span><span> </span>
                  </div>
              </div>
              <div class="col-md-8 border-right">
                  <div class="p-3 py-5">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4 class="text-right">Profile Details</h4>
                      </div>
                      <div class="row mt-2">
                          <div class="col-md-6"><label class="labels">Firstname</label>
                            <input type="text" class="form-control" placeholder="Firstname" name="first_name" value="{{ Auth::user()->first_name }}">
                          </div>
                          <div class="col-md-6"><label class="labels">Lastname</label>
                                <input type="text" class="form-control" placeholder="Lastname" name="last_name" value="{{ Auth::user()->last_name }}">
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="{{ Auth::user()->mobile_telephone }}"></div>

                          <div class="col-md-12 mt-2"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>

                          <div class="col-md-12 mt-2"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                          <div class="col-md-12 mt-2"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                          <div class="col-md-12 mt-2"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                          <div class="col-md-12 mt-2"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                          <div class="col-md-12 mt-2"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                          <div class="col-md-12 mt-2"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                      </div>
                      <div class="row mt-3">
                          <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                          <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                      </div>
                      <div class="mt-5 text-center"><button class="btn btn-success profile-button" type="button">Save Profile</button></div>
                  </div>
              </div>
          </div>
      </div>

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Tab 2</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Tab 3</div>
</div>



@endsection