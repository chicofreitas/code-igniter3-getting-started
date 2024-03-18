<?php
if ($user):
?>
    <div class="px-4 py-6 bg-gray-100 border border-gray-300 rounded">
        <?=$user->name?>
    </div>
<?php else: ?>
    <div class="bg-gray-200 border border-gray-400 rounded">
        Não há usuários cadastrados!
    </div>
<?php
endif;
?>