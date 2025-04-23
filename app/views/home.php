<?php require APPROOT . '/views/components/header.php'; ?>

<!-- landing page begin -->
<section class="landing-page">
    <div class="upper-section">
        <div class="upper-content">
            <h2>Your Opinion Matters</h2>
            <p>
                Join our community and make your voice heard. participate in polls
                , earn rewards and influence decisions.
            </p>
        </div>

        <div class="get-started">
            <a href="#">Get Started</a>
        </div>
    </div>
    <div class="lower-section">
        <div class="leaderboard" data-aos="fade-up" data-aos-duration="1000">
            <h3>Top Contributor</h3>
            <?php $count = 1;?>
            <?php foreach ($data['topVoters'] as $voter): ?>
            <div class="leaderboard-item">
                <span class="rank"><?= $count++;?></span>
                <div class="name-section">
                    <i class="fas fa-user"></i>
                    <span><?= htmlspecialchars($voter->username) ?> </span>
                </div>
                <span class="points"><?= $voter->vote_count  * $data['points']->points?> pts</span>
            </div>
            <?php endforeach; ?>
            <hr>
            <div style="text-align: right; margin-top: 10px;">
                <a href="<?= URLROOT?>/contributors" class=" btn btn-success">View All</a>
            </div>
        </div>
    </div>
</section>

<!-- end of landing section -->

<!-- Featured articles and polls section -->
<section class="articles-polls">
    <div class="featured-polls" data-aos="fade-up" data-aos-duration="1000">
        <h3>Featured Polls</h3>
        <div class="container mt-4">
            <div class="row">
                <?php foreach ($data['featuredPolls'] as $poll): ?>

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
                                    <?= $data['points']->points ?> points
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
        </div>
    </div>

    <!-- polls ending -->

    <!-- begin article -->


    <div class="featured-article" data-aos="fade-up" data-aos-duration="1000">
        <h3>Featured Articles</h3>
        <div class="container mt-4">
            <div class="row">

                <div class="col-md-4">
                    <div class="card shadow-sm articles" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body articles-content">
                            <div class="article-image">
                                <img src="<?= URLROOT?>/images/article-image/cyber-security-small-business.jpg"
                                    alt="image">
                            </div>
                            <div class="article-contents">
                                <h4>The Importance of Cybersecurity for Small Businesses</h4>
                                <p>In today’s digital age, cybersecurity is essential for businesses of all sizes,
                                    but small businesses often face unique challenges when it comes to protecting
                                    their data and systems.
                                </p>
                            </div>
                            <a href="#">Explore More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm articles" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body articles-content">
                            <div class="article-image">
                                <img src="<?= URLROOT?>/images/article-image/streaming.jpg" alt="image">
                            </div>
                            <div class="article-contents">
                                <h4>The Rise of Streaming Platforms: How They’re Changing the Entertainment Industry
                                </h4>
                                <p>In recent years, streaming platforms have transformed how we consume media. From
                                    movies and TV shows to music and podcasts, streaming services like Netflix,
                                    Hulu, Spotify, and Apple TV+ have disrupted traditional entertainment methods.
                                </p>
                            </div>
                            <a href="#">Explore More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm articles" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body articles-content">
                            <div class="article-image">
                                <img src="<?= URLROOT?>/images/article-image/Future-of-Gaming.jpg" alt="image">
                            </div>
                            <div class="article-contents">
                                <h4>The Future of Video Games: Trends Shaping the Industry</h4>
                                <p>The video game industry is one of the fastest-growing sectors of entertainment
                                    worldwide. With innovations in technology, gaming consoles, and mobile apps
                                </p>
                            </div>
                            <a href="#">Explore More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- end article -->

                <!-- recommended polls -->

            </div>
        </div>
    </div>
    <!-- <div class="recommended-polls" data-aos="fade-up" data-aos-duration="1000">
        <h3>Recommended Polls</h3>
        <div class="container mt-4">
            <div class="row">

                <div class="col-md-6">
                    <div class="card shadow-sm polls" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body polls-content">
                            <div class="polls-question">
                                <span>3.</span>
                                <p>join our community and make your voice heard</p>
                            </div>
                            <div class="polls-answer">
                                <div class="answer">poll answer 1</div>
                                <div class="answer">poll answer 1</div>
                                <div class="answer">poll answer 1</div>
                            </div>
                            <div class="polls-vote">
                                <span class="vote">vote</span>
                                <span class="poll-points">10 points</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm polls" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body polls-content">
                            <div class="polls-question">
                                <span>3.</span>
                                <p>join our community and make your voice heard</p>
                            </div>
                            <div class="polls-answer">
                                <div class="answer">poll answer 1</div>
                                <div class="answer">poll answer 1</div>
                                <div class="answer">poll answer 1</div>
                            </div>
                            <div class="polls-vote">
                                <span class="vote">vote</span>
                                <span class="poll-points">10 points</span>
                            </div>

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div> -->

</section>
<script>
const isLoggedIn = <?= isset( $_SESSION[SESSION_USER_KEY]) ? 'true' : 'false' ?>;
$(document).ready(function() {
    $('.vote-btn').on('click', function() {
        if (!isLoggedIn) {
            window.location.href = '<?= URLROOT ?>/users/login'; // redirect to login page
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
                pollPoint.html('<?= $data['points']->points ?> points');
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