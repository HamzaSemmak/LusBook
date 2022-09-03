-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 août 2022 à 19:45
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lusbook`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Hamza Semmak', 'Hamza@gmail.com', '$2y$10$ytM31JLU/aJdZphTIVu6lu9rkpWQg8RZ7alFT6k/.Xn.xl4kDXz4S', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `name`, `author`, `price`, `category`, `photo`, `quantite`, `created_at`, `updated_at`) VALUES
(36, 107, 1, 'Why Didn\'t They Teach Me This in School?', 'Cary Siegel', '140', 'Finance', '1657142881.jpg', '1', '2022-08-04 07:39:07', '2022-08-04 07:39:07'),
(37, 106, 1, 'Breaking The Habit of Being Yourself', 'Dr. Joe Dispenza', '90', 'Finance', '1657142787.jpg', '1', '2022-08-09 20:34:09', '2022-08-09 20:34:09'),
(38, 104, 1, 'The Automatic Millionaire, Expanded and Updated', 'David Bach', '80', 'Finance', '1657142634.jpg', '3', '2022-08-09 20:34:18', '2022-08-09 20:34:18');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_03_224821_create_admins_table', 1),
(6, '2022_07_03_230324_create_comptes_table', 1),
(7, '2022_07_03_230529_create_contacts_table', 1),
(8, '2022_07_03_231038_create_products_table', 1),
(9, '2022_07_09_151350_create_favorites_table', 1),
(13, '2022_07_03_225408_create_carts_table', 2),
(26, '2022_07_03_230701_create_orders_table', 3),
(27, '2022_08_01_230453_create_product_orders_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_payement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_on_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_card_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `adresse`, `city`, `country`, `type_payement`, `name_on_card`, `credit_card_number`, `exp_date`, `cvv_card`, `total`, `date`, `created_at`, `updated_at`) VALUES
(4, '1', 'Hamza Semmak', 'Imm 7 appt 13 hay el mansour 1', 'Rabat', 'Maroc', 'Cash On Delivery', 'Hamza Semmak', '12345678912345', '2022-08-20', '123', '1360', '2022-08-02 22:36:10', NULL, NULL),
(5, '1', 'Hamza Semmak', 'Imm 7 appt 13 diar el mansour 1', 'rabat', 'maroc', 'Cash On Delivery', 'Hamza Semmak', '12345678912345', '2022-08-18', '123', '936', '2022-08-04 08:07:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `author`, `price`, `category`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'Law 101', 'Brien Roche', '90', 'Droit', 'Law 101 is an essential reference that explains:—how laws are made —how the court system works and —how each area of the law impacts your daily life.Key information for important questions:—How does a lawsuit begin?—What is the difference in civil and criminal law? —When do state laws trump federal laws? —What makes a contract solid? —What can you expect if called as a juror? —What can you expect if called as a witness? —And other complex areas of the law that you need to know.No home reference shelf is complete without this indispensable information.', '1657033328.jpg', '2022-07-05 12:02:09', '2022-07-05 12:02:09'),
(4, 'Law for Beginners', 'Lara Bryan', '170', 'Droit', 'An entertaining and thought-provoking guide to what laws are, who makes them and how people enforce them. It covers crime and punishment as well as social and citizenship issues such as politics and international law, using a mixture of debates, cartoon strips and clear diagrams.', '1657033401.jpg', '2022-07-05 12:03:21', '2022-07-05 12:03:21'),
(5, 'The Tools of Argument', 'Joel P. Trachtman', '120', 'Droit', 'Joel Trachtman\'s book presents in plain and lucid terms the powerful tools of argument that have been honed through the ages in the discipline of law. If you are a law student or new lawyer, a business professional or a government official, this book will boost your analytical thinking, your foundational legal knowledge, and your confidence as you win arguments for your clients, your organizations or yourself.', '1657033456.jpg', '2022-07-05 12:04:16', '2022-07-05 12:04:16'),
(6, 'Criminal Law Handbook', 'Paul Bergman', '280', 'Droit', 'The criminal justice system is complicated, understand it and your rights\r\nThis book demystifies the complex rules and procedures of criminal law. It explains how the system works, why police, lawyers, and judges do what they do, and what suspects, defendants, and prisoners can expect. It also provides critical information on working with a lawyer.', '1657033570.jpg', '2022-07-05 12:06:10', '2022-07-05 12:06:10'),
(7, 'Represent Yourself in Court', 'Paul Bergman', '190', 'Droit', 'You don\'t have to pay a lawyer upwards of $200 an hour to represent you in a civil lawsuit!\r\nWritten in plain English, Represent Yourself in Court breaks down the trial process into easy-to-understand steps so that you can act as your own lawyer -- safely and efficiently. Veteran attorneys Bergman and Berman-Barrett tell you what to say, how to say it, even where to stand when you address the judge and jury.', '1657033683.jpg', '2022-07-05 12:08:03', '2022-07-05 12:08:03'),
(8, 'Dictionary of Legal Terms', 'Steven H. Gifis', '90', 'Droit', 'Updated to include new terms and to incorporate recent changes in laws and judicial interpretations, this handy dictionary:\r\nContains over 2500 legal terms defined in clear, easy to understand English\r\nTranslates “legalese” for the layperson\r\nIncludes hundreds of examples to illustrate the definitions\r\nIs an ideal book for quick reference or to learn more about the law:', '1657033783.webp', '2022-07-05 12:09:43', '2022-07-05 12:09:43'),
(9, 'How To Learn And Memorize Legal Terminology', 'Anthony Metivier', '90', 'Droit', 'if you\'ve ever wanted to improve your ability to learn and memorize legal terminology and case studies by 100% ... 200% ... 300% (or more) using simple skills you can learn in under an hour (or less), then this may be the most important book you will ever read.\r\n\r\nHow To Learn And Memorize Legal Terminology With Proven Strategies\r\nGuess what?\r\n\r\nYou\'re wasting time listening to the standard advice about learning the law. You can\'t continue with \"random acts of learning\" as you study from you legal dictionary and other legal books - at least not for long. \r\n\r\nThe truth is that learning the law can be incredibly simple. You just need to know how.', '1657034057.jpg', '2022-07-05 12:14:17', '2022-07-05 12:14:17'),
(10, 'Paralegal Career For Dummies', 'Scott A. Hatch', '130', 'Droit', 'The demand for paralegal professionals is exploding, and Paralegal Career For Dummies, 2nd Edition explains the skills and requirements needed to pursue this rewarding career. Inside, you’ll discover the ins and outs of paralegal skills, from preparing documents and performing legal research to obtaining certification, job hunting, and understanding legal concepts.\r\n\r\nUse this hands-on guide to help in your career considerations, bolster your paralegal training, or as an everyday on-the-job reference. Paralegal Career For Dummies will be your trusty assistant through all phases of your life as a paralegal, taking you forward with tips on networking and joining professional organizations that will enhance your career.', '1657034561.jpg', '2022-07-05 12:22:41', '2022-07-05 12:22:41'),
(11, 'Merriam-Webster\'s Dictionary of Law', 'Merriam-Webster', '50', 'Droit', 'Important laws including the Affordable Care Act and the Voting Rights Act and agencies like the Consumer Financial Protection Bureau were updated to reflect recent Supreme Court decisions and new legislation.\r\n\r\nNew entries include: benefit corporation, civil union, community supervision, right-to-die law, voter ID law, health care power of attorney, cyber insurance, e-discovery, and reverse redlining.', '1657051753.jpg', '2022-07-05 17:09:13', '2022-07-05 17:09:13'),
(12, 'Black\'s Law Dictionary', 'Bryan A. Garner', '390', 'Droit', 'Considered the most valuable reference tool available to the legal community, Black\'s Pocket Dictionary provides more than 13,000 clear, concise, and precise definitions. The essential companion dictionary to the Standard edition and as a stand-alone tool, Black\'s Pocket Dictionary also includes a dictionary guide and the complete U.S. Constitution. Black\'s is cited by judges and lawyers more than any other legal dictionary, comes recommended by law faculty, and is available in the pocket format and a variety of other useful editions.', '1657051910.jpg', '2022-07-05 17:11:50', '2022-07-05 17:11:50'),
(13, 'Allow Me to Retort: A Black Guy\'s Guide to the Constitution', 'Elie Mystal', '140', 'Droit', 'Allow Me to Retort is an easily digestible argument about what rights we have, what rights Republicans are trying to take away, and how to stop them. Mystal explains how to protect the rights of women and people of color instead of cowering to the absolutism of gun owners and bigots. He explains the legal way to stop everything from police brutality to political gerrymandering, just by changing a few judges and justices. He strips out all of the fancy jargon conservatives like to hide behind and lays bare the truth of their project to keep America forever tethered to its slaveholding past.', '1657052018.jpg', '2022-07-05 17:13:38', '2022-07-05 17:13:38'),
(14, 'The Harmful Politics of Race and Space in America', 'Lawrence T. Brown', '14', 'Droit', 'The world gasped in April 2015 as Baltimore erupted and Black Lives Matter activists, incensed by Freddie Gray\'s brutal death in police custody, shut down highways and marched on city streets. In The Black Butterfly - a reference to the fact that Baltimore\'s majority-Black population spreads out on both sides of the coveted strip of real estate running down the center of the city like a butterfly\'s wings - Lawrence T. Brown reveals that ongoing historical trauma caused by a combination of policies, practices, systems, and budgets is at the root of uprisings and crises in hyper-segregated cities around the country.', '1657052089.jpg', '2022-07-05 17:14:49', '2022-07-05 17:14:49'),
(15, 'Memoirs of an Attorney General', 'William P. Barr', '14', 'Droit', 'William Barr’s first tenure as attorney general under President George H.W. Bush was largely the result of chance, while his second tenure under President Donald Trump a deliberate and difficult choice. In this candid memoir, Barr takes readers behind the scenes during seminal moments of the 1990s, from the LA riots to Pan Am 103 and Iran Contra. Thirty years later, Barr faced an unrelenting barrage of issues, such as Russiagate, the COVID outbreak, civil unrest, the impeachments, and the 2020 election fallout. One Damn Thing After Another is vivid, forthright, and essential not only to understanding the Bush and Trump legacies, but also how both men viewed power and justice at critical junctures of their presidencies.', '1657052355.jpg', '2022-07-05 17:19:15', '2022-07-05 17:19:15'),
(16, 'Uprooting a Century of Miseducation', 'Pete Hegseth', '170', 'Droit', 'Behind a smokescreen of “preparing students for the new industrial economy,” early progressives had political control in mind. America’s original schools didn’t just make kids memorize facts or learn skills; they taught them to think freely and arrive at wisdom. They assigned the classics, inspired love of God and country, and raised future citizens that changed the world forever. \r\nToday, after 16,000 hours of K-12 indoctrination, our kids come out of government schools hating America. They roll their eyes at religion and disdain our history. We spend more money on education than ever, but kids can barely read and write—let alone reason with discernment. Western culture is on the ropes. Kids are bored and aimless, flailing for purpose in a system that says racial and gender identity is everything.', '1657052457.jpg', '2022-07-05 17:20:57', '2022-07-05 17:20:57'),
(17, 'Just Mercy: A Story of Justice and Redemption', 'Bryan Stevenson', '12', 'Droit', 'Bryan Stevenson was a young lawyer when he founded the Equal Justice Initiative, a legal practice dedicated to defending those most desperate and in need: the poor, the wrongly condemned, and women and children trapped in the farthest reaches of our criminal justice system. One of his first cases was that of Walter McMillian, a young man who was sentenced to die for a notorious murder he insisted he didn’t commit. The case drew Bryan into a tangle of conspiracy, political machination, and legal brinksmanship—and transformed his understanding of mercy and justice forever.', '1657052620.jpg', '2022-07-05 17:23:40', '2022-07-05 17:23:40'),
(18, 'The 48 Laws of Power', 'Robert Greene', '16', 'Droit', 'In the book that People magazine proclaimed “beguiling” and “fascinating,” Robert Greene and Joost Elffers have distilled three thousand years of the history of power into 48 essential laws by drawing from the philosophies of Machiavelli, Sun Tzu, and Carl Von Clausewitz and also from the lives of figures ranging from Henry Kissinger to P.T. Barnum.\r\nSome laws teach the need for prudence (“Law 1: Never Outshine the Master”), others teach the value of confidence (“Law 28: Enter Action with Boldness”), and many recommend absolute self-preservation (“Law 15: Crush Your Enemy Totally”). Every law, though, has one thing in common: an interest in total domination. In a bold and arresting two-color package, The 48 Laws of Power is ideal whether your aim is conquest, self-defense, or simply to understand the rules of the game.', '1657052866.jpg', '2022-07-05 17:27:46', '2022-07-05 17:27:46'),
(19, 'The Laws of Human Nature', 'Robert Greene', '170', 'Droit', 'Robert Greene is a master guide for millions of readers, distilling ancient wisdom and philosophy into essential texts for seekers of power, understanding and mastery. Now he turns to the most important subject of all - understanding people\'s drives and motivations, even when they are unconscious of them themselves.\r\n\r\nWe are social animals. Our very lives depend on our relationships with people. Knowing why people do what they do is the most important tool we can possess, without which our other talents can only take us so far. Drawing from the ideas and examples of Pericles, Queen Elizabeth I, Martin Luther King Jr, and many others, Greene teaches us how to detach ourselves from our own emotions and master self-control, how to develop the empathy that leads to insight, how to look behind people\'s masks, and how to resist conformity to develop your singular sense of purpose. Whether at work, in relationships, or in shaping the world around you, The Laws of Human Nature offers brilliant tactics for success, self-improvement, and self-defense.', '1657053301.jpg', '2022-07-05 17:35:01', '2022-07-05 17:35:01'),
(20, 'Art of Seduction', 'Robert Greene', '170', 'Droit', 'Which sort of seducer could you be: Siren? Rake? Cold Coquette? Star? Comedian? Charismatic? or Saint? This book will show you which. Charm, persuasion, the ability to create illusions: these are some of the many dazzling gifts of the Seducer, the compelling figure who is able to manipulate, mislead and give pleasure all at once', '1657053958.jpg', '2022-07-05 17:45:58', '2022-07-05 17:45:58'),
(21, 'The Concise Mastery', 'GREENE ROBERT', '120', 'Droit', 'Please Read Notes: Brand New, International Softcover Edition, Printed in black and white pages, minor self wear on the cover or pages, Sale restriction may be printed on the book, but Book name, contents, and author are exactly same as Hardcover Edition. Fast delivery through DHL/FedEx express.', '1657054031.jpg', '2022-07-05 17:47:11', '2022-07-05 17:47:11'),
(22, 'The Daily Laws', 'Robert Greene', '140', 'Droit', 'Robert Greene, the #1 New York Times bestselling author, has been the consigliere to millions for more than two decades. Now, with entries that are drawn from his five books, plus never-before-published works, The Daily Laws offers a page of refined and concise wisdom for each day of the year, in an easy-to-digest lesson that will only take a few minutes to absorb. Each day features a Daily Law as well—a prescription that readers cannot afford to ignore in the battle of life. Each month centers around a major theme: power, seduction, persuasion, strategy, human nature, toxic people, self-control, mastery, psychology, leadership, adversity, or creativity.', '1657054092.jpg', '2022-07-05 17:48:12', '2022-07-05 17:48:12'),
(23, 'The Color of Law', 'Richard Rothstein', '70', 'Droit', 'Widely heralded as a “masterful” (Washington Post) and “essential” (Slate) history of the modern American metropolis, Richard Rothstein’s The Color of Law offers “the most forceful argument ever published on how federal, state, and local governments gave rise to and reinforced neighborhood segregation” (William Julius Wilson). Exploding the myth of de facto segregation arising from private prejudice or the unintended consequences of economic forces,', '1657054218.jpg', '2022-07-05 17:50:18', '2022-07-05 17:50:18'),
(24, 'You Can\'t Make This Up', 'Al Michaels', '120', 'Sport', 'In this highly entertaining and insightful memoir, one of television’s most respected broadcasters interweaves the story of his life and career with lively firsthand tales of some of the most thrilling events and fascinating figures in modern sports.\r\nNo sportscaster has covered more major sporting events than Al Michaels. Over the course of his forty-plus year career, he has logged more hours on live network television than any other broadcaster in history, and is the only play-by-play commentator to have covered all four major sports championships: the Super Bowl, World Series, NBA Finals, and the Stanley Cup Final. He has also witnessed first-hand some of the most memorable events in modern sports, and in this highly personal and revealing account, brings them vividly to life.\r\nMichaels shares never-before-told stories from his early years and his rise to the top, covering some of the greatest moments of the past half century - from the “Miracle on Ice” - the historic 1980 Olympic hockey finals - to the earthquake that rocked the 1989 World Series. Some of the greatest names on and off the field are here - Michael Jordan, Bill Walton, Pete Rose, Bill Walsh, Peyton and Eli Manning, Brett Favre, John Madden, Howard Cosell, Cris Collinsworth, and many, many more.\r\nForthright and down-to-earth, Michaels tells the truth as he sees it, giving listeners unique insight into the high drama, the colorful players, and the heroes and occasional villains of an industry that has become a vital part of modern culture.', '1657054416.jpg', '2022-07-05 17:53:36', '2022-07-05 17:53:36'),
(25, 'Coach K: The Rise and Reign of Mike Krzyzewski', 'Ian O\'Connor', '130', 'Sport', 'Mike Krzyzewski built a staggering basketball empire at Duke University that has endured for more than four decades, placing him among the all-time titans of American sport, and yet there has never been a defining portrait of the man and his program. Until now. \r\n\r\nThree-time New York Times best-selling author Ian O’Connor takes you behind the Blue Devil curtain with a penetrating examination of the great, but flawed leader who won a record 1,170 games and made 12 Final Four trips, with five ending in national titles, before announcing he would retire following the 2021-2022 season. O’Connor uses scores of interviews with Krzyzewski’s best friends, closest advisers, fiercest adversaries, and generations of Duke players and coaches to deliver previously untold stories about the relationships that define the venerable Coach K, and the one with his volcanic mentor, Bob Knight, that died a premature death. Krzyzewski was always driven by an inner rage fueled by his tough Chicago upbringing, and by the cleaning lady and elevator operator who raised him to fight for a better life. As Coach K makes his final stand, vying for one more ring before saying good-bye at age 75, O’Connor shows you sides of the man and his methods that will surprise even the most dedicated Duke fan.', '1657056593.jpg', '2022-07-05 18:29:53', '2022-07-05 18:29:53'),
(26, 'Wish It Lasted Forever: Life with the Larry Bird Celtics', 'Dan Shaughnessy', '140', 'Sport', 'Today the NBA is a vast global franchise—a billion-dollar industry seen by millions of fans in the United States and abroad. But it wasn’t always this successful. Before primetime ESPN coverage, lucrative branding deals like Air Jordans, and $40 million annual player salaries, there was the NBA of the 1970s and 1980s—when basketball was still an up-and-coming sport featuring old school', '1657056663.jpg', '2022-07-05 18:31:03', '2022-07-05 18:31:03'),
(27, 'Blood in the Garden: The Flagrant History of the 1990s New York Knicks', 'Chris Herring', '140', 'Sport', 'For nearly an entire generation, the New York Knicks have been a laughingstock franchise. Since 2001, they’ve spent more money, lost more games, and won fewer playoff series than any other NBA team.\r\n\r\nBut during the preceding era, the Big Apple had a club it was madly in love with - one that earned respect not only by winning, but through brute force. The Knicks were always looking for fights, often at the encouragement of Pat Riley. They fought opposing players. They fought each other. Hell, they even occasionally fought their own coaches.  \r\n\r\nThe NBA didn’t take kindly to their fighting spirit. Within two years, league officials moved to alter several rules to stop New York from turning its basketball games into bloody mudwrestling matches. Nevertheless, as the 1990s progressed, the Knicks endeared themselves to millions of fans; not for how much they won, but for their colorful cast of cha', '1657056724.jpg', '2022-07-05 18:32:04', '2022-07-05 18:32:04'),
(28, 'When the Game Was Ours', 'Dick Hill', '90', 'Sport', 'From the moment these two players took the court on opposing sides, they engaged in a fierce physical and psychological battle. Their uncommonly competitive relationship came to symbolize the most compelling rivalry in the NBA. These were the basketball epics of the 1980s - Celtics vs Lakers, East vs West, physical vs finesse, Old School vs Showtime, even white vs black.\r\nEach pushed the other to greatness - together Bird and Johnson collected eight NBA Championships, and six MVP awards and helped save the floundering NBA at its most critical time. When it started they were bitter rivals, but along the way they became lifelong friends.\r\n\r\nWith intimate, fly-on-the-wall detail, When the Game Was Ours transports listeners to this electric era of basketball and reveals for the first time the inner workings of two players dead set on besting one another. From the heady days of trading championships to the darker days of injury and illness, we come to understand Larry\'s obsessive devotion to winning and how his demons drove him on the court. We hear him talk with candor about playing through chronic pain and its truly exacting toll. In Magic we see a young, invincible star struggle with the sting of defeat, not just as a player but as a team leader. We are there the moment he learns he\'s contracted HIV and hear in his own words how that devastating news impacted his relationships in basketball and beyond. But always, in both cases, we see them prevail.', '1657056779.jpg', '2022-07-05 18:32:59', '2022-07-05 18:32:59'),
(29, 'Belichick: The Making of the Greatest Football Coach of All Time', 'Ian O\'Connor', '120', 'Sport', 'From a New York Times best-selling author, the definitive biography of the NFL’s most enigmatic, controversial, and yet successful coach, Bill Belichick.  \r\n\r\nBill Belichick is perhaps the most fascinating figure in the NFL - the infamously dour face of one of the winningest franchises in sports. As head coach of the New England Patriots, he’s led the team to five Super Bowl championship trophies. In this revelatory new and robust biography, listeners will come to understand and see Belichick’s full life in football, from watching Naval Academy games as a kid with his player-scout father, to masterminding two Super Bowl-winning game plans as defensive coordinator for the Giants, and to his dramatic leap to the Patriots, where he has made history.', '1657056970.jpg', '2022-07-05 18:36:10', '2022-07-05 18:36:10'),
(30, 'The Dynasty', 'Jeff Benedict', '130', 'Sport', 'It’s easy to forget that the New England Patriots were once the laughingstock of the NFL, a nearly bankrupt team that had never won a championship and was on the brink of moving to St. Louis. Everything changed in 1994, when Robert Kraft acquired the franchise and soon brought on board Head Coach Bill Belichick and Quarterback Tom Brady. Since then, the Patriots have become a juggernaut, making 10 trips to the Super Bowl, winning six of them, and emerging as one of the most valuable sports franchises in the world.\r\n\r\nHow was the Patriots dynasty built? And how did it last for two decades? In The Dynasty, acclaimed journalist Jeff Benedict provides richly reported answers in a sweeping account based on exclusive interviews with more than 200 insiders - including team executives, coaches, players, players’ wives, team doctors, lawyers, and more - as well as never-before-seen recordings, documents, and electronic communications.', '1657057076.jpg', '2022-07-05 18:37:56', '2022-07-05 18:37:56'),
(31, 'Michael Jordan: The Life', 'Roland Lazenby', '120', 'Sport', 'The definitive biography of a legendary athlete.\r\n\r\nThe Shrug. The Shot. The Flu Game. Michael Jordan is responsible for sublime moments so ingrained in sports history that they have their own names. When most people think of him, they think of his beautiful shots with the game on the line, his body totally in sync with the ball - hitting nothing but net.\r\n\r\nBut for all his greatness, this scion of a complex family from North Carolina\'s Coastal Plain has a darker side: He\'s a ruthless competitor and a lover of high stakes. There\'s never been a biography that encompassed the dual nature of his character and looked so deeply at Jordan on and off the court - until now.', '1657057333.jpg', '2022-07-05 18:42:13', '2022-07-05 18:42:13'),
(32, 'Showboat: The Life of Kobe Bryant', 'Roland Lazenby', '120', 'Sport', 'The definitive portrait of Kobe Bryant, from the author of Michael Jordan. Eighteen-time All-Star, scorer of 81 points in a single game, MVP, and one of the best shooting guards in NBA league history: Kobe Bryant is among basketball\'s absolute greatest players, and his importance to the sport is undeniable. Third on the NBA career scoring list and owner of five championship rings, he is an undisputed all-time great, one deserving of this deep and definitive biography.\r\nEven within the flashiest franchise in all of sports - the Los Angeles Lakers, where he played his entire career - Bryant always took center stage, and his final game captivated the basketball world, indeed the country. Roland Lazenby delves deep to look behind this public image, using classic basketball reporting and dozens of new interviews to reveal the whole picture, from Bryant\'s childhood through his playing years. Showboatis filled with large personalities and provocative stories, including details of Bryant\'s complicated personal life and explosive relationships on the court, and is a riveting and essential listen for every hoops fan.', '1657057394.jpg', '2022-07-05 18:43:14', '2022-07-05 18:43:14'),
(33, 'Saban: The Making of a Coach', 'Monte Burke', '290', 'Sport', 'As the head coach of the University of Alabama\'s football team, Nick Saban is perhaps the most influential - and controversial - man in the sport. Unpredictable in his professional loyalties, uncompromising in his vision, and unyielding in his pursuit of perfection, the highest-paid coach in college football has changed the face of the game. His program-building vision has delivered packed stadiums, rabid fans, legions of detractors, countless NFL draft picks, and a total of four national championships, including three in the last five years. Though a great deal is known about Nick Saban the coach, not much is known about Nick Saban the man. Through unprecedented interviews with more than 250 friends, coworkers, rivals, former players, and others, Monte Burke reveals the defining moments of the coach\'s life. He discusses Saban\'s rapid and at times rocky ascent up the assistant coaching ranks; his complicated relationship with one of his coaching mentors, Bill Belichick; the birth of his now-famous \"process\"; his dramatic and controversial departures from three different high-profile football teams; and much more. Saban paints a portrait of a complex and compelling man, fundamentally shaped by both his past and the game he loves, in a way that no previous book has.', '1657057892.jpg', '2022-07-05 18:51:32', '2022-07-05 18:51:32'),
(34, 'Man City Premier League Schedule 2022-2023', 'Kevin Elsburg', '70', 'Sport', 'Man City Premier League Schedule 2022-2023: For All citizens, the 38 fixtures of Premier League, date, time, stadium, also ruled pages for notes and formation plans,\r\nFor all Manchester City fans, this a schedule of all Man City games in the Premier League, with date, time, Stadium and space for notes, also empty formation plans and ruled pages for monthly reviews.\r\n\r\nThis book can be the perfect gift for Manchester City Fans so they never miss a game.', '1657058151.jpg', '2022-07-05 18:55:51', '2022-07-05 18:55:51'),
(35, 'Strength Training for Soccer', 'NSCA -National Strength & Conditioning Association', '180', 'Sport', 'Tailoring strength and conditioning programs for soccer requires a deep understanding of the demands of the game. Preparing players to accelerate, decelerate, change direction, and turn and jump can be a challenge.\r\n\r\nDeveloped with the expertise of the National Strength and Conditioning Association (NSCA), Strength Training for Soccer explains the value of resistance training for soccer players. The book—backed by practical experience, evidence-based training methodologies, and research—provides a general overarching biomechanical analysis of soccer and specific analysis of the physical demands of each position: goalkeepers, defenders, midfielders, and forwards. Using these analyses, you can design an effective training program that translates to performance on the field.', '1657058220.jpg', '2022-07-05 18:57:00', '2022-07-05 18:57:00'),
(36, 'Conditioning for Soccer', 'Dr. Raymond Verheijen', '240', 'Sport', 'In this first-ever complete reference book on soccer conditioning, various experts deal with the physical training and medical supervision of soccer players. Subjects such as fitness training, nutrition, physiotherapy and injury prevention are treated in considerable detail. The link between theory and practice is established by including, at the end of each chapter, the answers to a number of the questions that are most frequently asked by soccer coaches. Interviews with a number of well-known players and coaches, who were asked for their views on various aspects of topics handled in the book, are also included.', '1657058292.jpg', '2022-07-05 18:58:12', '2022-07-05 18:58:12'),
(37, 'Tactical Periodization - A Proven Successful Training Model', 'Juan Luis Delgado Bordonau PhD', '460', 'Sport', 'Tactical Periodization is a proven successful football coaching method. All training is driven by tactical training. It allows you the coach, to improve all other attributes (technical, conditioning and decision making) at the same time, within every single tactical practice.\r\n\r\nYou will learn how to use periodization to train your players at the correct intensity for each day of the week, making sure they are always prepared tactically, mentally and physically for competitive matches. Your players (and team) will react quicker, be sharper, and make better decisions in all tactical situations.\r\n\r\nTactical Periodization also helps you accelerate your players\' understanding of their positional roles and responsibilities in an efficient way, which ultimately improves the team\'s tactical performance.', '1657058404.jpg', '2022-07-05 19:00:04', '2022-07-05 19:00:04'),
(38, 'The Coach’s Guide to Teaching', 'Doug Lemov', '90', 'Sport', 'The mark of a great coach is a constant desire to learn and grow. A hunger to use whatever can make them better. The best-selling author of Teach Like a Champion and Reading Reconsidered brings his considerable knowledge about the science of classroom teaching to the sports coaching world to create championship caliber coaches on the court and field. What great classroom teachers do is relevant to coaches in profound ways. After all, coaches are at their core teachers. Lemov knows that coaches face many of the same challenges found in the classroom, so the science of learning applies equally to them. Unfortunately, coaches and organizations have a mixed level of understanding of the research and study of the science of learning. Sometimes coaches and organizations build their teaching on myths and platitudes more than science. Sometime there isn’t any science applied at all. While there are thousands of books and websites a coach can consult to better understand technical and tactical aspects of the game, there is nothing for a coach to consult that explicitly examines the teaching problems on the field, the court, the rink, and the diamond. Until now. Intended to offer lessons and guidance that are applicable to coaches of any sporting endeavor including everyone from parent volunteers to professional coaches and private trainers, Lemov brings the powerful science of learning to the arena of sports coaching to create the next generation of championship caliber coaches.', '1657058622.jpg', '2022-07-05 19:03:42', '2022-07-05 19:03:42'),
(39, 'Next Level: Your Guide to Kicking Ass', 'Stacy T. Sims PhD', '140', 'Sport', 'For active women, menopause hits hard. Overnight, your body doesn’t feel like the one you know and love anymore—you’re battling new symptoms, might be gaining weight, losing endurance and strength, and taking longer to bounce back from workouts that used to be easy. The things that have always kept you fit and healthy just seem to stop working the way they used to. \r\nBut menopause doesn’t have to be the end of you kicking ass at the gym, on the trail, in the saddle, or wherever you work out. Once you understand your physiology, you can work with it—not against it—to optimize your performance. That’s where Stacy Sims, PhD comes in. In Next Level, you’ll learn the underlying causes of menopause: the hormonal changes that are causing all the symptoms you’re feeling, and their impact on your wellness and performance. Then, what you really came for—what to do about it. Inside you’ll find science-backed advice about training, nutrition, sleep and recovery and supplements, as well as sample exercise routines, meal plans, macronutrient planning charts, and case studies from real women Stacy has coached through the transition. It’s the ultimate guide to navigating the Next Level.', '1657063912.jpg', '2022-07-05 20:31:52', '2022-07-05 20:31:52'),
(40, 'Spy x Family, Vol. 1', 'Tatsuya Endo', '60', 'Manga', 'Master spy Twilight is unparalleled when it comes to going undercover on dangerous missions for the betterment of the world. But when he receives the ultimate assignment—to get married and have a kid—he may finally be in over his head!\r\nNot one to depend on others, Twilight has his work cut out for him procuring both a wife and a child for his mission to infiltrate an elite private school. What he doesn’t know is that the wife he’s chosen is an assassin and the child he’s adopted is a telepath!', '1657064101.jpg', '2022-07-05 20:35:01', '2022-07-05 20:35:01'),
(42, 'Spy x Family, Vol. 3', 'Tatsuya Endo', '60', 'Manga', 'Twilight has overcome many challenges in putting together the Forger family, but now all his hard work might come undone when Yor’s younger brother Yuri pops in for a surprise visit! Can Twilight outsmart Yuri, who actually works for the Ostanian secret service?!', '1657064249.jpg', '2022-07-05 20:37:29', '2022-07-05 20:37:29'),
(43, 'Spy x Family, Vol. 2', 'Tatsuya Endo', '100', 'Manga', 'Twilight must infiltrate the prestigious Eden Academy to get close to his target Donovan Desmond, but has he ruined his daughter Anya’s chances with his outburst during the admissions interview? Perhaps the truly impossible mission this time is making sure Anya both becomes an exemplary student and befriends Donovan’s arrogant son Damian!', '1657064317.jpg', '2022-07-05 20:38:37', '2022-07-05 20:38:37'),
(44, 'Spy x Family, Vol. 4', 'Tatsuya Endo', '60', 'Manga', 'The Forgers look into adding a dog to their family, but this is no easy task—especially when Twilight has to simultaneously foil an assassination plot against a foreign minister! The perpetrators plan to use trained dogs for the attack, but Twilight gets some unexpected help to stop these terrorists.', '1657064368.jpg', '2022-07-05 20:39:28', '2022-07-05 20:39:28'),
(45, 'Spy x Family, Vol. 5', 'Tatsuya Endo', '60', 'Manga', 'Anya Forger has been trying her best to befriend Damian Desmond, the son of the powerful Ostanian political leader Donovan Desmond, but her attempts have been constantly rebuffed. Despite the setbacks, Anya is determined to gain access to the Desmonds’ inner circle and even devises a new plan—acing her midterm exams to earn stella stars! Can the academically challenged Anya pull off this feat for the sake of world peace?', '1657064421.jpg', '2022-07-05 20:40:21', '2022-07-05 20:40:21'),
(46, 'Spy x Family, Vol. 6', 'Tatsuya Endo', '60', 'Manga', 'Twilight must infiltrate the prestigious Eden Academy to get close to his target Donovan Desmond, but has he ruined his daughter Anya’s chances with his outburst during the admissions interview? Perhaps the truly impossible mission this time is making sure Anya both becomes an exemplary student and befriends Donovan’s arrogant son Damian!.', '1657064560.jpg', '2022-07-05 20:42:40', '2022-07-05 20:42:40'),
(47, 'Spy x Family, Vol. 7', 'Tatsuya Endo', '70', 'Manga', 'Twilight must infiltrate the prestigious Eden Academy to get close to his target Donovan Desmond, but has he ruined his daughter Anya’s chances with his outburst during the admissions interview? Perhaps the truly impossible mission this time is making sure Anya both becomes an exemplary student and befriends Donovan’s arrogant son Damian!.', '1657064615.jpg', '2022-07-05 20:43:35', '2022-07-05 20:43:35'),
(48, 'Beware of Chicken: A Xianxia Cultivation Novel', 'Casualfarmer', '40', 'Manga', 'A laugh-out-loud, slice-of-life martial-arts fantasy about . . . farming????\r\n\r\nJin Rou wanted to be a cultivator. A man powerful enough to defy the heavens. A master of martial arts. A lord of spiritual power. Unfortunately for him, he died, and now I’m stuck in his body.\r\n\r\nArrogant Masters? Heavenly Tribulations? All that violence and bloodshed? Yeah, no thanks. I’m getting out of here.', '1657064822.jpg', '2022-07-05 20:47:02', '2022-07-05 20:47:02'),
(49, 'Berserk (41 book series)', 'Kentaro Miura', '500', 'Manga', 'From Book 1: Created by Kentaro Miura, Berserk is manga mayhem to the extreme - violent, horrifying, and mercilessly funny - and the wellspring for the internationally popular anime series. Not for the squeamish or the easily offended, Berserk asks for no quarter - and offers none!\r\nHis name is Guts, the Black Swordsman, a feared warrior spoken of only in whispers. Bearer of a gigantic sword, an iron hand, and the scars of countless battles and tortures, his flesh is also indelibly marked with The Brand, an unholy symbol that draws the forces of darkness to him and dooms him as their sacrifice. But Guts won\'t take his fate lying down; he\'ll cut a crimson swath of carnage through the ranks of the damned - and anyone else foolish enough to oppose him! Accompanied by Puck the Elf, more an annoyance than a companion, Guts relentlessly follows a dark, bloodstained path that leads only to death...or vengeance.', '1657065019.jpg', '2022-07-05 20:50:19', '2022-07-05 20:50:19'),
(50, 'Vinland(41 book series)', 'Makoto Yukimura', '700', 'Manga', 'The Viking invasion of London has reached a fever pitch, and Askeladd and Thorfinn rush to take part in the carnage! Their goal is the capture of Cnut, the son of King Sweyn Forkbeard and heir to the throne of Scandanavia and the Danelaw. But standing in their way is Thorkell, one of the Viking world\'s most daring warriors. The defeat of a living legend will be a formidable test of Askeladd\'s cunning and Thorfinn\'s ruthlessness, and of their ability to set aside personal grudges and fell a common enemy!', '1657065153.jpg', '2022-07-05 20:52:33', '2022-07-05 20:52:33'),
(51, 'Komi Can’t Communicate', 'Tomohito Oda', '68', 'Manga', 'Najimi takes the role of Komi’s friendship mentor very seriously (sometimes), so when it comes to light that Komi has only made eight new friends this school year, Najimi steps in to remedy the situation. But can the friendly blind date Najimi sets up lead to anything but awkwardness when everyone there has a communication disorder?!', '1657065293.jpg', '2022-07-05 20:54:53', '2022-07-05 20:54:53'),
(52, 'Thunderstruck', 'Erik Larson', '120', 'Histoire', 'In Thunderstruck, Erik Larson tells the interwoven stories of two men—Hawley Crippen, a very unlikely murderer, and Guglielmo Marconi, the obsessive creator of a seemingly supernatural means of communication—whose lives intersect during one of the greatest criminal chases of all time.', '1657066430.jpg', '2022-07-05 21:13:50', '2022-07-05 21:13:50'),
(53, 'The Rise and Fall of the Third Reich', 'William L. Shirer', '290', 'Histoire', 'When the Third Reich fell, it fell swiftly. The Nazis had little time to destroy their memos, their letters, or their diaries. William L. Shirer’s sweeping account of the Third Reich uses these unique sources, combined with his experience living in Germany as an international correspondent throughout the war.\r\n \r\nThe Rise and Fall of the Third Reich earned Shirer a National Book Award and continues to be recognized as one of the most important and authoritative books about the Third Reich and Nazi Germany ever written. The diaries of propaganda minister Joseph Goebbels, as well as evidence and other testimony gained at the Nuremberg Trials, could not have found more artful hands.\r\n \r\nShirer gives a clear, detailed, and well-documented account of how it was that Adolf Hitler almost succeeded in conquering the world. With millions of copies in print, The Rise and Fall of the Third Reich is a chilling and illuminating portrait of mankind’s darkest hours.\r\n \r\n“A monumental work.” —Theodore H. White', '1657067201.jpg', '2022-07-05 21:26:41', '2022-07-05 21:26:41'),
(54, 'From Manassas To Appomattox', 'General James Longstreet', '200', 'Histoire', 'Includes Civil War Map and Illustrations Pack - 224 battle plans, campaign maps and detailed analyses of actions spanning the entire period of hostilities.\r\n“For a comprehensive, readable, insightful account of the Civil War from one of its most important and controversial generals, few contemporary memoirs match the power and detail of Longstreet’s From Manassas to Appomattox.\r\n“The reputation of Confederate General James Longstreet-second-in-command to and intimate friend of Robert E. Lee-has undergone dramatic swings over the course of history. Revered by his men and respected by his fellow officers during the American Civil War, Longstreet became one of the Confederacy’s most visible scapegoats shortly after the war’s end. From Manassas to Appomattox is Longstreet’s memoir of the war. He recounts his participation in some of its most important battles-Manassas, Antietam, Chickamauga, and, most significantly from the standpoint of his reputation, Gettysburg. While some have argued that Longstreet did not comply efficiently with Robert E. Lee’s orders at Gettysburg, historians have concluded that the primary responsibility for the Confederate defeat on the Pennsylvania battlefield lies with Lee.', '1657067378.jpg', '2022-07-05 21:29:38', '2022-07-05 21:29:38'),
(55, 'The Memoirs of Colonel John S. Mosby', 'John S. Mosby', '170', 'Histoire', 'John Singleton Mosby, the ‘Gray Ghost’, was one of the most effective military leaders of the American Civil War.\r\n\r\nLeading his cavalry unit, known as Mosby’s rangers, he hit the Union Army time and time again with lighting raids.\r\n\r\nAfter these raids were done his troops would seemingly melt away, blending in with local farmers and townspeople.\r\n\r\nIn his memoirs, first published in 1917, he gives a thrilling account of his tactics.\r\n\r\nThis book is a fascinating account that covers Mosby’s entry into the Confederate army, daily life within it and major battles including Manassas and Gettysburg.\r\n\r\n\"No other figure of the Civil War became during his lifetime such a storybook legend as Colonel John Singleton Mosby, the audacious and resourceful Confederate soldier who, operating in sight of the Capitol dome with a handful of undisciplined guerrillas, performed prodigies in breaking up Union communications and capturing or putting to flight detachments of Union troops that were often far larger than his own.\"--Edmund Wilson, Patriotic Gore', '1657067562.jpg', '2022-07-05 21:32:42', '2022-07-05 21:32:42'),
(56, 'Adventures of a Mountain Man', 'Zenas Leonard', '30', 'Histoire', 'Leonard was born in Clearfield County, Pennsylvania. As a young adult, he worked for his uncle in Pittsburgh before moving to St. Louis and working as a clerk for the fur company, Gannt and Blackwell.\r\nIn 1831 he went with Gant and Blackwell\'s company of about 70 men on a trapping and trading expedition. Living off the land (Leonard reported that \"The flesh of the Buffaloe is the wholesomest and most palatable of meat kind\"), Leonard and his associates endured great privation while amassing a fortune in furs; the horses died in the harsh winter and the party was at times near starvation. They survived, in part, by trading with Native Americans. Among the more helpful tribal members he reported encountering was a negro who claimed to have been on Lewis & Clark\'s expedition, and who may have been the explorer-slave York. In 1835 Leonard returned to Independence, Missouri with enough wealth in furs to establish a store and trading post at Fort Osage. He continued to trade along the river for the rest of his life.\r\nLeonard\'s journal was published in book form by D.W. Moore of Clearfield, Pennsylvania in 1839, after being serialized in the Clearfield Republican. It includes many details of the different tribes with which his parties interacted. As it is in the public domain, there are numerous reprints.', '1657067711.jpg', '2022-07-05 21:35:11', '2022-07-05 21:35:11'),
(57, 'The Fighting Cheyennes', 'George Bird Grinnell', '300', 'Histoire', 'This book deals with the wars of the Cheyennes. A fighting and a fearless people. \r\nWhen their struggles with the white men began, some of their older and wiser men strove earnestly to preserve peace, but their efforts failed. During these first wars between the whites and the Cheyennes, the United States Government was struggling for its very life. Its attention was concentrated on the war between the North and the South, and the movements of a few Indians on the thinly settled frontier attracted little notice. As more and more people pushed into the West, there was more and more fighting with Indians, until in 1878-9 it ceased — so far as the Cheyennes were concerned.\r\nSince the Indians could not write, the history of their wars has been set down by their enemies, and the story has been told always from the hostile point of view. White writers have lauded white courage and claimed white successes. If it has been necessary to confess defeat, they have abused those who overcame them, as the defeated always abuse the victors.\r\nEvidently there is another side to this history, and this other side is one which should be recorded; and, since the wars are now distant in time, the Indians’ own descriptions of these battles may be read without much prejudice. I have tried to present the accounts by whites and Indians, without comment.\"', '1657067881.jpg', '2022-07-05 21:38:01', '2022-07-05 21:38:01'),
(58, 'On the Trail of Crazy Horse (Expanded, Annotated)', 'John Frederick Finerty', '120', 'Histoire', 'One of the premier classics on the American Indian Wars, originally published in 1890 as \"War Path and Bivouac.\"\r\n\r\nJohn Frederick Finerty was a famous journalist for the Chicago \"Times\" who went into the field to report on the U.S. government\'s efforts to force Native Americans onto reservations.\r\n\r\nIn 1876, Finerty was with General George Crook\'s forces at the Battle of the Rosebud. Part of Crook\'s aim was to connect with George Armstrong Custer\'s 7th Cavalry at the Little Bighorn. It never happened and Custer was killed along with five companies of his regiment by Crazy Horse, Gall, Sitting Bull, Rain-in-the-Face and other leaders.', '1657067961.jpg', '2022-07-05 21:39:21', '2022-07-05 21:39:21'),
(59, 'Mysteries of the Little Bighorn', 'Bruce Brown', '20', 'Histoire', 'Based on Bruce Brown\'s \"100 Voices\" from the Little Bighorn, the largest collection of eye-witness accounts of the Battle of the Little Bighorn ever assembled, \"Mysteries of the Little Bighorn\" lets the eye-witness record speak to some of the battle\'s most persistent mysteries.\r\nIn this volume -- Did any of Custer\'s men escape the slaughter? Did Custer \"lose it\" at the end? Who was Monaseetah and why did she protect Custer\'s corpse? And of course the central mystery, who killed Custer? And much more!', '1657068370.jpg', '2022-07-05 21:46:10', '2022-07-05 21:46:10'),
(60, 'Custer\'s Scouts at the Little Bighorn', 'Sitting Bear', '90', 'Histoire', 'Would you be surprised to know that along with Custer\'s 7th Cavalry on the way to the Little Bighorn rode scores of Native American scouts employed by the army?\r\n\r\nConsidered one of the most important source documents for the study of the Battle of the Little Bighorn (Custer\'s Last Stand), the Arikara Narrative is a fascinating account of this seminal event. No scholar of the Little Bighorn conflict omits this book from their bibliography.\r\n\r\nGeorge Armstrong Custer rode to the Little Bighorn with Arikara and Crow scouts, and even the half-Sioux legend, Mitch Bouyer. Of this group, nine survivors were interviewed in 1912. Their accounts of the battle were carefully translated and then published in 1920.\r\n\r\nThis immensely interesting and important work is available for the first time for e-readers and smartphones for less than you\'d spend on gas going to the library.\r\n\r\nBe sure to LOOK INSIDE by clicking the cover above or download a sample.', '1657068497.jpg', '2022-07-05 21:48:17', '2022-07-05 21:48:17'),
(61, 'My Life On The Plains', 'George Custer', '120', 'Histoire', 'My Life on the Plains is George Armstrong Custer’s first-hand account of the Indian Wars of 1867-1869, detailing the winter campaign of 1868 in which Custer led the 7th US cavalry against the Cheyenne Indians.\r\n\r\nWhen General Custer led his troops to annihilation in the Battle of the Little Big Horn in 1876, he was possibly the most notorious Indian fighter the army had known.\r\n\r\nCuster\'s solid claim to military fame rests upon his achievements in the Civil War, yet paradoxically he is chiefly remembered by reason of his death in the Battle of Little Big Horn in June 1876 — \"Custer\'s Last Stand\".', '1657110597.jpg', '2022-07-06 09:29:57', '2022-07-06 09:29:57');
INSERT INTO `products` (`id`, `name`, `author`, `price`, `category`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(62, '100 Voices from the Little Bighorn', 'Bruce Brown', '91', 'Histoire', '\"100 Voices\" is the largest and most complete collection of eye-witness accounts of the Battle of the Little Bighorn available anywhere, in any form. Since it first appeared in 2007, \"100 Voices\" has set in motion a revolution in Little Bighorn studies by bringing virtually the entire eye-witness record of the battle together in one place, and making it all globally searchable for the first time.', '1657110648.jpg', '2022-07-06 09:30:48', '2022-07-06 09:30:48'),
(63, 'The Last Stand', 'Nathaniel Philbrick', '120', 'Histoire', 'Nathaniel Philbrick, author of In the Hurricane\'s Eye, Pulitzer Prize finalist Mayflower, and Valiant Ambition, is a historian with a unique ability to bring history to life. The Last Stand is Philbrick\'s monumental reappraisal of the epochal clash at the Little Bighorn in 1876 that gave birth to the legend of Custer\'s Last Stand. Bringing a wealth of new information to his subject, as well as his characteristic literary flair, Philbrick details the collision between two American icons- George Armstrong Custer and Sitting Bull-that both parties wished to avoid, and brilliantly explains how the battle that ensued has been shaped and reshaped by national myth.', '1657111190.jpg', '2022-07-06 09:39:50', '2022-07-06 09:39:50'),
(64, 'Tiger\'s Voyage (Book 3 in the Tiger\'s Curse Series)', 'Colleen Houck', '70', 'Voyage', 'The third book in the gripping Tiger\'s Curse series!\r\nWith the head-to-head battle against the villainous Lokesh behind her, Kelsey confronts a new heartbreak: in the wake of his traumatic experience, her beloved Ren no longer remembers who she is. As the trio continues their quest by challenging five cunning and duplicitous dragons, Ren and Kishan once more vie for her affections-leaving Kelsey more confused than ever.\r\nFraught with danger, filled with magic, and packed with romance, Tiger\'s Voyage brings Kelsey and her two tiger princes one step closer to breaking the curse.This fast-paced novel includes a sneak peek at Tiger\'s Destiny (Book 4) and a smartphone Tag code on the back cover that links to the series website.', '1657111433.jpg', '2022-07-06 09:43:53', '2022-07-06 09:43:53'),
(65, 'A General History and Collection of Voyages and Travels', 'Robert Kerr', '280', 'Voyage', 'A General History and Collection of Voyages and Travels Volume 16 by Robert Kerr', '1657111496.jpg', '2022-07-06 09:44:56', '2022-07-06 09:44:56'),
(66, 'Kauai Trailblazer', 'Jerry Sprout', '12', 'Voyage', 'This NEW 2016 SIXTH EDITION E-BOOK of the Sprout\'s top-selling guide has been completely reivised and updated. It\'s packed with new activities, dozens of fresh photos, and a special Trailblazer Kids chapter for families headed to Hawaii\'s adventure island.\r\n\r\nTrailblazer guides, in print for more than two decades, are popular among independent and active travelers. The books are known for their user-friendly format, readability, and sharp graphics.', '1657111676.jpg', '2022-07-06 09:47:56', '2022-07-06 09:47:56'),
(67, 'The Ultimate Kauai Guidebook: Kauai Revealed', 'Andrew Doughty', '140', 'Voyage', 'The finest guidebook ever written for Kaua‘i. Now you can plan your best vacation—ever. This all new 12th edition is a candid, humorous guide to everything there is to see and do on the island. Best-selling author and longtime Hawai‘i resident, Andrew Doughty, unlocks the secrets of an island so lush and diverse that many visitors never realize all that it has to offer. Explore with him as he reveals breathtaking trails, secluded beaches, pristine reefs, delicious places to dine, relaxing resorts, exciting waterfalls, colorful canyons and so much more. Every restaurant, activity provider, business and resort is reviewed personally and anonymously. This book and a rental car are all you need to discover what makes Kaua‘i so exciting.', '1657111768.jpg', '2022-07-06 09:49:28', '2022-07-06 09:49:28'),
(68, 'Fodor\'s Maui: with Molokai & Lanai', 'Fodor\'s Travel Guides', '100', 'Voyage', 'Whether you want to hike in Maui’s national park, go snorkeling, or attend a luau, the local Fodor’s travel experts in Maui are here to help! Fodor’s Maui guidebook is packed with maps, carefully curated recommendations, and everything else you need to simplify your trip-planning process and make the most of your time.', '1657111925.jpg', '2022-07-06 09:52:05', '2022-07-06 09:52:05'),
(69, 'Compass American Guides', 'Fodor\'s', '170', 'Voyage', '\"Utah is a must for those who want to visit Salt Lake City and the other sites of the State of Deseret.\" -- World News Features', '1657112016.jpg', '2022-07-06 09:53:36', '2022-07-06 09:53:36'),
(70, 'Frommer\'s EasyGuide to Maui', 'Jeanne Cooper', '14', 'Voyage', 'Everything you need for a successful Maui vacation is in this concise and intelligent guide. Head to the islands of Maui County—Maui, Lanai, and Molokai, all of which are covered in this book—and you’ll find a dizzying variety of sights to explore and adventures to experience, from idyllic beaches and dreamy tropical waterfalls to dormant volcanoes, historic ruins, buzzy restaurants, and exciting nightspots. Author Jeanne Cooper, a longtime Hawaii expert, has crisscrossed these islands and personally visited every place named in this book—and many she deemed not worth your time.', '1657113587.jpg', '2022-07-06 10:19:47', '2022-07-06 10:19:47'),
(71, 'Mystery on Maui (Nancy Drew Mysteries Book 143)', 'Carolyn Keene', '50', 'Voyage', 'Nancy, Bess, and George are on Maui to check out a major international surfing competition. But there’s trouble in paradise—big money is at stake in the contest, and someone’s playing a dirty game.', '1657114466.jpg', '2022-07-06 10:34:26', '2022-07-06 10:34:26'),
(72, 'Destinations of a Lifetime', 'National Geographic', '270', 'Voyage', 'NatGeo takes you on a photographic tour of the world\'s most spectacular destinations, inspiring tangible ideas for your next trip. Travel to hundreds of the most breathtaking locales-both natural and man-made-illustrated with vivid images taken by the organization\'s world-class photographers. These images, coupled with evocative text, feature a plethora of visual wonders: ancient monoliths, scenic islands, stunning artwork, electric cityscapes, white-sand seashores, rain forests, ancient cobbled streets, and both classic and innovative architecture. Loaded with hard service information for each location, Destinations of a Lifetime has it all: when to go, where to eat, where to stay, and what to do to ensure the most enriching and authentic experience.', '1657115460.jpg', '2022-07-06 10:51:00', '2022-07-06 10:51:00'),
(73, '1,000 Perfect Weekends Great Getaways Around the Globe', 'George Stone', '300', 'Voyage', 'Packed with innovative ideas and inspiring photographs, this gift-worthy treasury features 1,000 dream weekend escapes from sunny beach retreats to lush mountain idylls, exotic city sojourns, and wild adventures around the world.\r\nWhether you\'re looking for a way to unplug from the busy work week, take the family on a quick getaway, or add to a vacation itinerary, this practical and inspiring book provides the perfect way to plan your next quick escape. Whatever your pleasure, 1,000 Perfect Weekends has a unique itinerary built to excite you, illustrated with dramatic National Geographic photographs. Divided by theme and interest--including nature parks, country weekends, mountain retreats, enabled travel, romantic getaways, traveling with pets, and more--this fun-packed guide offers an adventure you can experience in 36 to 72 hours', '1657117757.jpg', '2022-07-06 11:29:17', '2022-07-06 11:29:17'),
(74, 'Journeys of a Lifetime, Second Edition', 'George Stone', '250', 'Voyage', 'Compiled from the favorite trips of National Geographic\'s legendary travel writers, this fully updated, 10th anniversary edition of Journeys of a Lifetime spans the globe to highlight the best of the world\'s most celebrated and lesser-known sojourns. Offering a diverse array of possibilities, every continent and possible form of transport is covered, illustrated with glorious color photographs. With 16 new pages; new destinations like Cartegena, Colombia; and updated information throughout, this timely new edition is the perfect resource for travelers who crave adventurous trips--from trekking the heights of Mt. Kilimanjaro in Tanzania to mountain biking in Transylvania--and those searching for more specific experiences (the world\'s top small cruises, hot new museums around the world, secrets for following in the footsteps of film and TV heroes, and more). Each chapter features stunning photography, full-color maps, and practical tips, including how to get there, when to visit, and how to make the most of your journey.\r\n\r\nInformative and inspiring, this luxurious volume is a lifelong resource that readers will treasure for years to come.', '1657118041.jpg', '2022-07-06 11:34:01', '2022-07-06 11:34:01'),
(75, 'The Power of One More', 'Ed Mylett', '170', 'Affaires', 'In The Power of One More, renowned keynote speaker and performance expert Ed Mylett draws on 30 years of experience as an entrepreneur and coach to top athletes, entertainers, and business executives to reveal powerful strategies to help you live an extraordinary \"one more\" life.\r\n\r\nIn The Power of One More, you\'ll:\r\n\r\nLearn why you\'re closer to your dreams and goals than you think and why using The Power of One More strategies will help you cross the finish line in whatever race you\'re running\r\nUnderstand the psychology and science of how to use The Power of One More in every part of your life to help you solve problems and achieve levels of success you never thought possible\r\nDiscover time-tested and unique solutions to challenges that will remove the mental roadblocks you\'ve been battling for years\r\nPerfect for anyone who wants more bliss, wealth, or better relationships, The Power of One More is an indispensable roadmap to realizing and exceeding your personal and professional goals by tapping into the superpowers and gifts you already have inside you.', '1657121053.jpg', '2022-07-06 12:24:13', '2022-07-06 12:24:13'),
(76, 'Scars and Stripes', 'Tim Kennedy', '140', 'Affaires', 'From decorated Green Beret sniper, UFC headliner, and all around badass Tim Kennedy, a rollicking, inspirational memoir offering lessons in how to embrace failure and weather storms, in order to unlock the strongest version of yourself.\r\n\r\nTim Kennedy has a problem; he only feels alive right before he’s about to die. Kennedy, a Green Beret, decorated Army sniper, and UFC headliner, has tackled a bull with his bare hands, jumped out of airplanes, dove to the depths of the ocean, and traveled the world hunting poachers, human traffickers, and the Taliban.', '1657121150.jpg', '2022-07-06 12:25:50', '2022-07-06 12:25:50'),
(77, 'Atomic Habits An Easy & Proven Way to Build Good Habits ...', 'James Clear', '100', 'Affaires', 'The number one New York Times best seller. Over one million copies sold!\r\nTiny Changes, Remarkable Results\r\nNo matter your goals, Atomic Habits offers a proven framework for improving - every day. James Clear, one of the world\'s leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.', '1657121291.jpg', '2022-07-06 12:28:11', '2022-07-06 12:28:11'),
(78, 'The 7 Habits of Highly Effective People', 'Stephen R. Covey', '120', 'Affaires', 'New York Times best seller - over 40 million copies sold\r\n\r\nThe number one Most Influential Business Book of the 20th century \r\n\r\nOne of the most inspiring and impactful books ever written, The 7 Habits of Highly Effective People has captivated listeners for nearly three decades. It has transformed the lives of presidents and CEOs, educators and parents - millions of people of all ages and occupations. Now, this 30th anniversary edition of the timeless classic commemorates the wisdom of the 7 Habits with modern additions from Sean Covey.', '1657121423.jpg', '2022-07-06 12:30:23', '2022-07-06 12:30:23'),
(79, 'Can\'t Hurt Me: Master Your Mind and Defy the Odds', 'David Goggins', '70', 'Affaires', 'or David Goggins, childhood was a nightmare - poverty, prejudice, and physical abuse colored his days and haunted his nights. But through self-discipline, mental toughness, and hard work, Goggins transformed himself from a depressed, overweight young man with no future into a US Armed Forces icon and one of the world\'s top endurance athletes. The only man in history to complete elite training as a Navy SEAL, Army Ranger, and Air Force Tactical Air Controller, he went on to set records in numerous endurance events, inspiring Outside magazine to name him The Fittest (Real) Man in America.', '1657121687.jpg', '2022-07-06 12:34:47', '2022-07-06 12:34:47'),
(80, 'Self Discipline', 'Beth Goggins', '20', 'Affaires', 'You’re about to discover how to take back control of your body and emotions to make them do what you say, when you say it! Can I get a Hoo-Ya? This little but important guide will teach you everything you need to know for you to take back control. \r\n\r\nTo experience more freedom in your life, you need more of the opposite: self-discipline.\r\n\r\nDoes that sound paradoxical?', '1657121757.jpg', '2022-07-06 12:35:57', '2022-07-06 12:35:57'),
(81, 'F--k Your Feelings: Master Your Mind', 'Ryan Munsey', '240', 'Affaires', '95 percent of decisions are based on feelings. Not logic. Not rational thought. Feelings. Can you feel the pull of emotions, hunger, guilt, pain, jealously, depression, and everything else weighing on every decision that you make?\r\n\r\nBusiness owners, entrepreneurs, regular people looking to get in shape, anyone with a goal that isn\'t terrified of tough love - you need to listen to F--k Your Feelings - as soon as possible! In this audiobook you\'ll learn how to use personal mind control techniques to control the way your brain is wired, constantly accomplish your goals, and feel MORE pleasure during the day.', '1657122322.jpg', '2022-07-06 12:45:22', '2022-07-06 12:45:22'),
(82, 'Built, Not Born: A Self-Made Billionaire\'s', 'Tom Golisano', '80', 'Affaires', 'Tested and proven, no-nonsense advice on how to navigate risk and succeed in all phases of business ownership - written by Tom Golisano, self-made billionaire and founder of Paychex.\r\n\r\n\"Tom Golisano understands what it takes grow and thrive as a business owner at all levels, and Built, Not Born is full of practical insights for those who have made or are considering making the leap to starting a new business.\" (Tom Monaghan, founder, Domino\'s Pizza)', '1657123230.jpg', '2022-07-06 13:00:30', '2022-07-06 13:00:30'),
(83, 'The Italian Kid Did It', 'Tom Golisano', '140', 'Affaires', 'Entrepreneurs, business owners, investors: Here is the rare, no-nonsense advice you haven’t heard - straight from Paychex founder and billionaire philanthropist Tom Golisano - to overcome the most common (and some not so common) obstacles to live a successful life.\r\nWatching his father struggle to support his family through bigotry and other challenges in being an Italian immigrant, Tom Golisano learned early on the value of thinking outside the box and not letting perception sway your view of reality.', '1657123656.jpg', '2022-07-06 13:07:36', '2022-07-06 13:07:36'),
(84, 'CEO Excellence', 'Carolyn Dewar', '390', 'Affaires', 'Being a CEO at any of the world’s largest companies is among the most challenging roles in business. Billions, and even trillions, are at stake—and the fates of tens of thousands of employees often hang in the balance. Yet, even when “can’t miss” high-achievers win the top job, very few excel. Thirty percent of Fortune 500 CEOs last fewer than three years, and two out of five new CEOs are perceived to be failing within eighteen months.', '1657124092.jpg', '2022-07-06 13:14:52', '2022-07-06 13:14:52'),
(85, 'Being Present: Commanding Attention at Work', 'Jeanine W. Turner', '220', 'Affaires', 'Survival strategies for communicating in a notification-saturated world\r\n\r\nAs our ability to pay attention in a world of distractions vanishes, it\'s no wonder that our ability to be heard and understood - to convey our messages - is also threatened. Whether working with our teams and customers or communicating with our families and friends, it is increasingly difficult to break through the digital devices that get in the way of communication. And the ubiquity of digital devices means that we are often \"multicommunicating,\" participating in multiple conversations at once. As a result, our ability to be socially present with an audience requires an intentional approach.\r\n\r\nThis increased strain on attention has never been more clear than during the global pandemic, when our homes suddenly accommodated both work and family life. What are our options when facing professional communications at all hours? Do we ask for the technology to be put away at the dinner table? Establish other ground rules? What about using digital communications to our advantage - how can we facilitate information - sharing in the midst of a world where we are overwhelmed with content?', '1657124757.jpg', '2022-07-06 13:25:57', '2022-07-06 13:25:57'),
(86, 'Breath', 'James Nestor', '120', 'Science', 'A New York Times Best Seller\r\n\r\nA Washington Post Notable Nonfiction Book of 2020 \r\n\r\nNamed a Best Book of 2020 by NPR\r\n\r\n“A fascinating scientific, cultural, spiritual and evolutionary history of the way humans breathe - and how we’ve all been doing it wrong for a long, long time.” (Elizabeth Gilbert, author of Big Magic and Eat Pray Love)\r\n\r\nNo matter what you eat, how much you exercise, how skinny or young or wise you are, none of it matters if you’re not breathing properly.\r\n\r\nThere is nothing more essential to our health and well-being than breathing: Take air in, let it out, repeat 25,000 times a day. Yet, as a species, humans have lost the ability to breathe correctly, with grave consequences. Journalist James Nestor travels the world to figure out what went wrong and how to fix it. The answers aren’t found in pulmonology labs, as we might expect, but in the muddy digs of ancient burial sites, secret Soviet facilities, New Jersey choir schools, and the smoggy streets of São Paulo. Nestor tracks down men and women exploring the hidden science behind ancient breathing practices like Pranayama, Sudarshan Kriya, and Tummo and teams up with pulmonary tinkerers to scientifically test long-held beliefs about how we breathe.', '1657124951.jpg', '2022-07-06 13:29:11', '2022-07-06 13:29:11'),
(87, 'Why We Sleep: Unlocking the Power of Sleep and Dreams', 'Matthew Walker', '90', 'Science', 'The first sleep book by a leading scientific expert - Professor Matthew Walker, director of UC Berkeley\'s Sleep and Neuroimaging Lab - reveals his groundbreaking exploration of sleep, explaining how we can harness its transformative power to change our lives for the better.\r\n\r\nSleep is one of the most important but least understood aspects of our life, wellness, and longevity. Until very recently, science had no answer to the question of why we sleep, or what good it served, or why we suffer such devastating health consequences when we don\'t sleep. Compared to the other basic drives in life - eating, drinking, and reproducing - the purpose of sleep remained elusive.\r\n\r\nBut an explosion of scientific discoveries in the last 20 years has shed new light on this fundamental aspect of our lives. Now, preeminent neuroscientist and sleep expert Matthew Walker gives us a new understanding of the vital importance of sleep and dreaming. Among so many other things, within the brain, sleep enriches our ability to learn, memorize, and make logical decisions. It recalibrates our emotions, restocks our immune system, fine-tunes our metabolism, and regulates our appetite. Dreaming mollifies painful memories and creates a virtual reality space in which the brain melds past and present knowledge to inspire creativity.', '1657125111.jpg', '2022-07-06 13:31:51', '2022-07-06 13:31:51'),
(88, 'The Book of Hope A Survival Guide for Trying Times', 'Jane Goodall', '140', 'Science', 'In a world that seems so troubled, how do we hold on to hope?\r\n\r\nThis program is read by the authors and includes a bonus PDF.\r\n\r\nLooking at the headlines - the worsening climate crisis, a global pandemic, loss of biodiversity, political upheaval - it can be hard to feel optimistic. And yet hope has never been more desperately needed.\r\n\r\nIn this urgent audiobook, Jane Goodall, the world\'s most famous living naturalist, and Douglas Abrams, the internationally best-selling coauthor of The Book of Joy, explore through intimate and thought-provoking dialogue one of the most sought-after and least understood elements of human nature: hope. In The Book of Hope, Jane focuses on her \"Four Reasons for Hope\": The Amazing Human Intellect, The Resilience of Nature, The Power of Young People, and The Indomitable Human Spirit.', '1657125223.jpg', '2022-07-06 13:33:43', '2022-07-06 13:33:43'),
(89, 'Funny Farm: My Unexpected Life with 600 Rescue Animals', 'Laurie Zaleski', '140', 'Science', 'Laurie Zaleski never aspired to run an animal rescue; that was her mother Annie’s dream. But from girlhood, Laurie was determined to make the dream come true. Thirty years later as a successful businesswoman, she did it, buying a 15-acre farm deep in the Pinelands of South Jersey. She was planning to relocate Annie and her caravan of ragtag rescues - horses and goats, dogs and cats, chickens and pigs - when Annie died, just two weeks before moving day. In her heartbreak, Laurie resolved to make her mother’s dream her own. In 2001, she established the Funny Farm Animal Rescue outside Mays Landing, New Jersey. Today, she carries on Annie’s mission to save abused and neglected animals. \r\n\r\nFunny Farm is Laurie’s story: of promises kept, dreams fulfilled, and animals lost and found. It’s the story of Annie McNulty, who fled a nightmarish marriage with few skills, no money and no resources, dragging three kids behind her, and accumulating hundreds of cast-off animals on the way. And lastly, it’s the story of the brave, incredible, and adorable animals that were rescued.', '1657125311.jpg', '2022-07-06 13:35:11', '2022-07-06 13:35:11'),
(90, 'Elon Musk: Tesla, SpaceX, and the Quest for a Fantastic Future', 'Ashlee Vance', '80', 'Science', 'In the spirit of Steve Jobs and Moneyball, Elon Musk is both an illuminating and authorized look at the extraordinary life of one of Silicon Valley\'s most exciting, unpredictable, and ambitious entrepreneurs - a real-life Tony Stark - and a fascinating exploration of the renewal of American invention and its new makers.\r\n\r\nElon Musk spotlights the technology and vision of Elon Musk, the renowned entrepreneur and innovator behind SpaceX, Tesla, and SolarCity, who sold one of his Internet companies, PayPal, for $1.5 billion. Ashlee Vance captures the full spectacle and arc of the genius\' life and work, from his tumultuous upbringing in South Africa and flight to the United States to his dramatic technical innovations and entrepreneurial pursuits.\r\n\r\nVance uses Musk\'s story to explore one of the pressing questions of our age: Can the nation of inventors and creators who led the modern world for a century still compete in an age of fierce global competition? He argues that Musk - one of the most unusual and striking figures in American business history - is a contemporary, visionary amalgam of legendary inventors and industrialists, including Thomas Edison, Henry Ford, Howard Hughes, and Steve Jobs. More than any other entrepreneur today, Musk has dedicated his energies and his own vast fortune to inventing a future that is as rich and far reaching as the visionaries of the golden age of science-fiction fantasy.', '1657125349.jpg', '2022-07-06 13:35:49', '2022-07-06 13:35:49'),
(91, 'Inspired', 'Marty Cagan', '180', 'Science', 'How do today\'s most successful tech companies - Amazon, Google, Facebook, Netflix, Tesla - design, develop, and deploy the products that have earned the love of literally billions of people around the world? Perhaps surprisingly, they do it very differently from the vast majority of tech companies. In Inspired, technology product management thought leader Marty Cagan provides listeners with a master class in how to structure and staff a vibrant and successful product organization and how to discover and deliver technology products that your customers will love - and that will work for your business.', '1657125406.jpg', '2022-07-06 13:36:46', '2022-07-06 13:36:46'),
(92, 'The Real Anthony Fauci', 'Robert F. Kennedy Jr', '20', 'Science', 'As director of the National Institute of Allergy and Infectious Diseases (NIAID), Dr. Anthony Fauci dispenses $6.1 billion in annual taxpayer-provided funding for scientific research, allowing him to dictate the subject, content, and outcome of scientific health research across the globe. Fauci uses the financial clout at his disposal to wield extraordinary influence over hospitals, universities, journals, and thousands of influential doctors and scientists - whose careers and institutions he has the power to ruin, advance, or reward.\r\n\r\nDuring more than a year of painstaking and meticulous research, Robert F. Kennedy Jr. unearthed a shocking story that obliterates media spin on Dr. Fauci...and that will alarm every American - Democrat or Republican - who cares about democracy, our Constitution, and the future of our children’s health.', '1657125462.jpg', '2022-07-06 13:37:42', '2022-07-06 13:37:42'),
(93, 'Pastured Poultry Profit', 'Joel Salatin', '300', 'Science', 'A couple working six months per year for 50 hours per week on 20 acres can net $25,000 to $30,000 per year with an investment equivalent to the price of one new medium-sized tractor. Seldom has agriculture held out such a plum. In a day when mainline farm experts predict the continued demise of the family farm, the pastured poultry opportunity shines like a beacon in the night, guiding the way to a brighter future.\r\n\r\nPLEASE NOTE: When you purchase this title, the accompanying PDF will be available in your Audible Library along with the audio.', '1657139986.jpg', '2022-07-06 17:39:46', '2022-07-06 17:39:46'),
(94, 'Astrophysics for People in a Hurry', 'Neil deGrasse Tyson', '90', 'Science', 'What is the nature of space and time? How do we fit within the universe? How does the universe fit within us? There\'s no better guide through these mind-expanding questions than acclaimed astrophysicist and best-selling author Neil deGrasse Tyson.\r\n\r\nBut today, few of us have time to contemplate the cosmos. So Tyson brings the universe down to Earth succinctly and clearly, with sparkling wit, in digestible chapters consumable anytime and anywhere in your busy day. While waiting for your morning coffee to brew, or while waiting for the bus, the train, or the plane to arrive, Astrophysics for People in a Hurry will reveal just what you need to be fluent and ready for the next cosmic headlines: from the big bang to black holes, from quarks to quantum mechanics, and from the search for planets to the search for life in the universe.', '1657140432.jpg', '2022-07-06 17:47:12', '2022-07-06 17:47:12'),
(95, 'My Favorite Universe', 'Neil deGrasse Tyson', '120', 'Science', 'What forces molded the universe? Are those forces still at work, removing, changing, or adding heavenly bodies even as we gaze upward? Will humanity, and Earth itself, one day be gone? Are we alone?\r\n\r\nIn an era when science journalism is perhaps more thorough and ambitious than ever before, fascinating explorations of questions like these seem available to us almost every day - provided we have a working understanding of the scientific theories on which they\'re based. Discover the answers to these and other startling questions about the cosmos with My Favorite Universe, a spirited and intellectually engaging journey through the cosmos and its history, from before the big bang to the likely ways in which Earth, and perhaps the entire universe, might end.\r\n\r\nIn this lecture series, Professor Neil deGrasse Tyson, the astrophysicist who directs the nation\'s most famous planetarium, makes that understanding available to anyone. Explore how black holes are formed, how asteroids move through space, why the odds seem overwhelmingly in favor of extraterrestrial life, and much more. With the foundation provided by this magnificent course, the realities of the universe will be revealed in stark - and often violent - beauty.', '1657140579.jpg', '2022-07-06 17:49:39', '2022-07-06 17:49:39'),
(96, 'Is That a Fact?: Frauds, Quacks, and the Real Science of Everyday Life', 'Dr. Joe Schwarcz', '110', 'Science', 'Eat this and live to 100. Don’t, and die. Today, hyperboles dominate the media, which makes parsing science from fiction an arduous task when deciding what to eat, what chemicals to avoid, and what’s best for the environment. In Is That a Fact?, best-selling author Dr. Joe Schwarcz carefully navigates the storm of misinformation to help us separate fact from folly and shrewdness from foolishness. \r\n\r\nAre GMOs really harmful? Or could they help developing countries? Which “miracle weight loss foods” gained popularity through exuberant data dredging? Is BPA dangerous or just a victim of unforgiving media hype? Is organic better? Dr. Joe questions the reliability and motives of “experts” in this easy-to-understand yet critical look at what’s fact and what’s plain nonsense.', '1657140980.jpg', '2022-07-06 17:56:20', '2022-07-06 17:56:20'),
(97, 'The Millionaire Next Door', 'Thomas J. Stanley', '160', 'Finance', 'The bestselling The Millionaire Next Door identifies seven common traits that show up again and again among those who have accumulated wealth. Most of the truly wealthy in this country don\'t live in Beverly Hills or on Park Avenue-they live next door. This new edition, the first since 1998, includes a new foreword for the twenty-first century by Dr. Thomas J. Stanley.', '1657141138.jpg', '2022-07-06 17:58:58', '2022-07-06 17:58:58'),
(98, 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', '50', 'Finance', 'April of 2022 marks a 25-year milestone for the personal finance classic Rich Dad Poor Dad that still ranks as the #1 Personal Finance book of all time. And although 25 years have passed since Rich Dad Poor Dad was first published, readers will find that very little in the book itself has changed — and for good reason. While so much in our world is changing a high speed, the lessons about money and the principles of Rich Dad Poor Dad haven’t changed. Today, as money continues to play a key role in our daily lives, the messages in Robert Kiyosaki’s international bestseller are more timely and more important than ever.', '1657142205.jpg', '2022-07-06 18:16:45', '2022-07-06 18:16:45'),
(99, 'The Millionaire Next Door', 'Thomas J. Stanley', '99', 'Finance', 'The bestselling The Millionaire Next Door identifies seven common traits that show up again and again among those who have accumulated wealth. Most of the truly wealthy in this country don\'t live in Beverly Hills or on Park Avenue-they live next door. This new edition, the first since 1998, includes a new foreword for the twenty-first century by Dr. Thomas J. Stanley.', '1657142255.jpg', '2022-07-06 18:17:35', '2022-07-06 18:17:35'),
(100, 'Personal Finance For Dummies', 'Eric Tyson', '110', 'Finance', 'From budgeting, saving, and reducing debt, to making timely investment choices and planning for the future, Personal Finance For Dummies provides fiscally conscious readers with the tools they need to take charge of their financial life.\r\n\r\nThis new edition includes coverage of an extensive new tax bill that took effect in 2018 and the impact on individuals, families, small businesses, and on real estate and investing decisions. Plus, it covers emerging investing interests like technology and global investing, cryptocurrencies, pot stocks, the lifestyle changes occurring with millennials, and more.', '1657142379.jpg', '2022-07-06 18:19:39', '2022-07-06 18:19:39'),
(101, 'Investing For Dummies', 'Eric Tyson', '150', 'Finance', 'The best-selling investing guide offers new information, new insights, and new perspectives\r\nThere\'s nothing better than having your money make more money—and getting to that place isn\'t as complicated as you\'ve been led to believe. With some common sense, careful planning, and the right advice, you too can watch your money accumulate like it\'s growing on trees.\r\n\r\nIn the Ninth Edition of Investing for Dummies, best-selling author and nationally renowned personal finance expert Eric Tyson shows you how to make your money work for you with rock-solid advice that\'s stood the test of time. Steering clear of flashy get-rich-quick schemes, Tyson offers a slow-and-steady approach that can work for everyone from young professionals just starting their careers to baby boomers who want to bulk up their nest eggs just before retirement.', '1657142443.jpg', '2022-07-06 18:20:43', '2022-07-06 18:20:43'),
(102, 'How to Adult: Personal Finance for the Real World', 'Jake Cousineau', '80', 'Finance', 'An essential resource for a high school graduate, college student, or any other young adult who needs to prepare for the financial realities of adulthood.\r\n\r\nDrawing on years of teaching personal finance in the high school classroom, as well as valuable life experience as a young professional, Cousineau introduces topics ranging from compound interest and mutual funds to Roth IRAs and insurance deductibles. Each chapter contains straightforward explanations, practical examples, revealing anecdotes, and hands-on tools that will help you to jump-start your personal financial journey.', '1657142531.jpg', '2022-07-06 18:22:11', '2022-07-06 18:22:11'),
(103, 'Get a Financial Life', 'Beth Kobliner', '110', 'Finance', 'More than ever before, people in their twenties and thirties need help getting their financial lives in order. And who could blame them? These so-called millennials have come of age in the wake of the worst economic crisis in memory, and are now trying to get by in its aftermath. They owe record levels of student loan debt, face sky-high rents, and struggle to live on a budget in an uncertain economy.', '1657142573.jpg', '2022-07-06 18:22:53', '2022-07-06 18:22:53'),
(104, 'The Automatic Millionaire, Expanded and Updated', 'David Bach', '80', 'Finance', 'What’s the secret to becoming a millionaire?\r\n \r\nFor years people have asked David Bach, the national bestselling author of Smart Women Finish Rich, Smart Couples Finish Rich, and Start Late, Finish Rich what’s the real secret to getting rich? What’s the one thing I need to do?\r\n \r\nNow, in the newly revised The Automatic Millionaire, expanded and updated, David Bach is sharing that secret.\r\n \r\nThe Automatic Millionaire starts with the powerful story of an average American couple--he’s a low-level manager, she’s a beautician--whose joint income never exceeds $55,000 a year, yet who somehow manage to own two homes debt-free, put two kids through college, and retire at 55 with more than $1 million in savings. Through their story you’ll learn the surprising fact that you cannot get rich with a budget! You have to have a plan to pay yourself first that is totally automatic, a plan that will automatically secure your future and pay for your present.', '1657142634.jpg', '2022-07-06 18:23:54', '2022-07-06 18:23:54'),
(105, 'I Will Teach You to Be Rich, Second Edition', 'Ramit Sethi', '110', 'Finance', 'The groundbreaking NEW YORK TIMES and WALL STREET JOURNAL BESTSELLER that taught a generation how to earn more, save more, and live a rich life—now in a revised 2nd edition.\r\n \r\nBuy as many lattes as you want. Choose the right accounts and investments so your money grows for you—automatically. Best of all, spend guilt-free on the things you love.', '1657142705.jpg', '2022-07-06 18:25:05', '2022-07-06 18:25:05'),
(106, 'Breaking The Habit of Being Yourself', 'Dr. Joe Dispenza', '90', 'Finance', 'In Breaking the Habit of Being Yourself, renowned author, speaker, researcher, and chiropractor Dr. Joe Dispenza combines the fields of quantum physics, neuroscience, brain chemistry, biology, and genetics to show you what is truly possible.\r\n\r\nNot only will you be given the necessary knowledge to change any aspect of yourself, but you will be taught the step-by-step tools to apply what you learn in order to make measurable changes in any area of your life.\r\n\r\nDr. Joe demystifies ancient understandings and bridges the gap between science and spirituality. Through his powerful workshops and lectures, thousands of people in 24 different countries have used these principles to change from the inside out. Once you break the habit of being yourself and truly change your mind, your life will never be the same!', '1657142787.jpg', '2022-07-06 18:26:27', '2022-07-06 18:26:27'),
(107, 'Why Didn\'t They Teach Me This in School?', 'Cary Siegel', '140', 'Finance', 'Bestselling 5 Star Graduation Gift for both College and High School grads! Recommended by eBay, Forbes, Lifehack, Elite Daily, Real Simple and Bustle. Why do high schools and colleges require students to take courses in English, math and science, yet have absolutely no requirements for students to learn about personal money management?Why Didn\'t They Teach Me This in School? 99 Personal Money Management Lessons to Live By was initially developed by the author to pass on to his five children as they entered adulthood. As it developed, the author realized that personal money management skills were rarely taught in high schools, colleges and even in MBA programs. Unfortunately, books on the subject tend to be complicated, lengthy reads. The book includes eight important lessons focusing on 99 principles that will quickly and memorably enhance any individual\'s money management acumen. Unlike many of the personal money management books out there, this book is a quick, easily digested read that focuses more on the qualitative side than the quantitative side of personal money management. The principles are not from a text book. Rather, they are practical principles learned by the author as he navigated through his financial life. Many are unorthodox in order to be memorable and provoke deeper thought by the reader.Not only an excellent graduation gift for high school and college students but also a great read for any adult! ALSO AVAILABLE IN SPANISH - \"POR QUE NO ME ENSENARON ESTO EN LA ESCUELA?\"', '1657142881.jpg', '2022-07-06 18:28:01', '2022-07-06 18:28:01'),
(108, 'Adulting 101', 'Josh Burnette', '80', 'Finance', 'Adulting (verb) : To do grown-up things and have responsibilities, such as finding full-time employment, paying rent, or owning a car.\r\n\r\nBasic life skills go mostly untaught in classrooms, so graduates are on their own to figure out how to live successfully in the world. Without any guidance, where do you start? Adulting 101 is a clever, practical, and timely guide to show how to:\r\n\r\n- Find a job and be wildly successful at work\r\n- Buy the items you need as an adult (apartment, car, insurance)\r\n- Set goals, prioritize, and get work done\r\n- Communicate professionally and effectively\r\n- Learn money management and how to save and invest wisely\r\n- Navigate personal and professional relationships\r\n- Avoid the common mistakes of being out on your own\r\n- And much, much more', '1657143013.jpg', '2022-07-06 18:30:13', '2022-07-06 18:30:13');

-- --------------------------------------------------------

--
-- Structure de la table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product_orders`
--

