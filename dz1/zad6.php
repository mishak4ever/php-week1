<?php ?>

<table style="  border-spacing: 0px 0px; ">
    <?php for ($i = 1; $i <= 9; $i++): ?>
        <tr>
            <?php for ($b = 1; $b <= 9; $b++): ?>
                <td style="text-align: center; border: 1px solid gray; padding: 4px;">
                    <?php if ($i % 2 == 0 && $b % 2 == 0): ?>
                        (<?= ($i * $b) ?>)
                    <?php elseif ($i % 2 != 0 && $b % 2 != 0): ?>
                        [<?= ($i * $b) ?>]
                    <?php else: ?>
                        <?= ($i * $b) ?>
                    <?php endif; ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
