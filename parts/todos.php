<div class="todos">
    <div class="upper_todo">
        <p class="topic">TODO for <?= $todos["createdBy"] ?> </p>
        <div class="check">
            <form action="parts/check.php" method="get">
                <button class="buttons" type="submit" value="your_check">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </button>
                <input type="hidden" value=" <?= $todos["id"] ?> </inpu>" name="id">
            </form>
            <form action="parts/delete.php" method="get">
                <button class="buttons" type="submit" value="your_delete">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
                <input type="hidden" value=" <?= $todos["id"] ?></inpu>" name="id">
            </form>
        </div>
    </div>
    <div class="content"> <?= $todos["title"] ?> </div>
</div>

<div class="underline"></div>