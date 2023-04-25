<?php
    include_once("templates/header.php");

    

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus exercitationem ad eum quo culpa repellat modi doloribus eligendi? Aut obcaecati mollitia nihil optio et velit, consequatur architecto debitis ratione fugiat?
        Pariatur quidem eos ratione architecto cumque assumenda at soluta voluptate aperiam enim illum nam fugit velit, neque reiciendis iste, doloribus dignissimos blanditiis, numquam harum aliquam ea. Ea unde laborum modi.
        Rerum temporibus possimus enim facere repellat dolorem error eveniet, nesciunt reiciendis cumque impedit molestias aliquam hic, doloremque ea, ipsa perspiciatis nihil! Eos illo repellat corporis doloribus, eaque tempore a fuga.
        Accusantium nihil harum, omnis cumque repudiandae perspiciatis dicta distinctio provident ea. Culpa ipsum nisi nulla eaque fugiat cupiditate omnis voluptate tempora itaque exercitationem? Ullam doloribus inventore vero, earum assumenda ea!
        Minus amet cumque magnam eius fugiat quaerat repellendus provident ea inventore. Sed unde magnam porro provident in culpa veritatis vel omnis? Natus officiis libero inventore eos. Voluptas incidunt voluptatibus dolor.
        </p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus exercitationem ad eum quo culpa repellat modi doloribus eligendi? Aut obcaecati mollitia nihil optio et velit, consequatur architecto debitis ratione fugiat?
        Pariatur quidem eos ratione architecto cumque assumenda at soluta voluptate aperiam enim illum nam fugit velit, neque reiciendis iste, doloribus dignissimos blanditiis, numquam harum aliquam ea. Ea unde laborum modi.
        Rerum temporibus possimus enim facere repellat dolorem error eveniet, nesciunt reiciendis cumque impedit molestias aliquam hic, doloremque ea, ipsa perspiciatis nihil! Eos illo repellat corporis doloribus, eaque tempore a fuga.
        Accusantium nihil harum, omnis cumque repudiandae perspiciatis dicta distinctio provident ea. Culpa ipsum nisi nulla eaque fugiat cupiditate omnis voluptate tempora itaque exercitationem? Ullam doloribus inventore vero, earum assumenda ea!
        Minus amet cumque magnam eius fugiat quaerat repellendus provident ea inventore. Sed unde magnam porro provident in culpa veritatis vel omnis? Natus officiis libero inventore eos. Voluptas incidunt voluptatibus dolor.
        </p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tag-list">
                    <?php foreach($currentPost['tags'] as $tag): ?>
                       <li><a href="#"><?=$tag ?></a></li>

                    <?php endforeach; ?>
                    </ul>
                    <h3 id="categories-title">Categorias</h3>
                    <ul class="categories-list">
                         <?php foreach($categories as $category): ?>
                            <li><a href="#"><?=$category ?></a></li>

                         <?php endforeach; ?>
                    </ul>
    </aside>

        
       
    </main>

    

<?php
    include_once("templates/footer.php");
?>