<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('内容') ?></li>
        <li><?= $this->Html->link(__('ユーザ情報編集'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('ユーザ情報削除'), ['action' => 'delete', $user->id], ['confirm' => __('本当に削除してもよろしいですか?', $user->id)]) ?> </li>
        <hr>
        <?php /*
        <li><?= $this->Html->link(__('新規ユーザ追加'), ['action' => 'add']) ?> </li>
        */ ?>
        <li><?= $this->Html->link(__('ユーザ一覧'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('新規ユーザ情報入力'), ['controller' => 'Userinfo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('新規体重情報入力'), ['controller' => 'Userweight', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->username) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('権限') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
     
    </table>
    <div class="related">
        <h4><?= __('ユーザ情報') ?></h4>　<!--ユーザ情報-->
        <?php if (!empty($user->userinfo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('性別') ?></th>
                <th scope="col"><?= __('生年月日') ?></th>
                <th scope="col"><?= __('身長') ?></th>
                <th scope="col"><?= __('更新日') ?></th>
                <th scope="col" class="actions"><?= __('編集') ?></th>
            </tr>
            <?php foreach ($user->userinfo as $userinfo): ?>
            <tr>
                <td><!--性別表記設定-->
                    <?php if(h($userinfo->sex)===1): ?>
                        <span>男</span>
                    <?php elseif(h($userinfo->sex)===2): ?>
                        <span>女</span>
                    <?php else: ?>
                        <span>その他</span>
                    <?php endif;?>    
                </td>
                
                <td><!--生年月日表記設定-->
                    <?= h($userinfo->birthday) ?>
                </td>

                <td><?= h($userinfo->hight) ?> cm</td>
                
                <td><!--更新日表記設定-->
                    <?= h($userinfo->created) ?>
                
                </td>
                
                <td class="actions">
                <?php /*
                    <?= $this->Html->link(__('詳細/'), ['controller' => 'Userinfo', 'action' => 'view', $userinfo->id]) ?>
                */?>
                    <?= $this->Html->link(__('編集/'), ['controller' => 'Userinfo', 'action' => 'edit', $userinfo->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['controller' => 'Userinfo', 'action' => 'delete', $userinfo->id], ['confirm' => __('本当に削除してもよろしいですか?', $userinfo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('体重一覧') ?></h4> <!--ここにページネーションを入れたい-->
        <?php if (!empty($user->userweight)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('体重') ?></th>
                <th scope="col"><?= __('測定日') ?></th>
                <th scope="col" class="actions"><?= __('編集') ?></th>
            </tr>
            <?php foreach ($user->userweight as $userweight): ?>
            <tr>
                <td><?= h($userweight->weight) ?> Kg</td>
                <td><?= h($userweight->created) ?></td>
                <td class="actions">
                    <?php /*
                    <?= $this->Html->link(__('表示/'), ['controller' => 'Userweight', 'action' => 'view', $userweight->id]) ?>
                    */?>
                    <?= $this->Html->link(__('編集/'), ['controller' => 'Userweight', 'action' => 'edit', $userweight->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['controller' => 'Userweight', 'action' => 'delete', $userweight->id], ['confirm' => __('本当に削除してもよろしいですか?', $userweight->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>


        

        <!--以下ページネーター-->
        <?php /*
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('最初')) ?>
                <?= $this->Paginator->prev('< ' . __('戻る')) ?>
                <?= $this->Paginator->next(__('次へ') . ' >') ?>
                <?= $this->Paginator->last(__('最後') . ' >>') ?>
            </ul>
        </div>
        */?>
    </div>
</div>