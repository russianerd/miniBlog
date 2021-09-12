<style...>

    <table>
        <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Дата публикации</th>
        </tr>
        <?php

        require "vendor/db.php";

        $posts = mysqli_query($db, "SELECT * FROM `posts`" );
        $posts = mysqli_fetch_all($posts);

        foreach ($posts as $post) {
         ?>
        <tr>
            <td><?= $post[0] ?></td>
            <td><?= $post[1] ?></td>
            <td><?= $post[3] ?></td>
            <td><a href="post.php?id=<?= $post[0] ?>">Открыть пост</a> </td>
            <td><a href="post_edit.php?id=<?= $post[0] ?>">Изменить пост</a></td>
            <td><a href="vendor/delete.php?id=<?= $post[0] ?>">Удалить пост</a></td>
        </tr>
            <?php
        }

        ?>

    </table>



<form action="vendor/create.php" method="post">
<p>Заголовок</p>
    <input type="text" name="title">
    <p>Тело поста</p>
    <textarea name="body"></textarea> <br><br>
    <button type="submit">Опубликовать пост</button>
</form>

