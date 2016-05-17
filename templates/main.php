
<?php
style('recorder', 'style');
style('recorder', 'recorder');

script('recorder', 'script');
script('recorder', 'bootstrap.min');
script('recorder', 'EncoderDemo');
script('recorder', 'EncoderWorker');
script('recorder', 'jquery.min');
script('recorder', 'WavAudioEncoder.min');


?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('part.navigation')); ?>
		<?php print_unescaped($this->inc('part.settings')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper">
<!-- 			<?php print_unescaped($this->inc('recorder')); ?>
 -->		
 
    <div class="container">
      <h1><a href="https://github.com/higuma/wav-audio-encoder-js">WavAudioEncoder.js</a> demo</h1>
      <p>Audio recording to Waveform Audio (.wav) test with Web Audio API</p>
      <hr>
      <div class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-3 control-label">Audio input</label>
          <div class="col-sm-2">Test tone</div>
          <div class="col-sm-3">
            <input id="test-tone-level" type="range" min="0" max="100" value="0">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3"></div>
          <div class="col-sm-2">
            <input id="microphone" type="checkbox"> Microphone
          </div>
          <div class="col-sm-3">
            <input id="microphone-level" type="range" min="0" max="100" value="0" class="hidden">
          </div>
        </div><br>
        <div class="form-group">
          <label class="col-sm-3 control-label">Encoding process</label>
          <div class="col-sm-9">
            <input type="radio" name="encoding-process" mode="separate" checked> Encode with worker after recording (safer)
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <input type="radio" name="encoding-process" mode="background"> Encode with worker on recording background (intermediate)
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <input type="radio" name="encoding-process" mode="direct"> Encode on recoring directly without worker (risky)
          </div>
        </div><br>
        <div class="form-group">
          <label class="col-sm-3 control-label">Recording buffer size</label>
          <div class="col-sm-2">
            <input id="buffer-size" type="range" min="0" max="6">
          </div>
          <div id="buffer-size-text" class="col-sm-7"></div>
        </div>
        <div class="form-group">
          <div class="col-sm-3"></div>
          <div class="col-sm-9 text-warning"><strong>Warning: </strong><span>setting size below browser default may fail recording.</span></div>
        </div><br>
        <div class="form-group">
          <div class="col-sm-3 control-label"><span id="recording" class="text-danger hidden"><strong>RECORDING</strong></span>&nbsp; <span id="time-display">00:00</span></div>
          <div class="col-sm-3">
            <button id="record" class="btn btn-danger">RECORD</button>
            <button id="cancel" class="btn btn-default hidden">CANCEL</button>
          </div>
          <div class="col-sm-6"><span id="date-time" class="text-info"></span></div>
        </div>
      </div>
      <hr>
      <h3>Recordings</h3>
      <div id="recording-list"></div>
    </div>

 </div>
	</div>

</div>
