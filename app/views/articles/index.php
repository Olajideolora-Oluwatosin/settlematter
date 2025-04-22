<?php require APPROOT . '/views/components/header.php'; ?>

<!-- Article container begin -->
<div class="container article-container">
    <div class="article-content">
        <h3>Article</h3>

        <!-- article-post -->
        <div class="container mt-5 article-posts">
            <div class="row align-items-center">
                <!-- Image on Left -->
                <div class="col-md-5 text-center article-img">
                    <img src="<?= URLROOT?>/images/article-image/future-of-tech.jpg" alt="Article Image"
                        class="img-fluid ">
                </div>

                <!-- Content on Right -->
                <div class="col-md-5 article-page-content">
                    <span>Featured</span>
                    <h4 class="fw-bold">Breaking News: The Future of Tech</h4>
                    <p class="text-muted">Technology is evolving at an unprecedented rate, with AI and blockchain
                        leading the
                        way. Stay ahead by exploring the latest updates in the industry.</p>
                    <a href="#" class="btn btn-primary mt-3">Read More <i class="fa fa-arrow-right"></i></a>

                    <!-- Author & Time Section -->
                    <div class="d-flex align-items-center author">
                        <i class="fas fa-user me-2"></i>
                        <div class="author-name">
                            <h6 class="me-3">Salvador D.Grey</h6>
                            <p class="time">5min read</p>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <!-- article post end -->

        <!-- All post section begins -->

        <div class="all-posts">
            <div class="container mt-4">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card shadow-sm articles" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card-body articles-content">
                                <div class="article-image">
                                    <img src="<?= URLROOT?>/images/article-image/rise-of-ai.jpg" alt="image">
                                </div>
                                <div class="article-contents">
                                    <h4>The Rise of Artificial Intelligence in Everyday Life</h4>
                                    <p>Artificial Intelligence (AI) has long been a concept confined to science
                                        fiction, but it is now a rapidly growing field that touches almost every aspect
                                        of our lives.
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
                                    <img src="<?= URLROOT?>/images/article-image/plant-diet.jpg" alt="image">
                                </div>
                                <div class="article-contents">
                                    <h4>The Benefits of a Plant-Based Diet</h4>
                                    <p>n recent years, plant-based diets have become increasingly popular as people seek
                                        to improve their health, reduce their environmental footprint, and embrace more
                                        ethical food choices.
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
                                    <img src="<?= URLROOT?>/images/article-image/personal-brand.png" alt="image">
                                </div>
                                <div class="article-contents">
                                    <h4>How to Build a Personal Brand as a Software Developer</h4>
                                    <p>In the ever-evolving tech industry, standing out as a software developer is more
                                        crucial than ever. Whether you’re looking for a new job, building a freelance
                                        career
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

    </div>
</div>



<!-- footer -->
<?php require APPROOT . '/views/components/footer.php'; ?>