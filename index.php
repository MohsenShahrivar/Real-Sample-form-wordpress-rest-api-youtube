<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<style>
    .footer-nav-widgets-wrapper, header#site-header, footer#site-footer {
        display: none;
    }
</style>

<main id="site-content" role="main">

    <div style="display: flex; flex-wrap: wrap; max-width: 500px; margin: 60px auto;">

        <h4>عدد های خود را وارد کنید تا جمع آنها نمایش داده شود</h4>

        <input id="first_number" style="display: inline-flex" type="number">
        <input id="second_number" style="display: inline-flex" type="number">

        <button id="send" type="button">Send</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>

       jQuery(document).ready(function ($) {

            $('#send').click( function () {

                let first_number = $('#first_number').val();
                let second_number = $('#second_number').val();

                let request_url = 'http://localhost/wp-dashboard/wp-json/calc/operation?first_number=' + first_number + '&second_number=' + second_number;

                $.get( request_url, function(data, status){
                    alert("Response/Sum Value: " + data + "\nStatus: " + status);
                });

            });

        });

    </script>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
