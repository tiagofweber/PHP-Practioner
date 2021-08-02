<?php require('partials/head.php'); ?>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name ?></li>
<?php endforeach; ?>

<h1>Submit your name</h1>

<form action="/names" method="POST">
    <input type="text" name="name"></input>
    <button type="submit">Submit</button>
</form>


<!-- 
    <h1>My Tasks</h1>
    
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul> -->

<?php require('partials/footer.php'); ?>