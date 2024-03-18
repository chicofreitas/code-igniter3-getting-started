<div class="main">
    <?php if($processos): ?>
    <div>
        <ul>
            <?php foreach ($processos as $processo):?>

            <li><?=$processos->name?></li>

            <?php endforeach;?>
        </ul>
    </div>
    <?php else: ?>
        <div>
            <h1>Não há processos cadastrados</h1>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>
    <?php endif; ?>
</div>