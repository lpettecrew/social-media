$(document).ready(function () {
    var postCount = 3;
    $(".load-more-btn").click(function () {
        postCount += 3;
        $(".feed").load("./includes/php/getPosts.php", {
            postNewCount: postCount
        });
    });

    $('.load-more-btn-user').click(function () {
        postCount += 3;
        $(".feed").load("./includes/php/getUserPosts.php", {
            postNewCount: postCount
        });
    })
});