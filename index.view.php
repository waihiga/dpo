<html>
<body>
<div>

    <?php foreach ($items as $category=>$item): ?>

      <p><?=$category?> : <?=implode(",",$item)?></p>

    <?php endforeach; ?>
</div>
</body>
</html>