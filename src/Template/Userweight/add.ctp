<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userweight $userweight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('内容') ?></li>
        
        <li><?= $this->Html->link(__('ユーザ一覧'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <?php /*
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userweight'), ['action' => 'index']) ?></li>
        */ ?>
    </ul>
</nav>
<div class="userweight form large-9 medium-8 columns content">
    <?= $this->Form->create($userweight) ?>
    <fieldset>
        <legend><?= __('体重を追加') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users,
            
                'label' => 'ユーザ　ID'
            ]);
            echo $this->Form->control('weight',
            [
                'label' => '体重'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('追加')) ?>
    <?= $this->Form->end() ?>
</div>
