
@extends('admin.layout')
@section('custom-head')
    <style>
        .image-preview{
            max-height: 300px;
            min-height: 300px;
            min-width: 280px;
            max-width: 280px !important;
            border: 1px solid lightgray;
        }
    </style>
@endsection
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

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-label" for="fv-full-name">Product Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Code / Sku</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="sku" name="sku" required>
                                    </div>
                                </div>
                            </div>
      
                            <div class="col-md-4 mt-2">
                              <div class="form-group">
                                  <label class="form-label" for="fv-topics">
                                      Category
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
      
                          
                          <div class="col-md-4 mt-2">
                              <div class="form-group">
                                  <label class="form-label" for="fv-topics">
                                      Sub Category
                                      <!-- Modal Trigger Code -->
                                      {{-- <a type="button" class="pull-right" data-bs-toggle="modal" data-bs-target="#categoryModel"><Strong>+</Strong></a> --}}
                                  </label>
                                  <div class="form-control-wrap ">
                                      <select class="form-select js-select2" id="subcategory" name="subcategory" data-placeholder="Select a option" required>
                                        <option label="empty" value="">Select Sub Category</option>
                                        @foreach ($sub_category_list as $data)
                                          <option value="{{$data->id}}">{{$data->name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                              </div>
                        </div>
      
                      <div class="col-md-4 mt-2">
                        <div class="form-group">
                              <label class="form-label" for="fv-topics">
                                  Product Category 
                                  <!-- Modal Trigger Code -->
                                  {{-- <a type="button" class="pull-right" data-bs-toggle="modal" data-bs-target="#subcategoryModel"><Strong>+</Strong></a> --}}
                              </label>
                              <div class="form-control-wrap ">
                                  <select class="form-select js-select2" id="producttype" name="product_category" data-placeholder="Select a option" required>
                                      <option label="empty" value="">Select Sub Category</option>
                                       @foreach ($product_type_list as $data)
                                          <option value="{{$data->id}}">{{$data->name}}</option>
                                        @endforeach 
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
      
                    <div class="col-md-4 mt-2">
                      <div class="form-group">
                          <label class="form-label">Weight</label>
                          <div class="form-control-wrap">
                              <input type="text" class="form-control" id="weight" name="weight" required>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-md-4 mt-2">
                      <div class="form-group">
                          <label class="form-label">Unit</label>
                          <div class="form-control-wrap">
                              <input type="text" class="form-control" id="unit" name="unit" required>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-md-4 mt-2">
                      <div class="form-group">
                          <label class="form-label">Price</label>
                          <div class="form-control-wrap">
                              <input type="text" class="form-control" id="price" name="price" required>
                          </div>
                      </div>
                  </div>  
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label class="form-label">Product Discription</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control form-control-sm" id="discription" name="discription" placeholder="Product discription" required></textarea>
                                </div>
                            </div>
                        </div>
        
                       
                        
                        <div class="col-md-4 mt-2">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <button type="submit" class="btn btn-md btn-primary">Save Product</button>
                                    <a href="{{ asset('/product')}}" class="btn btn-md btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Image -->
                        
                          
                        <div class="col-md-12 mb-2" style="text-align: center;">
                            <label class="form-label">Product Image</label>
                            <br>
                            <img id="preview-image" src="/images/noimage.jpg"
                                alt="preview image" class="image-preview">
                        </div>
                        <div class="image mt-4" style="max-width: 330px !important; text-align: center !important; padding-left: calc((100% - 280px)/2);">
                            {{-- <label><h4 style="text-align: center !important;">Product Image</h4></label>
                            <input type="file" class="form-control" required name="image"> --}}
                            <div class="form-group">
                                {{-- <input type="file" name="image" placeholder="Choose image" id="image"> --}}
                                <input type="file" class="form-control" required name="image" placeholder="Choose image" id="image">
                                @error('name')
                                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    </div>

                         
                
                <div class="row g-gs">   

                
        </div>  
              </form>
          </div>
      </div>
  </div><!-- .nk-block -->
  
</div><!-- .components-preview -->

@endsection

@section('custom-footer')
<script type="text/javascript">
    $('#image').change(function(){
           
    let reader = new FileReader();
    reader.onload = (e) => { 
      $('#preview-image').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]); 
  
   });
  </script>
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