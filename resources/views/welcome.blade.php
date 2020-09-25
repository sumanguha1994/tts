<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
        <!-- Sweet Alert -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>
    <body>
        <div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>JavaScript & PHP Text to Speech</h2>
					<textarea id="text-to-speech" class="form-control" placeholder="Enter text to speak..."></textarea>
				</div>
			</div>
			<div><small><b>NOTE:</b> Enter text and click on speak button.</small></div>
            <br />
            <div class="row">
                <div class="col-md-2">
					<button type="button" class="btn btn-info" onclick="textspeech()">Speak</button></div>
                </div>
                <div class="col-md-4 speech"></div>
			</div>
			<br />
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>JavaScript & PHP Speech to Text</h2>
					<p>Click on the below button and speak something...</p>
					<p><button type="button" class="btn btn-warning" onclick="runSpeechRecognition()">Speech to Text</button> &nbsp; <span id="action"></span></p>
					<div id="output" class="hide"></div>
				</div>
			</div>
        </div>
    </body>
    <script>
        $(document).ready(function(){
            $('.speech').hide();
        });
        function textspeech()
        {
            let text = $('#text-to-speech').val();
			textToAudio(text);
            $.get('text-to-speech/'+text, function(data){
                $('.speech').show();
				let html;
				html = "<audio controls='controls' autoplay>";
				html += "<source src='{{asset('public/audio')}}"+'/'+data.file+"'>"
				html += "</audio>";
				$('.speech').append(html);
            });
        }
        function textToAudio(text) {
			// let msg = document.getElementById("text-to-speech").value;
			let msg = text;
			let speech = new SpeechSynthesisUtterance();
			speech.lang = "en-US";
			speech.text = msg;
			speech.volume = 1;
			speech.rate = 1;
			speech.pitch = 1;
			window.speechSynthesis.speak(speech);
		}
		function runSpeechRecognition() {
			var output = document.getElementById("output");
			var action = document.getElementById("action");
			var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
			var recognition = new SpeechRecognition();
			console.log(recognition);
			recognition.onstart = function() {
				action.innerHTML = "<small>listening, please speak...</small>";
			};
			
			recognition.onspeechend = function() {
				action.innerHTML = "<small>stopped listening, hope you are done...</small>";
				recognition.stop();
			}
			recognition.onresult = function(event) {
				var transcript = event.results[0][0].transcript;
				var confidence = event.results[0][0].confidence;
				output.innerHTML = "<b>Text:</b> " + transcript + "<br/> <b>Confidence:</b> " + confidence*100+"%";
				output.classList.remove("hide");
			};
			recognition.start();
		}
    </script>
</html>
