<?php
	if ($_GET['success'] == 1) {
		echo "<div class="form-messages success">Thank You! Your message has been sent!</div>";
	}
	if ($_GET['success'] == -1) {
		echo "<div class="form-messages error">Opps! Something went wrong, please try again!</div>";
	}
?>