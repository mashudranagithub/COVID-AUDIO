//webkitURL is deprecated but nevertheless
URL = window.URL || window.webkitURL;
 
// shim for AudioContext when it's not avb. 
var AudioContext = window.AudioContext || window.webkitAudioContext;
var audioContext //audio context to help us record
 
var current_question_id= "blank";
var RECORDS={};


function startMyRecord(id){
  
  current_question_id = id + '';
  
  if( !(id in RECORDS) ){
    RECORDS[id] = {"id":id,"audio":{},"blob":{},"url":"","stream":{},"input":{}};
  }
  
  console.log("recordButton clicked: ", id);
 
    var constraints = { audio: true, video:false } 

    document.getElementById("start_"+ id).disabled = true;
    document.getElementById("start_"+ id).classList.add("active");
  
    document.getElementById("stop_"+ id).disabled = false;
    document.getElementById("play_"+ id).disabled = true;
    document.getElementById("pause_"+ id).disabled = true;
    document.getElementById("delete_"+ id).disabled = true;
    //document.getElementById("upload_"+ id).disabled = true;

  navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
    console.log("getUserMedia() success, stream created, initializing Recorder.js ..."); 
    audioContext = new AudioContext();

    //update the format 
    //document.getElementById("formats").innerHTML="Format: 1 channel pcm @ "+audioContext.sampleRate/1000+"kHz";

    /*  assign to gumStream for later use  */
    RECORDS[id].stream = stream;
    
    /* use the stream */
    var input = audioContext.createMediaStreamSource(stream);
        
    RECORDS[id].input = input;
        
    RECORDS[id].audio = new Recorder(input,{numChannels:1})

    //start the recording process
    RECORDS[id].audio.record()

    console.log("Recording started");

  }).catch(function(err) {
      //enable the record button if getUserMedia() fails
    document.getElementById("start_"+ id).disabled = false;
    
    document.getElementById("stop_"+ id).disabled = true;
    document.getElementById("play_"+ id).disabled = true;
        document.getElementById("pause_"+ id).disabled = true;
    document.getElementById("delete_"+ id).disabled = true;
    //document.getElementById("upload_"+ id).disabled = true;
  });
     
    setTimeout(function(){
        stopMyRecord(id);
    }, 70 * 1000); 
  
}

function stopMyRecord(id){
  
  if(id in RECORDS){
        current_question_id = id + '';
    //disable the stop button, enable the record too allow for new recordings
    document.getElementById("start_"+ id).disabled = false;
    document.getElementById("start_"+ id).classList.remove("active");
    
    document.getElementById("stop_"+ id).disabled = true;
    document.getElementById("play_"+ id).disabled = false;
        document.getElementById("pause_"+ id).disabled = true;
    document.getElementById("delete_"+ id).disabled = false;
    //document.getElementById("upload_"+ id).disabled = false;
 
    //tell the recorder to stop the recording
    RECORDS[id].audio.stop();

    //stop microphone access
    RECORDS[id].stream.getAudioTracks()[0].stop();
        
        RECORDS[id].audio.exportWAV(createBlobFile);
  }else{
    alert("You haven't start recording!");
  }
  
}

function createBlobFile(blob) {
   
    RECORDS[current_question_id].blob = blob; 
    RECORDS[current_question_id].url = URL.createObjectURL(blob); 
    
    if($('#audio_'+ current_question_id).length > 0){
        
        document.getElementById('audio_'+ current_question_id).src = RECORDS[current_question_id].url;
        document.getElementById("play_"+ current_question_id).disabled = false;
    
    }else{
        var htm =''; 
        htm+='<audio id="audio_'+ current_question_id +'"><source src="'+ RECORDS[current_question_id].url +'" type="audio/wav">Your browser does not support the audio element.</audio>'; 
        $("#audioContainer").append(htm);
    }
    
}

// function uploadMyRecord(id){
  
  
// }


function deleteMyRecord(id){
    
    if(id in RECORDS){
        delete RECORDS[id];
        $('#audio_'+ current_question_id).remove();
    document.getElementById("start_"+ id).disabled = false;
    
    document.getElementById("stop_"+ id).disabled = true;
    document.getElementById("play_"+ id).disabled = true;
        document.getElementById("pause_"+ id).disabled = true;
    document.getElementById("delete_"+ id).disabled = true;
    //document.getElementById("upload_"+ id).disabled = true;
    }else{
    alert("You haven't record anything");
  }
   
  
}
function playMyRecord(id){
    
    if(id in RECORDS){
        var duration = parseFloat(document.getElementById('audio_'+ id).duration);
        
        // document.getElementById('duration_'+ id).innerHTML=  parseFloat(duration).toFixed(2) + " Sec";
        
        document.getElementById('audio_'+ id).play();
        document.getElementById("pause_"+ id).disabled = false;
        document.getElementById("play_"+ id).disabled = false;
        /*
        setTimeout(function(){
            pauseMyRecord(id);
        }, duration * 1000);
        */
    }else{
    alert("You haven't record anything");
  }
  
}
function pauseMyRecord(id){
    if(id in RECORDS){
        document.getElementById('audio_'+ id).pause();
        document.getElementById("pause_"+ id).disabled = true;
        document.getElementById("play_"+ id).disabled = false;
    } 
}


function uploadAllFiles(){
    
    var _token = $('input#_token').val();
    
    var fd=new FormData();

        fd.append("_token", _token);

    for(id in RECORDS){ 
        //console.log('id search ',id);
        fd.append(id,RECORDS[id].blob, id + ".wav");
        // fd.append(current_question_id);
    }
    
    //console.log('uploadAllFiles',fd.get(current_question_id));
 
    var xhr=new XMLHttpRequest();
    xhr.onload=function(e) {
      if(this.readyState === 4) {
          console.log("Server returned: ",e.target.responseText);
      }
    };
    xhr.open("POST","voiceup",true);
    xhr.send(fd); 
}


