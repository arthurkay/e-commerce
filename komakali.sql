-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: komakali
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `article` varchar(10000) NOT NULL,
  `contributor` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `date` varchar(15) NOT NULL,
  `edited` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'story of my life','free-creative-writing-exercises-wanted.jpg','Today I finally have the guts to raise my words and not my voice, for I know, its the rain and not the thunder that makes flowers flourish. As blood flows through my vains for a purpose, so is what I say not in vain.\r\nEventhough vagueness casts a dark cloud on my words, I hope your vision through the storm is vivid. Am en route to EL Dorado, ahead of me lies a storm. And as the sands of time slip through my fingers, I fear I feign my courage.\r\nAm not certain lightning will not strike me to death, for enlightment tells me death is the destination we all share. I have in my possession an empty canvas for too long. But only today did I have the courage to pick up my painting tools. But as the cold wind blows and the rain wash away the paint on my canvas.\r\nMy spirit is shuttered, but my soul survives to tell the tale.','Artie','creative','0','06-Jun-2016'),(2,'Judgement','blue.jpg','In our lives, we are the captains of our ships, the holders of our blue prints and the sails-men.\r\nThere are a lot of positions we fill in our own lives, and mostly, we never get to live to be the judge of our mistakes and mishaps.\r\nAll is well that ends well, is the adage of the day in our normal lives.\r\nBut is it so?\r\nFor the most part of our lives we look at our lives with these eye glasses that are filled with the fog and the dust of the day that we hardly see what is just in front of us. It is this lack of foresight that leads us the path of the whirlwind. And we do not see this until we are in the whirlpool. It is for this very reason that I consider it wise for a man to consider advice before thinking and convincing themselves that, they are right, for everyone is right in their own mind.\r\nOur lives are the summation of our choices, and so, we need to take good care of what we choose and what we\r\naccept into our lives.\r\nNo one person is independent, for we all are\r\ninterdependent. We need each other, no one person is greater than the other, for what is greatness to another, to the other is mere goodness. A neighbour never realizes how great the person living next door is until they hear how\r\nrespectable that person is from some place elsewhere.\r\nTo live is to love, to care and to cherish the good souls and people around you.','Artie','Social','26-Aug-2015','06-Jun-2016'),(3,'Procrastination stole my chick','Wed.jpg','On my way, thinking by the time I\'ll be there, I\'ll be dry, but walking out in the rain, its like water will stain.\r\nMy courage may prove cowardly to the roudy, but I don\'t care.\r\nI\'d face and scare fear out of my word, to wedd the bride who is as beautiful as the bright stars. \r\nStaring at the face that glows, my glance glares away. But my stance remains.\r\nAm into deep for who I like, as I lie in wait for my chance to strike. As lightening strikes an expectedly, I hope and pray, no man sees my crush as prey. Looking around corners for any \r\nlurking danger, I realize I was looking in the wrong place.\r\nI take my time moving at a slowpace, as I set up my place, so \r\nI end up drenched in my thoughts, and buried in my own \r\nwords.\r\nTending my wounds, stirs up a whirlwind within  my heart.\r\nSometimes I think so much that I get a heartache, that bleeps into a headache, and now my mind is about to implode, how I wish I could upload it to yours.\r\nI was going to be yours, but that was before you chose, the the guy who likes all your Facebook posts.\r\nNow when I take a pause, all I see is you, and if I could rearrange the letters of the alphabet, I would put \r\n\"U\" and \"I\" together. Knowing we can\'t be together, I \r\nhave to face reality, that the girl I used to fancy, was a fantasy.\r\nI meant to tell you this through a tweet, but I just couldn\'t do it.\r\nAnd unlike any fairytale, it was happily never after.\r\n','Admin','creative','13-Apr-2016','07-Jun-2016'),(4,'Take The Lead','Light.jpg','I don\'t have the voice to sing, but I have the  words for a song; I don\'t have the voice to scream, but I have the power to command; I am not an emperor, but I have a realm \r\nof an empire:\r\nI have a task to lead, but my followers are not ready to read to \r\nlead.\r\nHow then will I prove that the battle of the intellect is won by \r\nones mentality, and not there ability?\r\nI\'ve been down this road of thought, and I don\'t want to keep \r\nsilent as a way of keeping the knife from my throat.\r\nI know cynism rekindles skepticism, which is good for \r\nobjective thought, but I need the flame of optimism as a torch.\r\nPlease enlightment, enliven me with a touch of inspiration, so I can inspire life in the power of information.','Admin','creative','02-May-2016','06-Jun-2016'),(5,'Lies seen by eyes','paper-plane.jpg','It\'s amazing what you\'ll find in a place  somewhere \r\nout there in my eyes. For there lies a mystery, though not dark, there is no light. A sight that most only see flight, but with endurance, there resides plight. And with patience, the time capsule heals the wounds of the soul.\r\nI thought I\'d never see the fruits of my hands, the work my life has wrought.  But now, that\'s only a thought that lost a battle it never fought.\r\nEvery day that goes by, I look up to God and ask for forgiveness for the fault in the thoughts I kept.\r\nVividly a vision comes to mind when I wept, all just \r\nfor the things of the moment and the emotions I \r\nkept. Though my vision will never be the same, my \r\nideals I have sealed and concealed in the poetry \r\nthat lost its meaning through translation.\r\nMy relation to the world is of no interest to any, but \r\nmy life is to many. And that\'s just the beginning of \r\nthe irony.\r\nI\'m not the best bet, but my poker face is a facade of \r\naces. My steps may be hasty, but my traces are on track\r\nI was born with open hands, but life has taught \r\nme to have them palm up, just so I can have an upper \r\nhand.\r\nAm worn, even before the day begins, and yet the world sees a man who\'s strong. I\'ve had to sail without a catch, just so I don\'t sink.\r\nSo if you think, you can stare at my eyes and tell \r\nthe story of my life, then, all there is in yours are lies.','Artie','creative','16-May-2016','06-Jun-2016');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(191) NOT NULL,
  `editor` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `body` varchar(10000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (2,'Arthur Kalikiti','Arthur Kalikiti','2018-10-28 20:39:04','2018-10-29 10:24:50','<blockquote>\r\n<p>Walking the walk of the legends</p>\r\n</blockquote>\r\n\r\n<p>We shall constantly keep on moving forward no matter the turmoil against us.</p>','The A team','public/images/nAgHGGJuLASjYA7TfXKNRnmntUTIk3pmfVmO2BnY.jpeg'),(3,'Arthur Kalikiti','Arthur Kalikiti','2018-10-28 21:02:39','2018-10-29 10:30:27','<blockquote>\r\n<p>Hello Crazy World</p>\r\n</blockquote>\r\n\r\n<p>.<img alt=\"Arthur Kalikiti\" src=\"http://127.0.0.1:8000/img/arthur.png\" style=\"height:337px; width:337px\" />My name is <span class=\"marker\"><em><strong>Arthur Kalikiti, am i a software developer/Systems Engineer.. </strong></em></span><em><strong><code>I live 26 Hours a day on a computer.</code></strong></em></p>','Box of old Memories','images/ezNeQyYSpSpOzxuJ9CYc8Hl2tPwQUsR4Lrr5c8P6.jpeg');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'Arthur Kalikiti','arthurkalikiti@gmail.com','Hello Komakali, this is a test message from your page messaging system','2018-10-29 12:20:43','2018-10-29 12:49:08','read');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'2018-10-28 16:25:07','2018-10-28 16:25:07','Arthur Kalikiti','arthurkalikiti@gmail.com','$2y$10$Bi5SJx.g19gaiojfAxJyROLjLuMGp3irUk5mpmGf0.3ehR3BGEfYC',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-29 17:28:30
