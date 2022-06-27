@extends('layouts.private.admin')
@section('content')
<h1>Product Inventory <span class="badge bg-secondary">Create Plate Product</span></h1>
<h2>Add a sellable plate product to inventory.</h2>
<hr>
<form id='post-form' class='post-form' method='post'>
  <div class="row">
    <div class="col-4" style="text-align:center;">
      @if($Reference)
      <div class="accordion mb-3">
        <div class="accordion-item">
         <h2 class="accordion-header" id="headingOne">
           <button class="accordion-button text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             {{ $Reference->title }}
           </button>
         </h2>
         <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
           <div class="accordion-body">
            <h6>{{$Reference->year}}</h6>
            <a href="{{route('plate', $Reference->id)}}">
              <img style="border-radius: 50%;width:200px;" src="/images/cp-plates/{{$Reference->origin_id}}.jpg" onerror="this.onerror=null;this.src='/favicon.png';"/></a>
              <ul class="list-group list-group-flush">
                @if(!is_null($Reference->collection) && ($Reference->collection !==""))
                <li class="list-group-item"><span class="fw-bold">Collection: </span>{{$Reference->collection}}</li>
                @endif
                @if(!is_null($Reference->manufacturer) && ($Reference->manufacturer !==""))
                <li class="list-group-item"><span class="fw-bold">Manufacturer: </span>{{$Reference->manufacturer}}</li>
                @endif
                @if(!is_null($Reference->artist) && ($Reference->artist !==""))
                <li class="list-group-item"><span class="fw-bold">Artist: </span>{{$Reference->artist}}</li>
                @endif
                <li class="list-group-item">
                  <a class="mx-3" href="http://www.collectorpoint.com/plate/itemview.php?id={{$Reference->origin_id}}" target="_new"><img src="{{ URL::to('/')}}/images/icons/link-45deg.svg"/></a>
                  <a class="mx-3" href="https://www.ebay.com/sch/i.html?_nkw={{$Reference->year}} {{$Reference->manufacturer}} {{$Reference->collection}} {{$Reference->title}} plate" target="_new"><img src="{{ URL::to('/')}}/images/icons/tags-fill.svg"/></a> 
                  <a class="mx-3" href="https://www.google.com/search?q={{$Reference->year}} {{$Reference->manufacturer}} {{$Reference->collection}} {{$Reference->title}} plate" target="_new"><img src="{{ URL::to('/')}}/images/icons/google.svg"/></a>
                </li>
                <li class="list-group-item">
                  {{ $Reference->id}} 
                  @if(!is_null($Reference->bradex) && ($Reference->bradex !==""))
                  • {{$Reference->bradex}} 
                  @endif
                  • <a href="id={{$Reference->id}}" target="_new"><img src="{{ URL::to('/')}}/images/icons/pencil-square.svg"/></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      @endif
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
            <input type="text" value="{{$Reference->title ?? ''}}" class="form-control nv nv-w">
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
            <textarea aria-label="With textarea" value="{{$Reference->description ?? ''}}" style="height: 200px" class="form-control nv-w"></textarea>
            <br/>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Plate Number</span>
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
              <span class="input-group-text nv nv-w">Condition</span>
            </div>
          </div>
          <div class="col-9 m-0 p-0">
            <conditions-select></conditions-select>
          </div>
        </div>
      </div>

      <div class="container m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Resale Price</span>
            </div>
          </div>
          <div class="col-3 m-0 p-0">
            <input type="text" class="form-control nv nv-w">
          </div>
          <div class="col-3 m-0 p-0">
            <div class="input-group mb-3">
              <span class="input-group-text nv nv-w">Acquistion Cost</span>
            </div>
          </div>
          <div class="col-3 m-0 p-0">
            <input type="text" class="form-control nv nv-w">
          </div>
        </div>
      </div>

    </div>
  </div>
</form>
@endsection