<!-- To get the author name and date of a post in WordPress, you can use the the_author() and the_date() template tags. These template tags can be used in your theme's single post template file (single.php) or in a post loop.

Here is an example of how you can use these template tags in a post loop: -->

<!-- Copy code -->
<?php while (have_posts()) : the_post(); ?>
    <div class="post-info">
        <p class="author-name">Written by <?php the_author(); ?></p>
        <p class="post-date"><?php the_date(); ?></p>
    </div>
<?php endwhile; ?>

<!-- This will display the author name and date for each post in the loop.

You can also use the get_the_author() and get_the_date() functions to retrieve the author name and date as a string, which you can then use in your own custom output. For example:

Copy code -->
<?php
$author_name = get_the_author();
$post_date = get_the_date();

echo '<div class="post-info">';
echo '<p class="author-name">Written by ' . $author_name . '</p>';
echo '<p class="post-date">' . $post_date . '</p>';
echo '</div>';

?>

// You can also use the post_author and post_date database columns to retrieve the author and date information for a specific post. You can use the get_post_field() function to retrieve these values:

// Copy code

<?php

$author_id = get_post_field('post_author', $post_id);
$author_name = get_the_author_meta('display_name', $author_id);
$post_date = get_post_field('post_date', $post_id);
?>

<!-- This will retrieve the author name and date for the post with the ID $post_id. -->