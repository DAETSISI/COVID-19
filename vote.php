<?php

include 'controllers/db_controller.php';

if (
	! isset( $_POST )
	||
	! isset( $_POST["IP"] )
	||
	! isset( $_POST["subjectId"] )
	||
	! isset( $_POST["votes"] )
) {
	return null;
}

update_votes($_POST["IP"], $_POST["subjectId"], $_POST["votes"]);