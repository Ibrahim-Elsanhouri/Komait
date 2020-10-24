<br><br>

@if (session('success'))
<div class="container">
    <div class="alert alert-success">
    <center>    {{ session('success') }} </center>
    </div>
	</div>
@endif



@if (session('danger'))
<div class="container">

    <div class="alert alert-danger">
    <center>    {{ session('danger') }} </center>
    </div>
		</div>

@endif


@if (session('info'))
<div class="container">

    <div class="alert alert-info">
    <center>    {{ session('info') }} </center>
    </div>
		</div>

@endif


@if (session('warning'))
<div class="container">

    <div class="alert alert-warning">
    <center>    {{ session('warning') }} </center>
    </div>
		</div>

@endif