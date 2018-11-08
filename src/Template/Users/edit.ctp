<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('内容') ?></li>
        <li><?= $this->Form->postLink(
                __('削除'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('本当に削除してもよろしいですか?', $user->id)]
            )
        ?></li>
        <?php /*
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Userinfo'), ['controller' => 'Userinfo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userinfo'), ['controller' => 'Userinfo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userweight'), ['controller' => 'Userweight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userweight'), ['controller' => 'Userweight', 'action' => 'add']) ?></li>
         */ ?>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('ユーザ情報編集') ?></legend>
        <?php
            echo $this->Form->control('username',
            [
                'label' => 'ユーザ名'
            ]);
            echo $this->Form->control('password',
            [
                'label' => 'パスワード'
            ]);
            echo $this->Form->control('role',
            [
                'label' => '権限'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('更新')) ?>
    <?= $this->Form->end() ?>
</div>
