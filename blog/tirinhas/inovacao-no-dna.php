<?php

$pageTitle = 'Inovação no DNA';
$pageDescription = 'É muito comum, nos corredores corporativos, ouvir alguém defendendo que a sua empresa é inovadora, mesmo que não tenha absolutamente nenhuma inovação para mostrar.';
include '../../components/head.php';

?>

<!doctype html>
<html lang="pt-br">

<body>
    <?php include '../../components/nav.php'; ?>
    <div class="blog-post">
        <div class="blog-post__container">
            <div class="blog-post__header">
                <div class="blog-post__date">7 de junho de 2024</div>
                <h2>Tirinhas</h2>
                <h1>Inovação no DNA</h1>
            </div>
            <div class="blog-post__tirinha">
                <div class="blog-post__quadrinho"><img src="/assets/images/blog/inovacao-no-dna-1.jpg" alt="Inovação no DNA"></div>
                <div class="blog-post__quadrinho"><img src="/assets/images/blog/inovacao-no-dna-2.jpg" alt="Inovação no DNA"></div>
                <div class="blog-post__quadrinho"><img src="/assets/images/blog/inovacao-no-dna-3.jpg" alt="Inovação no DNA"></div>
            </div>
            <div class="blog-post__area">
                <div class="blog-post__content">
                    <p>Esse foi um diálogo que eu presenciei, em primeira mão.</p>
                    <p>Provavelmente, não existe nenhuma empresa no mundo sincera o suficiente para admitir que não é inovadora. Se perguntado, qualquer executivo dirá que a sua empresa é inovadora.</p>
                    <p>E algum funcionário desavisado sempre pode se perguntar: Onde está a tal da inovação a respeito da qual os executivos tanto falam?</p>
                    <p>O problema com esta arrogância corporativa é que, se uma empresa não admite que não é inovadora, ela não pode propor uma mudança para tornar-se inovadora, porque isso revelaria a todos que, na verdade, ela não era inovadora antes.</p>
                </div>
                <div class="blog-post__extras">
                </div>
            </div>
        </div>
    </div>
    <?php include '../../components/footer.php'; ?>
    <script src="/assets/scripts/nav.js"></script>
    <script src="../../assets/scripts/scripts.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>