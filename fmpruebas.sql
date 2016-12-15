
CREATE TABLE `actores` (
  `ID_CLIENTE` varchar(255) NOT NULL,
  `ID_USUARIO` varchar(100) DEFAULT NULL,
  `N_CLIENTE` varchar(255) DEFAULT NULL,
  `RUC` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_cabecera`
--

CREATE TABLE `empresa_cabecera` (
  `S_BVDEP_ID_NUMBER` varchar(255) NOT NULL,
  `ID_SOURCE` int(11) DEFAULT NULL,
  `S_NAME` text,
  `S_ISOCOUNTRY_INC` text,
  `S_LONGBUSDESC` text,
  `S_TRADEDES` text,
  `S_SIC` text,
  `S_DATEINC` date DEFAULT NULL,
  `S_URL` text,
  `S_DATE_UPDATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa_cabecera`
--

INSERT INTO `empresa_cabecera` (`S_BVDEP_ID_NUMBER`, `ID_SOURCE`, `S_NAME`, `S_ISOCOUNTRY_INC`, `S_LONGBUSDESC`, `S_TRADEDES`, `S_SIC`, `S_DATEINC`, `S_URL`, `S_DATE_UPDATE`) VALUES
('1094\r\n', 1, 'Aceto Corp -GV\r\n', 'USA\r\n', 'Aceto Corporation, together with its subsidiaries, sources, markets, sells, and distributes pharmaceutical intermediates and active ingredients, finished dosage form generics, nutraceutical products, agricultural protection products, and specialty chemicals. The company operates in three segments: Human Health, Pharmaceutical Ingredients, and Performance Chemicals. The Human Health segment supplies raw materials used in the production of nutritional and packaged dietary supplements, including vitamins, amino acids, iron compounds, and bio chemicals used in pharmaceutical and nutritional preparations. It markets and distributes its generic prescription and over the counter pharmaceutical products to wholesalers, chain drug stores, distributors, and mass market merchandisers. The Pharmaceutical Ingredients segment offers active pharmaceutical ingredients and pharmaceutical intermediates to various generic drug companies.\r\n', 'Aceto Corporation, together with its subsidiaries, sources, markets, sells, and distributes pharmaceutical intermediates and active ingredients, finished dosage form generics, nutraceutical products, agricultural protection products, and specialty chemicals. The company operates in three segments: Human Health, Pharmaceutical Ingredients, and Performance Chemicals. The Human Health segment supplies raw materials used in the production of nutritional and packaged dietary supplements, including vitamins, amino acids, iron compounds, and bio chemicals used in pharmaceutical and nutritional preparations. It markets and distributes its generic prescription and over the counter pharmaceutical products to wholesalers, chain drug stores, distributors, and mass market merchandisers. The Pharmaceutical Ingredients segment offers active pharmaceutical ingredients and pharmaceutical intermediates to various generic drug companies.\r\n', '5160\r\n', NULL, 'www.aceto.com\r\n', '2016-12-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_detalle`
--

CREATE TABLE `empresa_detalle` (
  `S_BVDEP_ID_NUMBER` varchar(255) NOT NULL,
  `S_ADV_EXP` decimal(8,8) DEFAULT NULL,
  `S_AMORT` decimal(8,8) DEFAULT NULL,
  `S_AP` decimal(8,8) DEFAULT NULL,
  `S_AR` decimal(8,8) DEFAULT NULL,
  `S_AR_TRADE` decimal(8,8) DEFAULT NULL,
  `S_CA_OTHER` decimal(8,8) DEFAULT NULL,
  `S_CASH_STI` decimal(8,8) DEFAULT NULL,
  `S_CL_OTHER` decimal(8,8) DEFAULT NULL,
  `S_COGS_IMPORT` decimal(8,8) DEFAULT NULL,
  `S_DA_IS` decimal(8,8) DEFAULT NULL,
  `S_DCL` decimal(8,8) DEFAULT NULL,
  `S_FISCYEAR` decimal(8,8) DEFAULT NULL,
  `S_GOODWILL` decimal(8,8) DEFAULT NULL,
  `S_IEQ` decimal(8,8) DEFAULT NULL,
  `S_ININC_TOT` decimal(8,8) DEFAULT NULL,
  `S_INT` decimal(8,8) DEFAULT NULL,
  `S_INT_OTHER` decimal(8,8) DEFAULT NULL,
  `S_INTEXP` decimal(8,8) DEFAULT NULL,
  `S_INV` decimal(8,8) DEFAULT NULL,
  `S_IOM` decimal(8,8) DEFAULT NULL,
  `S_ISOCURRENCY` varchar(10) DEFAULT NULL,
  `S_IT` decimal(8,8) DEFAULT NULL,
  `S_IT_PAYABLE` decimal(8,8) DEFAULT NULL,
  `S_LIFOR` decimal(8,8) DEFAULT NULL,
  `S_LTD` decimal(8,8) DEFAULT NULL,
  `S_MONTHENDYH` decimal(8,8) DEFAULT NULL,
  `S_NON_OPINIC` decimal(8,8) DEFAULT NULL,
  `S_OA` decimal(8,8) DEFAULT NULL,
  `S_OL` decimal(8,8) DEFAULT NULL,
  `S_OP_IMPORT` decimal(8,8) DEFAULT NULL,
  `S_PENSION_PERIODCOST` decimal(8,8) DEFAULT NULL,
  `S_PENSION_SERVCOST` decimal(8,8) DEFAULT NULL,
  `S_POSTR_PERIODCOST` decimal(8,8) DEFAULT NULL,
  `S_POSTR_SERVCOST` decimal(8,8) DEFAULT NULL,
  `S_PPE_NET` decimal(8,8) DEFAULT NULL,
  `S_RD` decimal(8,8) DEFAULT NULL,
  `S_REC_Z_RATE` decimal(8,8) DEFAULT NULL,
  `S_SE` decimal(8,8) DEFAULT NULL,
  `S_SGA_IMPORT` decimal(8,8) DEFAULT NULL,
  `S_SPI` decimal(8,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa_detalle`
--

INSERT INTO `empresa_detalle` (`S_BVDEP_ID_NUMBER`, `S_ADV_EXP`, `S_AMORT`, `S_AP`, `S_AR`, `S_AR_TRADE`, `S_CA_OTHER`, `S_CASH_STI`, `S_CL_OTHER`, `S_COGS_IMPORT`, `S_DA_IS`, `S_DCL`, `S_FISCYEAR`, `S_GOODWILL`, `S_IEQ`, `S_ININC_TOT`, `S_INT`, `S_INT_OTHER`, `S_INTEXP`, `S_INV`, `S_IOM`, `S_ISOCURRENCY`, `S_IT`, `S_IT_PAYABLE`, `S_LIFOR`, `S_LTD`, `S_MONTHENDYH`, `S_NON_OPINIC`, `S_OA`, `S_OL`, `S_OP_IMPORT`, `S_PENSION_PERIODCOST`, `S_PENSION_SERVCOST`, `S_POSTR_PERIODCOST`, `S_POSTR_SERVCOST`, `S_PPE_NET`, `S_RD`, `S_REC_Z_RATE`, `S_SE`, `S_SGA_IMPORT`, `S_SPI`) VALUES
('1094\r\n', NULL, '0.99999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1094\r\n', NULL, '0.99999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio`
--

CREATE TABLE `estudio` (
  `ID_ESTUDIO` int(11) NOT NULL,
  `ID_TIPO` int(11) DEFAULT NULL,
  `ID_USUARIO` varchar(100) DEFAULT NULL,
  `ID_CLIENTE` varchar(255) DEFAULT NULL,
  `ID_SOURCE` int(11) DEFAULT NULL,
  `NUM_COM_COMP` int(11) DEFAULT NULL,
  `FISCALYEAR` decimal(8,0) DEFAULT NULL,
  `FECHA_INI` date DEFAULT NULL,
  `FECHA_FIN` date DEFAULT NULL,
  `ANIOS_ESTUDIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio_detalle`
--

CREATE TABLE `estudio_detalle` (
  `E_BVDEP_ID_NUMBER` varchar(255) NOT NULL,
  `E_ADV_EXP` decimal(8,8) DEFAULT NULL,
  `E_AMORT` decimal(8,8) DEFAULT NULL,
  `E_AP` decimal(8,8) DEFAULT NULL,
  `E_AR` decimal(8,8) DEFAULT NULL,
  `E_AR_TRADE` decimal(8,8) DEFAULT NULL,
  `E_CA_OTHER` decimal(8,8) DEFAULT NULL,
  `E_CASH_STI` decimal(8,8) DEFAULT NULL,
  `E_CL_OTHER` decimal(8,8) DEFAULT NULL,
  `E_COGS_IMPORT` decimal(8,8) DEFAULT NULL,
  `E_DA_IS` decimal(8,8) DEFAULT NULL,
  `E_DCL` decimal(8,8) DEFAULT NULL,
  `E_FISCYEAR` decimal(8,8) DEFAULT NULL,
  `E_GOODWILL` decimal(8,8) DEFAULT NULL,
  `E_IEQ` decimal(8,8) DEFAULT NULL,
  `E_ININC_TOT` decimal(8,8) DEFAULT NULL,
  `E_INT` decimal(8,8) DEFAULT NULL,
  `E_INT_OTHER` decimal(8,8) DEFAULT NULL,
  `E_INTEX` decimal(8,8) DEFAULT NULL,
  `E_INV` decimal(8,8) DEFAULT NULL,
  `E_IOM` decimal(8,8) DEFAULT NULL,
  `E_ISOCURRENCY` varchar(10) DEFAULT NULL,
  `E_IT` decimal(8,8) DEFAULT NULL,
  `E_IT_PAYABLE` decimal(8,8) DEFAULT NULL,
  `E_LIFOR` decimal(8,8) DEFAULT NULL,
  `E_LTDP` decimal(8,8) DEFAULT NULL,
  `E_MONTHENDYH` decimal(8,8) DEFAULT NULL,
  `E_NON_OPINIC` decimal(8,8) DEFAULT NULL,
  `E_OA` decimal(8,8) DEFAULT NULL,
  `E_OL` decimal(8,8) DEFAULT NULL,
  `E_OP_IMPORT` decimal(8,8) DEFAULT NULL,
  `E_PENSION_PERIODCOST` decimal(8,8) DEFAULT NULL,
  `E_PENSION_SERVCOST` decimal(8,8) DEFAULT NULL,
  `E_POSTR_PERIODCOST` decimal(8,8) DEFAULT NULL,
  `E_POSTR_SERVCOST` decimal(8,8) DEFAULT NULL,
  `E_PPE_NET` decimal(8,8) DEFAULT NULL,
  `E_RD` decimal(8,8) DEFAULT NULL,
  `E_REC_Z_RATE` decimal(8,8) DEFAULT NULL,
  `E_SE` decimal(8,8) DEFAULT NULL,
  `E_SGA_IMPORT` decimal(8,8) DEFAULT NULL,
  `E_SPI` decimal(8,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio_empresa`
--

CREATE TABLE `estudio_empresa` (
  `E_BVDEP_ID_NUMBER` varchar(255) NOT NULL,
  `ID_ESTUDIO` int(11) DEFAULT NULL,
  `E_NAME` text,
  `E_ISOCOUNTRY_INC` text,
  `E_LONGBUSDESC` text,
  `E_SIC` text,
  `E_DATAINC` date DEFAULT NULL,
  `E_URL` text,
  `E_DATE_UPDATE` date DEFAULT NULL,
  `E_TRADEDES` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `source`
--

CREATE TABLE `source` (
  `ID_SOURCE` int(11) NOT NULL,
  `N_SOURCE` varchar(255) DEFAULT NULL,
  `DATE_SOURCE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `source`
--

INSERT INTO `source` (`ID_SOURCE`, `N_SOURCE`, `DATE_SOURCE`) VALUES
(1, 'Emp. USA', '2016-12-15'),
(2, 'Emp. Resto del Mundo', '2016-12-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `ID_TIPO` int(11) NOT NULL,
  `N_TIPO` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`ID_TIPO`, `N_TIPO`) VALUES
(1, 'Estudio 1'),
(2, 'Estudio 2'),
(3, 'Estudio 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` varchar(100) NOT NULL,
  `NOMBRES` varchar(200) DEFAULT NULL,
  `CLAVE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRES`, `CLAVE`) VALUES
('1719668863', 'Diego V Chicaiza Herrera', '078c007bd92ddec308ae2f5115c1775d');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actores`
--
ALTER TABLE `actores`
  ADD PRIMARY KEY (`ID_CLIENTE`),
  ADD KEY `FK_USUARIO_ACTOR` (`ID_USUARIO`);

--
-- Indices de la tabla `empresa_cabecera`
--
ALTER TABLE `empresa_cabecera`
  ADD PRIMARY KEY (`S_BVDEP_ID_NUMBER`),
  ADD KEY `FK_FUENTE_EMPRESA` (`ID_SOURCE`);

--
-- Indices de la tabla `empresa_detalle`
--
ALTER TABLE `empresa_detalle`
  ADD KEY `FK_EMPRESA_CABECERA_DETALLE` (`S_BVDEP_ID_NUMBER`);

--
-- Indices de la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD PRIMARY KEY (`ID_ESTUDIO`),
  ADD KEY `FK_ACTORES_ESTUDIO` (`ID_CLIENTE`),
  ADD KEY `FK_FUENTE_ESTUDIO` (`ID_SOURCE`),
  ADD KEY `FK_TIPO_ESTUDIO` (`ID_TIPO`),
  ADD KEY `FK_USUARIO_ESTUDIO` (`ID_USUARIO`);

--
-- Indices de la tabla `estudio_detalle`
--
ALTER TABLE `estudio_detalle`
  ADD KEY `FK_EST_DETALLE` (`E_BVDEP_ID_NUMBER`);

--
-- Indices de la tabla `estudio_empresa`
--
ALTER TABLE `estudio_empresa`
  ADD PRIMARY KEY (`E_BVDEP_ID_NUMBER`),
  ADD KEY `FK_EST_CABECERA` (`ID_ESTUDIO`);

--
-- Indices de la tabla `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`ID_SOURCE`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudio`
--
ALTER TABLE `estudio`
  MODIFY `ID_ESTUDIO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `source`
--
ALTER TABLE `source`
  MODIFY `ID_SOURCE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actores`
--
ALTER TABLE `actores`
  ADD CONSTRAINT `FK_USUARIO_ACTOR` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Filtros para la tabla `empresa_cabecera`
--
ALTER TABLE `empresa_cabecera`
  ADD CONSTRAINT `FK_FUENTE_EMPRESA` FOREIGN KEY (`ID_SOURCE`) REFERENCES `source` (`ID_SOURCE`);

--
-- Filtros para la tabla `empresa_detalle`
--
ALTER TABLE `empresa_detalle`
  ADD CONSTRAINT `FK_EMPRESA_CABECERA_DETALLE` FOREIGN KEY (`S_BVDEP_ID_NUMBER`) REFERENCES `empresa_cabecera` (`S_BVDEP_ID_NUMBER`);

--
-- Filtros para la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD CONSTRAINT `FK_ACTORES_ESTUDIO` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `actores` (`ID_CLIENTE`),
  ADD CONSTRAINT `FK_FUENTE_ESTUDIO` FOREIGN KEY (`ID_SOURCE`) REFERENCES `source` (`ID_SOURCE`),
  ADD CONSTRAINT `FK_TIPO_ESTUDIO` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo` (`ID_TIPO`),
  ADD CONSTRAINT `FK_USUARIO_ESTUDIO` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Filtros para la tabla `estudio_detalle`
--
ALTER TABLE `estudio_detalle`
  ADD CONSTRAINT `FK_EST_DETALLE` FOREIGN KEY (`E_BVDEP_ID_NUMBER`) REFERENCES `estudio_empresa` (`E_BVDEP_ID_NUMBER`);

--
-- Filtros para la tabla `estudio_empresa`
--
ALTER TABLE `estudio_empresa`
  ADD CONSTRAINT `FK_EST_CABECERA` FOREIGN KEY (`ID_ESTUDIO`) REFERENCES `estudio` (`ID_ESTUDIO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
