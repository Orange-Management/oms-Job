<?php
/**
 * Orange Management
 *
 * PHP Version 7.1
 *
 * @category   TBD
 * @package    TBD
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
/**
 * @var \phpOMS\Views\View $this
 */
$jobs = $this->getData('jobs');

echo $this->getData('nav')->render(); ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box wf-100">
            <table class="table red">
                <caption><?= $this->getHtml('Job') ?></caption>
                <thead>
                <td><?= $this->getHtml('Status') ?>
                <td><?= $this->getHtml('Last') ?>
                <td><?= $this->getHtml('Next') ?>
                <td class="full"><?= $this->getHtml('Title') ?>
                <td><?= $this->getHtml('Run') ?>
                <tfoot>
                <tbody>
                <?php $c = 0; foreach($jobs as $key => $job) : $c++;
                $url = \phpOMS\Uri\UriFactory::build('{/base}/{/lang}/backend/admin/job/single?{?}&id=' . $job->getId()); ?>
                <tr>
                    <td><a href="<?= $url; ?>"><?= htmlspecialchars($job->getStatus(), ENT_COMPAT, 'utf-8'); ?></a>
                    <td><a href="<?= $url; ?>"><?= htmlspecialchars(!empty($job->getLastRunTime()) ? $job->getLastRunTime()->format('Y-m-d') : '', ENT_COMPAT, 'utf-8'); ?></a>
                    <td><a href="<?= $url; ?>"><?= htmlspecialchars(!empty($job->getNextRunTime()) ? $job->getNextRunTime()->format('Y-m-d') : '', ENT_COMPAT, 'utf-8'); ?></a>
                    <td><a href="<?= $url; ?>"><?= htmlspecialchars(trim($job->getId()), ENT_COMPAT, 'utf-8'); ?></a>
                    <td><a href="<?= $url; ?>"><?= htmlspecialchars($job->getRun(), ENT_COMPAT, 'utf-8'); ?></a>
                        <?php endforeach; if($c == 0) : ?>
                <tr><td colspan="6" class="empty"><?= $this->getHtml('Empty', 0, 0); ?>
                        <?php endif; ?>
            </table>
        </div>
    </div>
</div>