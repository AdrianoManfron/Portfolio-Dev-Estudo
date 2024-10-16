<?php

    $itens = [
        ['bg' => 'bg-purple', 'nome' => 'PHP'],
        ['bg' => 'bg-blue', 'nome' => 'CSS'],
        ['bg' => 'bg-red', 'nome' => 'HTML'],
        ['bg' => 'bg-yellow', 'nome' => 'Javascript'],
    ];
  
    foreach($itens as $item):
?>

<button class="<?=$item['bg']?> text-gray-200 text-tag_sm font-bold px-2 py-[2px] rounded-full"><?=$item['nome']?></button>

<?php endforeach; ?>