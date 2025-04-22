<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Logo Section -->
            <a class="navbar-brand" href="index.html">
                <img src="<?=URLROOT?>/images/logo/settle-matter.png" alt="settle matter logo">
            </a>

            <!-- Navbar Toggle for Mobile View -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php $current_page = basename($_SERVER['REQUEST_URI'], ".php"); ?>
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page == 'settlematter' ? 'activate' : '' ?> "
                            href="<?=URLROOT?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page == 'polls' ? 'activate' : '' ?> "
                            href="<?=URLROOT?>/polls">Polls</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page == 'articles' ? 'activate' : '' ?>"
                            href="<?=URLROOT?>/articles">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page == 'rewards' ? 'activate' : '' ?>"
                            href="<?=URLROOT?>/rewards">Rewards</a>
                    </li>
                    <li class="nav-item mb-10">
                        <a class="nav-link <?= $current_page == 'faq' ? 'activate' : '' ?>"
                            href="<?=URLROOT?>/pages/faq">FAQs</a>
                    </li>
                    <div class="user-hidden">
                        <?php if (isLoggedIn()): ?>
                        <p><span class="badge badge-primary">Welcome,
                                <?= htmlspecialchars($_SESSION[SESSION_NAMESPACE . 'username']) ?>!</span> <a
                                style="text-decoration: none;" class="btn btn-danger text-white"
                                href="<?= URLROOT ?>/users/logout">Logout</a>
                        </p>

                        <?php else: ?>
                        <a href="<?=URLROOT?>/users/login" class="btn btn-primary sign-up">Sign In</a>
                        <?php endif; ?>
                    </div>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="dashboard.html">Dashboards</a>
                    </li> -->
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="d-none d-lg-block auth">
                <!-- <a href="#" class="btn btn-primary profile">Profile</a> -->

                <?php if (isLoggedIn()): ?>
                <p><span class="badge badge-primary">Welcome,
                        <?= htmlspecialchars($_SESSION[SESSION_NAMESPACE . 'username']) ?>!</span> <a
                        style="text-decoration: none;" class="btn btn-danger text-white"
                        href="<?= URLROOT ?>/users/logout">Logout</a>
                </p>

                <?php else: ?>
                <a href="<?=URLROOT?>/users/login" class="btn btn-primary sign-up">Sign In</a>
                <?php endif; ?>

                <!-- 

                <a href="<?=URLROOT?>/users/login" class="btn btn-primary sign-up">Sign In</a>

                <a href="" style="color: white; text-decoration: none; font-weight: bold"> Hi James Tolu</a> -->
            </div>
        </div>
    </nav>
</header>