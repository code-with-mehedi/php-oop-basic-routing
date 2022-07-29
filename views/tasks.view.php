<?php require ('views/partials/header.php'); ?>

    <h1>Tasks List</h1>
    <ul class="task-list">
        <?php foreach ($query as $task) : ?>

            <li>
                <?php if ($task->completed) : ?>
                    <strike><b><?php echo $task->title; ?>:</b><?php echo  $task->description; ?></strike>
                <?php else : ?>
                  <b> <?php echo $task->title; ?>: </b>  <?php echo $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?php require ('views/partials/footer.php');?>