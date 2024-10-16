<?php

    $itens = [
        ['image' => './assets/images/image.png', 'alt' => 'Projeto Travelgram', 'title' => 'Travelgram', 'text' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo'],
        ['image' => './assets/images/image-1.png', 'alt' => 'Projeto Página de receita', 'title' => 'Página de receita', 'text' => 'Página com o passo a passo de uma receita para cupcakes'],
        ['image' => './assets/images/image-2.png', 'alt' => 'Projeto Tech News', 'title' => 'Tech News', 'text' => 'Homepage de um portal de notícias sobre a área de tecnologia'],
        ['image' => './assets/images/Thumbnail_Project-04.png', 'alt' => 'Projeto Refund', 'title' => 'Refund', 'text' => 'Um sistema para pedido e acompanhamento de reembolso'],
        ['image' => './assets/images/Thumbnail_Project-06.png', 'alt' => 'Projeto Página de turismo', 'title' => 'Página de turismo', 'text' => 'Página com as principais informações para quem quer viajar para Busan'],
        ['image' => './assets/images/Thumbnail_Project-05.png', 'alt' => 'Projeto Zingen', 'title' => 'Zingen', 'text' => 'Landing Page completa e responsiva de um aplicativo de Karaokê'],
    ];

    foreach($itens as $item):
?>

<div class="group">
    <div class="flex w-[508px] h-[180px] p-3 gap-4 rounded-xl bg-gray-300 group-hover:outline group-hover:outline-2 group-hover:outline-gray-400 duration-100">
        <div class="flex-1 bg-gray-200 rounded-lg">
            <img src="<?=$item['image']?>" alt="<?=$item['alt']?>">
        </div>
        <div class="flex flex-col flex-1 px-1 py-2 gap-6">
            <div class="flex flex-col gap-2">
                <h4 class="font-asap text-title_sm font-bold text-gray-600"><?=$item['title']?></h4>
                <p class="font-maven text-text_sm text-gray-500"><?=$item['text']?></p>
            </div>
            <div class="flex gap-2">
                <?php include('./components/tags-sm.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>