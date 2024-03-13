<?php
// Load blog posts from a file
$blogPosts = file_get_contents('blog-posts.txt');
$blogPostsArray = explode("\n\n", $blogPosts);

// Display blog posts
foreach ($blogPostsArray as $post) {
    list($title, $content) = explode("\n", $post);
    echo '<div class="blog-post">';
    echo '<h3>' . $title . '</h3>';
    echo '<p>' . $content . '</p>';
    echo '</div>';
}
?
