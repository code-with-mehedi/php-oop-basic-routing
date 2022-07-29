<?php require ('views/partials/header.php'); ?>

<?php require ('views/partials/nav.php');?>

    <h1>Tasks List</h1>
    <ul class="task-list">
        <?php foreach ($query as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?php echo  $task->description; ?></strike>
                <?php else : ?>
                    <?php echo $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?php require ('views/partials/footer.php');?>