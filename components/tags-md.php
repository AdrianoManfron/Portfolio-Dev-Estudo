<?php

    $itens = [
        ['bg' => 'bg-green', 'nome' => 'GitHub'],
        ['bg' => 'bg-purple', 'nome' => 'PHP'],
        ['bg' => 'bg-blue', 'nome' => 'CSS'],
        ['bg' => 'bg-red', 'nome' => 'HTML'],
        ['bg' => 'bg-yellow', 'nome' => 'Javascript'],
    ];
  
    foreach($itens as $item):
?>

<button class="<?=$item['bg']?> text-gray-200 text-tag_md font-bold px-3 py-1 rounded-full"><?=$item['nome']?></button>

<?php endforeach; ?>