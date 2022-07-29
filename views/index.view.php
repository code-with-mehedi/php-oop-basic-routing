
<?php require ('views/partials/header.php'); ?>

    <h1>Add Todo</h1>

    <form method="POST" action="/todo">
        <input type="text" name="title" placeholder="Task Title">
        <input type="text" name="description" placeholder="Description">
        <input type="hidden" name="completed" value=0>
        <input type="submit" value="Add">
    </form>

<?php require ('views/partials/footer.php');?>