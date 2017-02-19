<?php
require "includes/config.php"
?>

<header id="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top__logo">
                <h1><?php echo $config['title'];?></h1>
            </div>
            <nav class="header__top__menu">
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="about_me.php">Обо мне</a></li>
                    <li><a href="<?php echo $config['vk_url'];?>">Я Вконтакте</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <?php
        $categories = mysqli_query($connection, "SELECT * FROM `articles_categories`");


        /*$categories_arr = array();
        $categories_q = mysqli_query($connection, "SELECT * FROM `articles_categories`");
        while ( $cat = mysqli_fetch_assoc($categories_q)) {

            $categories_arr[] = $cat;
        }*/


    ?>
    <div class="header__bottom">
        <div class="container">
            <nav>
                <ul>
                    <?php while ( $cat = mysqli_fetch_assoc($categories)){
                    ?>

                    <li><a href="/articles.php?categorie=<?php echo $cat['id']; ?>"><?php echo $cat['title']?></a></li>

                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>