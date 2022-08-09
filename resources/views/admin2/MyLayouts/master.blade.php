<!DOCTYPE html>
<html>
    @include('admin2.MyLayouts.head')
    <body class="fixed-left">
    {{-- @include('admin2.MyLayouts.logout-confirm') --}}
	<div id="wrapper">
        @include('admin2.MyLayouts.top-bar')
        @include('admin2.MyLayouts.left-side-menu')
        
        	@section('BodyContent')
        	@show
        	
    	@include('admin2.MyLayouts.footer')    
        {{-- @stack('DeleteConfirmJs')         --}}
	</body>
</html>