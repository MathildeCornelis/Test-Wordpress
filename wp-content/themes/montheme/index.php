<?php get_header() ?>
<!-- <br>
Bonjour tout le monde! : <?php wp_title(); ?> -->

<?php if (have_posts()) : ?>
    <div class="mx-auto max-w-2xl pl-8 lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">The latest articles</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Read our latest articles.</p>
    </div>
    <ul class="flex">
        <?php while (have_posts()) : the_post(); ?>
            <div class="bg-white w-1/4 ">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto  grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <?php the_post_thumbnail('medium') ?>
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500"><?php the_time() ?></time>
                                <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"><?php the_category() ?></a>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        <?php the_title() ?>
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"><?php the_content() ?></p>
                            </div>
                            <div class="relative mt-8 flex items-center gap-x-4">
                                <img src="https://static.vecteezy.com/system/resources/previews/014/194/198/non_2x/avatar-icon-human-a-person-s-badge-social-media-profile-symbol-the-symbol-of-a-person-vector.jpg" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                                <div class="text-sm leading-6">
                                    <p class="font-semibold text-gray-900">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            <?php the_author() ?> - <a href="<?php the_permalink() ?>">Voir plus</a>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </ul>
<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>