INSERT INTO `product_orders` (`id`, `order_id`, `user_id`, `product_id`, `name`, `author`, `price`, `category`, `photo`, `quantite`, `created_at`, `updated_at`) VALUES
(5, 4, 1, 108, 'Adulting 101', 'Josh Burnette', '80', 'Finance', '1657143013.jpg', '4', '2022-08-02 21:36:10', '2022-08-02 21:36:10'),
(6, 4, 1, 104, 'The Automatic Millionaire, Expanded and Updated', 'David Bach', '80', 'Finance', '1657142634.jpg', '4', '2022-08-02 21:36:10', '2022-08-02 21:36:10'),
(7, 4, 1, 44, 'Spy x Family, Vol. 4', 'Tatsuya Endo', '60', 'Manga', '1657064368.jpg', '4', '2022-08-02 21:36:10', '2022-08-02 21:36:10'),
(8, 4, 1, 10, 'Paralegal Career For Dummies', 'Scott A. Hatch', '130', 'Droit', '1657034561.jpg', '2', '2022-08-02 21:36:10', '2022-08-02 21:36:10'),
(9, 4, 1, 105, 'I Will Teach You to Be Rich, Second Edition', 'Ramit Sethi', '110', 'Finance', '1657142705.jpg', '2', '2022-08-02 21:36:10', '2022-08-02 21:36:10'),
(10, 5, 1, 54, 'From Manassas To Appomattox', 'General James Longstreet', '200', 'Histoire', '1657067378.jpg', '4', '2022-08-04 07:07:49', '2022-08-04 07:07:49'),
(11, 5, 1, 51, 'Komi Can’t Communicate', 'Tomohito Oda', '68', 'Manga', '1657065293.jpg', '2', '2022-08-04 07:07:49', '2022-08-04 07:07:49');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `lastname`, `datenaissance`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hamza Semmak', 'Semmak', 'Hamza', '2022-07-04', 'Hamza@gmail.com', NULL, '$2y$10$e3j5PmReJJbJeSkNZBGFN.Nn1n1i4U9Plh3tvwT5ZgrMJNlCKWYtK', NULL, '2022-07-25 14:42:41', '2022-07-25 14:42:41');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_product_id_foreign` (`product_id`);

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_product_id_foreign` (`product_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_orders_order_id_foreign` (`order_id`),
  ADD KEY `product_orders_product_id_foreign` (`product_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT pour la table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product_orders`
--
ALTER TABLE `product_orders`
  ADD CONSTRAINT `product_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
