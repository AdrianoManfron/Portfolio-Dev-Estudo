<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/output.css">
    <title>Portfolio-Dev-Estudo-Rocketseat</title>
</head>
<body class="bg-gray-200">
    <header class="w-full min-h-[682px] bg-hero bg-contain bg-center pt-[100px]">
        <div class="flex flex-col max-w-1040 mx-auto gap-20">
            <div class="flex flex-col w-[680px] mx-auto items-center">
                <div class="w-[96px] h-[96px] outline outline-2 mb-14 outline-red rounded-full">
                    <img src="./assets/images/eu-3d.png" alt="avatar" class="object-cover rounded-full">
                </div>
                <div class="flex flex-col text-center gap-5">
                    <div class="flex flex-col gap-2">
                        <h2 class="font-inconsolata text-subtitle text-gray-500">Hello World! Meu nome é <span class="text-red">Adriano Manfron</span> e sou</h2>
                        <h1 class="font-asap text-title_lg text-gray-600 font-bold">Desenvolvedor PHP</h1>
                    </div>
                    <p class="font-maven text-text_sm text-gray-400">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
                </div>
            </div>
            <div class="flex gap-2 w-[680px] mx-auto justify-center items-center">
                <?php include('./components/tags-md.php'); ?>
            </div>
        </div>
    </header>
    <main class="w-full flex flex-col gap-14 px-[120px] pt-[72px] pb-36">
        <div class="max-w-1040 mx-auto text-center">
            <h3 class="font-inconsolata text-subtitle text-red">Meu trabalho</h3>
            <h2 class="font-asap text-title_md font-bold text-gray-600">Veja os projetos em destaque</h2>
        </div>
        <div class="max-w-1040 mx-auto grid grid-cols-2 gap-6">
            <?php include('./components/project-card.php'); ?>
        </div>
    </main>
    <footer class="flex flex-col w-full min-h-[787px] bg-contact bg-contain bg-center px-[120px] pt-32 pb-[200px] justify-center items-center gap-12">
        <div class="flex flex-col w-[420px] text-center gap-2">
            <h3 class="font-inconsolata text-subtitle text-purple">Contato</h3>
            <h2 class="font-asap text-title_md font-bold text-gray-600">Gostou do meu trabalho?</h2>
            <p class="font-maven text-text_md text-gray-500">Entre em contato ou acompanhe as minhas redes sociais!</p>
        </div>
        <div class="flex flex-col w-[400px] gap-4">
            <?php include('./components/social-button.php'); ?>
        </div>
    </footer>
</body>
</html>