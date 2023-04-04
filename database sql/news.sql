-- database name = Club_Guide --


CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dec` varchar(400) NOT NULL,
  `pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `news` (`id`, `name`, `dec`, `pic`) VALUES
(1, 'University Internship Program registration', 'Applications are open. You can apply online only during the announced registration period.', 'https://assets.spe.org/dims4/default/f7710c2/2147483647/strip/true/crop/768x543+0+0/resize/800x566!/quality/90/?url=http%3A%2F%2Fspe-brightspot.s3.amazonaws.com%2Fc0%2F59%2F978f1a73447389a826f09e146e18%2Fjpt-2022-04-epnotes-saudi-aramco.jpg'),
(2, ' GPT-4 is released', 'The newest version of OpenAI\s language model system, GPT-4, was officially launched on March 13, 2023 with a paid subscription allowing users access to the Chat GPT-4 tool.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUIwD84MUO1g9n6U0VWNJKRK0pPFVGTXsBeQ3KTeeGTpxX7VKB3-rMoW1J2bvU2blIFiM&usqp=CAU');

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);
COMMIT;
