
@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl xl-auto">
  <div class="nk-block-head nk-block-head-lg wide-sm">
      
  </div><!-- .nk-block-head -->
  <div class="nk-block nk-block-lg">
      <div class="nk-block-head">
          <div class="nk-block-head-content">
              <h4 class="title nk-block-title">Add Pincode</h4>
          </div>
      </div>
      <div class="card card-bordered">
          <div class="card-inner">
              <form action="/pincode" method="post" enctype="multipart/form-data" class="form-validate">
                @csrf
                  <div class="row g-gs">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-full-name">Enter Pincode</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="pincode" name="pincode" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics">City</label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" id="city" name="city" data-placeholder="Select a city" required>
                                  <option label="empty" value=""></option>
                                  @foreach ($city as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                  @endforeach
                                    {{-- <option value="fv-tq">Tachnical Question</option>
                                    <option value="fv-ab">Account &amp; Billing</option> --}}
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics">State</label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" id="state" name="state" data-placeholder="Select a state" required>
                                  <option label="empty" value=""></option>
                                  @foreach ($state as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                  @endforeach
                                    {{-- <option value="fv-tq">Tachnical Question</option>
                                    <option value="fv-ab">Account &amp; Billing</option> --}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics">Country</label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" id="country" name="country" data-placeholder="Select a country" required>
                                  <option label="empty" value=""></option>
                                  @foreach ($country as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                  @endforeach
                                    {{-- <option value="fv-tq">Tachnical Question</option>
                                    <option value="fv-ab">Account &amp; Billing</option> --}
                                </select>
                            </div>
                        </div>
                    </div> --}}

                        <div class="col-md-12">
                          <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save Pincode</button>
                            <a href="{{ asset('/pincode')}}" class="btn btn-lg btn-danger">Cancel</a>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div><!-- .nk-block -->
  
</div><!-- .components-preview -->

@endsection