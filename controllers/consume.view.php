<li>
    <a href="/">Produce</a>
</li>
<?php foreach ($items as $category=>$item): ?>

    <p><?=$category?> : <?=implode(",",$item)?></p>

<?php endforeach; ?>
