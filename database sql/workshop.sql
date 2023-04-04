-- database name = Club_Guide --

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dec` varchar(400) NOT NULL,
  `terms` varchar(400) NOT NULL,
  `date` varchar(400) NOT NULL,
  `palce` varchar(400) NOT NULL,
  `pic` varchar(400) NOT NULL,
  `apply` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `workshop` (`id`, `name`, `dec`, `terms`, `date`, `palce`, `pic`, `apply`) VALUES
(1, '‏‏‏‏‏‏‏‏‏بوابتك لعالم تحليل البيانات', 'no data yet.', '', '2/4/2023 11pm', '', 'https://pbs.twimg.com/media/FsvBPq6XsAE7iCj?format=jpg&name=medium', 'https://twitter.com/HSDKFU/status/1642617097682337792'),
(2, 'Start-APPS', 'no data yet.', '', '', '', 'https://pbs.twimg.com/card_img/1642226040310308865/KX_KiLxA?format=png&name=medium', 'https://www.youtube.com/watch?v=i-iq2vfjz6A'),
(3, 'مسار المستقبل', 'no data yet.', '', '19/3/2023', '', 'https://pbs.twimg.com/media/FrbhtnTX0AA-hJz?format=jpg&name=large', 'https://docs.google.com/forms/d/e/1FAIpQLSc-EoJzXh0DtoZdeD_Cfxahojwt9eeJPEy92chM2-Z98R0Reg/viewform');

ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);
COMMIT;
