<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('内容') ?></li>
        <li><?= $this->Html->link(__('ユーザ一覧'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ユーザ情報一覧'), ['controller' => 'Userinfo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ユーザ情報を追加'), ['controller' => 'Userinfo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('体重一覧'), ['controller' => 'Userweight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('新規体重を入力'), ['controller' => 'Userweight', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('新規ユーザを追加') ?></legend>
        <?php
            echo $this->Form->control('username',
            [
                'label' => '名前'
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
    <?= $this->Form->button(__('追加する')) ?>
    <?= $this->Form->end() ?>
</div>
