-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2019 at 12:09 PM
-- Server version: 5.5.61-38.13-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itfrevsc_rbsolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'rajendrabhide@hotmail.com', 'bhide@2019');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(52) NOT NULL,
  `record_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `description`, `image`, `record_dt`) VALUES
(1, '', 'img/certificate/ACBTHANE.jpg', '2019-02-09'),
(2, '', 'img/certificate/ATS.jpg', '2019-02-09'),
(3, '', 'img/certificate/BANKOFMAHARASHTRA.jpg', '2019-02-09'),
(4, '', 'img/certificate/ICICI2.jpg', '2019-02-09'),
(5, '', 'img/certificate/icici.jpg', '2019-02-09'),
(6, '', 'img/certificate/INVITATIONCPR.jpg', '2019-02-09'),
(7, '', 'img/certificate/MAHARASHTRAPRISON1.jpg', '2019-02-09'),
(8, '', 'img/certificate/MAHARSHTRAPRISION2.jpg', '2019-02-09'),
(9, '', 'img/certificate/PNB2.jpg', '2019-02-09'),
(10, '', 'img/certificate/PNB.jpg', '2019-02-09'),
(11, '', 'img/certificate/Punepolicesb.jpg', '2019-02-09'),
(12, '', 'img/certificate/RSSHARMA.jpg', '2019-02-09'),
(13, '', 'img/certificate/sangaliBANK.jpg', '2019-02-09'),
(14, '', 'img/certificate/SBI2.jpg', '2019-02-09'),
(15, '', 'img/certificate/SBI3.jpg', '2019-02-09'),
(16, '', 'img/certificate/SBI4.jpg', '2019-02-09'),
(17, '', 'img/certificate/sbi.jpg', '2019-02-09'),
(18, '', 'img/certificate/SPS.jpg', '2019-02-09'),
(19, '', 'img/certificate/VIDYA2.jpg', '2019-02-09'),
(20, '', 'img/certificate/VIDYA.jpg', '2019-02-09'),
(21, '', 'img/certificate/WhatsAppImage1', '2019-02-09'),
(22, '', 'img/certificate/WhatsAppImage2', '2019-02-09'),
(23, '', 'img/certificate/WhatsAppImage3', '2019-02-09'),
(24, '', 'img/certificate/WhatsAppImage4', '2019-02-09'),
(25, '', 'img/certificate/WhatsAppImage5', '2019-02-09'),
(26, '', 'img/certificate/WhatsAppImage6', '2019-02-09'),
(28, '', 'img/certificate/ZONE2PUNE1.jpg', '2019-02-09'),
(30, '', 'img/certificate/6-49-T.jpg', '2019-02-11'),
(31, '', 'img/certificate/7-44-T.jpg', '2019-02-11'),
(32, '', 'img/certificate/bom-52-T.jpg', '2019-02-11'),
(33, '', 'img/certificate/certificate-0-T.jpg', '2019-02-11'),
(34, '', 'img/certificate/certificate-19-T.jpg', '2019-02-11'),
(35, '', 'img/certificate/certificate-21-T.jpg', '2019-02-11'),
(36, '', 'img/certificate/certificate-24-T.jpg', '2019-02-11'),
(37, '', 'img/certificate/certificate-35-T.jpg', '2019-02-11'),
(38, '', 'img/certificate/certificate-49-T.jpg', '2019-02-11'),
(39, '', 'img/certificate/a1041e08fc1344008355e44e97b6364ejpg', '2019-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `record_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `record_dt`) VALUES
(1, 'img/clients/maharashtra-police-30-T.jpg', '0000-00-00'),
(2, 'img/clients/client.jpeg', '0000-00-00'),
(3, 'img/clients/client-5-18-T.png', '0000-00-00'),
(4, 'img/clients/client-8-52-T.jpg', '0000-00-00'),
(5, 'img/clients/client-4-40-T.png', '0000-00-00'),
(6, 'img/clients/client-3-59-T.png', '0000-00-00'),
(7, 'img/clients/client-10-10-T.jpg', '0000-00-00'),
(8, 'img/clients/client-1-41-T.png', '0000-00-00'),
(9, 'img/clients/canara-bank-38-T.jpg', '0000-00-00'),
(10, 'img/clients/client-7-0-T.gif', '0000-00-00'),
(11, 'img/clients/client-9-41-T.gif', '0000-00-00'),
(12, 'img/clients/client-11-6-T.gif', '0000-00-00'),
(13, 'img/clients/client-6-19-T.jpg', '0000-00-00'),
(14, 'img/clients/client-41-T.png', '0000-00-00'),
(15, 'img/clients/co-op-bank-51-T.jpg', '0000-00-00'),
(16, 'img/clients/garware-wall-ropes-37-T.jpg', '0000-00-00'),
(17, 'img/clients/kumar-properties-26-T.jpg', '0000-00-00'),
(18, 'img/clients/mit-35-T.jpg', '0000-00-00'),
(19, 'img/clients/monarch-surveyors-9-T.jpg', '0000-00-00'),
(20, 'img/clients/rotaract-club-30-T.jpg', '0000-00-00'),
(21, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_subject` varchar(255) NOT NULL,
  `customer_desc` text NOT NULL,
  `customer_img` varchar(255) NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `customer_name`, `customer_email`, `customer_subject`, `customer_desc`, `customer_img`, `reply`) VALUES
(1, 'priya', 'pooja@e-bc.in', 'uhohjo', 'pholkl', 'images/enquiry/Hydrangeas.jpg', 'sfdsvdgvcv '),
(2, 'vihan', 'pooja@e-bc.in', 'dgfd', 'edgtfdg', 'images/enquiry/Lighthouse.jpg', 'fjgkj'),
(3, 'nikita', 'pooja@e-bc.in', 'cfvzsfvx', 'fvzxsvxzv', '', ''),
(4, 'yogesh', 'pooja@e-bc.in', 'asdsdf', 'asfasf', '', ''),
(5, 'swaraj', 'pooja@e-bc.in', 'ljk;', 'kj;', 'images/enquiry/Lighthouse.jpg', ''),
(6, '', '', '', '', '', ''),
(7, 'swaraj', 'poojakhambe1996@gmail.com', 'dgfd', '', 'images/enquiry/terms and conditions template 01.docx', ''),
(8, 'pooja', 'pooja@e-bc.in', 'dgfd', '8ip', 'images/enquiry/terms and conditions template 01.docx', ''),
(9, 'yogesh', 'poojakhambe1996@gmail.com', 'dgsgh', '', 'images/enquiry/terms and conditions template 01.docx', ''),
(10, '', '', '', '', 'images/enquiry/images.png', ''),
(11, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `record_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `description`, `image`, `record_dt`) VALUES
(2, '', 'img/gallery/namo-22-T.jpg', '2019-02-05'),
(3, '', 'img/gallery/cops-54-T.jpg', '2019-02-05'),
(4, '', 'img/gallery/gallery-53-T.jpg', '2019-02-05'),
(5, '', 'img/gallery/gallery-48-T.jpg', '2019-02-05'),
(6, '', 'img/gallery/gallery-10-T.jpg', '2019-02-05'),
(7, '', 'img/gallery/traffic-31-T.jpg', '2019-02-05'),
(8, '', 'img/gallery/solpaur-3-T.jpg', '2019-02-05'),
(9, '', 'img/gallery/live-55-T.jpg', '2019-02-05'),
(10, '', 'img/gallery/best-batch-jan-2016-25-T.jpg', '2019-02-05'),
(11, '', 'img/gallery/2-sept2016-21-T.jpg', '2019-02-05'),
(12, '', 'img/gallery/8-january-30-T.JPG', '2019-02-05'),
(13, '', 'img/gallery/jalgoan-2-T.jpg', '2019-02-05'),
(14, '', 'img/gallery/jalgaon-19-T.jpg', '2019-02-05'),
(15, '', 'img/gallery/34-35-T.jpg', '2019-02-05'),
(16, '', 'img/gallery/at-lecture-52-T.jpg', '2019-02-05'),
(17, '', 'img/gallery/35-34-T.jpg', '2019-02-05'),
(18, '', 'img/gallery/school-lecture-27-T.jpg', '2019-02-05'),
(19, '', 'img/gallery/7-march-2016-17-T.jpg', '2019-02-05'),
(20, '', 'img/gallery/19-march-2016-14-T.jpg', '2019-02-05'),
(21, '', 'img/gallery/29-sept2015-56-T.jpg', '2019-02-05'),
(22, '', 'img/gallery/gallery-16-T.jpg', '2019-02-05'),
(23, '', 'img/gallery/gallery-28-T.jpg', '2019-02-05'),
(24, '', 'img/gallery/gallery-32-T.jpg', '2019-02-05'),
(25, '', 'img/gallery/gallery-37-T.jpg', '2019-02-05'),
(27, '', 'img/gallery/lecture-at-jalgaon-10-T.jpg', '2019-02-05'),
(29, '', 'img/gallery/an-expert-witness-professional-witness-or-judicial-expert-is-a-witness-who-by-virtue-of-education-training-skill-or-experience-is-believed-to-ha-17-T.jpg', '2019-02-05'),
(30, '', 'img/gallery/lecture-at-shirdi-devsthan-57-T.jpg', '2019-02-05'),
(31, '', 'img/gallery/jalgaon-1-T.jpg', '2019-02-05'),
(33, '', 'img/gallery/IMG20190212133540Copyjpg', '2019-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `press_coverge`
--

CREATE TABLE `press_coverge` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `record_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `press_coverge`
--

INSERT INTO `press_coverge` (`id`, `image`, `record_dt`) VALUES
(1, 'img/press/news1.jpg', '2019-02-09'),
(2, 'img/press/news2.jpg', '2019-02-09'),
(3, 'img/press/news3.jpg', '2019-02-09'),
(5, 'img/press/news5.jpg', '2019-02-09'),
(6, 'img/press/news6.jpg', '2019-02-09'),
(7, 'img/press/news7.jpg', '2019-02-09'),
(8, 'img/press/news8.jpg', '2019-02-09'),
(9, 'img/press/news9.jpg', '2019-02-09'),
(10, 'img/press/news10.jpg', '2019-02-09'),
(12, 'img/press/news11.jpg', '2019-02-11'),
(13, 'img/press/whatsppimg.jpeg', '2019-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `record_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `discription`, `record_dt`) VALUES
(1, 'HANDWRITING ANALYSIS', 'Conflict is a part and parcel of the universe. Conflicts emerge between individuals, nations, organizations, territories, communities, between friends, partners, relatives etc. Conflict happens within an individual as well. However, Conflicts hamper the relationships between the individuals and decrease profits. It imbalances an individual. Thus increasing the stress level and reducing the well being of individuals, organizations, nations and communities. We resolve frauds and conflicts with the help of graphology, learning and understanding the reason of conflict with respect to the relevant trends and reliable modern methods. We analyze the handwriting of an individual to resolve fraud cases in the financial institutions or banks. We have proven records in analyzing the handwriting of a suicide -note to know the thick and thin of the case. We analyze the personality traits of individuals which advocates the differences between individuals and corporations.', '0000-00-00'),
(2, 'SOFT SKILL', 'We as a Softskill trainer, bring in the confidence and improve an individualâ€™s ability to interact with others. Soft skills - also known as people skills, complement hard skills to enhance an individual\'s relationships, job performance and career prospects. It\'s often said that hard skills will get you an interview but you need soft skills to get -- and keep -- the job.\r\nUnlike hard skills, which includes a person\'s technical skill set and ability to perform certain functional tasks, soft skills are interpersonal and broadly applicable across job titles and industries. Many soft skills are tied to an individuals\' personalities, their upbringing, rather than any formal training, and are thus considered more difficult to develop than hard skills.\r\nWe inculcate in you the personality traits of optimism, integrity and a sense of humor. These skills are also defined by abilities that can be practiced, such as leadership, empathy, communication and sociability.\r\nAll the organizations aim to employ individuals possessing both hard and soft skills. However, the demand for the soft skills is increasing, especially among those in IT leadership roles. This demand is due to a \"soft skills gap,\" or a perceived lack of these skills, among many staffs, as well as the increasing need to align with business goals. Hence we provide you the excellent soft skills in the relevant sector.\r\n', '0000-00-00'),
(3, 'COMMUNICATION SKILL', 'Communication skills have proven to be the most powerful element to be possessed by individuals or employees in many fields. To equip yourselves for a smooth career in the field of management, it is quintessential to grasp, practice and display high levels of communication skills in regular and crisis situations. Effective communication skills act as tool to the managers and leaders for quick progression in their careers. We train and fine tune your communication skill.', '0000-00-00'),
(4, 'STRESS MANAGEMENT TECHNIQUES', 'Stress cannot be avoided but has to be managed for a healthy living. We possess wide spectrum of techniques and psychotherapies aimed at controlling the person\'s levels of stress, especially chronic stress, usually for the purpose of improving everyday production, functioning and efficiency.', '0000-00-00'),
(5, 'MEMORY ENHANCEMENT TECHNIQUES', 'A strong memory depends on the health and vitality of your brain. We train your brain to have an excellent workmechanism., by improving your mental performance. We have a lot of student and working professionals who have benefitted out of this training.', '0000-00-00'),
(6, 'TEAM MANAGEMENT', 'We train and improve your team leaders managers to administer and coordinate a group of individuals to perform a task. Team management training involves teamwork, communication, objective setting and performance appraisals. We enhance the team management skills with the capability to identify problems and resolve conflicts within a team with various leadership styles to increase personnel productivity and build an effective team', '0000-00-00'),
(7, 'INTERPERSONAL RELATIONSHIP', 'Close relationships are interpersonal relationships. The closest relationships are most often found within family, society, community and a small circle of best friends. Interpersonal relationships require the most effort to nurture and maintain. Interpersonal relations at work and elsewhere too serve a vital role in the development and maintenance of trust and positive feelings in the society or organizations. Despite the fact that the quality of interpersonal relationships alone is not enough to produce worker the productivity, it can significantly contribute to the same. People who learn how to develop interpersonal relationships with everyone they meet certainly experience more success in life than those who do not. Effective and personal communication stands at the heart of every relationship. We provide great input and counseling services towards your interpersonal relationships to get the most from the relevance.', '0000-00-00'),
(8, 'CONSULTANCY SERVICES', 'With the best of our research and market trends, we have abundant list of clients who facilitate the recruitment and consultancy services', '0000-00-00'),
(11, 'CONFLICT MANAGEMENT SERVICES', 'Conflicts can occur between individuals, organisations, communities, etc. They can be interpersonal\r\nor intra-personal. Conflicts hamper relationships & affect productivity. They can cause an\r\nimbalance in an individual, increase stress levels & reduce overall well being. Conflict at different\r\nlevels can result in fraud, forgery or crime.\r\nWe at Solutions systematically observe behaviour of an individual, use the principles of\r\nBehavioural Science to analyse him/her. We use Graphology, also known as Handwriting Analysis\r\nor â€˜Brain writingâ€™ to understand personality traits of an individual. A personâ€™s character, nature &\r\npsychological state at the time of writing can be evaluated using Graphology.\r\nWe use Forensic handwriting analysis to compare documents & determine within a reasonable\r\ndegree of certainty that the same person or different people have written/ signed the documents.\r\nThis helps us to solve fraud/forgery cases for Financial Institutions, Banks & for Real estate/\r\nProperty cases too.\r\nOur Graphology skills are also used in the field of Crime- to verify if Suicide note was actually\r\nwritten by the deceased person.\r\nWe verify personality traits of employees in organisations, using handwriting analysis.\r\nIn short, we can guide & help you to resolve conflicts.\r\n(OR\r\nIn short, we provide â€œSolutionsâ€ for Conflict Management)\r\nSoft', '2019-02-27'),
(12, 'SOFT SKILLS TRAINING', 'Soft skills or People Skills complement technical or hard skills & enhance an individualâ€™s job\r\nperformance/ productivity, career prospects & relationships.\r\nAs is said - Hard Skills can get you an interview, but you need Soft Skills - to get the job and retain\r\nit!\r\nUnlike Hard skills, which include a personâ€™s skill set & ability to perform certain functions/\r\ntasks,Soft Skills are related to an individualâ€™s personality, his/her upbringing rather than a formal\r\ntraining.\r\nAlso, these pertain to both intra-personal & inter-personal levels and need to be developed.\r\nSoft Skills relate to People Skills, having better Social & Communication abilities, improving\r\nPersonality Traits, Attitudes & Emotional Quotient (EQ)\r\n\r\n\r\nAt Solutions, we focus on -\r\nDeveloping Confidence\r\nBuilding a Positive Attitude\r\nImproving Work Ethics\r\nBetter Communication skills\r\nTime Management abilities\r\nBeing a good Team player\r\nHaving Soft Skills is the need of the hour.\r\nAn organisations looks to employ an individual with both hard and soft skills. An employee\r\nunderstands that for faster and better growth prospects, he/she must be equipped with Soft Skills.\r\nThere is an increasing demand for soft skills, especially in the IT sector. However there is a supply\r\nmis-match.\r\nThis is where we step in- â€œSolutionsâ€ provides Soft Skills training programs, to bridge the\r\nemployee soft skill gap, & lead your Organisation towards achieving its Business Goals.', '2019-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `record_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `discription`, `record_dt`) VALUES
(1, 'Advocate Anil Patil', 'Being an advocate, I am very critical and choosy for documentation. But I am really happy with Solution`s services and caring staff. I really appreciate knowledge of Rajendra Bhide in the field of Handwriting Analysis.', '2019-02-06'),
(2, 'Afroz', 'Being a religious Muslim lady I was hesitant to meet a person for the handwriting analysis for myself and my daughter but I met him at his office with the courage and I understood analysis by handwriting I have changed as per his suggestions the only one', '2019-02-06'),
(3, 'Tarangini Khot', 'I was just amazed by the way Mr. Bhide had done my handwriting analysis. He also suggested me some changes in my signatures so that i could perform better. Very grateful to him.', '2019-02-06'),
(5, 'CA Vinay Chordia', 'Being a Chartered Accountant, I have to take care of all the financial things of my company.But a fraud took place in our company. Though we knew , who had done it ,but we were not in a position to confront him as we were not having the proof.Then I came ', '2019-02-06'),
(6, 'Krishnakant Gupta', '\"Solutions\" , yes it provides solution to your every problem. Mr. Rajendra Bhide was indeed generous to me as we only had telephonic conversation regarding my case .I hail from Gujarat. I have sent the related documents to him via post. He received them a', '2019-02-06'),
(7, 'Anita Rawal', 'The best psychometric analysis by \" Solutions\". I was perplexed by the talent and knowledge of Mr. Bhide. The terrific person in Handwriting Analysis', '2019-02-06'),
(8, 'NEENA GUPTANNGL', 'Excellent solutions for mental peace..', '2019-02-06'),
(9, 'GEETA KOREGAONKAR', 'At first I was skeptical but Rajendra Bhide soon made a believer out of me. I have wondered at the insights into a person`s character and personality Rajendra Bhide has been able to gather from a sample of that individual`s handwriting.', '2019-02-06'),
(10, 'DR.PRAVEEN JAIN', 'Solutions is a place where tailor made solutions are given and a significant amount of personal touch to every client .', '2019-02-06'),
(11, 'MAHESH JADHAV', 'Lovely person with every answer to our questions..', '2019-02-06'),
(12, 'MITESH SHARMA', 'Excellent solution to my problems..So happy today..Mr.Rajendra Bhide is a very good person..', '2019-02-06'),
(13, 'DEEPA PANCHARIYA', 'Place that solves our problem with solutions. Got to know about myself with positive attitude. I am very much satisfied with the answers I got and special thanks to Mr.Rajendra Bhide who have guided me to choose correct path in my life..Sir great work, wo', '2019-02-06'),
(14, 'Tejashree Naik', 'A personality to whom I owe my success is Mr. Rajendra Bhide sir. Someone has rightly said a see-saw has two sides because when you go down you need someone to bring you up again, when life was playing with me in a critical situations my luck brought some', '2019-02-06'),
(15, 'Anish Agarwal', 'Being the owner of hotel Deccan Rendezvous. Whenever we have document forgery problems we contacted Solutions and we always get the perfect solution for every problem faced by us. Myself as a person i take guidance to change my family members signature an', '2019-02-06'),
(16, 'Dr. Shishir Joshi', 'I personally took advice from Solutions and Rajendra Bhide and recommending his name. He is real maestro in this field.', '2019-02-06'),
(17, 'Mandar Thombre', 'Being an architect, I always understand what drawing speaks. But I never understood what my signature says.So, I met Rajendra Bhide and done my handwriting and signature analysis. He suggested me few changes in my signature. I changed it with trust.After ', '2019-02-06'),
(18, 'Advocate Arun Bachhao', 'I am Arun Bachhao ,retired District Office Session Judge. Now I am practicing as an arbitrator. Whenever I have signature or handwriting analysis query we take report from Solutions. With my year\'s experience now I am getting the best handwriting analysis', '2019-02-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press_coverge`
--
ALTER TABLE `press_coverge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `press_coverge`
--
ALTER TABLE `press_coverge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
