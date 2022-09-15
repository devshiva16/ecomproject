
@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl xl-auto">
  <div class="nk-block-head nk-block-head-lg wide-sm">
      
  </div><!-- .nk-block-head -->
  <div class="nk-block nk-block-lg">
      <div class="nk-block-head">
          <div class="nk-block-head-content">
              <h4 class="title nk-block-title">Add Sub Category</h4>
          </div>
      </div>
      <div class="card card-bordered">
          <div class="card-inner">
              <form action="/subcategory" method="post" enctype="multipart/form-data" class="form-validate">
                @csrf
                  <div class="row g-gs">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics">
                                Category
                                <!-- Modal Trigger Code -->
                                {{-- <a type="button" class="pull-right" data-bs-toggle="modal" data-bs-target="#categoryModel"><Strong>+</Strong></a> --}}
                            </label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" id="category" name="category" data-placeholder="Select a option" required>
                                  <option label="empty" value="">Select Category</option>
                                  @foreach ($categorylist as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                  </div>

                    <div class="col-md-3">
                          <div class="form-group">
                              <label class="form-label" for="fv-full-name">Sub Category Name</label>
                              <div class="form-control-wrap">
                                  <input type="text" class="form-control" id="name" name="name" value="" required>
                              </div>
                          </div>
                      </div>


                      <div class="col-md-12">
                          <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary">Save Category</button>
                            <a href="{{ asset('/subcategory')}}" class="btn btn-md btn-danger">Cancel</a>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div><!-- .nk-block -->
  
</div><!-- .components-preview -->

@endsection