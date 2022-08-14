
@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl xl-auto">
  {{-- <div class="nk-block-head nk-block-head-lg wide-sm">
      
  </div><!-- .nk-block-head --> --}}
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

                      <div class="col-md-8">
                          <div class="form-group">
                              <label class="form-label" for="fv-full-name">Product Full Name</label>
                              <div class="form-control-wrap">
                                  <input type="text" class="form-control" id="name" name="name" required>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-4">&nbsp;</div>

                      <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Code / Sku</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="code" name="code" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics">
                                Category
                                <!-- Modal Trigger Code -->
                                <a type="button" class="pull-right" data-bs-toggle="modal" data-bs-target="#categoryModel"><Strong>+</Strong></a>
                            </label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" id="category" name="category" data-placeholder="Select a option" required>
                                  <option label="empty" value="">Select Category</option>
                                  @foreach ($category_list as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                  </div>

                <div class="col-md-4">
                  <div class="form-group">
                        <label class="form-label" for="fv-topics">
                            Sub Category 
                            <!-- Modal Trigger Code -->
                            <a type="button" class="pull-right" data-bs-toggle="modal" data-bs-target="#subcategoryModel"><Strong>+</Strong></a>
                        </label>
                        <div class="form-control-wrap ">
                            <select class="form-select js-select2" id="subcategory" name="subcategory" data-placeholder="Select a option" required>
                                <option label="empty" value="">Select Sub Category</option>
                            </select>
                        </div>
                    </div>
                </div>


              {{-- <div class="col-md-4">
                  <div class="form-group">
                      <label class="form-label" for="fv-topics">Sub Sub Category</label>
                      <div class="form-control-wrap ">
                          <select class="form-select js-select2" id="fv-topics" name="subscategory" data-placeholder="Select a option" required>
                              <option label="empty" value=""></option>
                              <option value="fv-gq">General Question</option>
                              <option value="fv-tq">Tachnical Question</option>
                              <option value="fv-ab">Account &amp; Billing</option>
                          </select>
                      </div>
                  </div>
              </div> --}}

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Weight</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control" id="weight" name="weight" required>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Unit</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control" id="unit" name="unit" required>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Price</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control" id="price" name="price" required>
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


<!-- Modal Content Code -->
<div class="modal fade" tabindex="-1" id="categoryModel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>
            </div>
            <div class="modal-body">
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
            <div class="modal-footer bg-light">
                <span class="sub-text">Modal Footer Text</span>
            </div>
        </div>
    </div>
</div>

<!-- Modal Content Code -->
<div class="modal fade" tabindex="-1" id="subcategoryModel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Add Sub Category</h5>
            </div>
            <div class="modal-body">
                <form action="/category" method="post" enctype="multipart/form-data" class="form-validate">
                    @csrf
                      <div class="row g-gs">
                        <div class="form-control-wrap ">
                            <select class="form-select js-select2" id="category" name="category" data-placeholder="Select a option" required>
                              <option label="empty" value="">Select Category</option>
                              @foreach ($category_list as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                              @endforeach
                            </select>
                        </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="form-label" for="fv-full-name">Sub Category Name</label>
                                  <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="name" name="name" required>
                                  </div>
                              </div>
                          </div>
    
                          <div class="col-md-12">
                              <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Save Sub Category</button>
                                <a href="{{ asset('/category')}}" class="btn btn-lg btn-danger">Cancel</a>
                              </div>
                          </div>
                      </div>
                  </form>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">Modal Footer Text</span>
            </div>
        </div>
    </div>
</div>


@endsection

@section('custom-footer')
<script>
    $('document').ready(function(){
        $('#category').change(function(){
            categoryId = $(this).val();
            console.log(categoryId);
            
            // Empty the sub category dropdown
            $('#subcategory').find('option').not(':first').remove();
            
            // populate subcategory
            $.ajax({
                url : "subcategory/getlist/"+categoryId,
                type : "GET",
                data: {categoryid:categoryId},
                success : function(response){
                    console.log(response);
                    var len = 0;
                    if(response != null){
                        len = response.length;
                    }

                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){

                        var id = response[i].id;
                        var name = response[i].subcategory_name;

                        var option = "<option value='"+id+"'>"+name+"</option>";

                        $("#subcategory").append(option); 
                        }
                    }
                },
                error: function(err){
                    console.log(err);
                }
            });
        });
    });
</script>
@endsection