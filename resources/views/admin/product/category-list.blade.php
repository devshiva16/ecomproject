@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl mx-auto">
        
    <div class="nk-block nk-block-lg">
        
    </div> <!-- nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content col-md-6">
                <h4 class="nk-block-title">Product Category<a href="{{ asset('category/create')}}" type="button" class="btn btn-primary pull-right" style="position:absolute;right:10px">Add Category</a></h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init-export nowrap table" data-export-title="Export">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Category Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category_list as $data)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{$data->name}}</td>
                            <td>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitches{{$data->id}}" {{$data->status==1?'checked':''}}>
                                    <label class="custom-control-label" for="customSwitches{{$data->id}}"></label>
                                <div>
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
            $('input[type=checkbox]').change(function() {
                /// Sending data to laravel method
                $.ajax({
                    headers: {
                            'X-CSRF-TOKEN': "{{csrf_token()}}",
                        },
                    url : "category/status",
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
            // $('input[type=checkbox]').each(function(index, value) {
            //     console.log(`${index}: ${this.id}, ${this.value}`);
            // });
        });
    </script>
@endsection