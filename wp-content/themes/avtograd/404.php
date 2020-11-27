<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title">Упс! Такой странички у нас не найдено.</h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <button style="margin: 30px; padding: 40px 80px;" class="btn btn-info"><a style="color: #fff; font-size: 22px; font-weight: bold; letter-spacing: 1px;" href="/">Перейти на главную</a></button>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>