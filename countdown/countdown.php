<?php
	$day = 10;
	$month = 06;
	$year = 2016;
	$time = 21;
	$enddate = 26;
?>

<?php $days = ceil((strtotime("$month/$enddate/$year") - time())/(60*60*24)); ?>
	<?php if($days > 0):?>

<?= render('countdown/countdown-style'); ?>
<?= render('countdown/countdown-js'); ?>
	<script type="text/javascript">
	    homecountdown = function(month, day, hour) {
	        var clock,
	        currentDate = new Date(),
	        futureDate = new Date(currentDate.getFullYear(), month-1, day, hour),
	        diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
	        clock = $('.countdown__wrap').FlipClock(diff, {
	            clockFace: 'DailyCounter',
	            countdown: true,
	            showSeconds: true
	        });
	    };
		defer(function () {
				// mm/dd/time
		        homecountdown(<?= $month ?>, <?= $day ?>, <?= $time ?>);
		});
	</script>

	<div class="countdown">
		<h1>Countdown to Euro 2016</h1>
		<div class="countdown__wrap"></div>
	</div>

<?php endif; ?>

