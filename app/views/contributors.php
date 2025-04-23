<?php require APPROOT . '/views/components/header.php'; ?>

<!-- landing page begin -->
<section class="landing-page">

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
                <nav>
                    <ul class="pagination justify-content-end">
                        <?php for ($i = 1; $i <= $data['totalPages']; $i++): ?>
                        <li class="page-item <?= $data['page'] == $i ? 'active' : '' ?>">
                            <a class="" href="<?=URLROOT?>/contributors?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</section>

<!-- end of landing section -->


<!-- footer -->
<?php require APPROOT . '/views/components/footer.php'; ?>