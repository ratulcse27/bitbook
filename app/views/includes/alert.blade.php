@if($success = Session::get('success'))
    <div class="alert alert-success alert-dismissable fade in">
	  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  	{{ $success }}
	</div>
@endif

@if($error = Session::get('error'))
    <div class="alert alert-danger alert-dismissable fade in">
	  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  	{{ $error }}
	</div>
@endif

@if (!$errors->isEmpty())
<div class="alert alert-danger alert-dismissable fade in">
  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  	Your submitted form contains some error.
</div>
@endif