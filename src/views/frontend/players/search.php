<?php
/** @var $dataProvider \yii\data\ActiveDataProvider*/
?>
    <h1>Found Players</h1>

<?php
echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
    'itemView' => '_players_item',
    'layout' => '<div class="d-flex">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
])

?>