<?php require_once 'inc/header.php'; ?>
    <div class="container">
        <h1>Server &amp; File Info</h1>
        <!-- better way to write PHP inside HTML markup -->
        <?php if($server): ?>
            <ul class="list-group">
                <?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <div class="container">
        <h1>Client Info</h1>
        <?php if($client): ?>
            <ul class="list-group">
                <?php foreach($client as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

<?php include 'inc/footer.php'; ?>
