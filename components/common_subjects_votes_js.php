<script>
    $(document).ready(function () {

        function setVoteButtonCSS(button, select) {
			let targetNotSelectedClass = button.attr('id').includes("up") ? "btn-outline-success" : "btn-outline-danger";
			let targetSelectedClass = button.attr('id').includes("up") ? "btn-success" : "btn-danger";

			if (select) {
			    button.removeClass(targetNotSelectedClass);
			    button.addClass(targetSelectedClass);
			} else {
                button.removeClass(targetSelectedClass);
                button.addClass(targetNotSelectedClass);
			}
        }

        $('.subject_vote_button').click(function () {
            let selectedTopicVoteButtonId = $(this).attr('id');
            let splittedId = selectedTopicVoteButtonId.split("-");
            let subjectId = splittedId[1];
            let topicIndex = splittedId[2];
            console.clear();

            // Toggle votes buttons
            let selectedTopicVoteButton = $("#" + selectedTopicVoteButtonId);
            let selectedTopicVoteButtonTargetClass = selectedTopicVoteButtonId.includes("up") ? "btn-success" : "btn-danger";
            if (selectedTopicVoteButton.hasClass(selectedTopicVoteButtonTargetClass)) {
                setVoteButtonCSS(selectedTopicVoteButton, false);
            } else {
                setVoteButtonCSS(selectedTopicVoteButton, true);
            }
            let notSelectedTopicVoteButton = selectedTopicVoteButtonId.includes("up") ? $('#vote_button-' + subjectId + '-' + topicIndex + '-down') : $('#vote_button-' + subjectId + '-' + topicIndex + '-up');
            setVoteButtonCSS(notSelectedTopicVoteButton, false);

            // Calculate votes array
            let votesArray = [];

            for (var i = 0; i < 4; ++i) {
                let topicVoteButtonUpId = $('#vote_button-' + subjectId + '-' + i + '-up');
                let topicVoteButtonUpDown = $('#vote_button-' + subjectId + '-' + i + '-down');
                votesArray[i] = topicVoteButtonUpId.hasClass("btn-success") ? parseInt(topicVoteButtonUpId.val()) : topicVoteButtonUpDown.hasClass("btn-danger") ? parseInt(topicVoteButtonUpDown.val()) : 0;
            }

            console.log("Votos para la asignatura " + subjectId + ": " + votesArray);

            $.post('https://covid19.daetsisi.es/vote', {
                "IP": "<?= getUserIpAddr() ?>",
                "subjectId": subjectId,
                "votes": JSON.stringify(votesArray)
            });
        });
    });
</script>