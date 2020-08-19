<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Recorder.js demo with record, stop and pause - addpipe.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><a href="{{ route('audioList') }}">All Audio List</a></div>
            </div>
        </div>
        
        <div id="controls">
        	 <button id="recordButton">Record</button>
        	 <button id="pauseButton" disabled>Pause</button>
        	 <button id="stopButton" disabled>Stop</button>
        </div>
        <div id="formats">Format: start recording to see sample rate</div>
        	<p><strong>Recordings:</strong></p>
        	<ol id="recordingsList"></ol>


        <form role="form" action="{{ route('audioSave') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
                <label for="audio_file">Upload Audio File</label>
                <input type="file" name="audio_file" id="audio_file">
                <button type="submit">Upload</button>
        </form>
            

            <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
        	<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
        	<script src="{{ asset('front/js/app.js') }}"></script>
    </body>
</html>