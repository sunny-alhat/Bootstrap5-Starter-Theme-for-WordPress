<div class="container">

    <!-- Image -->
    <img src="<?= the_post_thumbnail_url('thumbnail') ?>" alt="" class="w-100 mb-3">

    <!-- Meta Data -->
    <p><?= the_date() ?> | <?= the_tags() ?> | <?= comments_number() ?></p>

    <!-- Article Title -->
    <h1><?= the_title() ?></h1>

    <!-- Article Content -->
    <div>
        <?= the_content() ?>
    </div>

</div>