@extends('admin.layouts.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Voice Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

        	<div class="box">
        		<div>
        			@if ($msg = Session::get('msg'))
					<div class="alert alert-success">
					<p>{{ $msg }}</p>
					</div>
					@endif
        		</div>
        	</div>


<!--         <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-files-o"></i>
              <h3 class="box-title">All Voice Users</h3>
              <a href="#" class="pull-right p-10">Create New Question</a>
            </div>
        </div> -->


<style>
	table tr td{
		border: 1px solid #333 !important;
	}
	table tr th, table tr td {
		padding:3px 10px;
	}
	table thead tr th {
		border: 2px solid #333 !important;
	}
</style>

                <div class="box box-success">
                    <div class="box-body chat" id="chat-box">
                    	<h3>Voice Recorders</h3>
                    	<hr>
                    	<table class="table-bordered">
                    		<thead>
                    			<tr>
                    				<th>SI</th>
                                    <th>Phone Number</th>
                                    <th>Location</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                    				<th>Actions</th>
                    			</tr>
                    		</thead>
                    		<tbody>
                    			<?php $i = 1;?>
                    			@foreach($vusers as $vuser)
                    			<tr>
                    				<td>{{ $i++ }}</td>
                                    <td>{{ $vuser->m_phone }}</td>
                                    <td>{{ $vuser->location }}</td>
                                    <td>
                                        @if($vuser->gender == 'm')
                                            Male
                                        @else
                                            Female
                                        @endif
                                    </td>
                                    <td>{{ $vuser->age }}</td>
                    				<td style="display: flex;justify-content: left;">
                    					<a class="btn btn-warning" href="{{ route('vuserShow', $vuser->id) }}">Show Voices</a>
        								<form action="{{ route('vuserDelete', $vuser->id) }}" method="POST">
        									{{ csrf_field() }}
        									{{ method_field('DELETE') }}
        									<button type="submit" class="btn btn-danger" style="margin-left:10px;">Delete</button>
        								</form>
                    				</td>
                    			</tr>
                    			@endforeach
                    		</tbody>
                    	</table>
                        {{ $vusers->links() }}
                    </div>
                </div>

            </section>
        </div>

    </section>
    <!-- /.content -->

@endsection