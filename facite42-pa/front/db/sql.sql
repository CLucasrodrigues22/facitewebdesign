
CREATE TABLE `avaliacao` (
  `id` int NOT NULL,
  `cliente` varchar(80) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL
);

INSERT INTO `avaliacao` (`id`, `cliente`, `empresa`, `imagem`, `descricao`) VALUES
(12, 'teste', 'rteste', 'josy9c4d10b978adf0a1258616d1c99757e0.png', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'),
(13, 'teste2', 'rtstd', 'IMG_20200910_104907_7293a0469d8aa849dc8a370ee9dd0a0126b.png', ' Ipsum has been the industry\'s standard dummy text ever since the 1500s, ');


CREATE TABLE `faq` (
  `id` int NOT NULL,
  `pergunta` varchar(100) NOT NULL,
  `resposta` varchar(1000) NOT NULL
);


CREATE TABLE `imgLogo` (
  `id` int NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `id_logo` int NOT NULL
);


CREATE TABLE `logos` (
  `id` int NOT NULL,
  `cliente` varchar(80) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `lancamento` date DEFAULT NULL,
  `direcao` varchar(80) NOT NULL,
  `servico` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `imagem` varchar(100) NOT NULL
);



CREATE TABLE `servico` (
  `id` int NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `imagem` varchar(100) NOT NULL
);



INSERT INTO `servico` (`id`, `titulo`, `descricao`, `imagem`) VALUES
(13, 'Criação de Sites', 'Site institucional, hotsite, blog pessoal ou corporativo? precisa de algum desses? Conte conosco para esse proximo passo em seu negócio.', 'criacaodesite86b4e0fd8151b4a1d65be331588c21125af48ab43a2b958ad817bb384d93a890.png'),
(14, 'Sites em WordPress', 'Tenha seu seu site, blog e portal web em totalmente em WordPress, com facil gerenciamento de conteudo e otimizado para buscas no Google.', 'erro6ea83c8d42d43c3ead358fddfd84b02fdbf20788a88cb58993532067d0b7a6fe.png'),
(15, 'Loja virtual', 'Tenha uma interface elaborada para a realização de vendas online, totalmente completa com integração aos correios, controle de estoque e muito mais.', 'comercio-eletronico4c5fcf5b8f4c90048c4629a920a9853581ce69c05c9b292b22b7c0723f1bfa34.png'),
(16, 'Identidade Visual', 'Toda marca precisa ter sua propria identidade, com um design unico e definido. Ter uma identidade visual é essencial para a asserção da sua marca e todas as midias.', 'ideia874edfb60fb83db6ee882fd250ce844b1130088f210d9f4e4da7878eb9f0a5b3.png');



CREATE TABLE `sites` (
  `id` int NOT NULL,
  `nomeSite` varchar(50) NOT NULL,
  `lancamento` date DEFAULT NULL,
  `link` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `categoria` varchar(50) NOT NULL
);



INSERT INTO `sites` (`id`, `nomeSite`, `lancamento`, `link`, `imagem`, `categoria`) VALUES
(1, 'Art\'s Depilação & Estética', '2020-12-08', 'https://artsdepilacaoeestetica.com.br/', 'artsdepilacao00606e0c87ea35ae593def8e5dc433d157ba2189dc760594c6f165a8b6e037c4.png', 'Saúde/Beleza'),
(5, 'ds', '2020-12-27', 'dsdsd', 'tessted9d13b868d479e0897970206e4f7ae45.png', 'ddsds');



CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `genero` int NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `senha` varchar(250) NOT NULL,
  `imagem` varchar(100) NOT NULL
);



INSERT INTO `usuario` (`id`, `nome`, `email`, `genero`, `usuario`, `cargo`, `telefone`, `nascimento`, `senha`, `imagem`) VALUES
(4, 'Lucas Rodrigues ', 'c.lucasrodrigues22@gmail.com', 1, 'lucas.cardoso', 'Full-Stack Developer', '(61) 99698-4896', '2000-09-22', '06c8098c953242161c69a1e5c7862f16', 'IMG_20200910_104907_72940c926280244303d2edd7e1bb8bb7184.png'),
(7, 'Daniel Rodrigues', 'k.elson141@gmail.com', 1, 'k.elson141', 'Web Designer', '(61) 99234-5024', '1995-07-25', '81dc9bdb52d04dc20036dbd8313ed055', 'ppcaeda6541df21bcbdc1e7b9be1dbafaa.png');


ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgLogo`
--
ALTER TABLE `imgLogo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fk_logo` (`id_logo`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `imgLogo`
--
ALTER TABLE `imgLogo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imgLogo`
--
ALTER TABLE `imgLogo`
  ADD CONSTRAINT `id_fk_logo` FOREIGN KEY (`id_logo`) REFERENCES `logos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
