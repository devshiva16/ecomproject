
@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl xl-auto">
  <div class="nk-block-head nk-block-head-lg wide-sm">
      
  </div><!-- .nk-block-head -->
  <div class="nk-block nk-block-lg">
      <div class="nk-block-head">
          <div class="nk-block-head-content">
              <h4 class="title nk-block-title">Edit Product Type</h4>
          </div>
      </div>
      <div class="card card-bordered">
          <div class="card-inner">
              <form action="{{ route('producttype.update', ['producttype' => $producttype]) }}" method="post" enctype="multipart/form-data" class="form-validate">
                @method('PATCH')
                @csrf
                  <div class="row g-gs">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics">
                                Product
                                <!-- Modal Trigger Code -->
                                {{-- <a type="button" class="pull-right" data-bs-toggle="modal" data-bs-target="#categoryModel"><Strong>+</Strong></a> --}}
                            </label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" id="product" name="product" data-placeholder="Select a option" required>
                                  <option label="empty" value="">Select Product</option>
                                  @foreach ($productlist as $data)
                                    <option value="{{$data->id}}" {{$producttype->product_id==$data->id?'selected':''}}>{{$data->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                  </div>

                    <div class="col-md-3">
                          <div class="form-group">
                              <label class="form-label" for="fv-full-name">Product Type</label>
                              <div class="form-control-wrap">
                                  <input type="text" class="form-control" id="name" name="name" value="{{$producttype->name}}" required>
                              </div>
                          </div>
                      </div>


                      <div class="col-md-12">
                          <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary">Update Product Type</button>
                            <a href="{{ asset('/producttype')}}" class="btn btn-md btn-danger">Cancel</a>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div><!-- .nk-block -->
  
</div><!-- .components-preview -->

@endsection