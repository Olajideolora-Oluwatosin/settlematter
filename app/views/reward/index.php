<?php require APPROOT . '/views/components/header.php'; ?>

<!-- landing page begin -->
<section class="landing-page">
    <div class="upper-section">
        <div class="upper-content">
            <h2>Rewards</h2>
        </div>
        <div class="lower-section">
            <div class="leaderboard">
                <div style="color: black;" align="right">

                    <?php if(isset($_SESSION[SESSION_USER_KEY])):?>
                    Total point:<strong> <?= $data['pointsuserTotalVote'] ?></strong>

                    <?php endif?>
                </div>
                <table class=" table redeem">
                    <thead class="">
                        <tr>
                            <th>Reward</th>
                            <th>Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Amazon Gift Card</td>
                            <td>500 - 699 Points</td>
                            <?php if (($data['pointsuserTotalVote'] > 499) && ($data['pointsuserTotalVote'] < 700)): ?>
                            <td>
                                <button class="btn btn-success">Redeem</button>
                            </td>
                            <?php else: ?>
                            <td> <button class="btn btn-success" disabled>Redeem</button></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>Spotify Premium</td>
                            <td>700 - 999 Points</td>
                            <?php if (($data['pointsuserTotalVote'] > 699) && ($data['pointsuserTotalVote'] < 999)): ?>
                            <td>
                                <button class="btn btn-success">Redeem</button>
                            </td>
                            <?php else: ?>
                            <td> <button class="btn btn-success" disabled>Redeem</button></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td>Netflix Subscription</td>
                            <td>1000 Points and Above</td>
                            <?php if (($data['pointsuserTotalVote'] > 999)): ?>
                            <td>
                                <button class="btn btn-success">Redeem</button>
                            </td>
                            <?php else: ?>
                            <td> <button class="btn btn-success" disabled>Redeem</button></td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</section>

<!-- end of landing section -->

<!-- Featured articles and polls section -->
<section class="leaderboard-section">
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

    <!-- Frequestly asked question section -->

    <!-- <div class=" faq">
        <h3>Frequently Asked Question</h3>
        <div class="wrap-1">
            <input type="radio" class="input-tabs" id="tab-1" name="tabs">
            <label for="tab-1">
                <div>tab one</div>
                <div class="cross"></div>
            </label>
            <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quasi
                inventore unde nobis voluptatibus illum quae rerum laudantium minima, excepturi quis maiores. Eaque
                quae, nam delectus explicabo, deserunt ipsum!</div>
        </div>

        <div class="wrap-2">
            <input type="radio" class="input-tabs" id="tab-2" name="tabs">
            <label for="tab-2">
                <div>tab two</div>
                <div class="cross"></div>
            </label>
            <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quasi
                inventore unde nobis voluptatibus illum quae rerum laudantium minima, excepturi quis maiores. Eaque
                quae, nam delectus <span class="tip"
                    data-tip="Eaque quae, nam delectus explicabo, deserunt ipsum!">explicabo</span>,
                deserunt ipsum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="tip"
                    data-tip="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">Mollitia</span> autem quasi
                inventore unde nobis voluptatibus illum quae rerum laudantium
                minima, excepturi quis maiores. Eaque quae, nam delectus explicabo, <span class="tip"
                    data-tip="Lorem ipsum dolor sit amet.">deserunt</span> ipsum!</div>
        </div>

        <div class="wrap-3">
            <input type="radio" class="input-tabs" id="tab-3" name="tabs">
            <label for="tab-3">
                <div>tab three</div>
                <div class="cross"></div>
            </label>
            <div class="questions">
                <div class="question-wrap">
                    <input type="radio" class="input-tabs" id="question-1" name="question">
                    <label for="question-1">
                        <div>question one</div>
                        <div class="cross"></div>
                    </label>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam atque, soluta doloribus
                        distinctio saepe labore voluptates facere illum alias perferendis praesentium quia vel accusamus
                        incidunt corporis veniam sapiente. Voluptate, quasi.
                    </div>
                </div>
                <div class="question-wrap">
                    <input type="radio" class="input-tabs" id="question-2" name="question">
                    <label for="question-2">
                        <div>question two</div>
                        <div class="cross"></div>
                    </label>
                    <div class="content">
                        Ipsam atque, soluta doloribus distinctio saepe labore voluptates facere illum alias perferendis
                        praesentium quia vel accusamus incidunt corporis veniam sapiente. Voluptate, quasi.
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </div> -->




</section>


<!-- footer -->
<?php require APPROOT . '/views/components/footer.php'; ?>