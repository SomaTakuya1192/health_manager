<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userinfo $userinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('内容') ?></li>
        <li><?= $this->Html->link(__('ユーザ情報一覧'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ユーザ一覧'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('新規ユーザ追加'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userinfo form large-9 medium-8 columns content">
    <?= $this->Form->create($userinfo) ?>
    <fieldset>
        <legend><?= __('ユーザ情報を追加') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users,
                'label' => 'ユーザID'
            ]);
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
                'label' => '生年月日'
            ]);
            echo $this->Form->control('hight',
            [
                'label' => '身長'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('ユーザ情報を更新する')) ?>
    <?= $this->Form->end() ?>
</div>
