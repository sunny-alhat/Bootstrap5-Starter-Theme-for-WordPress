<!-- Blog Card -->
<div class="col-md-4">
    <div class="card">
        <div class="card-body">

            <!-- image -->
            <img src="<?= the_post_thumbnail_url() ?>" alt="" class="w-100 mb-3 rounded">

            <!-- Blog Name -->
            <h4><?= the_title() ?></h4>

            <!-- Blog excerpt -->
            <p>
                <?= the_excerpt() ?>
            </p>

            <!-- Read more button -->
            <a href="<?= the_permalink() ?>" class="btn btn-primary">Read More</a>

        </div>
    </div>
</div>