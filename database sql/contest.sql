-- database name = Club_Guide --

CREATE TABLE `contest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dec` varchar(400) NOT NULL,
  `terms` varchar(400) NOT NULL,
  `date` varchar(400) NOT NULL,
  `palce` varchar(400) NOT NULL,
  `pic` varchar(400) NOT NULL,
  `apply` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `contest` (`id`, `name`, `dec`, `terms`, `date`, `palce`, `pic`, `apply`) VALUES
(1, 'تحدي الأندية الطلابية', 'تحدي افتراضي يهدف إلى إثراء معرفة الطلبة التقنيين واستثمار قدراتهم في مجال تطوير الويب عن طريق بناء منصة ويب تسهل الوصول للأندية الطلابية وتمكن من التواصل معهم.\r\n\r\n', '\r\nأن يكون المشارك طالبًا في أحد الجامعات أو الكليات السعودية.\r\nأن تكون المشاركة كفريق لا يتجاوز عدد أعضائه عن 2 أو تكون بشكل فردي.\r\nأن تكون فكرة المشاركة حلا لبناء منصة تخص الاندية الطلابية في المملكة.\r\nأن يكون الحل المقدم حلاً تشغيليًا وليس مجرد فكرة.\r\nأن يتم إنشاء فريق حتى لو كانت المشاركة فردية.', '', '', 'https://www.studentclubschallenge.com/images/images/Group%20681.svg', 'https://hackathonat.com/competitions/220'),
(2, 'مسابقة نادي هواوي لتطوير التطبيقات', 'no data yet.', '', '', '', 'https://v5.airtableusercontent.com/v1/15/15/1680573600000/1Me47mxlajW8XThql_zQvA/iK0B-Udou4qZeqZA9k03XC44MSkh3TZgcI7fGYOmyaZETDPtHT3QLwJ-h_Zw83R8a9IqF2108PEWfRvNtWcsmg/Nvq_Nc72rANWWZj7Lpvi4LcMN2F0XcNqLmY4ZwDFQh4', '');


ALTER TABLE `contest`
  ADD PRIMARY KEY (`id`);
COMMIT;
