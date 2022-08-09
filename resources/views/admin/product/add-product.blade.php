
@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl xl-auto">
  <div class="nk-block-head nk-block-head-lg wide-sm">
      
  </div><!-- .nk-block-head -->
  <div class="nk-block nk-block-lg">
      <div class="nk-block-head">
          <div class="nk-block-head-content">
              <h4 class="title nk-block-title">Add Product</h4>
          </div>
      </div>
      <div class="card card-bordered">
          <div class="card-inner">
              <form action="/product" method="post" enctype="multipart/form-data" class="form-validate">
                @csrf
                  <div class="row g-gs">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="form-label" for="fv-full-name">Product Full Name</label>
                              <div class="form-control-wrap">
                                  <input type="text" class="form-control" id="name" name="name" required>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Code</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="code" name="code" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                          <label class="form-label">Short Name</label>
                          <div class="form-control-wrap">
                              <input type="text" class="form-control" id="short_name" name="short_name" required>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label class="form-label">Unit</label>
                      <div class="form-control-wrap">
                          <input type="text" class="form-control" id="unit" name="unit" required>
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Weight</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control" id="weight" name="weight" required>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                  <label class="form-label">SKU</label>
                  <div class="form-control-wrap">
                      <input type="text" class="form-control" id="sku" name="sku" required>
                  </div>
              </div>
          </div>

          {{-- <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Discount</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" id="discount" name="discount" required>
                </div>
            </div>
        </div> --}}

                      <div class="col-md-6">
                              <div class="form-group">
                                  <label class="form-label" for="fv-topics">Category</label>
                                  <div class="form-control-wrap ">
                                      <select class="form-select js-select2" id="fv-topics" name="category" data-placeholder="Select a option" required>
                                        <option label="empty" value=""></option>
                                        @foreach ($category_list as $data)
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
                            <label class="form-label" for="fv-topics">Sub Category</label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" id="fv-topics" name="subcategory" data-placeholder="Select a option" required>
                                    <option label="empty" value=""></option>
                                    <option value="fv-gq">General Question</option>
                                    <option value="fv-tq">Tachnical Question</option>
                                    <option value="fv-ab">Account &amp; Billing</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    

                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="form-label">Product Discription</label>
                              <div class="form-control-wrap">
                                  <textarea class="form-control form-control-sm" id="discription" name="discription" placeholder="Product discription" required></textarea>
                              </div>
                          </div>
                      </div>

                      <div class="image">
                        <label><h4>Add image</h4></label>
                        <input type="file" class="form-control" required name="image">
                      </div>
                      
                      <div class="col-md-12">
                          <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save Product</button>
                            <a href="{{ asset('/product')}}" class="btn btn-lg btn-danger">Cancel</a>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div><!-- .nk-block -->
  
</div><!-- .components-preview -->

@endsection