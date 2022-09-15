@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl mx-auto">
        
    {{-- <div class="nk-block nk-block-lg"> --}}
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    {{-- </div> <!-- nk-block --> --}}
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content col-md-6">
                <h4 class="nk-block-title">Product Type<a href="/producttype/create" type="button" class="btn btn-primary pull-right" style="position:absolute;right:10px">Add Product Type</a></h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init-export nowrap table table-bordered" data-export-title="Export">
                    <thead>
                        <tr>
                            {{-- <th class="text-center" width="10%">Sno</th> --}}
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Product Type</th>
                            <th class="text-center" width="20%">Status</th>
                            <th class="text-center" width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($producttypelist as $data)
                        <tr>
                            {{-- <td class="text-center">{{ $loop->index + 1 }}</td> --}}
                            <td >{{$data->product->name}}</td>
                            <td >{{$data->name}}</td>
                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitches{{$data->id}}" {{$data->status==1?'checked':''}}>
                                    <label class="custom-control-label" for="customSwitches{{$data->id}}"></label>
                                <div>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('producttype.destroy',$data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/producttype/{{$data->id}}/edit"><em class="icon ni ni-edit-fill edit-subcategory" style="color:rgb(238, 210, 85) !important;"></em></a>
                                    &nbsp;&nbsp;
                                    <button type="submit" style="border: 0px black !important;background:transparent !important;padding: 0px !important;margin: 0px !important;"><em class="icon ni ni-trash" style="color: red !important;"></em></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->
    <div class="nk-block nk-block-lg">
      
</div><!-- .components-preview -->

@endsection

@section("custom-footer")

    <script>
        $(document).ready(function() {

            /// Pop Display
            // $('.del-category').click(function(){
            //     $.ajax({
            //         url : 'category/'+this.id+'/edit',
            //         type : "get",
            //         // data: {id:this.id},
            //         success : function(response){
            //             console.log(response);
            //             $('.modal-body #name').val(response.name);
            //             $('#editCategoryModel').modal('show'); 
            //         },
            //         error: function(err){
            //             console.log(err);
            //         }
            //     });
            // });

            /// Change Status
            $('input[type=checkbox]').change(function() {
                /// Sending data to laravel method
                $.ajax({
                    headers: {
                            'X-CSRF-TOKEN': "{{csrf_token()}}",
                        },
                    url : "producttype/status",
                    type : "POST",
                    data: {id:this.id.match(/\d+/g)},
                    success : function(response){
                        console.log(response);
                    },
                    error: function(err){
                        console.log(err);
                    }
                });
            });

            setInterval(() => {
                $('.alert').hide()
            }, 3000);

            // $('input[type=checkbox]').each(function(index, value) {
            //     console.log(`${index}: ${this.id}, ${this.value}`);
            // });
        });
    </script>
@endsection