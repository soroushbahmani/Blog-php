<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/head-tag.php"));
?>

<section class="content">
    <section class="container">
        <main class="main">
            <section class="main-crypto-mining-news">
                <h2 class="title"><?php echo $category['name']; ?></h2>
                <div class="row">
                    <?php foreach ($articles as $article) { ?>

                        <div class="col-lg-5 col-md-10 col-12 mx-auto my-4">
                            <div><img width="100%" src="http://localhost/blog/<?php echo $article['image']; ?>" alt=""></div>
                            <h3 class="text-dark pt-3">
                                <a style="font-size: inherit; font-weight: bolder;" class="text-dark" href="http://localhost/blog/show-article/<?php echo $article['id']; ?>"><?php echo $article['title'] ?></a>
                            </h3>
                            <div class="d-flex">by <b><?php echo $article['username']; ?></b>&nbsp; <div class="text-muted"><?php echo date("M d, Y", strtotime($article['created_at'])); ?></div> &nbsp; <span class="fas fa-comments text-warning"> <span class="text-dark"><?php echo $article['view']; ?></span></span> &nbsp;<span class="fas fa-bolt text-warning"> <span class="text-dark"> <?php echo $article['comments_count']; ?></span></span></div>
                        </div>
                    <?php } ?>
                </div>
                <section class="clear-fix"></section>
            </section>
            <!--end of main crypto mining news-->
        </main>
        <!--end of main-->

        <?php
        require_once(realpath(dirname(__FILE__) . "/../app/layouts/sidebar.php"));
        ?>
        <section class="clear-fix"></section>
    </section>
    <!--end of container-->
</section>
<!--end of content-->
</section>
<!--end of first app section-->



<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/footer.php"));
?>