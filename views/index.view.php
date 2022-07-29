
<?php require ('views/partials/header.php'); ?>

    <h1>Add Todo</h1>

    <form method="POST" action="/todo">
        <input type="text" name="description" placeholder="Description">
        <input type="submit" value="Add">
    </form>

<?php require ('views/partials/footer.php');?>