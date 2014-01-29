<fieldset class="<?php echo html_escape($layout); ?>">

<div class="section">
    <?php
        for($i=1;$i<=2;$i++):
            echo exhibit_builder_layout_form_item($i);
        endfor;
    ?>
</div>
<div class="section">
    <?php
        echo exhibit_builder_layout_form_text(1);
    ?>
</div>
</fieldset>
