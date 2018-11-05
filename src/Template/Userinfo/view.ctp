<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userinfo $userinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Userinfo'), ['action' => 'edit', $userinfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Userinfo'), ['action' => 'delete', $userinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userinfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Userinfo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userinfo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userinfo view large-9 medium-8 columns content">
    <h3><?= h($userinfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userinfo->has('user') ? $this->Html->link($userinfo->user->id, ['controller' => 'Users', 'action' => 'view', $userinfo->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userinfo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= $this->Number->format($userinfo->sex) ?></td>
        </tr>
        <tr>
        <!--以下生年月日表記を正しく修正する-->
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= $userinfo->birthday ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hight') ?></th>
            <td><?= $this->Number->format($userinfo->hight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userinfo->created) ?></td>
        </tr>
    </table>
</div>
