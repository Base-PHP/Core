<?php if ($paginator['paginator']->hasPages()): ?>
    <ul class="pagination">
        <?php if ($paginator['paginator']->onFirstPage()): ?>
            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>

        <?php else: ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo $uri . $paginator['paginator']->previousPageUrl(); ?>" rel="prev">&laquo;</a>
            </li>
        <?php endif;?>

        <?php foreach ($paginator['elements'] as $element): ?>

            <?php if (is_string($element)): ?>
                <li class="page-item disabled">
                    <span class="page-link"><?php echo $element; ?></span>
                </li>
            <?php endif;?>

            <?php if (is_array($element)): ?>
                <?php foreach ($element as $page => $url): ?>
                    <?php if ($page == $paginator['paginator']->currentPage()): ?>
                        <li class="page-item active">
                            <span class="page-link"><?php echo $page; ?></span>
                        </li>

                    <?php else: ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo $uri . $url; ?>">
                                <?php echo $page; ?>
                            </a>
                        </li>
                    <?php endif;?>

                <?php endforeach;?>

            <?php endif;?>

        <?php endforeach;?>

        <?php if ($paginator['paginator']->hasMorePages()): ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo $uri . $paginator['paginator']->nextPageUrl(); ?>" rel="next">
                    &raquo;
                </a>
            </li>

        <?php else: ?>
            <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
        <?php endif;?>
    </ul>

<?php endif;?>
