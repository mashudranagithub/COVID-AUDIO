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
        <li class="active">Voices</li>
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


@foreach($all_questions as $question)

                <div class="box box-success">
                    <div class="box-body chat" id="chat-box">
                        <h3>Question: {{ $question->question }} -- Status: {{ $question->category }}</h3>
                      <hr>
                      <table class="table-bordered">
                        <thead>
                          <tr>
                            <th>SI</th>
                            <th>User Phone</th>
                            <th>Answer</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          @foreach($questions_answers as $voice)
	                          @if($voice->qusetion_id == $question->id)
	                          <tr>
	                            <td>{{ $i++ }}</td>
	                                    <td>{{ $voice->vuser_phone }}</td>
	                                    <td>
	                                        <audio controls>
	                                            <source src="{{ asset('/'.$voice->answer) }}" type="audio/ogg">
	                                            <source src="{{ asset('/'.$voice->answer) }}" type="audio/mpeg">
	                                            Your browser does not support the audio tag.
	                                        </audio>
	                                    </td>
	                            <td>
	                                <a class="btn btn-danger" href="{{ asset('/'.$voice->answer) }}" download>Download</a>
	                            </td>
	                          </tr>
	                          @endif
                          @endforeach
                        </tbody>
                      </table>

                    </div>
                </div>

@endforeach

{{ $all_questions->links() }}
            </section>
        </div>

    </section>
    <!-- /.content -->

@endsection