<div class="dones">
    <div class="upper_todo">
        <p class="topic"><?= $dones["createdBy"] ?> is done with:</p>
        <form action="parts/delete.php" method="get">
            <button class="buttons" type="submit" value="your_delete">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </button>
            <input type="hidden" value=" <?= $dones["id"] ?>" name="id">
        </form>
    </div>
    <div class="content"><?= $dones["title"] ?></div>
</div>

<div class="underline"></div>