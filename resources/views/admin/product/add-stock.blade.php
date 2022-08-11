
@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl xl-auto">
  <div class="nk-block-head nk-block-head-lg wide-sm">
      
  </div><!-- .nk-block-head -->
  <div class="nk-block nk-block-lg">
      <div class="nk-block-head">
          <div class="nk-block-head-content">
              <h4 class="title nk-block-title">Add Stock</h4>
          </div>
      </div>
      <div class="card card-bordered">
          <div class="card-inner">
              <form action="/category" method="post" enctype="multipart/form-data" class="form-validate">
                @csrf
                  <div class="row g-gs">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics">Products</label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" id="fv-topics" name="product" data-placeholder="Select a Product" required>
                                  <option label="empty" value=""></option>
                                  @foreach ($product as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                  @endforeach
                                    {{-- <option value="fv-tq">Tachnical Question</option>
                                    <option value="fv-ab">Account &amp; Billing</option> --}}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics">Category</label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" id="fv-topics" name="category" data-placeholder="Select a category" required>
                                  <option label="empty" value=""></option>
                                  @foreach ($category as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                  @endforeach
                                    {{-- <option value="fv-tq">Tachnical Question</option>
                                    <option value="fv-ab">Account &amp; Billing</option> --}}
                                </select>
                            </div>
                        </div>
                    </div>

                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="form-label" for="fv-full-name">Stock Quantity</label>
                              <div class="form-control-wrap">
                                  <input type="text" class="form-control" id="name" name="name" required>
                              </div>
                          </div>
                      </div>

                      

                      <div class="col-md-12">
                          <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save stock</button>
                            <a href="{{ asset('/stock')}}" class="btn btn-lg btn-danger">Cancel</a>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div><!-- .nk-block -->
  
</div><!-- .components-preview -->

@endsection