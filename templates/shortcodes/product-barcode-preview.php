<iframe
    class="barcode-pereview-item"
    src="" frameborder="0" style="<?php echo esc_attr($style); ?>" scrolling="no"
    data-template="<?php echo esc_attr($preview); ?>"
    data-pid="<?php echo esc_js($productId); ?>"
    data-template-wrapper="<?php echo esc_attr(include UkrSolution\ProductLabelsPrinting\Helpers\Variables::$A4B_PLUGIN_BASE_PATH . "templates/template-preview-iframe.php"); ?>">
</iframe>
