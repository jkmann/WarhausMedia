<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Transaction[]|\Cake\Collection\CollectionInterface $transactions
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactions index large-9 medium-8 columns content">
    <h3><?= __('Transactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('OrderDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SoldBy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PurchasedBy') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= h($transaction->OrderDate) ?></td>
                <td><?= $this->Number->format($transaction->SoldBy) ?></td>
                <td><?= $this->Number->format($transaction->PurchasedBy) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transaction->OrderDate]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transaction->OrderDate]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transaction->OrderDate], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->OrderDate)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
