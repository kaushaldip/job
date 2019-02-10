@extends('layouts.hospital')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success"> 
           {{--  <div class="panel-heading"> 
                <h3 class="panel-title"> Billing</h3> 
            </div>  --}}
            <div class="panel-body"> 
			
            <div class="row">
            	<div class="col-md-12">
            		<h5>Outstanding Invoices</h5>
            		<div class="invoice-table table-responsive">
            			<table class="table">
            			<thead><tr><th class="invoice-id">Invoice #</th><th>Job</th><th>Amount</th><th>Due</th></tr></thead>
            			<tbody>
            				<tr><td colspan="4" class="text-muted">No invoices</td></tr>
        				</tbody>
        				</table>
    				</div>
    				<h5>Paid Invoices</h5>
            		<div class="invoice-table table-responsive">
            			<table class="table">
            			<thead><tr><th class="invoice-id">Invoice #</th><th>Job</th><th>Amount</th><th>Due</th></tr></thead>
            			<tbody>
            				<tr><td colspan="4" class="text-muted">No invoices</td></tr>
        				</tbody>
        				</table>
    				</div>
            	</div>
            </div>
            
            </div> 
        </div>
    </div>
</div>
@endsection
