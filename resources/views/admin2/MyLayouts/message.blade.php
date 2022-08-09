@if(session()->has('message'))
  <div class="alert alert-success" id="success-message" style="height: 30px !important; padding-top: 5px !important; margin-bottom: 40px !important;">
      <p><strong><i class="icon fa fa-check"></i> Success! </strong>{{session()->get('message')}}</p>
  </div>
@endif

@if(session()->has('errors'))
  <div class="alert alert-danger" id="error-message" style="height: 30px !important; padding-top: 5px !important; margin-bottom: 40px !important;">
      <p><strong><i class="icon fa fa-check"></i> Failed! </strong>{{session()->get('errors')}}</p>
  </div>
@endif
