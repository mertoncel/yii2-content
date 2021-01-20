<?php

/** @var $model \mertoncel\content\models\Players*/
?>

<div class="card m-3"  style="width: 14rem;">
    <div class="card-bod p-2">
        <h5 class="card-title"><?php echo $model->player_name?></h5>
        <p class="text-muted m-0"><?php echo $model->player_team?></p>
        <p class="text-muted m-0"><?php echo $model->player_age?></p>
        <p class="text-muted m-0"><?php echo $model->player_position?></p>
        <a href="#" class="btn btn-primary">Details</a>
    </div>
</div>