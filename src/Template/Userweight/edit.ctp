<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userweight $userweight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('内容') ?></li>
        <li><?= $this->Form->postLink(
                __('削除'),
                ['action' => 'delete', $userweight->id],
                ['confirm' => __('本当に削除してもよろしいですか?', $userweight->id)]
            )
        ?></li>
        <?php /*
        <li><?= $this->Html->link(__('List Userweight'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        */ ?>
    </ul>
</nav>
<div class="userweight form large-9 medium-8 columns content">
    <?= $this->Form->create($userweight) ?>
    <fieldset>
        <legend><?= __('体重の編集') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users,
            
                'label' => 'ユーザ ID'
            ]);
            echo $this->Form->control('weight',
            [
                'label' => '体重'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('更新')) ?>
    <?= $this->Form->end() ?>
</div>
