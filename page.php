<?php get_header(); ?>
<div class="grid place-items-center h-full">
    <h1 class="text-9xl text-white font-bold tracking-widest c-drop-shadow--blue"><?php the_title(); ?></h1>
    <h1 class="l-sample__title">これはサンプルページ</h1>
    <div class="absolute bottom-1 left-1/2 -translate-x-1/2">
        <p class="mb-4 text-xs text-white tracking-widest c-drop-shadow--blue">Currently in
            <strong><?php echo (IS_VITE_DEVELOPMENT) ? "development" : "production" ?></strong> mode.</p>
    </div>
</div>
<?php get_footer(); ?>
