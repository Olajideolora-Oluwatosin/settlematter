<?php require APPROOT . '/views/components/header.php'; ?>

<!-- Polls container begin -->
<div class="container polls-container">
    <div class="polls-content">
        <!-- <div class="polls-category">
            <div class="categories active-category"><a href="#">All</a></div>
            <div class="categories"><a href="#">Politics</a></div>
            <div class="categories"><a href="#">Economy</a></div>
            <div class="categories"><a href="#">Pop Culture</a></div>
            <div class="categories"><a href="#">Brands</a></div>
            <div class="categories"><a href="#">Sports</a></div>
        </div> -->
        <!-- end of upper poll section -->

        <!-- lower poll section begins -->
        <div class="all-poll-section">
            <!-- <h3>All Category</h3> -->
            <div class="row">
                <?php foreach ($data['polls'] as $poll): ?>

                <div class="col-md-4">
                    <div class="card shadow-sm polls poll-box" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body polls-content">
                            <?php if ($poll['hasVoted']): ?>
                            <span class="text-danger" align="right" style="font-size: 10px; ">You have already
                                voted
                            </span>
                            <?php endif; ?>
                            <div class=" polls-question">
                                <!-- <span>1.</span> -->

                                <p><?= htmlspecialchars($poll['question']) ?>
                                </p>
                            </div>
                            <div class="polls-answer">
                                <?php foreach ($poll['answers'] as $answer): ?>
                                <div class="answer vote-btn" data-poll-id="<?= $poll['id'] ?>" data-answer-id="
                                    <?= $answer['id'] ?>">
                                    <?= htmlspecialchars($answer['text']) ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="polls-vote">
                                <span class="vote">vote</span>
                                <span class="poll-points">
                                    <?php if ($poll['hasVoted']): ?>
                                    10 points
                                    <?php else: ?>
                                    0 points
                                    <?php endif; ?>
                                </span>
                            </div>

                        </div>
                        <div class="vote-loading" style="display:none; text-align:center; margin:3px;">
                            <div class="spinner-border" role="status"
                                style="width: 1.5rem; height: 1.5rem; color: green">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div class="vote-response" style="margin-bottom: 13px; text-align:center"></div>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>
            <div class="next-category d-flex">
                <span class="ms-auto">Next Category</span>
                <a href="#"><i class="fa-regular fa-less-than ms-auto less"></i></a>
                <a href="#"><i class="fa-regular fa-greater-than ms-auto"></i></a>

            </div>
        </div>

    </div>
</div>
<!-- Polls container ends -->
<script>
const isLoggedIn = <?= isset( $_SESSION[SESSION_USER_KEY]) ? 'true' : 'false' ?>;
$(document).ready(function() {
    $('.vote-btn').on('click', function() {
        if (!isLoggedIn) {
            window.location.href = '<?= URLROOT ?>/users/login';
            return; // stop further execution
        }
        const pollId = $(this).data('poll-id');
        const answerId = $(this).data('answer-id');
        const pollBox = $(this).closest('.polls');
        const responseBox = pollBox.find('.vote-response');
        const loadingSpinner = pollBox.find('.vote-loading');
        const pollPoint = pollBox.find('.poll-points');
        //alert(`${pollId}, ${answerId}`);
        loadingSpinner.show();
        responseBox.html(''); // clear any previous message
        $.ajax({
                url: '<?= URLROOT ?>/pages/voting',
                method: 'POST',
                data: {
                    answerId: answerId,
                    pollId: pollId
                },
                dataType: 'json'
            })
            .done(function(response) {
                // Handle success
                responseBox.html('<div class="alert alert-success">' + response.message +
                    '</div>');
                pollPoint.html('<span> 10 points');
            })
            .fail(function(xhr) {
                // Your error handler
                let msg = 'Something went wrong.';
                if (xhr.status === 409) {
                    msg = 'You have already voted on this poll.';
                }
                responseBox.html('<div class="alert alert-danger">' + msg + '</div>');
            })
            .always(function() {
                // Hide loading spinner after request is done
                loadingSpinner.hide();
            });
    });
});
</script>

<!-- footer -->
<?php require APPROOT . '/views/components/footer.php'; ?>