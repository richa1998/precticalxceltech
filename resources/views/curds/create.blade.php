@extends('layouts/contentNavbarLayout')

@section('content')

<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-body">
        <form action="{{ route('curd.store') }}" method="POST">
        @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-name" name="name" placeholder="John Doe" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <input type="text" id="basic-default-email" class="form-control" name="email"  placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
                <span class="input-group-text" id="basic-default-email2">@example.com</span>
              </div>
              <div class="form-text"> You can use letters, numbers & periods </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
            <div class="col-sm-10">
              <input type="text" id="basic-default-phone" class="form-control phone-mask" name="phone"  placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Country</label>
            <div class="col-sm-10">
              <div class="form-floating form-floating-outline mb-4">
                <select class="form-select" id="exampleFormControlSelect1" name="country"  aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="India">India</option>
                  <option value="Africa">Africa</option>
                  <option value="Chaina">Chaina</option>
                </select>
                <label for="exampleFormControlSelect1">select Country</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">State</label>
            <div class="col-sm-10">
              <div class="form-floating form-floating-outline mb-4">
                <select class="form-select" id="exampleFormControlSelect1" name="state"  aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="MP">MP</option>
                  <option value="UP">UP</option>
                </select>
                <label for="exampleFormControlSelect1">select state</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">City</label>
            <div class="col-sm-10">
              <div class="form-floating form-floating-outline mb-4">
                <select class="form-select" id="exampleFormControlSelect1" name="city"  aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="A'bad">A'bad</option>
                  <option value="Gandhinagar">Gandhinagar</option>
                  <option value="Surat">Surat</option>
                </select>
                <label for="exampleFormControlSelect1">select city</label>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <input type="submit" name="submit" class="btn btn-primary" value="Send">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection