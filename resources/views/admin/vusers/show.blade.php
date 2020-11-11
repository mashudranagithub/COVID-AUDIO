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
        <li class="active">Voice User</li>
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
                    	<h3>User Info</h3>
                        <hr>
                        <p>Mobile No: {{ $vuser->m_phone }}</p>
                        <p>Gender:
                            @if($vuser->gender == 'm')
                                Male
                            @elseif($vuser->gender == 'f')
                                Female
                            @else
                                Third Gender
                            @endif
                        </p>
                        <p>Age: {{ $vuser->age }}</p>
                        <p>Location: {{ $vuser->location }}</p>
                    </div>
                </div>


                <div class="box box-success">
                    <div class="box-body chat" id="chat-box">
                        <h3>Recorded Voices</h3>
                    	<hr>
                    	<table class="table-bordered">
                    		<thead>
                    			<tr>
                    				<th>SI</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                    				<th>Actions</th>
                    			</tr>
                    		</thead>
                    		<tbody>
                    			<?php $i = 1;?>
                    			@foreach($vuser_all_data as $vuser_data)
                    			<tr>
                    				<td>{{ $i++ }}</td>
                                    <td>{{ $vuser_data->question }}</td>
                                    <td>
                                        <audio controls>
                                            <source src="{{ asset('/'.$vuser_data->answer) }}" type="audio/ogg">
                                            <source src="{{ asset('/'.$vuser_data->answer) }}" type="audio/mpeg">
                                            Your browser does not support the audio tag.
                                        </audio>
                                    </td>
                    				<td>
        								<!-- <form action="#" method="POST">
        									{{ csrf_field() }}
        									{{ method_field('DELETE') }}
        									<button type="submit" class="btn btn-danger" style="margin-left:10px;">Delete</button>
        								</form> -->
                                        <a class="btn btn-danger" href="{{ asset('/'.$vuser_data->answer) }}" download>Download</a>
                    				</td>
                    			</tr>
                    			@endforeach
                    		</tbody>
                    	</table>
                    </div>
                </div>

            </section>
        </div>

    </section>
    <!-- /.content -->

@endsection