<h1><?= $title; ?></h1>
<hr>
<p><?= $body; ?></p>
<br>
<p>Date published: <?= $date; ?></p>
<?php if($this->session->logged_in == true && $this->session->access == 1){?>
<div class="btn-group">
    <a href="edit/<?= $id; ?>" class="btn btn-primary">Edit</a>
    <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
</div>
<?php } ?>