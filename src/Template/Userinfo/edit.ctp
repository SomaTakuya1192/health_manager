<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userinfo $userinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('内容') ?></li>
        <li><?= $this->Form->postLink(
                __('削除'),
                ['action' => 'delete', $userinfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userinfo->id)]
            )
        ?></li>
        <hr>
        <?php /*
        <li><?= $this->Html->link(__('List Userinfo'), ['action' => 'index']) ?></li>
        */ ?>
        <li><?= $this->Html->link(__('ユーザ一覧'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <?php /*
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        */ ?>
    </ul>
</nav>
<div class="userinfo form large-9 medium-8 columns content">
    <?= $this->Form->create($userinfo) ?>
    <fieldset>
        <legend><?= __('ユーザ情報　編集') ?></legend>

        <!--ユーザIDではなく名前を上にしたいよね-->
        <?php
            echo $this->Form->control('ユーザ　ID', ['options' => $users]);
            
            $options = [
                '1' => '男性',
                '2' => '女性',
                '3' => 'その他'
            ];
            echo $this->Form->radio('sex', $options,
            [
                'label' => '性別'
            ]);
            echo $this->Form->control('birthday',
            [
                'label' => '生年月日',
                'type' => 'date',
                'dateFormat' => 'YMD',
                'monthNames' => false,
                'maxYear' => date('Y'),
                'minYear' => date('Y') - 90,
            ]);

          
            echo $this->Form->control('hight',
            [
                'label' => '身長'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('更新')) ?>
    <?= $this->Form->end() ?>
</div>
