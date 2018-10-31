<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userweight $userweight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Userweight'), ['action' => 'edit', $userweight->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Userweight'), ['action' => 'delete', $userweight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userweight->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Userweight'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userweight'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userweight view large-9 medium-8 columns content">
    <h3><?= h($userweight->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userweight->has('user') ? $this->Html->link($userweight->user->id, ['controller' => 'Users', 'action' => 'view', $userweight->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userweight->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($userweight->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userweight->created) ?></td>
        </tr>
    </table>
</div>
