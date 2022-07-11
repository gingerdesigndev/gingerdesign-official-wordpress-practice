<?php
    $id = $_GET['id'];
    $fbPost = null;
    $fbPosts = null;
    if ($id) {
        $fbPost = json_decode(getFBPost($id));
    }
    if (!$fbPost) {
        $fbPosts = json_decode(getFBPosts(9))->data;
    }
    get_header();
?>

<div class="mb-5">
    <div class="container">
        <header class="header-category text-center pt-5">
            <h2 class="mb-4">開業日記 Crafters' Posts</h2>
            <?php if(!$fbPost): ?>
                <p class="mb-0">即時與臉書粉專同步 Sync with our facebook，<br>歡迎追蹤我們！ welcome to follow us。</p>
            <?php endif; ?>
        </header>
        <?php if($fbPost):
            $date = new DateTime($fbPost->created_time);
            $shareCount = 0;
            if ($fbPost->shares->count) $shareCount = $fbPost->shares->count;
        ?>
            <div class="box-news">
                <div class="news-info">
                    <div class="post-date"><?=$date->format('Y-m-d')?></div>
                    <ul class="list-counts">
                        <li>
                            <span class="material-icons">favorite</span>
                            <b><?=$fbPost->likes->summary->total_count?></b>
                        </li>
                        <li>
                            <span class="material-icons">share</span>
                            <b><?=$shareCount?></b>
                        </li>
                        <li>
                            <span class="material-icons">comment</span>
                            <b><?=$fbPost->comments->summary->total_count?></b>
                        </li>
                    </ul>
                </div>
                <div class="mb-3">
                    <img src="<?=$fbPost->full_picture?>" class="w-100">
                </div>
                <ul class="list-tags">
                    <?php foreach($fbPost->message_tags as $tag): ?>
                    <li><?=$tag->name?></li>
                    <?php endforeach; ?>
                </ul>
                <p class="news-message"><?=$fbPost->message?></p>
            </div>
        <?php else: ?>
            <div class="row gx-lg-5 list-news">
                <?php foreach($fbPosts as $post):
                    $date = new DateTime($post->created_time);
                ?>
                    <div class="col-12 col-lg-4 post-text-item mb-5">
                        <p class="post-date mb-1 ms-3"><?=$date->format('Y-m-d')?></p>
                        <div>

                            <a href="/news?id=<?=$post->id?>">
                                <p class="post-excerpt max-eight-lines"><?=$post->message?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php
get_footer();
