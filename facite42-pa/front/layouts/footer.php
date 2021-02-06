</div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="meuPerfil">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="header">
                    <h2 style="text-align: center;">Informações Pessoais</h2>
                    <p style="text-align: center;">Informações dos Usuários <strong><?= $usuarioSessao->nome ?></strong></p>
                </div>
                <div class="modal-body">
                    <table class="table mt-12">
                        <tbody>
                            <tr>
                                <td>Foto</td>
                                <td>Clique na imagem para alterar</td>
                                <td style="text-align: center;">
                                    <div class="avatar"><a title="Alterar Imagem" href="editar_imagem?acao=alterarImagem&id=<?= $usuarioSessao->id ?>"><img class="avatar-img rounded-circle" src="assets/image/usuario/<?= ($usuarioSessao->imagem != '' && file_exists('assets/image/usuario/' . $usuarioSessao->imagem) ? $usuarioSessao->imagem : 'user.jpg') ?>" alt=""></a></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Usuário</td>
                                <td><strong><?= $usuarioSessao->usuario ?></strong></td>
                                <td style="text-align: center;"><a href="form_usuario?acao=editar&id=<?= $usuarioSessao->id ?>"><i class="fas fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Nome</td>
                                <td><strong><?= $usuarioSessao->nome ?></strong></td>
                                <td style="text-align: center;"><a href="form_usuario?acao=editar&id=<?= $usuarioSessao->id ?>"><i class="fas fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td><strong><?= $usuarioSessao->email ?></strong></td>
                                <td style="text-align: center;"><a href="form_usuario?acao=editar&id=<?= $usuarioSessao->id ?>"><i class="fas fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Gênero</td>
                                <td><strong><?= ($usuarioSessao->genero != 1 ? 'Feminino' : 'Masculino') ?></strong></td>
                                <td style="text-align: center;"><a href="form_usuario?acao=editar&id=<?= $usuarioSessao->id ?>"><i class="fas fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Cargo</td>
                                <td><strong><?= $usuarioSessao->cargo ?></strong></td>
                                <td style="text-align: center;"><a href="form_usuario?acao=editar&id=<?= $usuarioSessao->id ?>"><i class="fas fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Telefone</td>
                                <td><strong><?= $usuarioSessao->telefone ?></strong></td>
                                <td style="text-align: center;"><a href="form_usuario?acao=editar&id=<?= $usuarioSessao->id ?>"><i class="fas fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Data de Nascimento</td>
                                <td><strong><?= $usuarioSessao->nascimento ?></strong></td>
                                <td style="text-align: center;"><a href="form_usuario?acao=editar&id=<?= $usuarioSessao->id ?>"><i class="fas fa-chevron-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Senha</td>
                                <td>Alterar Senha de Usuário</td>
                                <td style="text-align: center;"><a href="form_senha?acao=editarSenha&id=<?= $usuarioSessao->id ?>"><i class="fas fa-chevron-right"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <button style="text-align: center;" type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="assets/js/atlantis.min.js"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="assets/js/setting-demo.js"></script>
<script src="assets/js/demo.js"></script>
<script>
    Circles.create({
        id: 'circles-1',
        radius: 45,
        value: 100,
        maxValue: 100,
        width: 7,
        text: <?= $ttlUser->id ?>,
        colors: ['#f1f1f1', '#FF9E27'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    Circles.create({
        id: 'circles-2',
        radius: 45,
        value: 100,
        maxValue: 100,
        width: 7,
        text: <?= $ttlServico->id ?>,
        colors: ['#f1f1f1', '#2BB930'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    Circles.create({
        id: 'circles-3',
        radius: 45,
        value: 100,
        maxValue: 100,
        width: 7,
        text: <?= $ttlAvaliacao->id  ?>,
        colors: ['#f1f1f1', '#F25961'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    Circles.create({
        id: 'circles-4',
        radius: 45,
        value: 100,
        maxValue: 100,
        width: 7,
        text: 2,
        colors: ['#f1f1f1', '#007bff'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
        type: 'bar',
        data: {
            labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
            datasets: [{
                label: "Total Income",
                backgroundColor: '#ff9e27',
                borderColor: 'rgb(23, 125, 255)',
                data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        display: false //this will remove only the label
                    },
                    gridLines: {
                        drawBorder: false,
                        display: false
                    }
                }],
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        display: false
                    }
                }]
            },
        }
    });

    $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });
</script>

<!-- Owl-Carousel script -->
<script src="assets/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            items: 1,
            margin: 10,
            autoHeight: true
        });
    });
</script>
</body>

</html>