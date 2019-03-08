@if (session()->has('info'))
<div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <i class="fa fa-info-circle"></i> {{ session()->get('info') }}
</div>
@endif
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <i class="fa fa-check-circle"></i> {{ session()->get('success') }}
</div>
@endif
@if(session()->has('warning'))
<div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <i class="fa fa-warning"></i> {{ session()->get('warning') }}
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <i class="fa fa-times-circle"></i> {{ session()->get('error') }}
</div>
@endif

