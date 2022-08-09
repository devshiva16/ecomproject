<!DOCTYPE html>
<html>
@include('MyLayouts.head')
<body class="fixed-left">
@include('MyLayouts.logout-confirm')
<div id="wrapper">
@include('MyLayouts.examTop-bar')


@section('BodyContent')
@show

@include('MyLayouts.footer')
@stack('DeleteConfirmJs')

</body>
</html>