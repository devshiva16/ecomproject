
@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl xl-auto">
  <div class="nk-block-head nk-block-head-lg wide-sm">
      
  </div><!-- .nk-block-head -->
  <div class="nk-block nk-block-lg">
      <div class="nk-block-head">
          <div class="nk-block-head-content">
              <h4 class="title nk-block-title">Add Category</h4>
          </div>
      </div>
      <div class="card card-bordered">
          <div class="card-inner">
              <form action="/category" method="post" enctype="multipart/form-data" class="form-validate">
                @csrf
                  <div class="row g-gs">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="form-label" for="fv-full-name">Category Name</label>
                              <div class="form-control-wrap">
                                  <input type="text" class="form-control" id="name" name="name" required>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save Category</button>
                            <a href="{{ asset('/category')}}" class="btn btn-lg btn-danger">Cancel</a>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div><!-- .nk-block -->
  
</div><!-- .components-preview -->

@endsection