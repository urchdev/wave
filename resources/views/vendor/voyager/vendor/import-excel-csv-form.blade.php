@extends('voyager::master')

@section('content')
 <div class="page-content">
		<div class="container" style="padding-top: 60px;">
			<div class="row">
				<div class="col-md-12 offset-md-3">
					<div class="card" style="padding:15px">
						<div class="card-header">
							<h3 class="">Lodgers Report Bulk Import</h3>
						</div>
						<div class="card-body">
							<form method="post" enctype="multipart/form-data" action="{{route('lodger.import')}}">
								@csrf
								<div class="form-group">
									<label for="file">Choose file to locate your report for attachment</label><br><span class="text-danger xs-text"> <strong>(Please ensure you save file as CSV from Excel Spreadsheet)</strong></span>
									<input type="file" class="form-control" name="file" />
								</div>
								<div><br>
								<button type="submit" class="btn btn-primary"><i class="voyager-upload"></i> Sync to Cloud</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
</div>
@stop