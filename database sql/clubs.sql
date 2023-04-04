
-- database name = Club_Guide --

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `dec` varchar(400) NOT NULL,
  `terms` varchar(400) NOT NULL,
  `pic` varchar(400) NOT NULL,
  `date` varchar(400) NOT NULL,
  `apply` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `clubs` (`id`, `name`, `dec`, `terms`, `pic`, `date`, `apply`) VALUES
(1, 'Google Developer Student Clubs', 'Explore more than 1,900 college and university chapters across more than 100 countries. Meet and learn with other budding developers and build solutions for local businesses and communities with Google technology.\r\n', 'not available yet', 'https://developers.google.com/community/gdsc/images/gdsc-social-share.png', 'not available yet', 'https://developers.google.com/community/gdsc'),
(2, 'AIP', 'not available yet', 'not available yet', 'https://pbs.twimg.com/profile_banners/1438928616914628611/1678268656/1500x500', 'not available yet', 'not available yet');


ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);
COMMIT;

