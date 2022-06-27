@extends('layouts.private.admin')
@section('content')
<h1>Plate References <span class="badge bg-secondary">Create Plate Reference</span></h1>
<h2>Add a new referrable plate record.</h2>
<hr>
<form id='post-form' class='post-form' method='post'>
  <div class="row">
    <div class="col-4" style="text-align:center;">
      <div class="card text-center border-success mb-3">
        <div class="card-header">
          <h5 class="card-title text-capitalize fw-bold">
            <img id="add_upload_button" class="mx-3" style="cursor: pointer; width:32px; height:32px;" src="{{ URL::to('/')}}/images/icons/plus-circle-dotted.svg"/>
            <span>Add Product Images...</span>
          </h5>
        </div>
        <div class="card-body">
          <div id="image_upload_target" class="row">

          </div>
        </div>
      </div>
    </div>
    <div class="col-8">

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Title</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <input type="text" class="form-control nv nv-w">
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Description</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <textarea aria-label="With textarea" style="height: 200px" class="form-control nv-w"></textarea>
            <br/>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Tags</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <input type="text" class="form-control nv nv-w">
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Production Quantity</span>
            </div>
          </div>
          <div class="col-3 m-0 p-0">
            <input type="text" class="form-control nv nv-w">
          </div>
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Production Date</span>
            </div>
          </div>
          <div class="col-3 m-0 p-0">
            <input type="text" class="form-control nv nv-w">
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Diameter</span>
            </div>
          </div>
          <div class="col-3 m-0 p-0">
            <input type="text" class="form-control nv nv-w">
          </div>
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Weight</span>
            </div>
          </div>
          <div class="col-3 m-0 p-0">
            <input type="text" class="form-control nv nv-w">
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Manufacturer ID</span>
            </div>
          </div>
          <div class="col-5 m-0 p-0">
            <input type="text" class="form-control nv nv-w">
          </div>
          <div class="col-4 m-0 p-0">
            
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Art Theme</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <meta-select list-name="ArtThemes"></meta-select>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Brand</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <meta-select list-name="Brands"></meta-select>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Character</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <meta-select list-name="Characters"></meta-select>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Culture</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <meta-select list-name="Cultures"></meta-select>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Decor Style</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <meta-select list-name="DecorStyles"></meta-select>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Era</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <meta-select list-name="Eras"></meta-select>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Franchise</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <meta-select list-name="Franchises"></meta-select>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Occasion</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <meta-select list-name="Occasions"></meta-select>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Shape</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <meta-select list-name="Shapes"></meta-select>
          </div>
        </div>
      </div>


      <div class="input-group mb-3">
        <div class="form-check form-switch me-3">
          <input class="form-check-input" type="checkbox" role="switch" value="" id="toggle_test">
          <label class="form-check-label" for="toggle_test">Rare</label>
        </div>
        <div class="form-check form-switch me-3">
          <input class="form-check-input" type="checkbox" role="switch" value="" id="toggle_test">
          <label class="form-check-label" for="toggle_test">Vintage</label>
        </div>
        <div class="form-check form-switch me-3">
          <input class="form-check-input" type="checkbox" role="switch" value="" id="toggle_test">
          <label class="form-check-label" for="toggle_test">Antique</label>
        </div>
        <div class="form-check form-switch me-3">
          <input class="form-check-input" type="checkbox" role="switch" value="" id="toggle_test">
          <label class="form-check-label" for="toggle_test">Limited</label>
        </div>
      </div>

      <div class="input-group mb-3">
        <div class="form-check form-switch me-3">
          <input class="form-check-input" type="checkbox" role="switch" value="" id="toggle_test">
          <label class="form-check-label" for="toggle_test">Create as Product</label>
        </div>
      </div>

      <div class="input-group mb-3">
        <button type="button" class="btn btn-primary me-3 text-white">Create</button>
        <button type="button" class="btn btn-danger me-3 text-white">Cancel</button>
      </div>

    </div>
  </div>
</form>
@endsection