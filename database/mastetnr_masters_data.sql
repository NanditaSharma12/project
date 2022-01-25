-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 09:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mastetnr_masters_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`, `role_id`, `status`, `date`) VALUES
(1, 'Admin', 'admin@masters.com', '', 'Admin@#2021', 0, 0, '2021-11-24 04:45:23'),
(2, 'Sagar Sharma', 'sagar@masterinfotech.com', '9685741230', 'DM@#2021', 3, 0, '2021-12-09 07:35:20'),
(3, 'Jasleen', 'hr@masterinfotech.com', '7898789890', 'HrMaster@#2021', 2, 0, '2021-12-11 06:31:03'),
(4, 'jashandeep Singh', 'jashandeep@masterinfotech.com', '7898789890', '123456', 7, 0, '2021-12-27 06:01:57'),
(5, 'Harinder Singh', 'harinder@masterinfotech.com', '7657863249', '123456', 5, 0, '2021-12-27 06:02:40'),
(6, 'pooja', 'pooja@masterinfotech.com', '7532145698', '123456', 6, 0, '2021-12-27 06:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `plink` text NOT NULL,
  `cv` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`id`, `job_id`, `name`, `email`, `phone`, `plink`, `cv`, `status`, `date`) VALUES
(2, 6, 'Harry', 'harry@gmail.com', '8989898989', 'http://google.com', 'https://www.masterinfotech.com/forms/cv 202146710.pdf', 0, '2021-12-11 06:47:11'),
(3, 7, 'pooja', 'pooja@masterinfotech.com', '9898787898', 'https://dribbble.com/MasterInfotechOfficial', 'https://www.masterinfotech.com/forms/RE Classic 35074611.pdf', 0, '2021-12-14 05:20:12'),
(18, 6, 'nandita', 'admin@gmail.com', '1234567890', 'www.abc.com', 'https://www.masterinfotech.com/forms/BoardResolution-PrivateLimitedFormat84640.docx', 0, '2021-12-20 11:03:36'),
(19, 6, 'nandita sharma', 'admin@gmail.com', '1234567890', 'www.abc.com', 'https://www.masterinfotech.com/forms/BoardResolution-PrivateLimitedFormat78580.pdf', 0, '2021-12-20 11:17:29'),
(20, 9, 'nandita sharma', 'admin@gmail.com', '1234567890', 'www.abc.com', 'https://www.masterinfotech.com/forms/BoardResolution-PrivateLimitedFormat78540.docx', 0, '2021-12-28 04:24:26'),
(21, 9, 'nandita', 'admin@gmail.com', '1234567890', 'www.abc.com', 'https://www.masterinfotech.com/forms/BoardResolution-PrivateLimitedFormat26996.docx', 0, '2021-12-28 04:28:29'),
(22, 9, 'nandita sharma', 'admin@gmail.com', '1234567890', 'www.abc.com', 'https://www.masterinfotech.com/forms/BoardResolution-PrivateLimitedFormat82700.pdf', 0, '2021-12-28 04:29:32'),
(23, 9, 'Nishchay', 'niksmanuja16@gmail.com', '8708307584', 'https://drive.google.com/drive/folders/1c2oF06q40MAE9Jib7YUWmkBhOgTwDZMC', 'https://www.masterinfotech.com/forms/My resume49653.pdf', 0, '2022-01-09 06:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `logout` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ip_address` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `user_id`, `login`, `logout`, `date`, `status`, `date_time`, `ip_address`) VALUES
(1, 1, '1640676072', '1640676099', '28-12-2021', 0, '2021-12-28 07:21:39', '115.242.237.62'),
(2, 2, '1640684263', '', '28-12-2021', 0, '2021-12-28 09:37:43', '115.242.237.62'),
(3, 2, '1640688532', '', '28-12-2021', 0, '2021-12-28 10:48:52', '115.242.237.62'),
(4, 2, '1640695703', '', '28-12-2021', 0, '2021-12-28 12:48:23', '115.242.237.62'),
(5, 2, '1641550761', '', '07-01-2022', 0, '2022-01-07 10:19:21', '115.242.237.62'),
(6, 1, '1641556092', '', '07-01-2022', 0, '2022-01-07 11:48:12', '115.242.237.62'),
(7, 2, '1641558063', '', '07-01-2022', 0, '2022-01-07 12:21:03', '115.242.237.62'),
(8, 2, '1642068254', '', '13-01-2022', 0, '2022-01-13 10:04:14', '115.242.237.62'),
(9, 2, '1642068285', '', '13-01-2022', 0, '2022-01-13 10:04:45', '115.242.237.62'),
(10, 2, '1642070630', '', '13-01-2022', 0, '2022-01-13 10:43:50', '115.242.237.62'),
(11, 1, '1642072895', '', '13-01-2022', 0, '2022-01-13 11:21:35', '115.242.237.62'),
(12, 2, '1642155775', '', '14-01-2022', 0, '2022-01-14 10:22:55', '115.242.237.62'),
(13, 1, '1642420835', '', '17-01-2022', 0, '2022-01-17 12:00:35', '115.242.237.62'),
(14, 1, '1642420925', '', '17-01-2022', 0, '2022-01-17 12:02:05', '115.242.237.62');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`) VALUES
(1, '../uploads/pic069130.jpg'),
(3, '../uploads/pic131038.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_cat`
--

CREATE TABLE `blogs_cat` (
  `id` int(11) NOT NULL,
  `cat` varchar(120) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs_cat`
--

INSERT INTO `blogs_cat` (`id`, `cat`, `status`, `date`) VALUES
(1, 'E-COMMERCE', 0, '2021-11-26 04:50:36'),
(2, 'TECHNOLOGY', 0, '2021-11-26 08:11:50'),
(3, 'DIGITAL MARKETING AND BRANDING', 0, '2021-11-26 04:56:10'),
(4, 'CHANDIGARH', 0, '2021-12-10 09:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_data`
--

CREATE TABLE `blogs_data` (
  `id` int(11) NOT NULL,
  `cat` varchar(150) NOT NULL,
  `add_date` varchar(100) NOT NULL,
  `added_by` varchar(120) NOT NULL,
  `title` varchar(150) NOT NULL,
  `slug` varchar(180) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_title` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs_data`
--

INSERT INTO `blogs_data` (`id`, `cat`, `add_date`, `added_by`, `title`, `slug`, `image`, `description`, `meta_desc`, `meta_title`, `status`, `date`) VALUES
(1, '2', '2021-11-29', 'Admin', 'What is UI UX Design and why is it important?', 'What-is-UI-UX-Design-Why-is-it-important', '../uploads/what-is-ui-ux-design77682.jpg', '&lt;p&gt;If you own a business you must know that running it without a website or a mobile application in a smartphone-powered generation can make you irrelevant no later than needed. In an era where the world sums up over the palm of your hands, it becomes critically important to have a website or even better, an app for your business. But, just owning a website or an app isn&amp;rsquo;t enough. Only a well-developed website or a mobile application in accordance with the &lt;strong&gt;UI/UX design&lt;/strong&gt;&amp;nbsp;can bring you better results.&lt;/p&gt;\r\n\r\n&lt;p&gt;Today UI/UX design, which is an abbreviation of User Interface and User Experience, holds greater significance than &amp;lsquo;just creating a website&amp;rsquo;. A good UI/UX design enables the users to feel an uplifting experience, making UI/UX pre-eminent. As Steve Jobs once said, &amp;ldquo;The design is not just what it looks like and feels like. The design is how it works&amp;rdquo;, this, to date acts as an explanatory quote to the basics of UI/UX design. Furthermore, in the user and consumer-centric market UI/UX acts as a tool to strengthen your brand value and gain an instant edge over your competition.&lt;/p&gt;\r\n\r\n&lt;p&gt;Before we move on to the importance, let&amp;#39;s try and understand what exactly UI/UX is.&lt;/p&gt;\r\n\r\n&lt;h2&gt;UI design: Creation and presentation&lt;/h2&gt;\r\n\r\n&lt;p&gt;User Interface or UI is simply a process of manoeuvering and engineering the interface and making it intuitive. To put it simply, UI is designing an interface, which is attractive and user-friendly. Buttons, icons, menu bars, typography, colors, etc. are some elements to be focused on while creating an ideal UI.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://masterinfotech.com//uploads/UI-Design12531.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;In the much broader perspective, it is all about presentation and interactivity and also how uncomplicated it is. There is one thing that needs to be kept in mind that users hardly care about your design. They care about getting their work done with minimum effort.&lt;/p&gt;\r\n\r\n&lt;h2&gt;UX design: Analysis and understanding&lt;/h2&gt;\r\n\r\n&lt;p&gt;Compared to UI, UX is a much broader concept. UXD which expands to User Experience design is, in many ways, self-explanatory. Although UX extends to various industries, we will only focus on its digital aspect. UX design is a complete procedure of understanding and supporting user behavior providing them with a relevant and integrated experience.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://masterinfotech.com//uploads/UX-Design27576.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;An ideal UX designing process involves factors such as branding, design, usability, and function. It also helps shape a customer&amp;#39;s perception of a brand. The aim of a good UX design helps the user to navigate through what he/she desires.&lt;/p&gt;\r\n\r\n&lt;h2&gt;The Importance of UI/UX Design&lt;/h2&gt;\r\n\r\n&lt;p&gt;Now that we know what UI/UX design is, we shall move on to its importance. A good design provides people with clear directions. The Design navigates them through each page of information while displaying relevant calls to action so that decisions are simple and straightforward.&lt;/p&gt;\r\n\r\n&lt;h3&gt;A better understanding of your audience&lt;/h3&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://masterinfotech.com//uploads/understanding the audience26073.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;UI/UX is all about having a better understanding of your audience. The Ultimate goal of any design is always user satisfaction. So all designing is done keeping in mind the comfortability of the user and especially the target audience. UI/UX allows you to segment and stratify the customers/users. The segmentation is based on the gathered data, giving you further insight into your key audience. While, many might believe that UI/UX is about designing, on contrary, it is more about studying and analyzing the users. With personas in your hand, you are equipped with vital information. This information gives you access to a stronger understanding of your audience which will prove beneficial all along the way.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Establishing a brand reputation&lt;/h3&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://masterinfotech.com//uploads/Establishing-a-brand-reputation21215.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;There will be no mistake in saying that a quality UI/UX builds your brand reputation like no other thing can. When you give your user a beautiful interface that requires minimum effort. It helps the user where he/she wants to, doubtlessly the user is going to think highly of your brand. The process of UI/UX involves usability checks on the product, either through user tests or through design evaluations, all acting as factors that further strengthen your brand reputation. Not just that, an ideal design allows the user to hold high regard for your brand. A good brand reputation gives you an edge over your market competition.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Greater User Retention&lt;/h3&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://masterinfotech.com//uploads/Greater-User-Retention11243.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Wondering why you aren&amp;rsquo;t able to retain the visitors on your app or website? UI/UX is the answer. The User Retention Rate provides you with numbers about time spent by a user on your application, website, or on a specific feature. The better your approach is to UI/UX, the better user retention numbers you will get. Easy navigation improves the customer experience and enables the user to spend more time at your website or app ultimately building his trust for your brand.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Saves TIME!&lt;/h3&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://masterinfotech.com//uploads/save-time54925.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;In the business world time is money and UI/UX saves you time not just in the short but also in the long-run process. A website or an application designed following the UI/UX requires no or minimum changes. And is hardly ever infected with user glitches. In meeting sessions, the designer brings wireframes and prototypes that serve as a visual demonstration before any coding starts. The process of careful analysis and understanding of the data, user behavior, and need results in a flawless product saving you all the time which would have been needed in changes and updates. The figure below displays a UX/UI process, which will give you an idea of how UX/UI works.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Summing up!&lt;/h2&gt;\r\n\r\n&lt;p&gt;We now know that User Interface is all about how it looks and User Experience is all about how it works. UI/UX design is a process of improving the overall experience of the users establishing a greater scope of growth with minimum drawbacks. Understanding and meeting the needs of your key audience and making your website or mobile app more engaging is usually the goal of UI/UX design. However, it can be a little tedious to work with UI/UX while stressing your other business operations. Companies often opt for UI/UX design services (hyperlink) which not only helps them in uplifting elements of growth but is also cost-efficient.&lt;/p&gt;\r\n', 'DQoJCQkJCQkJCQ0KCQkJCQkJCQkNCgkJCQkJCQkJVGhlIFVJL1VYIERlc2lnbiBTcGVjaWFsaXphdGlvbiB0YWtlcyBhIGRlc2lnbi1maXJzdCBhcHByb2FjaCB0byB1c2VyIGludGVyZmFjZSBhbmQgdXNlciBleHBlcmllbmNlIGRlc2lnbiBhbmQgcHJvdmlkZXMgaGFuZHMtb24gdHJhaW5pbmcuIEZvciBldmVyeSBidXNpbmVzcywgd2UgYXQgTWFzdGVyIEluZm90ZWNoIGdpdmUgdGhlIGJlc3QgVUkvVVggRGVzaWduLg0KCQkJCQkJCSAgICAgICAgDQoJCQkJCQkJICAgICAgICANCgkJCQkJCQkgICAgICAgIA0KCQkJCQkJCSAgICAgICAg', '\r\n								\r\n								\r\n								What is UI UX Design and why is it important? | Master Infotech\r\n							        \r\n							        \r\n							        \r\n							        ', 0, '2021-12-22 06:38:02'),
(2, '2', '2021-11-29', 'Admin', 'Top 5 Bad SEO Practices You Need to Stop Immediately!', 'Top-5-Bad-SEO-Practices-You-Need-to-Stop-Immediately', '../uploads/top 5 bad seo practices62191.webp', '&lt;p&gt;When it comes to Digital Marketing, SEO (Search Engine Optimization) tops the list for improving your website ranking, on various search engines (predominantly Google). However, there are some bad SEO practices that are not very uncommon but can damage your website ranking and reach severely. Before moving on to knowing what those bad SEO practices are, let&amp;rsquo;s shed some light on what &lt;strong&gt;Seach Engine Optimization&lt;/strong&gt;&amp;nbsp;is.&lt;/p&gt;\r\n\r\n&lt;h2&gt;What is SEO?&lt;/h2&gt;\r\n\r\n&lt;p&gt;To put it simply, Search Engine Optimization (SEO) is a process through which you can improve the visibility of your site to attain better quality and quantity of traffic. When we talk about SEO it directly means organic traffic and not the one which is gained through paid ad search. This is where an SEO expert comes in. A good SEO strategy gets you a higher organic ranking on search engines. The question arises, &amp;lsquo;how does it work?&amp;rsquo;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/uploads/What is SEO72343.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;We all know search engines like Google uses spiders (bots) to crawl content, websites, and web pages and put them on the Search Engine Results Page (SERP). Which is then analyzed based on how well structured and precise it is (also how well the guidelines were followed) the website is ranked in the search results. A good SEO strategy is usually laid out by communicating with the search engine through title tags, links, and quality content&lt;/p&gt;\r\n\r\n&lt;h2&gt;Top 5 Bad SEO Practices&lt;/h2&gt;\r\n\r\n&lt;p&gt;Practices that are unethical and are not in accordance with the Google webmaster guidelines are usually considered bad SEO practices. In contrast to how SEO generates better results on search engines, bad SEO destroys the ranking of your website. Therefore, it becomes highly important to know some bad SEO practices for you to be alert all the time and be able to recognize them even quicker.&lt;/p&gt;\r\n\r\n&lt;p&gt;Let&amp;rsquo;s take a look at the top 5 bad SEO practices:&lt;/p&gt;\r\n\r\n&lt;h3&gt;Keyword Stuffing&lt;/h3&gt;\r\n\r\n&lt;p&gt;The most common bad practice used black hats to trick into higher rankings, however, this may lead to high penalization. Using a keyword an unnecessary number of times in order to gain a better ranking is one of the worst SEO practices. Google crawlers catch this practice easily. On top of that, it makes your content almost non-understandable due to the out-of-context and overuse of keywords.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Bad Website links&lt;/h3&gt;\r\n\r\n&lt;p&gt;This apparently, is important and is overlooked by the majority of SEOs and gets you standing on slippery grounds. Googlebot crawl, not just the links and text in your content but your links on other websites also. So, if those websites contain spam and digitally hazardous content, Google will most likely de-rank your page as a punishment sooner or later.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Content Duplication: Your own and of others&lt;/h3&gt;\r\n\r\n&lt;p&gt;Well, this goes without saying, DON&amp;rsquo;T COPY! It is one of the worst SEO practices which comes with a high price to pay. Google does not tolerate copying other people&amp;#39;s content as well as your own.&amp;nbsp;Google wants to deliver its users with unique content to elevate their experience. So if you are copying content from other websites, you are just inviting trouble (google hates plagiarism). Search engines do not want you to post content just because you want higher visibility but want to share information. Your SEO strategies should be more inclined towards knowledge sharing.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Cloaking&lt;/h3&gt;\r\n\r\n&lt;p&gt;Cloaking is a practice of deliberately showing different content to the crawlers and whole different content to the users. Surprisingly some black hat webmasters were able to pull this out in the past but not anymore. Ads, spammy content, and computer-generated content whatever you try to hide from crawlers will fire back at you.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Misleading headlines&lt;/h3&gt;\r\n\r\n&lt;p&gt;It simply means giving a headline to attract users and the content following it has no relevance to it. This practice may not lead to penalties by google but gives your user a bad experience. This bad SEO Practice will ultimately affect your ranking. For example, a headline like, &amp;ldquo;Eating tips that will transform your life&amp;rdquo; and the content is just about &amp;ldquo;benefits of diet&amp;rdquo; can disappoint a user badly enough to report you as spam.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Bonus Point: Don&amp;rsquo;t Underestimate search engine crawlers!&lt;/h3&gt;\r\n\r\n&lt;p&gt;Lastly, for a bonus point, never underestimate search engines. Even if you have a trick to go around its crawlers you will suffer from the consequences in the future. Be fair and rewards will be sweeter and long-lasting.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Conclusion&lt;/h2&gt;\r\n\r\n&lt;p&gt;We learned how bad SEO practices do not just come with short-term penalties but also affect your website in the long run. We learned about Keyword stuffing, and how duplication of content and lead to high penalties. However, taking help from SEO service providers is a good option. It is the easier and efficient way to hike up your page ranking and get organic traffic.&lt;/p&gt;\r\n', 'SGVyZSBhcmUgZml2ZSBiYWQgU0VPIHByYWN0aWNlcyB0aGF0IGRyaXZlIHZpc2l0b3JzIGF3YXkuIEF2b2lkIHRoZXNlIHByYWN0aWNlcyBpZiB5b3Ugd2FudCB0byBiZSBhdCB0aGUgdG9wIG9mIEdvb2dsZS4gVGhpcyBwb3N0IHdpbGwgYXNzaXN0IHlvdSBpbiBjb21wbGV0ZWx5IGhhbmRsaW5nIHRoZSBwcm9ibGVtLg==', 'Top 5 Bad SEO Practices You Need to Stop Immediately | Master Infotech', 0, '2021-12-21 07:06:12'),
(3, '1', '2021-11-29', 'Admin', 'An insight into growing your e commerce business in 2021', 'An-insight-into-growing-your-e-commerce-business-in-2021', '../uploads/Grow your ecommerce business70683.webp', '&lt;p&gt;As the world was hit by Covid-19 world economy suffered. In contrast to the drastic blows which businesses took around the globe, eCommerce somehow flourished. As online buying witnessed exponential growth in numbers, globally. Many eCommerce companies emerged and ones that were already in the market were further solidified given the demand that is skyrocketing.&lt;/p&gt;\r\n\r\n&lt;p&gt;Although e-commerce continues its pace in 2021&amp;nbsp;there are certain steps and strategies you must include if you want to sustain the business in the long run and even further have an edge over the ever-rising competition. Some of them are as follows:&lt;/p&gt;\r\n\r\n&lt;h2&gt;Customer Service&lt;/h2&gt;\r\n\r\n&lt;p&gt;There is nothing more important for an eCommerce business than its customers and so it becomes your prioritized duty to serve them in the best possible way. The happier your customers are, the bigger your business gets is the old elementary fact. The question is &amp;lsquo;how&amp;rsquo;? The simplest and the best way is to be always and easily available for your customers. When buying online, a customer can have many questions and queries, and not forget the high possibility of problems a customer might face sometimes.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/../uploads/Customer Service83610.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Being easily reachable through customer service and support builds your trustworthiness in the eyes of customers. Always remember the faster your customer gets to be in touch with you and is able to resolve his/her problem, the better goodwill you create. Many companies use chatbots, 24/7 customer support through chat and calls to provide better customer support. Only good customer service gets you loyal customers who wouldn&amp;rsquo;t just buy from you but will be spreading the goodwill of your brand. It is just as Jeff Bezos once put, &amp;ldquo;if you build a great experience, customers tell each other about that. Word-of-mouth is very powerful.&amp;rdquo;&lt;/p&gt;\r\n\r\n&lt;h2&gt;Adapt with growing technology&lt;/h2&gt;\r\n\r\n&lt;p&gt;There is one thing that can be said without a doubt, that there will always be &amp;lsquo;new technology that will be coming up. And in an industry like eCommerce where competition is never-ending, you will be left behind if you do not adapt to the new technology. In the technology-driven era, customers are always curious to try new technology and favor the businesses that let them do it. Making your platform more user-oriented equipped with a technology that is new in the market will help you grow organically since it enhances customers&amp;rsquo; feeling when he/she visits your platform. For Example, using augmented reality you can give your customer an immersive experience through your platform, this will not only strengthen your sales but also leave the customer impressed.&amp;nbsp;For your most modern technical requirements, you might seek assistance from the best &lt;a href=&quot;https://www.masterinfotech.com/e-commerce-services&quot;&gt;Ecommerce Service Provider.&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;Be a part of the Sustainability movement!&lt;/h2&gt;\r\n\r\n&lt;p&gt;Believe it or not, sustainability is the next big thing, no matter what business you are in. Statistics show, that with global warming affecting lives and the environment people are becoming more aware and are moving towards more environment-friendly and sustainable alternatives. Engaging yourself in sustainable practices will give an upper hand over all the businesses that do not mend their ways to sustainability. Sustainable practices will provide your business with a reputation as a sustainable brand in the eyes of your customers.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Personalize Your Customers&amp;rsquo; Experience&lt;/h2&gt;\r\n\r\n&lt;p&gt;Personalized client support is a strategy that assists you to tailor your correspondence with every client, either during direct communications or when conveying individualized informing. A client assistance approach that is customized basically implies a specialist &amp;quot;knows&amp;quot; the client they&amp;#39;re conversing with on account of gathered information.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Final thoughts&lt;/h2&gt;\r\n\r\n&lt;p&gt;As the owner of an eCommerce store, you must make sure your business is always growing. In these fast-changing times, if you are not growing, you&amp;rsquo;ll find you reach a stagnant state. It&amp;rsquo;s crucial to understand what your customers want and to experiment with all the advanced technology available so that you can improve the overall experience for your customer, and ultimately help your e-commerce business expand in 2021.&lt;/p&gt;\r\n', 'DQoJCQkJCQkJCUFsdGhvdWdoIGUtY29tbWVyY2Ugd2lsbCBjb250aW51ZSB0byBncm93IGluIDIwMjEsIHRoZXJlIGFyZSBzZXZlcmFsIG1lYXN1cmVzIGFuZCBtZXRob2RzIHRoYXQgbXVzdCBiZSBpbXBsZW1lbnRlZCBpZiB0aGUgYnVzaW5lc3MgaXMgdG8gYmUgc3VzdGFpbmVkIGluIHRoZSBsb25nIHJ1bi4gV2UndmUgY292ZXJlZCBzb21lIGltcG9ydGFudCBhc3BlY3RzIGluIHRoaXMgYXJ0aWNsZSB0aGF0IHdpbGwgaGVscCB5b3UgZXhwYW5kIHlvdXIgZUNvbW1lcmNlIGJ1c2luZXNzLg0KCQkJCQkJCSAgICAgICAg', '\r\n								Grow Your Ecommerce Business in 2021 | Master Infotech\r\n							        ', 0, '2021-12-22 06:21:46'),
(5, '1', '2021-12-02', 'Admin', 'Kickstart your eCommerce Startup in 3 simple steps', 'Kickstart-your-eCommerce-Startup-in-3-simple-steps', '../uploads/eCommerce_Startup4194924897.webp', '<p>eCommerce has proven its might and moved the world to the next big change. Last year, with a pandemic to deal with, lockdown came as a boon to all eCommerce stores. The year 2020 witnessed retail e-commerce sales amounting to&nbsp;<strong>4.28 trillion US dollars</strong>&nbsp;worldwide. Amazon, Flipkart, Alibaba, etc. serve as huge examples of the mountainous potential of eCommerce.</p>\r\n\r\n<p>An eCommerce startup today can prove to be hefty if the execution is not in place. From giving a shape to your idea in the form of a product, conducting market research, coming up with a business model to build and launch your eCommerce website takes an infinite amount of effort to make it a success.<br />\r\nKeeping everything in mind, the following are 3 major steps to get you started on your eCommerce business:</p>\r\n\r\n<h3>Getting your idea in line with industry and market research</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>&ldquo;All great successful businesses were all once ideas&rdquo; Getting started on your idea is the first step, and probably the most important one. Your idea is 50% of your business and success and failure is hugely going to depend on how well your idea was framed. Firstly, you have to start with brainstorming your idea through various filters and make it as unique as possible. We know that the market is flooded with ideas and it won&rsquo;t be a surprise to meet an identical one but working through the particular element of your idea that speaks of its uniqueness is something that is going to fetch you sales in the future.</p>\r\n	</li>\r\n	<li>\r\n	<p>Second, comes conducting market research and finding the right line of products. Here, you also have to see through whether to be a single product or a multi-product store. This will obviously depend on your planned budget and funds. However, when you plan to be a multi-product store you also need multiple vendors to secure your sale (in case one vendor isn&rsquo;t available).</p>\r\n	</li>\r\n	<li>\r\n	<p>Third, now that you are done with brainstorming your ideas you also must look through and decide on the kind of business model you are willing to adopt for your business. Selecting a business model is part of idea development and depends heavily on various case studies you conduct, it does take time and should not be done hastily. When your idea is in the development phase you will get an initial idea about which business model you will have to adopt. However, it is still advisable to study all the available business models for better insight. Let&rsquo;s have a quick look at some business models:</p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p><strong>Business to Business (B2B):</strong>&nbsp;In this Business model Companies sells products or provides services to another company.</p>\r\n		</li>\r\n		<li>\r\n		<p><strong>Business to Consumer (B2C):</strong>&nbsp;The traditional retail model where a business sells directly to the consumers.</p>\r\n		</li>\r\n		<li>\r\n		<p><strong>Consumer to Business (C2B):</strong>&nbsp;In this particular type of business model consumer (who may or may not be a sole proprietor) sells goods or provides his/her services to a business.</p>\r\n		</li>\r\n		<li>\r\n		<p><strong>Consumer to Consmer (C2C):&nbsp;</strong>Apparently the oldest form of business model in which an individual (consumer) interacts with another individual to sell goods and provide services.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>Now that we are familiar with business models let&rsquo;s know about finding and finalizing the manufacturer/vendor for your product.</p>\r\n\r\n<p><img alt=\"\" src=\"../uploads/kick-ecom.webp\" /></p>\r\n\r\n<h3>Finding and Finalizing the manufacturer/Vendor of your product</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Finding and finalizing a manufacturer or supplier is not an easy task especially when you are just a startup, however, this step requires you to find appropriate sources for your raw material or any needed equipment.This step would again need extensive research of available vendors and manufacturers so as to figure out the best possible option which falls in your budget.</p>\r\n	</li>\r\n	<li>\r\n	<p>This Step is extra-crucial for your product pricing. Once you decide about which vendor to go with, you will have an idea of how much the product is going to cost you and what should be its price for initial margins. If you end up buying a costly product you will have to sell it even costlier and this will ultimately lead to little no customers.</p>\r\n	</li>\r\n	<li>\r\n	<p>If you are buying from multiple vendors the process becomes even harder. Amazon, for example, is a multi-vendor eCommerce platform, where Amazon does not own all the products displayed on its website. It enables merchants to sell their products in its marketplace to the customers. Let&rsquo;s further understand what are single and multi-vendor eCommerce platforms.</p>\r\n\r\n	<p><strong>Single vendor platform:&nbsp;</strong>Single vendor marketplace is an online platform where a single vendor or seller, sells to many consumers or buyers. This usually involves buyer and seller and does not usually have a broad range of products. Cost is usually less in this kind of platform since you are only dealing with a single vendor.</p>\r\n\r\n	<p><strong>Multi-Vendor platform:&nbsp;</strong>It is a platform where multiple vendors sell to multiple customers and are usually highly profitable. Due to a big range of products and countless vendors, there are many transactions that take place. All the transactions between vendors and customers are managed and administered by the website&rsquo;s admin, thus, the involvement of three parties i.e. Seller, Admin, and customer/buyer.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"../uploads/kick-start.webp\" /></p>\r\n\r\n<h3>Setting up a website for your platform</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Can you run an eCommerce store without a website? Obviously not! An eCommerce website is the heart of any eCommerce business. But building a website for an eCommerce business can be one of the toughest jobs. That is why many startups go for the smart choice&mdash;getting&nbsp;<a href=\"https://masterinfotech.com/web-d.html\">website development services</a>, which not only saves time but is also cost-efficient for it enables you to focus on your business operations.</p>\r\n	</li>\r\n	<li>\r\n	<p>For getting started with a website, firstly you will have to buy an online hosting and purchase a domain name for the website.</p>\r\n	</li>\r\n	<li>\r\n	<p>After that, you will have to decide on how your website looks and decide on a template, that is if you&rsquo;re using an online website builder</p>\r\n	</li>\r\n	<li>\r\n	<p>Otherwise, you can always hire a developer or a company that provides&nbsp;<a href=\"https://masterinfotech.com/e-commerce.html\">eCommerce website development</a>&nbsp;services.</p>\r\n	</li>\r\n	<li>\r\n	<p>Nonetheless setting up an eCommerce website involves a lot many things.Let&rsquo;s have a quick rundown of all the things an ideal eCommerce website should be able to achieve.</p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Responsive design</p>\r\n		</li>\r\n		<li>\r\n		<p>Product management</p>\r\n		</li>\r\n		<li>\r\n		<p>Content management system</p>\r\n		</li>\r\n		<li>\r\n		<p>Shopping cart:</p>\r\n		</li>\r\n		<li>\r\n		<p>Checkout page</p>\r\n		</li>\r\n		<li>\r\n		<p>Payment processing</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>If you want to save time and hire specialists to get you a website that builds your brand value and maximizes sales for your startup, you can reach out to us at Master Infotech.</p>\r\n', '\r\n								\r\n							        ', '\r\n								\r\n							        ', 0, '2021-12-10 07:36:06'),
(6, '1', '2021-12-02', 'Admin', '6 ways in which 5G is transforming Mobile App Development!', '6-ways-in-which-5G-is-transforming-Mobile-App-Development', '../uploads/6 Ways in which 5G is transforming the mobile app development98276.webp', '&lt;p&gt;Ever since the inception of the 5G network, many speculations have been made about the effectiveness and efficiency of the network. However, many believe it is just an upgraded version of 4G which is totally not the case. 5G is a whole new architecture in the communication and network industry. Loaded with higher superiority, 5G is not just set to change how we use mobile phones but will be transforming the mobile app development industry.&lt;/p&gt;\r\n\r\n&lt;p&gt;Let&amp;rsquo;s look at 6 ways in which 5G is transforming Mobile App Development:&lt;/p&gt;\r\n\r\n&lt;h2&gt;Faster Speed&lt;/h2&gt;\r\n\r\n&lt;p&gt;It goes without saying that 5G is faster than ever. According to Intel, 5G offers around 100 times faster speech compared to its predecessors. With faster cellular speed from 50Mbit/s to 2Gbit/s downloads and files transfer is to be faster than ever. And that is just the beginning, the 5G in the future could deliver up to 10 gigabytes of data in a second.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Connectivity&lt;/h2&gt;\r\n\r\n&lt;p&gt;When it comes to connection density 5G seems to have revolutionized the way smartphones interconnect with devices. Mobile apps supporting IoT (internet of things) will be even more advanced as 5G offers connectivity to up to a million devices. And the increase in number is not the only thing, with 5G the implementation of IoT will be smoother and flawless, as the apps will be consuming less power. All kinds of smart gadgets and wearable devices will have impeccable connectivity with 5G allowing developers to move even further with wearable app development.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Latency&lt;/h2&gt;\r\n\r\n&lt;p&gt;Needless to say, 5G enforces minimum latency issues. 5G networks are said to have cut latency to just one millisecond which was around half a second in 4G. This comes as a boon for app developers since this will make the user experience even more seamless.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/../uploads/5G73922.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;Better AR and VR Integration&lt;/h2&gt;\r\n\r\n&lt;p&gt;Developers have been facing a lot of issues in developing better AR and VR integrated applications due to the lack of quality networks. With 5g limitations faced by AR and VR apps will be lifted and we will be able to experience Artificial reality and Virtual reality will be integrated on an advanced level. From eCommerce to the gaming industry, all are to benefit largely from the enhancement of AR and VR offered by 5G.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Increased Battery Life&lt;/h2&gt;\r\n\r\n&lt;p&gt;Consumption of batteries has been a long-standing issue for devices. Slow and unoptimized networks consume time to execute tasks leading to extra consumption of the battery of the device.&lt;br /&gt;\r\nThe lightning speed of the 5g network completes tasks in less than seconds which leads to optimized usage of battery empowering us to flexibly use a mobile application for much longer.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Increase in GPS performance&lt;/h2&gt;\r\n\r\n&lt;p&gt;All applications based on GPS technology will experience a big leap towards greater precision with 5G. Apps are to witness better real-time accuracy The speed and connectivity improvement will lead to all-around up-gradation in navigation-based applications. This will certainly come as a significant boost to the automotive and delivery industry.&lt;/p&gt;\r\n\r\n&lt;p&gt;With 5G gradually pacing through the world and severely influencing the mobile app industry, we will see faster and better apps and futuristic use of AR and VR. The enhanced user experience will enable users to become more liberal in using and trying an even broader range of mobile applications, leading to a higher demand for apps all over the world.&lt;/p&gt;\r\n', 'DQoJCQkJCQkJCTVHIHdpbGwgbm90IG9ubHkgYWZmZWN0IGhvdyB3ZSB1c2UgcGhvbmVzLCBidXQgaXQgd2lsbCBhbHNvIGNoYW5nZSB0aGUgbW9iaWxlIGFwcCBkZXZlbG9wbWVudCBzZWN0b3IuIFRoZSA2IHdheXMgdGhhdCA1RyB0ZWNobm9sb2d5IGlzIGFsdGVyaW5nIG1vYmlsZSBhcHAgZGV2ZWxvcG1lbnQgYXJlIGRpc2N1c3NlZCBpbiB0aGlzIGFydGljbGUuDQoJCQkJCQkJICAgICAgICA=', '\r\n								6 ways in which 5G is transforming Mobile App Development! | Master Infotech\r\n							        ', 0, '2021-12-22 06:26:08'),
(7, '2', '2021-12-02', 'Admin', 'IT startups in India: Past, Present, and Future', 'IT-startups-in-India-Past-Present-and-Future', '../uploads/IT Startups in India46433.webp', '&lt;h2&gt;Background&lt;/h2&gt;\r\n\r\n&lt;p&gt;Around two decades ago in 2000-2001 India&amp;rsquo;s IT sector witnessed a boom like no other. In 2000, the Indian IT industry was already a $10 billion sector, with two-thirds of it coming from software and one-third from hardware. The software sector of India is majorly export-oriented with its maximum turnover being generated from foreign sales. Gradually, Bangalore (now Bangalore) developed into an IT hub of India, which also came to be known as India&amp;rsquo;s silicon valley. IT giants of India such as Infosys and Wipro are all based in Bangaluru.&lt;/p&gt;\r\n\r\n&lt;h2&gt;IT startups in India: An Emergence&lt;/h2&gt;\r\n\r\n&lt;p&gt;As India&amp;rsquo;s IT sectors witnessed such humongous growth it was only natural for people to seek career opportunities in the flourishing sector. In India, the IT sector has resulted in the education and training of a huge number of IT professionals, either directly or indirectly.&amp;nbsp;Now, with many IT professionals in the country and a fair growth of scope IT sector, India further witnessed an additional boost in the emergence of IT-based Startups in India.&lt;/p&gt;\r\n\r\n&lt;p&gt;It was only a matter of time and India&amp;rsquo;s IT sector maximum number of startups, making it a pillar of India&amp;rsquo;s technological force. New startup models and ideas began, what we call an &amp;lsquo;IT revolution in India. IT startups began all over the country from small to medium-sized. As of today, India has the 3rd largest startup ecosystem in the world.&lt;/p&gt;\r\n\r\n&lt;h2&gt;IT startups: An Insight&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com//uploads/IT startups insights37386.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;An IT startup is a business that creates and markets technology products and services. IT startups are based on the idea of bringing some new to the technology world aiming to meet a market through innovative technology. An IT startup, like all other startups, is an idea or project undertaken by an entrepreneur (or group). So that they can find and validate a scalable business model. Although all IT startups aim for success, some are opened as a part of an experiment.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Challenges Faced by IT startups in India&lt;/h2&gt;\r\n\r\n&lt;p&gt;Although the IT sector is flourishing and is constantly developing itself to new heights. However, like all other startups, IT-based startups don&amp;rsquo;t always write a success story. An IT startup in India comes with its own set of challenges. A study conducted by the IBM institute found that&amp;nbsp;&lt;strong&gt;90% of Indian startups fail&lt;/strong&gt;&amp;nbsp;in their first 5 years.&lt;br /&gt;\r\nSome of the major challenges faced by IT startups in India are as follows:&lt;/p&gt;\r\n\r\n&lt;h3&gt;Financial Support&lt;/h3&gt;\r\n\r\n&lt;p&gt;Just like all businesses, for IT startups finding sufficient funds is always a big challenge. Funds needed as capital and for maintaining day-to-day operations are important for any start-up to prevail. Without proper funds, many IT startups with great potential sometimes fail to survive.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Poor Management&lt;/h3&gt;\r\n\r\n&lt;p&gt;Many IT startups on the basis of a strong idea and execution may find their way to better revenue generation but all of that counts for nothing if not managed well. As greater revenues pour in, business grows but without effective management, it can lead to a downfall.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Market Competition&lt;/h3&gt;\r\n\r\n&lt;p&gt;As we already discussed that growth in the IT sector ascending over the past several years has given birth to massive competition. This competition is a result of many IT-based startups flooding the Indian market due to great success opportunities. Naturally, not everyone survives the fierce competition.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com//uploads/Challenges faced by IT startups 95244.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;Bad Recruiting&lt;/h3&gt;\r\n\r\n&lt;p&gt;Employees are the spine of any business. When it comes to startups, recruiting the right people becomes very essential because of higher risk factors. It has been noted that an unskilled team of employees has been a downfall of many IT startups. There has been a lot of chaos when it comes to IT education, over the past few years there has been a rapid rise of IT graduates lacking in Required knowledge and skill.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Conclusion&lt;/h2&gt;\r\n\r\n&lt;p&gt;To sum it all up, IT startups have always shown great potential as far as the Indian market is concerned but in these competitive times only the ones ready to walk an extra mile witness their success story being written in golden letters.&lt;/p&gt;\r\n', 'DQoJCQkJCQkJCQ0KCQkJCQkJCQlUaGVyZSBhcmUgYWJvdXQgOTAwMCBJVCBzdGFydHVwcyBpbiBJbmRpYS4gQW5kIGRhdGEgc2F5IGFib3V0IDItMyBJVCBzdGFydHVwcyBhcmUgYm9ybiBldmVyeSBkYXkuIFNvIGl0IGlzIHRoZSBuZWVkIG9mIHRoZSBob3VyIHRvIHVuZGVyc3RhbmQgZXZlcnl0aGluZyBhYm91dCBhbnkgU3RhcnR1cCBiZWZvcmUgc3RhcnRpbmcgaXQuIHRoaXMgYXJ0aWNsZSB3aWxsIGhlbHAgeW91IHdpdGggdGhpcy4NCgkJCQkJCQkgICAgICAgIA0KCQkJCQkJCSAgICAgICAg', '\r\n								\r\n								IT startups in India: Past, Present, and Future | Master Infotech\r\n							        \r\n							        ', 0, '2021-12-21 07:40:41'),
(15, '4', '2021-12-13', 'Master Infotech', 'Best Digital Marketing Agency in Chandigarh', 'best-digital-marketing-agency-in-chandigarh ', '../uploads/best-digital-marketing-agency-in-chandigarh1254613502.jpg', '&lt;p&gt;There are 4.66 billion active internet users worldwide, making digital marketing one of the most effective ways to grow your business! When you&amp;rsquo;re looking for the &lt;strong&gt;Best Digital Marketing Agency in Chandigarh&lt;/strong&gt;, Master Infotech is the right match for you. Growing your business in the world of the internet is no doubt give an ocean of opportunities. But catering and targeting the audience online is not an easy task, this is where we step in.&lt;/p&gt;\r\n\r\n&lt;p&gt;At &lt;a href=&quot;https://www.masterinfotech.com/&quot;&gt;&lt;strong&gt;Master Infotech&lt;/strong&gt;&lt;/a&gt;, our team of experienced digital marketing specialists is always ready to take your businesses to new heights. We deep dive into your goals and aspirations to construct our stratagems to make certain that all our effort is in a common direction.&lt;/p&gt;\r\n\r\n&lt;h2&gt;One-stop shop for all your Digital Marketing needs&lt;/h2&gt;\r\n\r\n&lt;p&gt;We are an all-in-one &lt;strong&gt;Digital Marketing Agency in Chandigarh&lt;/strong&gt; offering a wide range of Digital Marketing Solutions right from on-page SEO to complete PCC solutions. For us, our growth is directly proportional to the growth of our clients. So we, as the best Digital Marketing Agency in Chandigarh, deliver world-class solutions to our customers.&lt;/p&gt;\r\n\r\n&lt;p&gt;We have a proven record of designing the best strategies to cater to the target audience all over the internet for quality leads and high conversion rates. This makes us an exceptional Digital Marketing Service Provider in the region or as we proudly put it, the leading &lt;strong&gt;Digital Marketing Firm in Chandigarh&lt;/strong&gt;. Our Professionals guide your website to rank up on search engines, making your online presence even stronger to give you a higher quality of traffic. We collect data and insights into our digital marketing tactics to drive more ROI to your business. Because we understand that result is what matters in the end.&lt;/p&gt;\r\n\r\n&lt;p&gt;However, digital marketing is a long process with a blend of a lot of services included for the effective online growth of your business.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Proven strategies for Digital marketing services&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;../uploads/services-in-digital-marketing.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;Search Engine Optimization (SEO)&lt;/h3&gt;\r\n\r\n&lt;p&gt;In simple words, SEO is the process of Optimizing your website on various search engines in order to drive better quality of targeted traffic to your website. Doubtlessly SEO is amongst the first steps to improve the visibility of your Site. At Master Infotech understand that every business has a different set of needs and target audience. We also know that the same strategies cannot apply to the different business niches.&lt;/p&gt;\r\n\r\n&lt;p&gt;We ensure tailored and customized SEO solutions to drive quality leads and render maximum Return on Investment. Our aim is simply to put you ahead of your competition and bag you maximum lead conversion. On top of that, we provide a free SEO consultation where our experienced consultants are always ready to guide you through all ins and outs of SEO. We, as the &lt;strong&gt;Best Digital Marketing Agency in Chandigarh&lt;/strong&gt;, give&amp;nbsp;you a detailed picture of how our exponential SEO services will benefit your business.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Search Engine Marketing (SEM)&lt;/h3&gt;\r\n\r\n&lt;p&gt;Once the website is optimized and ranked on various search engines, leads start driving in. After that, you can instill Search Engine Marketing for a greater boost to your brand visibility and broader conversion rates. SEM is simply a quick and efficient way to give paid amplification to your website in order to rank higher. Search engines use different algorithms to make SEM ads rank. Through strategies like pay-per-click (PPC) you can further increase the visibility of your website. Furthermore, &amp;nbsp;Search engine marketing specifically allows you to target consumers&amp;#39; online behavior and position your ads precisely to how and where you want to sell your product/services. In addition to that our certified Google ads specialists make it easier for you to run ads across Google and have a better experience with Adwords.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Social Media Marketing (SMM)&lt;/h3&gt;\r\n\r\n&lt;p&gt;Stats tell us that around 4.48 billion people actively use social media in the world. No doubt that social media is one of the most powerful tools to heighten your brand visibility and image. Growing social media means targeting a broader audience across international borders. We have specially laid out action plans for platforms such as Facebook, Instagram, Twitter, LinkedIn, etc So that you can reach a wider audience of your business. We ensure that all trends on social media are taken advantage of, as creatively as possible.&lt;/p&gt;\r\n\r\n&lt;p&gt;There is no doubt that efficient marketing on social media lets you become consistently visible to your customers which is the first requirement in achieving a better brand image. Furthermore, we at Master Infotech put an extra focus on optimizing and marketing your business on social media. This optimization drives a higher quality of leads and sales from social media platforms. We prepare tactics where we make use of high quantities of data related to demographics and personal information to make our targeting even more accurate, making us the &lt;strong&gt;Best Digital Marketing Agency in Chandigarh&lt;/strong&gt;.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Email Marketing&lt;/h3&gt;\r\n\r\n&lt;p&gt;Despite being one of the oldest forms of Digital Marketing methods, Email Marketing remains the most efficient way to market yourself to potential customers digitally. According to Statista, there are approximately 4 billion email users daily which further is going to elevate to almost 4.6 billion by 2025. So, not leveraging the power of email marketing, certainly means losing a mountainous amount of traffic and leads. We, being the &lt;strong&gt;Best Digital Marketing Agency in Chandigarh&lt;/strong&gt; comprise of Email marketers with years of experience who specialize in reaching out to your target audience with highly engaging Emails.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Content Generation and Optimization&lt;/h3&gt;\r\n\r\n&lt;p&gt;In the World of the Internet, nothing matters as much as content. Creative content is the undisputed winner when it comes to organic reach. Whether you want to write a blog or make a social media post, or even upload a video on youtube, content generation is something that goes along with everything. Our content creators work in a wide diaspora to create engaging content, fulfilling all your creative and business needs. From aesthetic designs to high-quality videos and blogs we have you covered in every detail.&lt;/p&gt;\r\n\r\n&lt;p&gt;However, just generating is not enough because ultimately what matters is the right optimization of that content. Only when the generated content is optimized and is easy to find it becomes truly useful and produces growth-oriented results. Our Experts at Master Infotech create distinctive content which is not only SEO friendly but creates an impact on the user. In fact, it won&amp;rsquo;t be wrong to say that content optimization is the heart of digital marketing.&lt;/p&gt;\r\n\r\n&lt;h2&gt;How to select a Digital Marketing Company for your business?&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;../uploads/how-to-select-a-digital-marketing-company.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Selecting a Digital Marketing Company for your business can be tougher than you expect. Since there is a lot of competition out there and every company claims to be the best. It doubtlessly becomes hard to figure out which can be the &lt;strong&gt;Best Digital Marketing Company.&lt;/strong&gt; But through carefully analyzing the work process and how transparent they are about their services, tells a great deal about how good a digital marketing agency is.&lt;/p&gt;\r\n\r\n&lt;p&gt;At Master Infotech we strongly believe in client satisfaction and simultaneously work towards the growth of our clients. We keep your short-term and long-term goals in mind. We, as the &lt;strong&gt;Best Digital Marketing Agency in Chandigarh&lt;/strong&gt;, have specifically designed our work process to ensure that we provide the most to our clients. At Master Infotech we follow the work process of Four Ds:&lt;/p&gt;\r\n\r\n&lt;h3&gt;Discuss&lt;/h3&gt;\r\n\r\n&lt;p&gt;At Master Infotech everything starts with communication. Considering the complexity and uniqueness of our client&amp;rsquo;s needs and requirements, we hold several discussions and meetings to understand their vision. We know that everything starts with an idea and particularly focuses on the overall business idea. We also make sure our marketing strategies align with our client&amp;#39;s business model and vision.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Define&lt;/h3&gt;\r\n\r\n&lt;p&gt;After the series of meetings, we start defining and devising a suitable strategy. We stick out devised strategies and carefully laid out digital marketing plans in order to gain maximum input. This ultimately leads us in bringing you the best.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Develop&lt;/h3&gt;\r\n\r\n&lt;p&gt;As the strategies are laid out, we step into the development phase which keeps updating the current strategy and establishes surety that everything is executed in a seamless way. With the vigorous implementation of marketing plans, we drive more quality leads and sales to your business.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Deliver&lt;/h3&gt;\r\n\r\n&lt;p&gt;Analyzing the work and delivering your best has always been our mantra. Following our principle of total transparency, we make sure to deliver weekly reports. In addition to that, we are always there for our customers.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Why are we the best digital marketing company in Chandigarh?&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;../uploads/why-we-are-best.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Our centric approach remains to increase the overall brand image and value of your business. Although, we specialize but have never been limited to Digital marketing alone. We consider it our responsibility to make sure all your business goals are achieved and our services fetch you long-term benefits. Our dedicated approach is to not just make your business digitally visible but also boost its entire digital footprint and brand value. This approach makes us the &lt;strong&gt;Best Digital Marketing Firm&amp;nbsp;in Chandigarh&lt;/strong&gt;. Over the years we have helped many companies in enhancing their digital presence. Furthermore, we have helped businesses in growing their business. Our unique blend of digital marketing services is directly aimed at generating long-term goals.&lt;/p&gt;\r\n', 'V2UgYXJlIHRoZSBCZXN0IERpZ2l0YWwgTWFya2V0aW5nIEFnZW5jeSBpbiBDaGFuZGlnYXJoLiBXZSB2YWx1ZSBvdXIgY2xpZW50cycgdG90YWwgZGlnaXRhbCBkZXZlbG9wbWVudCB0aHJvdWdoIG91ciBJVCBzZXJ2aWNlcy4=', '\r\n								\r\n								\r\n								\r\n								Best Digital Marketing Agency in Chandigarh - Master Infotech								\r\n\r\n							        \r\n							        \r\n							        \r\n							        \r\n							        \r\n							        \r\n							        ', 0, '2021-12-13 17:57:45');
INSERT INTO `blogs_data` (`id`, `cat`, `add_date`, `added_by`, `title`, `slug`, `image`, `description`, `meta_desc`, `meta_title`, `status`, `date`) VALUES
(17, '4', '2021-12-22', 'Master Infotech', 'How can a Web Designing Company in Chandigarh help your business? ', 'how-can-a-web-designing-company-in-chandigarh-help-your-business', '../uploads/grow your business56885.webp', '&lt;p&gt;We&amp;#39;ll use an example to demonstrate how a professional web design company may benefit your organization, let&amp;#39;s suppose that a user wants to buy a t-shirt. If the user cannot find the product easily on your website he will definitely switch to another website. This is where most of your business dies. Hiring the best Web Designing Company in Chandigarh enables you to have a website that does face a similar problem. A service provider studies all elements of your business needs and most of all research on your competition.&lt;/p&gt;\r\n\r\n&lt;p&gt;A good company directs its effort in making you stand out from all your competition. This further gives you an edge, as you get a greater possibility to attract the customers of your competition. Not just that, the content of the website we deliver can be edited and updated from any device and from anywhere. There are different areas linked to website design such as user experience, web graphics, user interface, and SEO design. We being the best Web Designing Agency in Chandigarh deliver hassle-free solutions. Now let&amp;rsquo;s discuss some other facts&lt;/p&gt;\r\n\r\n&lt;h2&gt;What makes a good Web Designing Company?&lt;/h2&gt;\r\n\r\n&lt;p&gt;We are often asked a question, why we claim to be &amp;lsquo;the best web designing company in Chandigarh&amp;rsquo;. The answer lies in our dedicated and experienced team of professionals. Our team is the heart of our company and is directly responsible for our growth. Regardless of how complicated the task is, our team stands with you and makes sure all your demands are met. Packed with years of experience our professional team has made it possible for us today be rise to become the best web designing company in Chandigarh.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our work fits our motto, Developing Trust and Technologies. So, when you hire us you hire a trustworthy partner. We know and believe that without trust there can only be very little business growth. Our team is dedicated to delivering you a website that helps you achieve your goals. Every business has its unique customer base and its own requirements to meet. We not only understand but also further suggest focus areas grow your business. Our process to build a website starts with a deep dive into understanding your business model. Once we get hold of your business model, we get you a customized web design that fits your niche. We have served many brands across the globe with websites that have greatly improved their sale graphs.&lt;/p&gt;\r\n\r\n&lt;h2&gt;How can a good Web Design Agency increase revenue?&lt;/h2&gt;\r\n\r\n&lt;p&gt;When it comes to websites it&amp;#39;s the first impression that matters. In the fast-paced world of the Internet, first impressions are everything. Only a visually attractive website can create an effective first impression. Stats tell us that&lt;strong&gt; 94% of the first impressions are based on the visual design of the website&lt;/strong&gt;. In addition to that, it takes a user only 0.5 seconds for a user to form an impression of a website. Only when your website is effective enough to retain a user you can offer your business services and goods. Therefore, the conversion rates highly depend on the design of your website.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com//uploads/increase revenue44653.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;At &lt;a href=&quot;https://www.masterinfotech.com/&quot;&gt;Master Infotech&lt;/a&gt; we provide you with a robust web design that has a high ability to get more sales. Our team of web designers uses data to conduct in-depth research. The research helps us analyze how your website should look to ensure maximum user retention. Being the Best web designing company in Chandigarh we consider it our responsibility to get you a professional and upscale website.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Best Web Designing Agency in Chandigarh&lt;/h2&gt;\r\n\r\n&lt;p&gt;Master Infotech is the best Web Designing Company in Chandigarh, which provides exemplary Web design solutions. Because we know, in today&amp;rsquo;s era of technology, it is difficult to stay relevant in the business world without a website. In order to enhance growth and increase sales, it is important for your business to be equipped with an attractive and user-friendly website.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com//uploads/best website design company80839.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;We create websites that speak directly to your users and further lead to more sales for your business. Although, there are a lot of Web designing companies in Chandigarh only a few are efficient enough to give a major boost to your business. We are proudly the best web designing company in Chandigarh. Our primary focus to not just to help you create a website for your business but make sure that the website we create helps your business in the long run. However, we do not let the short-term objective stand ignored. After all web designing is all about balance.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Website Design Services includes&lt;/h2&gt;\r\n\r\n&lt;p&gt;With a wide range of Website Design and Development services, we help businesses and startups across international borders. We offer corporate websites, Flash Website Design, Web Hosting, E-Commerce websites. In addition to that, we further provide UI/UX solutions for websites, in-budget websites for startups, and much more.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com//uploads/website designing service33256.webp&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Your online brand image requires an efficient and specialized approach to building your website. This specialized approach will help you attract more customers and ultimately bag more sales. Here we mentioned some of our Website Design Services:&lt;/p&gt;\r\n\r\n&lt;h3&gt;Mobile Website Design&lt;/h3&gt;\r\n\r\n&lt;p&gt;In the era of Smartphones, it is not useful for a website to be not optimized on mobile devices. Stats tell us that 52% of all traffic is generated through smartphones. So, ignoring the web design for mobile devices is equal to losing a lot of potential customers. It takes a team of specialist designers to optimize your website design on all mobile devices.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Ecommerce Website Design&lt;/h3&gt;\r\n\r\n&lt;p&gt;The last few years have seen a major boom in eCommerce platforms. It is needless to say that the competition is fierce when it comes to eCommerce. In such a competitive environment only a good web design can get you an edge over your competitors. We being the best Web Designing Company in Chandigarh consist of eCommerce experts. We make your website in line with the needs of your customers.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Web Application Design&lt;/h3&gt;\r\n\r\n&lt;p&gt;Our proficient web designers and developers ensure that your web application design represents your brand vision. Over the years we have designed many web apps. We specialize in making the app function seamlessly on average bandwidth. We ensure the high interactivity of our applications which makes it easy for any user to navigate through your website.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Landing Page Design&lt;/h3&gt;\r\n\r\n&lt;p&gt;Landing pages are very important when it comes to the marketing of your website. All the leads are retrieved on landing pages and only a well-designed landing page can retrieve maximum leads and ensure sales. Our team of creative designers leaves no stones unturned in crafting your landing pages.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Why do people choose us?&lt;/h2&gt;\r\n\r\n&lt;p&gt;Designing aesthetic and user-friendly websites is a passion for us and we always thrive on good designs. Our passion to make robust and user-oriented websites has given us a top spot in the preferences of businesses. This has enabled us to become the best Web Designing Company in Chandigarh, India.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com//uploads/why choose us38297.webp&quot; /&gt;;&lt;/p&gt;\r\n\r\n&lt;p&gt;There are many deliverables that have been major reasons what has given us a major edge over our competitors. These are responsive websites, design, and development based on Web 2.0, all-around quality checks and testing, aesthetic designs, user-friendly websites, fast-loading websites, compatible websites across all browsers, SSL certified websites, websites with SEO-friendly URLs.&lt;/p&gt;\r\n\r\n&lt;h2&gt;What makes us the Best Web Designing Company in Chandigarh?&lt;/h2&gt;\r\n\r\n&lt;p&gt;At Master Infotech we blend innovation and creativity together to ensure business growth. This has been our mantra all along that has helped us emerge as a giant Web Designing Company in Chandigarh. In addition to what we deliver, we also make sure how we deliver is taken care of on all edges. Our web designs are a high-end display of clean code and intuitive functions.&lt;/p&gt;\r\n\r\n&lt;p&gt;We keep your business objective and goals in the heart of the web designs. This helps us keep a centric approach towards helping you gain sales and quality leads. However, our web design philosophy is strictly based on contemporary design. We try to stay especially relevant to the unique demands of the modern-day user. Our eccentric web designing services have given us a top stop as a trustworthy Web Design firm in Chandigarh.&lt;/p&gt;\r\n\r\n&lt;p&gt;We have a long-standing and noteworthy experience in building customer-first designs. So, going by the old principle of simplicity, we further enhance our product to make it as simple as possible. The Internet world has become faster than ever. Even more, the user has so many companies to choose from for a single service or product. It is needless to say the user will go to the simplest and the most efficient solution. We make your website simple and easy to interact with for the user.&lt;/p&gt;\r\n', 'TWFzdGVyIEluZm90ZWNoLCBhcyB0aGUgdG9wIFdlYiBEZXNpZ25pbmcgQ29tcGFueSBpbiBDaGFuZGlnYXJoLCBvZmZlcnMgaXRzIGN1c3RvbWVycyB0aGUgYmVzdCB3ZWJzaXRlIHNvbHV0aW9ucyBzbyB0aGF0IHRoZXkgY2FuIGdyb3cgZW5vcm1vdXNseS4gV2Ugb2ZmZXIgYSB3aWRlIHJhbmdlIG9mIHdlYiBkZXNpZ24gc2VydmljZXMsIGZyb20gc2ltcGxlIHRleHQgd2VicGFnZXMgdG8gY29tcGxleCB3ZWItYmFzZWQgYXBwbGljYXRpb25zLg==', 'How can a Web Designing Company in Chandigarh help your business? | Master Infotech', 0, '2021-12-22 10:22:47'),
(18, '4', '2021-12-28', 'Master Infotech', 'How can a Web development company in Chandigarh transform your business growth?', 'how-can-a-web-development-company-in-chandigarh-transform-your-business-growth', '../uploads/Web Development company in chandigarh25768.jpg', '&lt;p&gt;In the fast-pacing technological world of today, a business is first introduced to a customer through its website. As Bill Gates, rightly quoted once, &amp;ldquo;&lt;strong&gt;If your business is not on the Internet then your business will be out of business&lt;/strong&gt;&amp;rdquo;. This actually tells us that it is of high importance for a business today to have an internet existence. Apart from being an interface through which your customers come in contact with your business, a website serves a much broader purpose.&lt;/p&gt;\r\n\r\n&lt;h2&gt;A Website is the foundation of Online Marketing&lt;/h2&gt;\r\n\r\n&lt;p&gt;A website is a tool that is the foundation of the online marketing of your business. It is the base on which the pillar of your digital marketing must stand. A digital marketing strategy is almost irrelevant without a good website. However, designing and developing a website yourself is a tedious task and includes a hassle. With competition increasing every hour, making a website yourself and cost you a substantial amount of business time. Professional assistance is always necessary, and this is where a Chandigarh web development firm may help.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Importance of well Designed and Developed websites&lt;/h2&gt;\r\n\r\n&lt;p&gt;To start with, businesses today have started to understand the value of websites. There are approximately &lt;strong&gt;1 billion sites &lt;/strong&gt;in the world with around &lt;strong&gt;63,000 searches&lt;/strong&gt; every second on Google. However, having a site developed isn&amp;rsquo;t everything since it would mean nothing if your website doesn&amp;rsquo;t rank. It would be a bad investment if you spend thousands of dollars on a website and it doesn&amp;#39;t rank on search engines and doesn&amp;rsquo;t generate any leads.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com//uploads/importance of well designed website47313.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;The question arises, What makes a website good enough? The best way to let a website development company in Chandigarh handle all your website development needs. &lt;a href=&quot;https://www.masterinfotech.com/website-development-services&quot;&gt;The website development company&lt;/a&gt; makes sure that the website is user-friendly and is workable in accordance with all aspects.&lt;br /&gt;\r\nThere are doubtlessly many aspects to a good website, let&amp;rsquo;s talk about some of them.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Well Designed&lt;/h3&gt;\r\n\r\n&lt;p&gt;When we say design we actually mean UI (user interface) of the website. It is this interface that the user will be interacting with. A bad interface of the website will ultimately make a user exit your website. Usually, business owners do not realize the importance of design and wouldn&amp;rsquo;t understand how design is relevant to their business. However, for a user design matters and so it has to matter for your business too. Many studies show us that a user forms a perception about your business through the design of your website. A good design of your website will lead the user to further form a good impression of your business.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Ease of usability&lt;/h3&gt;\r\n\r\n&lt;p&gt;We have to know one thing about site visitors and that is, they need easy and fast results. If your website is too difficult to navigate, users will quickly go.&amp;nbsp;This is where the Web Development company in Chandigarh steps in. The company has a full-stack team of UX designers who help in creating easy-to-use websites. A user experience designer is responsible for understanding the user behavior and building the design according to the user preferences. Without professional help, your website might become a hassle and full of complications for the users. We must always remember that with every user exiting your website not only means a loss of a potential customer but also downgrading of the user retention of your website.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/uploads/ease%20of%20usability%20(1)21087.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;Responsiveness of the website&lt;/h3&gt;\r\n\r\n&lt;p&gt;No matter how well your website is built but if it is not optimized for mobile phones it is as good as non-existing. You might say that is a little harsh but if you go through the stats which tell us that &lt;strong&gt;around 54% of users use mobile phones to visit a website&lt;/strong&gt; you will have to agree. Not just phones but the websites have to be optimized for all the devices, screens, and browsers. Doing it yourself will be an impossible task if you are from a non-development program. Hiring a Web Development Company in Chandigarh is a viable option to get a responsive website for your business.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Intuitiveness&lt;/h3&gt;\r\n\r\n&lt;p&gt;Like we discussed earlier understanding your user is the most crucial task. A website developed without keeping the user in the mind will produce no or fewer results. The distribution of the information on the website must be to the point and the navigation is user-centric. The intuitiveness of the website is again all about improving the experience of the user. Always remember easier it is for the user the more chances are that he will convert into a customer. It takes in-depth research about user experience and then to apply it through the development. It is always recommended to hire Web development Company in Chandigarh.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Faster loading&lt;/h3&gt;\r\n\r\n&lt;p&gt;Let there be no confusion, a website that takes longer to load will have more bounce rate. More the bounce rate lowers the traffic of your website. Usually, a website with low-quality development leads to slow loading speed. On the other hand, a website that is optimized will have a faster loading speed. Studies show that a minor &lt;strong&gt;increase in loading speed from one to three seconds can heighten the bounce rate by 32%&lt;/strong&gt;. This is neither good for your website nor your business.&lt;br /&gt;\r\nAt this point, it is always a good business decision to hire an expert website development company in Chandigarh. The company usually has a team of experienced developers who make sure that your site is fully optimized.&lt;/p&gt;\r\n\r\n&lt;h2&gt;What can a Web Development company in Chandigarh do for you?&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/uploads/what%20a%20web%20development%20company%20do74979.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;Implementing Latest technology&lt;/h3&gt;\r\n\r\n&lt;p&gt;Technologies for web development are increasing and getting more advanced with every passing day. A website development company in Chandigarh custom builds your website according to all the needs of your business and your target audience. They carefully evaluate all the technical aspects related to your website. An accurate evaluation of the technology used to build your website will ensure maximum benefits.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Saves Time&lt;/h3&gt;\r\n\r\n&lt;p&gt;You&amp;rsquo;ll be surprised to know how many business owners try to design and develop websites for their business. That is a brutal decision you can make for your business because it not only makes your website look unprofessional and inefficient but actually wastes a lot of their precious time. Hiring a Web development company in Chandigarh undoubtedly saves you a lot of time. It is needless to say that in the business world &amp;lsquo;time is money. In addition to wasting your time, the do-it-yourself approach to building your website will harm your business in many ways.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Post Delivery Support&lt;/h3&gt;\r\n\r\n&lt;p&gt;A question that many business owners have is what will happen after the handing over and delivery of the website. To put it simply A Web Development company provides you post-delivery support (for a period of time). This includes fixing all the issues faced by the website. Although it is very rare, there can be many technical issues that a website might face even after all testing and quality checks. Being the best Website Development Company in Chandigarh, We at Master Infotech provide 3 months of free support after the delivery of the website. This not only puts our client&amp;#39;s website in safe hands white it is work but gives us an opportunity to further refine our work.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Maintenance of Consistency&lt;/h3&gt;\r\n\r\n&lt;p&gt;Like we discussed earlier Website is the base of your brand identity. When you hire a web development company to build a website after thoroughly studying and analyzing your brand needs. The website is designed keeping in mind the brand identity elements such as color, font, etc. These elements are kept consistent all through the website to maintain the brand identity of your company.&lt;/p&gt;\r\n\r\n&lt;h2&gt;The Best Web Development Company In Chandigarh&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/../uploads/best web development company (1)77910.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Keeping in mind the wide range of opportunities that a well-designed and developed website can offer, it is viable to hire a professional web development company. When you hire a website development company you hire growth for your business. At Master Infotech, we make it our priority to help our clients grow as we know that we grow with our clients. When you hire us you hire a trustworthy partner.&amp;nbsp; Whether you want a detailed eCommerce website or you want a dynamic web app, we provide full-fledged web development solutions. Being a Multi-faced development and design company, we strategize all our services to give our clients efficient websites which improve growth aspects of their business. As a leading &lt;strong&gt;web development company in Chandigarh, &lt;/strong&gt;we build you reliable, well-designed, fast loading, and responsive website.&lt;/p&gt;\r\n', 'V2UgYXJlIGEgbGVhZGluZyB3ZWIgZGV2ZWxvcG1lbnQgY29tcGFueSBpbiBDaGFuZGlnYXJoLiBXZSBkZXNpZ24gd2Vic2l0ZXMgdGhhdCBmdWxmaWxsIHRoZSBuZWVkcyBvZiBvdXIgY2xpZW50cy4gQmVjYXVzZSB3ZSB1bmRlcnN0YW5kIHRoYXQgdGhlIGFwcGVhcmFuY2Ugb2YgYSB3ZWJzaXRlLCBhcyB3ZWxsIGFzIGl0cyBjb250ZW50LCBoYXMgYSBzaWduaWZpY2FudCBpbXBhY3Qgb24gdGhlIGxldmVsIG9mIGludGVyZXN0IGluIHlvdXIgY29tcGFueS4=', 'How can a Web development company in Chandigarh transform your business growth? | Master Infotech', 0, '2021-12-28 13:06:08'),
(19, '4', '2022-01-07', 'Master Infotech', 'Grow your business with a Mobile App Development Company in Mohali', 'grow-your-business-with-a-mobile-app-development-company-in-mohali', '../uploads/Mobile app development company83092.jpg', '&lt;p&gt;It has been some years since the internet took over the globe like spreading fire. We have not looked back ever since, with technology advancing with every passing hour. The world of technology and the internet was further revolutionized with the introduction of smartphones.&lt;/p&gt;\r\n\r\n&lt;p&gt;Today there are approximately &lt;strong&gt;7.101 billion &lt;/strong&gt;smartphones in the world. It is needless to mention the vast growth in mobile applications over the years. With a major boom in mobile applications, businesses are coming up with more advanced apps. This is to meet the technological demands of the modern generation.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Role of Mobile Applications In Business&lt;/h2&gt;\r\n\r\n&lt;p&gt;With the introduction of smartphones, the business has increased approximately a thousand folds. Today almost everyone around the world has access to global information in the palm of their hands. There is no doubt that an upsurge in mobile applications has resulted in massive business growth. Especially when it comes to &lt;a href=&quot;https://www.masterinfotech.com/mobile-app-development-services&quot;&gt;Mobile App Development Company in Mohali&lt;/a&gt;, specializing in delivering high functioning mobile applications.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mobile applications come packed with amazing features which have resulted in users adapting to these applications. This has led the modern world user to become more application dependent with screen time increasing every day. This is to say that people spend more and more time on mobile phones. And with an increase in screen time, the demand for mobile applications has increased more than ever. This gives your brand a platform of promotion and identity through which you can promote your brand vision. Let&amp;#39;s study the role which mobile applications play in business growth.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Build Customer Loyalty&lt;/h3&gt;\r\n\r\n&lt;p&gt;Apps have become more interactive and communicative than websites. As users communicate with your business through your mobile app they are intrigued and influenced by the products and services your business has to offer. There are studies that tell us that having a dedicated app for your business results in better customer engagement and revenue generation.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Growth of Accessibility&lt;/h3&gt;\r\n\r\n&lt;p&gt;The days are long gone when websites were everything to a business. As everything has mostly shifted to smartphones, users have also shifted their preference to mobile applications. In addition to that, a professional application enhances your business&amp;rsquo; brand identity. With improved brand identity, you increase the number of customers, In fact, gives you a golden&lt;/p&gt;\r\n\r\n&lt;h3&gt;Gives a Human touch to your brand&lt;/h3&gt;\r\n\r\n&lt;p&gt;Mobile Applications have more chances of being in contact with your users. Through apps, you can directly reach out to your users with offers, videos, and notifications. The advancement in &lt;strong&gt;Artificial Intelligence&lt;/strong&gt; has opened a whole new world for Mobile applications. Now there are apps that can interact with the users just like a human. This enhances the human feel of your business.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com//uploads/Human touch50893.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;And this makes a customer feel like he/she is interacting with an actual human rather than a software application. Mobile app development company in Mohali uses the latest tech to create high functioning mobile applications. These Apps are equipped with features with enhanced Artificial intelligence.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Builds Client Database&lt;/h3&gt;\r\n\r\n&lt;p&gt;Any user that downloads your application signs up using the details of themselves. It helps you keep the record of a database of your clients and users. You can use this information to send them the updates of your services. One good example of this is how the amazon application starts recommending you to buy things based on your previous purchases. However, it is recommended that the permissions are asked prior to collecting the data. In addition to that, these details about consumers and users on the database of your app meet customer expectations.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Increase revenue generation&lt;/h3&gt;\r\n\r\n&lt;p&gt;When you give a better experience to your users through an impressive application they tend to recommend others to use your app too. Furthermore, they maintain loyalty to your company through your application giving a major boost to your revenue generation.&lt;/p&gt;\r\n\r\n&lt;p&gt;When you hire a Mobile App Development Company in Mohali, they help you with an app that is an extension of your brand authority helps you further increase your revenue generation.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Vital Reasons to Hire a Mobile App Development Company&lt;/h2&gt;\r\n\r\n&lt;p&gt;It is often difficult to see why you would want to hire a professional mobile app development company. However, it is important to understand that getting a versatile mobile app development company in Mohali to build an app for your business. The advantages of hiring an app development company are as follows:&lt;/p&gt;\r\n\r\n&lt;h3&gt;Enhanced UI design&lt;/h3&gt;\r\n\r\n&lt;p&gt;One of the primary reasons to hire a Mobile App development company is UI Design. An attractive User Interface for the app allows users to stick to your application and frequently interact with it. The less complicated navigation makes it easier for the user to locate your product and services.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/../uploads/UIUx53686.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;A Mobile app development company has a team of professional UI/UX designers who specialize in creating an extremely user-friendly application. The professional designers understand that only user-friendly mobile applications have better chances of customer satisfaction. Stats tell us that a better User Interface and user experience of the mobile app can lead to a boost in &lt;strong&gt;conversion rates up to 400%.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;Versatile Development&lt;/h3&gt;\r\n\r\n&lt;p&gt;When it comes to developing an App coding versatility matters the most. Depending on which platform you want your app to be developed for. Each platform i.e IOS, Android, Windows requires a different set of developers and development techniques to build an App. App Developers in Chandigarh make sure to use the most compatible technology to build your mobile application, be it Hybrid or Native App development.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Testing of the Application&lt;/h3&gt;\r\n\r\n&lt;p&gt;Testing is the most crucial part of Mobile App Development to ensure that the product is of the highest quality and meets the customer demands and expectations. A Mobile App Development Agency in Mohali has a dedicated team of professionals to perform several quality checks and tests on the applications. Testing is important to resolve several bugs and issue that the application might face after the development. A mobile app development company makes sure the mobile app is run down through strict procedures of testing to order to attain maximum quality. An application loaded with several bugs will create a bad impression on the user about your business which may further lead to uninstallation.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Listing of the Application&lt;/h3&gt;\r\n\r\n&lt;p&gt;It is important to understand that making a highly intuitive mobile app with feature-rich functionality isn&amp;rsquo;t enough. The major test comes while listing the application on app stores. A leading mobile app development company in Mohali makes sure that your mobile application gets listed on the app stores like Google Play, App Store (Apple), etc. In addition to that, they make sure that the app meets the highest standards to be ranked amongst the top-rated apps. Each platform has its own norms, term, and conditions that need to be fulfilled in order to be listed on app stores. However, when you hire a Mobile application development company it becomes their duty to ensure the seamless listing of your application.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Maintenance&lt;/h3&gt;\r\n\r\n&lt;p&gt;Without maintenance of the product for at least a few months can lead to a lot of problems. There are a lot of bugs and issues that an application gets after a few days or weeks after users start interacting with them. Although many of the issues and bugs are taken care of and resolved during the testing phase, some of them remain hidden. When you hire an App Development Company in Mohali you get at least a minimum of 3 months of free maintenance of the product after the delivery.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/../uploads/Maintanance66769.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;This not only helps you in further refining the app but saves the time you might spend figuring it out yourself. For instance, you launch an app that attracts users and also stands in line with your business. But after installation, the application starts producing issues. This will not only lead to immediate uninstallation of your app but further affect your business.&lt;/p&gt;\r\n\r\n&lt;h2&gt;To Conclude&lt;/h2&gt;\r\n\r\n&lt;p&gt;We learned that how a Mobile app has several advantages for your business. A mobile app can build your brand and add a personal human touch to your services and products. We further understood how an agile application can help you in increasing revenue. In addition to all that, the biggest advantage of having an application for your business is the opportunity to compile a massive database of clients and users through the app.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\nWe also went through the vital role that a Mobile app development company in building your app. A web development company builds your app with a highly interactive and attractive UI design. It ensures that your app is built using the latest technologies and has a versatile code base. Along with agile development techniques, the App development company in Mohali performs quality checks and strict testing. Given these points, we now know and understand that availing of Mobile App development services&amp;nbsp;in Chandigarh can make a difference in the growth of your business. In fact, to have a better picture of how your mobile application should be it is important to consult a professional app development company. After all, in this era of smartphones, it is app development that holds a strong future for businesses.&lt;/p&gt;\r\n', 'TWFzdGVyIEluZm90ZWNoIGlzIGEgdG9wIE1vYmlsZSBBcHAgRGV2ZWxvcG1lbnQgQ29tcGFueSBpbiBNb2hhbGkgdGhhdCBjcmVhdGVzIHNlY3VyZSBwbGF0Zm9ybXMgdGhhdCBoZWxwIHlvdSBhY2hpZXZlIHlvdXIgY29tcGFueeKAmXMgb2JqZWN0aXZlcyBhbmQgY29tcGV0ZSBpbiB0aGUgY29ycG9yYXRlIGFyZW5hLg==', 'Grow your business with a Mobile App Development Company in Mohali | Master Infotech', 0, '2022-01-07 12:37:47'),
(20, '4', '2022-01-13', 'Master Infotech', '7 Reasons to hire the best SEO Company in Chandigarh', 'best-SEO-company-in-chandigarh', '../uploads/seo feature image86865.jpg', '&lt;p&gt;Ever since the introduction of the space-age technology called the internet, the world has become more connected. There are approximately &lt;strong&gt;1.4 billion websites&lt;/strong&gt; available on the internet and around &lt;strong&gt;252,000&lt;/strong&gt; websites are launched every day. It becomes a question of high concern, about &amp;lsquo;how to rank further up on search engines. Companies and businesses need optimization for their websites over the search engines. It is recommended to hire the best SEO company in Chandigarh, which will help you rise up the search engine rankings. In contrast to what people and businesses usually believe SEO is a very broad concept and is not only about search engine rankings.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Why Is SEO Important?&lt;/h2&gt;\r\n\r\n&lt;p&gt;There are around &lt;strong&gt;4.66 billion people&lt;/strong&gt; using the internet right now with numbers increasing every day. If you know the internet you must also know that Google dominates that search engine market with &lt;strong&gt;92.47 percent market share&lt;/strong&gt;. Google approximately gets &lt;strong&gt;66,000 clicks every second&lt;/strong&gt;. Even if you understand how Google works from a surface level, it is rather very difficult to understand the complicated process. Google is a complex search engine that operates on several algorithms which often require a set of SEO services to make your website search engine-friendly.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/../uploads/seo18526.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Above all, SEO optimization today has become the top lead generator. For every product or service user surf the internet. SEO leads to a better quality of potential customer targeting and increased conversion rates. In other words, good SEO makes your business more visible, not only increasing traffic and potential customers but expanding your brand outreach. SEO supremacy brings with itself authority over the internet and search engines of your website and business. However, businesses sometimes do not understand, why they would need to hire the Best SEO company to boost their search engine ranking and authority. In this article, we will go through some of the top reasons why you need to hire the Best SEO Company in Chandigarh. In the long run, there are several benefits of hiring an SEO company.&lt;/p&gt;\r\n\r\n&lt;h2&gt;Top Benefits to Hire an SEO company&lt;/h2&gt;\r\n\r\n&lt;p&gt;It is important that we understand that a DIY approach to SEO is not only a waste of time and effort if you lack skills but also harmful for your business. Whereas hiring an SEO company produces better results. Some of the top benefits are listed below.&lt;/p&gt;\r\n\r\n&lt;h3&gt;1) Industry Expertise&lt;/h3&gt;\r\n\r\n&lt;p&gt;To be honest, SEO is far too important than we usually realize. Businesses that spend a lot on advertising usually sideline SEO, or try to do it themselves. On the other hand, hiring a professional SEO company have the right experience, expertise, and all the technical knowledge to boost the SEO of your business and website. All businesses have realized today that having a website is of utmost importance. They usually take no notice of the major advantages of what an SEO company can do for them. These SEO agencies have years of experience and high expertise in helping companies and businesses register their domain authority and derive more business through search engines.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sooner or later all businesses have realized that it is not enough to have a website. They have realized that only through quality SEO delivered by SEO companies can deliver results that will boost their business growth. Master Infotech, being the Best SEO Company In Chandigarh offers guaranteed results on search engines. Equipped with experience in building brand authority our dynamic range of SEO services are specially designed to cater to the needs of businesses.&lt;/p&gt;\r\n\r\n&lt;h3&gt;2) SEO Keeps Changing&lt;/h3&gt;\r\n\r\n&lt;p&gt;We, at &lt;a href=&quot;https://www.masterinfotech.com/&quot;&gt;Master Infotech&lt;/a&gt;, know that SEO is difficult and its ever-changing nature is one of the major reasons. Big giants like Google are always trying and adding new things to the algorithm of their search engines. This makes SEO very difficult as old strategies do not work. For example, if you try to optimize meta keyword tags, it would not benefit your website in any manner. Meta&amp;nbsp;keyword tags have become obsolete and Google does not use meta keywords tags to evaluate your website anymore.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/../uploads/update60373.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;It is very difficult to keep track of these and at the same time be an expert. However, expert SEO services in Chandigarh specialize in keeping up with the search engines and changing algorithms. That is why is often the best choice to hire a company that is aware of all the ins and outs of search engines. This helps your website to stay relevant to the current market trends and maintain its rank.&lt;/p&gt;\r\n\r\n&lt;h3&gt;3) Increase your Online reach&lt;/h3&gt;\r\n\r\n&lt;p&gt;There should be no doubt about what impact a heightened online reach can have on your business. Today we measure the online success of a business through its online presence and visibility. Increasing online reach is directly proportional to increasing customers and revenue. A good SEO strategy crafted by expert leads brings organic traffic which converts into leads. Stats tell us that climbing up Search engine rankings almost double your click-through rates.&lt;/p&gt;\r\n\r\n&lt;h3&gt;4) Best companies deliver more than just SEO&lt;/h3&gt;\r\n\r\n&lt;p&gt;You might aware by now that SEO alone is a powerful tool to ensure growth. But when you hire a professional SEO agency, you hire a team of experts with years of experience in digital marketing. Along with delivering efficient SEO services, you get other services that are necessary and prove super beneficial when blended with core SEO. The best SEO company in Chandigarh not only provides you with the best results but also believes in knowledge sharing. So, you not only grow your business but also develop a knowledge base and an overall understanding of search engines and SEO. They provide you with consultation and how SEO will work efficiently for your business. In addition to that, SEO tracking helps you analyze your competition. With all this information you can handle your website and run your business in the best possible manner.&lt;/p&gt;\r\n\r\n&lt;h3&gt;5) Measure the results&lt;/h3&gt;\r\n\r\n&lt;p&gt;As you might already know it is often very difficult to measure and analyze results through traditional marketing techniques. On the other hand, through SEO and digital marketing, you can analyze every detail. Through various analytical techniques and tools, you can measure SEO results in every aspect. This gives your business a boost as your know where to bid and where to focus more.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/../uploads/graphs76641.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;A professional SEO agency provides all the analytics of results which is highly measurable. Furthermore, through analytics, you become more updated about where you are heading and what should be your future plans. It is only through measurement and analytics that you can develop an effective business strategy. An SEO Agency in Chandigarh defines your target audience and through optimal research on keywords, they align your keywords strategy with the target customers. Hence, you are constantly updated about which content is producing the desired results and which content isn&amp;rsquo;t.&lt;/p&gt;\r\n\r\n&lt;h3&gt;6) SEO agencies are Cost-effective&lt;/h3&gt;\r\n\r\n&lt;p&gt;At this stage, it might be very clear to you that investing in SEO ensures maximum Return On Investment. Today, mostly everyone is searching over the internet about products and services. SEO agencies help you increase your visibility and brand awareness of your business that helps you gain an edge over your competitors. With SEO services in Chandigarh, you get more targeted traffic on your website which ultimately leads to much more conversion rates. You can compare SEO cost with the amount of money you have been wasting on traditional marketing techniques. You&amp;rsquo;ll understand that around &lt;strong&gt;40% of all online traffic&lt;/strong&gt; comes from search engines which is much higher than all traditional marketing techniques. Above all, SEO gives your business a long-term benefit, which means, SEO of today will bring you results for many coming years.&lt;/p&gt;\r\n\r\n&lt;h3&gt;7) SEO agencies ensure safety&lt;/h3&gt;\r\n\r\n&lt;p&gt;One this is for sure, the Internet is and search engines are risky. With hackers and spammers flooding the internet your website surely becomes very vulnerable if not in the right hands. When you hire an SEO company you put the future of the website and business in safe hands. SEO agencies ensure 100% safety from all kinds of online threats.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://masterinfotech.com/../uploads/security57609.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;As SEO agencies know their job and know what is right for your website. Not only that, a professional SEO company ensures brand safety, which means they protect your business against all negative publicity and attacks by competition. Your website can be exposed to a lot of digital marketing red flags&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h3&gt;To Conclude&lt;/h3&gt;\r\n\r\n&lt;p&gt;We learned that everything is somehow connected to the internet in the era of today. &amp;nbsp;To grow any business it becomes important to cater to the online audience. We further learned about the several benefits of hiring the Best SEO Company in Chandigarh. We learned that the SEO agency is equipped with industry expertise and helps you gain more organic traffic on your website. It further helps you expand your online reach leading to more online conversions. The world as we know has shifted to the internet as they look for more products and services over the web. The competition is fierce and to gain a competitive edge it is important to hire a professional SEO agency. SEO has doubtlessly become the marketing technique of the &amp;ldquo;new era&amp;rdquo; bringing more efficient results. Considering hiring an SEO agency? Request a free consultation today!&lt;/p&gt;\r\n', 'V2UncmUgYSByZXB1dGFibGUgU0VPIENvbXBhbnkgaW4gQ2hhbmRpZ2FyaCB3aXRoIGEgdHJhY2sgcmVjb3JkIG9mIHN1Y2Nlc3MuIEJlZ2luIHdpdGggYSBmcmVlIHNpdGUgYXVkaXQgdG9kYXkhIFlvdXIgZGlnaXRhbCBtYXJrZXRpbmcgYWN0aXZpdGllcyByZXZvbHZlIGFyb3VuZCBTRU8uIExldCB1cyBoZWxwIHlvdSBnYWluIG1vcmUgdmlzaWJpbGl0eSByaWdodCBub3ch', '7 Reasons to Hire the Best SEO Company in Chandigarh | Master Infotech', 0, '2022-01-13 11:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `case_study`
--

CREATE TABLE `case_study` (
  `id` int(11) NOT NULL,
  `logo` varchar(150) NOT NULL,
  `main_image` varchar(150) NOT NULL,
  `description1` text NOT NULL,
  `po_image` varchar(150) NOT NULL,
  `po_description` text NOT NULL,
  `aigo_image` varchar(150) NOT NULL,
  `aigo_sh_description` text NOT NULL,
  `aigo_main_description` text NOT NULL,
  `strategy_image` varchar(150) NOT NULL,
  `strategy_description` text NOT NULL,
  `style_fo_image` varchar(150) NOT NULL,
  `style_co_sch_image` varchar(150) NOT NULL,
  `style_sitemap_image` varchar(150) NOT NULL,
  `style_description` text NOT NULL,
  `screen_image` varchar(150) NOT NULL,
  `paper_image` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_study`
--

INSERT INTO `case_study` (`id`, `logo`, `main_image`, `description1`, `po_image`, `po_description`, `aigo_image`, `aigo_sh_description`, `aigo_main_description`, `strategy_image`, `strategy_description`, `style_fo_image`, `style_co_sch_image`, `style_sitemap_image`, `style_description`, `screen_image`, `paper_image`, `status`, `date`) VALUES
(1, '../uploads/acc-logo79384.png', '../uploads/1180974.png', 'AccelPro is a Fast Growing Indian Product Company that provides Secure Remote Access Products and Services with an Innovative Approach. Founded with a Mission to deliver Secure Access Products, meeting Customer Expectations in terms of Product Technology, Ease of Use, High Performance, Better User Experience, and Best Technical Support, which has Revolutionized Secure Access Market.\r\n\r\n', '../uploads/2-sec20835.png', 'Accelpro being a secure remote access products and services company required a complete restructured website design, falling in line with its business niche. The website needed to be easy to navigate and not too complicated with all the information delivered in a skimmable manner for a simplified user experience to gain visual authority.', '../uploads/aim51269.jpg', 'During the course of laying out a plan with the client, we listed some aims and goals that were necessary to achieve.', '<ul>\r\n	<li>To not just design and develop the website but to build a fully responsive online experience</li>\r\n	<li>To give a highlighted section to the company&rsquo;s product</li>\r\n	<li>Limit the quantity of content and design elements and heighten the quality.</li>\r\n	<li>To add strategically divide landing pages for better SEO</li>\r\n	<li>To use agile methodology for the high-velocity website.</li>\r\n	<li>Using the in-trend design and development practices to in still a sense of freshness to the website</li>\r\n	<li>To make sure the responsive design of the website follows the principle of minimalism</li>\r\n</ul>\r\n', '../uploads/strategy86015.png', 'We started by understanding the basic structure by going through various sitemaps and once the sitemap and structure were in place we moved on to working on content division on optimization on each page. A basic design was drawn out and placement of content across custom page templates was finalized. A wireframe helped us figuring out the flow of the design which further helped us in ensuring easy navigation and greater user experience.', '../uploads/fontfamily40870.png', '../uploads/colorscheme57182.png', '../uploads/sitemap14998.png', 'With a unique blend of services and products of AccelPro, an agile and robust custom CMS was built by our skilled team of developers and designers. The navigation came out to be easy after being put under series of tests our team made sure that the website ran glitch-free, without compromising design quality and elements on all the major browsers and mobile devices. The UX was constructed to match the target audience. Each page was given several elements of movement and animation to strengthen user retention of the site. Our team completed thorough testing on all the major browsers and mobile devices to ensure that the performance was top-notch', '../uploads/desktop24565.png', '../uploads/111138944.png', 0, '2021-11-30 05:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `icon` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `icon`, `description`, `status`, `date`) VALUES
(1, 'Website Development', '../uploads/web-devl87647.png', 'With our best web development services, we bring you a responsive website design that not just attracts traffic but also a higher base of customers.', 0, '2021-12-09 06:31:55'),
(2, 'Mobile App Development', '../uploads/mobile-app-devl31992.png', 'With our superior Mobile App Design and Development services, we bring you a customized app with seamless usability, with our user friendly application you witness a magnified rise in the growth of your business', 0, '2021-12-09 06:32:11'),
(3, 'UI/UX Design', '../uploads/uiux29565.png', 'Our UI/UX services empower you to attain much higher user retention.\r\nWhen it comes to our design process we are extra focused on modern aesthetic values. ', 0, '2021-12-09 06:33:14'),
(4, 'Ecommerce', '../uploads/e-comm70065.png', 'Our state-of-the-art ECommerce Website Development practice enables you to witness an expansion of your Ecommerce platform like never before, with an even higher graph of sales.', 0, '2021-12-09 06:33:33'),
(6, 'Digital Marketing', '', 'Aligning our digital marketing strategies to the market dynamics is our forté. Our methodical and best digital marketing services will help you reach even a broader audience.', 0, '2021-12-09 06:33:56'),
(7, 'Business Consultation', '', 'We take pride in our ability to analyze the ever-evolving market and our team of specialists consists of Best Business Consultants, providing our clients to reach their business goals. ', 0, '2021-12-09 06:34:07'),
(8, 'Training and internship', '', 'By providing a substantial industrial environment we impart technological expertise to our candidates. Our dynamic Training And Internship Program helps them build an industrious approach.', 0, '2021-12-09 06:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `date` int(11) NOT NULL,
  `reply` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_user`
--

CREATE TABLE `contact_user` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_user`
--

INSERT INTO `contact_user` (`id`, `name`, `email`, `phone`, `message`, `status`, `date`) VALUES
(22, 'Oskar Weber', 'tbformleads@gmail.com', '89356719994', 'Hello \r\n \r\nMy main objective here, is to help increase revenue for you by producing an animated video that will generate leads and sales for your business 24/7, for just $97. \r\n \r\nBut this offer is only good this week, so get your video before the deadline. \r\n \r\nWatch Our Video Now! https://bit.ly/Xpress97offer \r\n \r\nFor less than you spend on coffee each month you get an American Owned Video company that can write your script, create your story board, lay-in a good soundtrack and produce an awesome video that brings home the bacon. \r\n \r\nAgain, this $97 promotion is for this week only. Don’t miss out!!! \r\n \r\nWatch Our Video Now! https://bit.ly/Xpress97offer', 0, '2021-12-13 21:09:54'),
(67, 'QjlsCmJiknUXg', 'cooregasonca61984@gmail.com', '7779811499', 'aJXTDAgGmnhew', 0, '2021-12-25 07:22:49'),
(68, 'YukmjXwMSxR', 'cooregasonca61984@gmail.com', '8227918726', 'ZroLmcsIdwtnUpHV', 0, '2021-12-25 07:22:51'),
(69, 'Rogeliohat', 'ricky.mete@hotmail.co.uk', '84241741271', 'Hallo. \r\nWenn Sie sich fur diese Art von Verdienst interessieren, dann sollten Sie wissen, dass hier einmalig Investitionen von 500 EUR erforderlich sind (#!@ \r\nDaruber hinaus erhalten Sie ab 1500 EUR pro Woche !)*( \r\n>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc9jD1p&sa=D&58=16&usg=AFQjCNE5-l7dYtpQNDLSz9x2TTehrGGJ2w <<<<< \r\nDie Essenz des Verdienens besteht darin, Einnahmen aus dem Handel mit Kryptowahrungen in einem automatischen Modus zu erzielen. Selbst wenn alle Markte zusammenbrechen, erhalten Sie Ihr Geld garantiert ab 1500 EUR pro Woche. \r\nNehmen Sie Ihren Platz an der Sonne ein und melden Sie sich an (*(+ \r\nBegrenztes Angebot :)%% \r\n>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc9jD1p&sa=D&02=48&usg=AFQjCNE5-l7dYtpQNDLSz9x2TTehrGGJ2w <<<<<', 0, '2021-12-26 04:38:30'),
(70, 'test', 'shanni@gmail.com', '8795225852', 'dcddfffv', 0, '2021-12-27 05:33:40'),
(71, 'test', 'shanni@gmail.com', '5616325145', 'dfdfrgf', 0, '2021-12-27 05:48:23'),
(72, 'test', 'shanni@gmail.com', '5616325145', 'dfdfrgf', 0, '2021-12-27 05:48:26'),
(73, 'test', 'shanni@gmail.com', '5616325145', 'dfdfrgf', 0, '2021-12-27 05:51:42'),
(74, 'nandita', 'admin@masters.com', '1234567890', 'testing', 0, '2021-12-27 07:29:30'),
(75, 'nandita', 'admin@masters.com', '1234567890', 'testing', 0, '2021-12-27 07:29:39'),
(76, 'nandita', 'admin@masters.com', '1234567890', 'testing', 0, '2021-12-28 04:32:08'),
(77, 'nandita', 'admin@masters.com', '1234567890', 'testing', 0, '2021-12-28 04:32:43'),
(78, 'nandita', 'admin@masters.com', '1234567890', 'ignore please', 0, '2021-12-28 04:41:24'),
(79, 'Marty Tierney', 'livestaffinghub@gmail.com', '47-88559192146', 'Hello \r\n \r\nHello, My name is Marty and I’m a video marketing expert.  My main objective here, is to help increase revenue for you by producing 2D Animated Videos to generate leads and sales for your business 24/7, for just $499. \r\n \r\nThe offer is only good for this week, so get your video before the deadline. \r\n \r\nWatch Our Video Now!      https://bit.ly/499VideoOffer \r\n \r\nImagine, for 1 Low Affordable rate you get 2 CUSTOM VIDEOS that will bring home the bacon for the New Year! \r\n \r\nI know this is crazy, so Don’t Miss Out!!! \r\n \r\nI’m in, show me THE DETAILS!    https://bit.ly/499VideoOffer \r\n \r\nBest, \r\n \r\nMarty Tierney \r\nDigital Expert & Video Producer', 0, '2021-12-30 10:49:00'),
(80, 'vhekWwTfJYgGlx', 'cava2563@gmail.com', '263-2852560205', 'YyMGdzvbPRWUhuac', 0, '2021-12-31 20:01:21'),
(81, 'HvwjADdJgCIFQ', 'cava2563@gmail.com', '263-5284568149', 'JWodaqRvOw', 0, '2021-12-31 20:01:23'),
(82, 'Mike James\r\n', 'no-replykl@gmail.com', '47-84311646527', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nApply this -35% code ( MEGAPROMOTER ) while getting your masterinfotech.com to have a DA above 60 points in Moz with us today and reap the benefits of such a great feat at an affordable rate. \r\n \r\n \r\n \r\nSee our offers here: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\nhttps://www.strictlydigital.net/product/moz-da60-seo-plan/ \r\n \r\nNEW: ahrefs DR70 is now possible: \r\nhttps://www.strictlydigital.net/product/ahrefs-seo-plan/ \r\n \r\n \r\nThank you \r\nMike James\r\n \r\nmike@strictlydigital.net', 0, '2022-01-01 12:02:15'),
(83, 'Mike Durham\r\n', 'no-replykl@gmail.com', '64-83691453784', 'Greetings \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Durham\r\n \r\nSpeed SEO Digital Agency', 0, '2022-01-03 06:48:31'),
(87, 'abc', 'hi@gmail.com', '+91-2222222222', 'test', 0, '2022-01-05 12:14:51'),
(88, 'muRFtUSEZqMI', 'jasonciam16880@gmail.com', '2107356159', 'leZbXuBGUj', 0, '2022-01-06 12:45:13'),
(89, 'UmwfAokdWRTbQ', 'jasonciam16880@gmail.com', '4640155681', 'yfIUdwHmDzjKbeh', 0, '2022-01-06 12:45:15'),
(90, 'Anjali kumari gupta', 'anjalibsccsiwagupta@gmail.com', '+91-7564819877', 'Regarding B.tech fresher job ', 0, '2022-01-08 07:45:56'),
(91, 'Mike Gilbert\r\n', 'no-replykl@gmail.com', '87983716629', 'Good Day \r\n \r\nI have just took a look on your SEO for  masterinfotech.com for its SEO metrics and saw that your website could use an upgrade. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Gilbert\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 0, '2022-01-12 11:58:31'),
(92, 'HRAeVDrlvcO', 'andersonkeaton814@gmail.com', '3229950700', 'eYaWKjkcTFOqM', 0, '2022-01-12 16:10:11'),
(93, 'DioSIrQuWthfGCs', 'andersonkeaton814@gmail.com', '2426208490', 'gTkRcBywJHZd', 0, '2022-01-12 16:10:12'),
(94, 'Kevin Johnson', 'tbformleads@gmail.com', '83821436473', 'Hello \r\n \r\nMy main objective here, is to help increase revenue for you by producing an animated video that will generate leads and sales for your business 24/7, for just $97. \r\n \r\nBut this offer is only good this week, so get your video before the deadline. \r\n \r\nWatch Our Video Now! https://bit.ly/Xpress97offer \r\n \r\nFor less than you spend on coffee each month you get an American Owned Video company that can write your script, create your story board, lay-in a good soundtrack and produce an awesome video that brings home the bacon. \r\n \r\nAgain, this $97 promotion is for this week only. Don’t miss out!!! \r\n \r\nI’m in, show me what you got. https://bit.ly/Xpress97offer \r\n \r\nBest, \r\n \r\nKevin Johnson \r\nBusiness Development Manager', 0, '2022-01-15 02:46:40'),
(95, 'Lorenzo Mokry', 'HugoCornelius1477@gmail.com', '', 'I was wondering if you wanted to submit your new site to our free business directory? https://1mdr.short.gy/submityourwebsite', 0, '2022-01-16 02:10:02'),
(96, 'cilaJUOPogYdBkNw', 'ol092872@gmail.com', '4942819944', 'IFfvqtknZyeLXx', 0, '2022-01-17 20:18:11'),
(97, 'cYygFnemh', 'ol092872@gmail.com', '2501970996', 'xreIWMBoiDU', 0, '2022-01-17 20:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_content`
--

CREATE TABLE `contact_us_content` (
  `id` int(11) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sms` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `social_data` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us_content`
--

INSERT INTO `contact_us_content` (`id`, `phone`, `email`, `sms`, `address`, `social_data`, `status`, `date`) VALUES
(1, '+91 74000 18000', 'info@masterinfotech.com', '7400018000', 'Plot no 163, Sector 82, Mohali, INDIA', '[{\"icon\":\"fab fa-facebook\",\"link\":\"http:\\/\\/localhost\\/master\\/contact-us.php\"}]', 0, '2021-11-25 07:56:32'),
(2, '+91 74000 18000', 'info@masterinfotech.com', '7400018000', 'Plot no 163, Sector 82, Mohali, INDIAcccc', '[{\"icon\":\"fab fa-facebook\",\"link\":\"http:\\/\\/localhost\\/master\\/contact-us.php\"}]', 0, '2021-11-26 07:49:08'),
(3, '+91 74000 18000', 'info@masterinfotech.com', '7400018000', 'Plot no 163, Sector 82, Mohali, Punjab 160055.', '[{\"icon\":\"fab fa-facebook\",\"link\":\"http:\\/\\/localhost\\/master\\/contact-us.php\"}]', 0, '2021-12-14 11:43:45'),
(4, '+91 74000 18000', 'info@masterinfotech.com', '7400018000', 'Plot no 163, Sector 82, Mohali, Punjab 160055.', '[{\"icon\":\"fab fa-facebook\",\"link\":\"http:\\/\\/localhost\\/master\\/contact-us.php\"},{\"icon\":\"fa fa-twitter\",\"link\":\"#\"},{\"icon\":\"fa fa-instagram\",\"link\":\"https:\\/\\/www.instagram.com\\/masterinfotechofficial\\/\"},{\"icon\":\"fa fa-linkedin\",\"link\":\"https:\\/\\/www.linkedin.com\\/company\\/master-infotechofficial\\/\"},{\"icon\":\"fa fa-behance\",\"link\":\"https:\\/\\/www.behance.net\\/ab941400?tracking_source=search_users_recommended%7Cmaster%20infotech\"},{\"icon\":\"fa fa-dribbble\",\"link\":\"https:\\/\\/dribbble.com\\/MasterInfotechOfficial\"}]', 0, '2021-12-14 11:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `content3` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `b_id`, `content3`, `status`, `date`) VALUES
(1, 15, '[{\"title\":\"What Are the Benefits of Digital Marketing Services for Any Business?\",\"description\":\"The internet has enabled firms to communicate with target consumers in real-time, which is one of the key reasons why digital marketing services have grown increasingly more important than traditional marketing strategies. Furthermore, as compared to traditional advertising methods, using online marketing services is extremely inexpensive and has an endless reach.\"},{\"title\":\"Is Hiring A Digital Marketing Agency Worth It?\",\"description\":\"Yes, hiring digital marketing services is a good investment because it\'s becoming more cost-effective, more productive, and can help you gain a more objective viewpoint on things. Hiring an internet advertising firm also provides you with access to their marketing resources, proven and tested marketing methods, and cutting-edge technology.\"}]', 0, '2021-12-13 12:14:43'),
(2, 1, '[{\"title\":\"What is the average cost of a UX design project?\",\"description\":\"The cost of a UX design project is influenced by a number of factors. The project\'s extent and complexity, the basis of the project (starting from scratch, redesigning an existing design), platforms (mobile, web, TV, kiosk), technology involved, design services included (user research, interviews, testing), and the delivery deadline are just a few of the factors to consider.\"},{\"title\":\"What is the difference between UI and UX?\",\"description\":\"The difference between User Interface (UI) and User Experience (UX) is that UI deals with the visual components through which people interact with a product, whereas UX deals with the user\'s experience with the product or service. As a result, UI is concerned with visual interface elements like fonts, colors, menu bars, and so on, whereas UX is concerned with the user and their experience through the product.\"}]', 0, '2021-12-18 11:39:47'),
(3, 2, '[{\"title\":\"What is the optimal number of keywords for SEO?\",\"description\":\"To gain the biggest SEO effect, target three to four keywords on the homepage. Writing longer content is the simplest technique to add more keywords to your page.\"},{\"title\":\"How many h1 tags should a website contain?\",\"description\":\"There should only be one h1 tag on your website. If a page has more than one h1 tag, convert the remaining h1 tags to h2 or h3. The h1 tag should be placed at the head of the content on the page.\"}]', 0, '2021-12-21 07:07:22'),
(4, 7, '[{\"title\":\"What is the most effective way to start a startup?\",\"description\":\"An idea, money, and time are the three things needed to start a startups. To get capital or bootstrap your startup, you\'ll need to work on all fronts at the same time, find the correct contacts and support networks, and work on all fronts at the same time.\"},{\"title\":\"What is venture capital?\",\"description\":\"Venture capital is a sort of private equity and one of the ways to invest firms with high growth potential. Venture capitalists (VCs) oversee money pools known as funds and do not always invest their own money.\"}]', 0, '2021-12-21 07:23:50'),
(5, 6, '[{\"title\":\"What impact will 5G have on marketing?\",\"description\":\"Companies will be able to deliver higher-quality, interactive, and immersive experiences across a broader range of connected devices thanks to 5G. Marketers will now be able to acquire more precise and granular data in order to customize messaging.\"},{\"title\":\"What are the drawbacks of the 5G network?\",\"description\":\"The primary downside of 5G is that it has limited worldwide coverage and is only available in select areas. Only cities will see significant benefits from the 5G network, while outlying locations may not have service for several years. Furthermore, when compared to other networks, the costs of establishing tower stations are significant.\"}]', 0, '2021-12-21 11:31:47'),
(6, 3, '[{\"title\":\"What Are the Benefits of Ecommerce for Any Business?\",\"description\":\"Ecommerce has grown in popularity in recent years since it provides businesses with a wide range of benefits, from marketing to expanding the product line, all of which assist produce sales. You can simply develop and reach goals with an optimized and well-designed e-store, as well as provide customers with round-the-clock support.\"},{\"title\":\"What Are The Different Ecommerce Types?\",\"description\":\"Ecommerce, or internet commerce, is a term that refers to a variety of business transactions. Business to business (B2B), business to customer (B2C), customer to business (C2B), and customer to customer (C2C) are the four basic types of eCommerce business.\"}]', 0, '2021-12-22 06:19:26'),
(7, 17, '[{\"title\":\"What are the services that are provided by your web designing company?\",\"description\":\"We are a multifaceted IT solutions company with services ranging from Web designing and development, Digital marketing, brand identity design to mobile application development. Our services are focused directly to help businesses grow their brand value.\"},{\"title\":\"What is the minimum budget for web designing?\",\"description\":\"The budget majorly depends on the work needed by a project and its scope. However, the pricing at Master Infotech is best in the industry and is usually customized to the very details as per the client\\u2019s needs.\"}]', 0, '2021-12-22 10:25:08'),
(8, 18, '[{\"title\":\"How long will it take to complete the website?\",\"description\":\"In most circumstances, the customer has control over how long a web project takes to complete. We can help you get the website up and running if you have a deadline.\"},{\"title\":\"What does it mean to develop a responsive website?\",\"description\":\"Responsive web design, also known as responsive web development, is a technique for making website pages more readable across a variety of devices, including PC desktops, retina displays, tablet screens, and mobile phone screens.\"}]', 0, '2021-12-28 13:07:55'),
(9, 19, '[{\"title\":\"What are the steps you take to develop a mobile app?\",\"description\":\"Our mobile app development process is divided into three steps: We begin our mobile app development process by talking with our clients about their goals. Will wireframe a solution after learning about your company and your goals for designing a mobile app. The design and development stage is where we will build designs, character models, and sound effects, as well as test and fix any bugs or errors in the app. The introduction of the app, followed by its marketing, is the third and final stage.\"},{\"title\":\"How much will it cost to create an app?\",\"description\":\"In fact, the cost of an app is determined by its functionality as well as your preferences. Other criteria include the graphics used, sound effects, the platform is chosen, and so on.\"}]', 0, '2022-01-07 12:40:45'),
(10, 20, '[{\"title\":\"Is it possible to hire an SEO Company for a local business?\",\"description\":\"Local businesses, on the other hand, must improve their web presence in order to stay competitive. Attempting to do SEO for your local business on your own can result in a significant loss. To avoid such situations, it is now a sensible idea to hire professionals in the sector. The SEO firm will assist you in moving your company to the next level. You will save time and effort by hiring SEO agencies. Professionals will assist you in growing your local market\'s web traffic. They assist in getting your website to the top of the search engine results pages. Hiring a good SEO firm for your local business is a wise investment.\"},{\"title\":\"Do SEO companies also create websites?\",\"description\":\"In general, SEO companies do not design websites, but Master Infotech does because we are also a well-known web development company. We assist in improving the website\'s quality and ranking. We fix site issues and improve the Meta information on websites. SEO companies make sure your website is both user-friendly and safe. They assist websites in connecting with a larger audience. They improve their chances of success by optimising the site. They assist in the strengthening of your website by making all of these services available.\"}]', 0, '2022-01-13 11:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `get_quote`
--

CREATE TABLE `get_quote` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `company` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `project` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `get_quote`
--

INSERT INTO `get_quote` (`id`, `name`, `company`, `email`, `phone`, `project`, `status`, `date`) VALUES
(2, 'a', 'b', 'abc@gmail.com', '1212121212', 'test', 0, '2021-12-30 06:16:35'),
(4, 'sagar', 'sharma', 'sagarsharma6970@gmail.com', '1243434546', 'jdsfuygsfsjsdf', 0, '2022-01-01 06:19:56'),
(10, 'Nandita', 'sharma', 'nan@gmIL.COM', '+91-9630258741', 'TESTING please ignore', 0, '2022-01-13 11:31:09'),
(11, 'rajnish', 'test', 'abc@d.com', '+91-1234567890', 'tree', 0, '2022-01-13 11:33:47'),
(12, 'simranjit singh', 'Fairworks', 'singhsimran376@gmail.com', '+91-9855755111', 'hi', 0, '2022-01-17 11:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `home_choose_best`
--

CREATE TABLE `home_choose_best` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_choose_best`
--

INSERT INTO `home_choose_best` (`id`, `description`, `status`, `date`) VALUES
(1, 'We are a passionate and dedicated team of specialists who take up each project as a challenge, delivering top-notch and timely results. Our wide-ranging IT Solutions services like Digital Marketing, Web Design, and Development, Graphic Design, and SEO help you adapt, compete, and overcome all your business challenges. At Master Infotech we constantly innovate and launch new capabilities. ', 0, '2021-12-09 06:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `home_developing_tech`
--

CREATE TABLE `home_developing_tech` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_developing_tech`
--

INSERT INTO `home_developing_tech` (`id`, `description`, `status`, `date`) VALUES
(1, 'We are a full-fledged IT Services Company invading new possibilities and reshaping the technology-driven generation. We at Master Infotech strongly believe in building trust to go beyond technological boundaries. We directly cater to the business needs of our clients providing robust Digital Solutions. ', 0, '2021-12-09 06:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `home_quality_content`
--

CREATE TABLE `home_quality_content` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_quality_content`
--

INSERT INTO `home_quality_content` (`id`, `description`, `status`, `date`) VALUES
(1, 'At Master Infotech, bespoke and superior quality is our top priority. Our team of experts makes sure the work is passed through several tests and quality checks before being delivered to you.', 0, '2021-11-29 05:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title`, `description`, `image`, `status`, `date`) VALUES
(1, 'Discuss', 'Communicating with the client, trying to understand needs, requirements and vision.', '../uploads/slider-img5160238691.webp', 0, '2021-12-10 07:46:21'),
(2, 'Define', 'Making a defined layout of the work plan, assigning the work to the respective teams.', '../uploads/slider-img21210189675.webp', 0, '2021-12-10 07:43:55'),
(3, 'Develop', 'Designing and developing prototypes. Making necessary changes with all the specifications in mind.', '../uploads/slider-img33212573681.webp', 0, '2021-12-10 07:46:01'),
(4, 'Deliver', 'Finalizing the project and delivering it to the client after a series of tests and strict quality checks.', '../uploads/slider-img43396886374.webp', 0, '2021-12-10 07:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `inner_service_data`
--

CREATE TABLE `inner_service_data` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inner_service_data`
--

INSERT INTO `inner_service_data` (`id`, `service_id`, `title`, `image`, `description`, `status`) VALUES
(1, 1, 'Php Development', '../uploads/php93311.png', 'PHP development comes with a wide range of opportunities and we leave no stones unturned in delivering full-spectrum, feature-rich, and fast PHP development solutions to our clients encoded with vigorous integrations.', 0),
(2, 1, 'Html 5 Develpoment', '../uploads/html59993.png', 'We deliver the most innovative and cross-platform HTML development which is not only high performing but also runs across all browsers and screens. With Master Infotech HTML solutions experience high reliability and security.', 0),
(3, 1, 'Node Js Development', '../uploads/node-js59358.png', 'We deliver the most innovative and cross-platform HTML development which is not only high performing but also runs across all browsers and screens. With Master Infotech HTML solutions experience high reliability and security.', 0),
(4, 1, 'Python Development', '../uploads/python42047.png', 'At Master Infotech we deliver powerful end-to-end Python Development. We recommend Python for its simple, yet elegant syntax.', 0),
(5, 1, 'Dotnet Development', '../uploads/dotnet14217.png', '.NET is an ecosystem and framework designed by Microsoft and used extensively for easy desktop and web application development. We make use of all the implementations of the .NET platform (NET Framework, .NET Core, Xamarin, and UWP). to deliver a fully inventive and responsive web portal and applications.', 0),
(6, 1, 'Java Development', '../uploads/java58822.png', 'Trusted by millions of developers, JAVA is highly efficient for scalable and agile websites and applications. Master Infotech uses and fully integrates with the ever-evolving technologies of JAVA to bring about adaptive and upscale JAVA development solutions.', 0),
(9, 2, 'Native Mobile App Development', '../uploads/mobapp194476.jpg', 'Our customized solutions include Native App Development. Our high functioning apps have supported businesses across industries to grow their customer and user base, delivering high-velocity mobile applications.\r\n\r\n\r\n', 0),
(10, 2, 'Hybrid Mobile App Development', '../uploads/mobapp255771.jpg', 'Providing a unique blend of native and web applications, we ensure seamless and integrated hybrid mobile application solutions with an optimum user experience guarantee.', 0),
(11, 2, 'Wearable Application Development', '../uploads/mobapp376502.jpg', 'Wearable smart devices have started dominating the technology World. Our unique development process provides you with a companion application which efficiently evolves with the personalized experience of the user on multiple devices and versions.', 0),
(12, 3, 'Branding design', '../uploads/flyers51101.webp', 'Our overall branding design eases out your way to attain superior visual recognition for your brand.', 0),
(13, 3, 'Mobile App UI/UX', '../uploads/user-interface67003.webp', 'With help of our exceptional UX/UI designers we build effective mobile interfaces for mobile applications, creating interactive experiences.', 0),
(14, 3, 'Cross-platform experiences design', '../uploads/cross94622.webp', 'Each platform has its own strengths. We specialize in integrating design experiences across multiple platforms to facilitate higher growth.', 0),
(15, 3, 'UI and UX consulting', '../uploads/online-business62327.webp', 'Our in-house team of specialist designers helps you figure out the best possible rhythm, theme, and plan of UI and UX design meeting your requirements.', 0),
(16, 3, 'Promotional designs', '../uploads/megaphone83333.webp', 'Our promotional designs services help your brand connect with your customers through eye-catching and attractive visuals.', 0),
(17, 4, 'ECOMMERCE WEB DEVELOPMENT', '../uploads/ecomm176222.webp', 'At Master Infotech our in-house team of developers and designers are specialized in eCommerce website development. By using state-of-the-art technologies and keeping in mind all your requirements to make your eCommerce project a success.', 0),
(18, 4, 'ECOMMERCE STRATEGY & CONSULTATION', '../uploads/ecomm225263.webp', 'Not sure about various aspects of running an eCommerce business and want help? We got you covered! From initiating the project and business idea to the final launch, we are with you all through the way to provide the best eCommerce consultation solutions for your eCommerce store.', 0),
(19, 4, 'ECOMMERCE DESIGN', '../uploads/ecomm376589.webp', 'In eCommerce design defines the business, as various studies point out that about 3 in every 4 users (75%) quit the website or uninstall the application if they don’t find it attractive and easy to use. So, we put a special focus on keeping our designs aesthetic which appeal to the customer instantly.', 0),
(20, 4, 'ECOMMERCE APP DEVELOPMENT', '../uploads/ecomm458191.webp', 'In an era where everything is becoming smartphone-driven, getting a mobile application for your eCommerce store becomes a necessary compulsion. Stacked with years of experience in developing mobile applications for eCommerce businesses, we at Master Infotech deliver a mobile application that meets the requirements of your eCommerce business.', 0),
(21, 6, 'Search Engine Optimization', '../uploads/SEO25349.webp', 'The success of a website is finally derived from its search engine ranking. With our work-class SEO services, we enforce organic ranking for your website by devising a customized strategy resulting in quality traffic and leads.', 0),
(22, 6, 'Social Media Marketing', '../uploads/social-media39762.webp', 'There are around 4.2 billion active social media users worldwide. It is needless to say how powerful Social media marketing can be. We at Master Infotech help you strengthen brand awareness across social media platforms help you fortify your brand engagement.', 0),
(23, 6, 'Search Engine Marketing', '../uploads/321gp35439.webp', 'Get the best out of Search Engine Marketing for highly targeted and cost-effective results. We use the perfect blend of Pay Per Click (PPC) and Web analytics to boost your SERP ranking through strategizing, optimization, and advertising. With our customized paid campaigns put together, we help you grow your reach within hours!', 0),
(24, 6, 'Content Creation', '../uploads/writer59649.webp', 'Content is undoubtedly the king when it comes to digital marketing. By understanding and researching your business niche we create content that helps you in elevating your experience.', 0),
(25, 6, 'App Store Optimization', '../uploads/testing56433.webp', 'APO or App Store Optimization is a process of improving the ranking of an app on the iTunes App Store or Google Play store. It is sometimes also regarded as SEO of applications. By making use of the best available APO tools we give your application an organic boost in rankings.', 0),
(26, 7, 'Business strategy', '../uploads/bs260929.jpg', 'We guide you and help you transform your vision for business into a well-planned and objective-ridden strategy. We research and derive useful insight from data to produce better insights.', 0),
(27, 7, 'Risk management', '../uploads/bs511736.jpg', 'No business can be ever done without the involvement of risk. This risk cannot be removed but can always be managed and reduced. Our risk management services allow businesses to deep dive into insightful evaluations to be resilient to every upcoming risk.', 0),
(28, 7, 'Business Update and Re-engineering', '../uploads/bs370340.jpg', 'No matter how much growth you have attained over the years, in the ever-changing market you always have to update and re-engineer your business from time to time. We work with you and supported with strong data we help you finalize the required updating and redesigning needed for your business.', 0),
(29, 7, 'Organizational Management', '../uploads/bs412010.jpg', 'To ensure the sustainability of your organization we help you with managing your organization and develop an architecture that helps you deliver the right results at the right time, providing you with extensive growth opportunities.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `area` varchar(75) NOT NULL,
  `description` text NOT NULL,
  `experience` varchar(55) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `area`, `description`, `experience`, `status`, `date`) VALUES
(6, 'PHP DEVELOPER', 'MOHALI', '<p>We are looking for a PHP Developer responsible for managing back-end services and the interchange of data between the server and the users. Your primary focus will be the development of all server-side logic, definition, and maintenance of the central database, and ensuring high performance and responsiveness to requests from the front-end. You will also be responsible for integrating the front-end elements built by your co-workers into the application.</p>\r\n\r\n<p>Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Integration of user-facing elements developed by front-end developers</li>\r\n	<li>Build efficient, testable, and reusable PHP modules</li>\r\n	<li>Solve complex performance problems and architectural challenges</li>\r\n	<li>Integration of data storage solutions including databases, key-value stores, blob stores, etc.</li>\r\n</ul>\r\n\r\n<p>Requirements:</p>\r\n\r\n<ul>\r\n	<li>Strong knowledge of PHP web frameworks such as Laravel, Yii, Drupal, Symfony, HMV, etc</li>\r\n	<li>Understanding the fully synchronous behavior of PHP</li>\r\n	<li>Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3, Bootstrap5</li>\r\n	<li>Knowledge of object-oriented PHP programming</li>\r\n	<li>Understanding accessibility and security compliance</li>\r\n	<li>Strong knowledge of the common PHP or web server exploits and their solutions</li>\r\n	<li>Understanding fundamental design principles behind a scalable application</li>\r\n	<li>User authentication and authorization between multiple systems, servers, and environments</li>\r\n	<li>Integration of multiple data sources and databases into one system</li>\r\n	<li>Familiarity with limitations of PHP as a platform and its workarounds</li>\r\n	<li>Creating database schemas that represent and support business processes</li>\r\n	<li>Familiarity with SQL/NoSQL databases and their declarative query languages</li>\r\n	<li>Proficient understanding of code versioning tools, such as Git.</li>\r\n</ul>\r\n', '5-8 Years', 0, '2021-11-29 10:58:18'),
(7, 'ONLINE BIDDER', 'MOHALI', '<p>Online Bidder</p>\r\n\r\n<p>Urgent Requirement For business developer freshers &amp; experienced (Online Bidder) Skills Required.</p>\r\n\r\n<ul>\r\n	<li>Generate business via portals like Upwork, Guru, Hubstaff, and Freelance.</li>\r\n	<li>Make cold calls to explore new business opportunities and Interact with clients</li>\r\n	<li>Should have knowledge of Web Development company.</li>\r\n	<li>Explore and develop new business opportunities and understand clients&rsquo; requirements and acquisitions.</li>\r\n</ul>\r\n\r\n<p>Qualifications:</p>\r\n\r\n<ul>\r\n	<li>Knowledge of bidding portals ( Upwork, Guru, Hubstaff, and Freelance, etc)</li>\r\n	<li>Getting projects / Making new clients for the company.</li>\r\n	<li>Bringing new projects through bidding, Client communication, Proposal making/writing, Excellent communication &amp; interpersonal skills, Flair for business development.</li>\r\n	<li>Sound knowledge of IT terminologies</li>\r\n</ul>\r\n\r\n<p>Required education:</p>\r\n\r\n<ul>\r\n	<li>Bachelors</li>\r\n</ul>\r\n\r\n<p>Required experience:</p>\r\n\r\n<ul>\r\n	<li>Online Bidding: 1+ year</li>\r\n	<li>Preferred: 1-2+ years</li>\r\n</ul>\r\n\r\n<p>Required language:</p>\r\n\r\n<ul>\r\n	<li>English proficient</li>\r\n</ul>\r\n', '1-2 Years', 0, '2021-11-29 10:59:40'),
(8, 'IOS DEVELOPER', 'MOHALI', '<p>We are looking to hire a talented iOS developer to design, build, and maintain the next generation of iOS applications. Your primary focus will be developing high-end iOS applications for the latest Apple mobile devices. Your duties may include collaborating with the design team for new application features, identifying and fixing application bottlenecks, maintaining the core code, and updating applications published on the App Store.<br />\r\nTo ensure success as an iOS developer, you should have a strong working knowledge of iOS Frameworks, be proficient in Objective-C, and be able to work as part of a team. Ultimately, an outstanding iOS developer should be able to create functional, attractive applications that perfectly meet the needs of the user.</p>\r\n\r\n<p>Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Design and build applications for the iOS platform</li>\r\n	<li>Collaborating with the design team to define app features.</li>\r\n	<li>Ensuring quality and performance of the application to specifications.</li>\r\n	<li>Identifying potential problems and resolving application bottlenecks.</li>\r\n	<li>Fixing application bugs before the final release.</li>\r\n	<li>Publishing application on App Store.</li>\r\n	<li>Maintaining the code and atomization of the application.</li>\r\n	<li>Designing and implementing application updates.</li>\r\n</ul>\r\n\r\n<p>Requirements:</p>\r\n\r\n<ul>\r\n	<li>Bachelor&rsquo;s degree in computer science or software engineering.</li>\r\n	<li>Proven experience as an app developer.</li>\r\n	<li>Proficient in Objective-C, Swift, and Cocoa Touch.</li>\r\n	<li>Extensive experience with iOS Frameworks such as Core Data and Core Animation.</li>\r\n	<li>Knowledge of iOS back-end services.</li>\r\n	<li>Knowledge of Apple&rsquo;s design principles and application interface guidelines.</li>\r\n	<li>Proficient in code versioning tools including Mercurial, Git, and SVN.</li>\r\n	<li>Knowledge of C-based libraries.</li>\r\n	<li>Familiarity with push notifications, APIs, and cloud messaging.</li>\r\n	<li>Experience with continuous integration.</li>\r\n</ul>\r\n\r\n<p>Details-:</p>\r\n\r\n<ul>\r\n	<li><strong>Experience:</strong>&nbsp;2-3 Years</li>\r\n	<li><strong>Job Location:</strong>&nbsp;Sector 82, Mohali</li>\r\n</ul>\r\n', '3-4 Years', 0, '2021-11-29 11:00:18'),
(9, 'Video Editor', 'MOHALI', '<p>Video Editor</p>\r\n\r\n<p>We are looking for a talented Video Editor with knowledge of editing IT and software-based videos that are suitable for uploading on various social media platforms. As a video editor, you should be able to bring sight and sound together in order to tell a cohesive story.</p>\r\n\r\n<p>Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Take a brief to grasp requirements and specifications from the marketing team.</li>\r\n	<li>Review script and concept to give valuable feedback, to add value and contribution to continuity.</li>\r\n	<li>Input music, dialogues, graphics, and effects.</li>\r\n	<li>Create rough and final cuts.</li>\r\n	<li>Ensure logical sequencing and smooth running.</li>\r\n	<li>Continuously discover and implement new editing technologies and industry&rsquo;s best practices to maximize efficiency.</li>\r\n</ul>\r\n\r\n<p>Requirements:</p>\r\n\r\n<ul>\r\n	<li>Proven work experience as a Video Editor.</li>\r\n	<li>Thorough knowledge of technology-related subjects.</li>\r\n	<li>Should be able to create Animated Videos as per requirements.</li>\r\n	<li>Basic knowledge of Adobe Illustrator and Photoshop.</li>\r\n	<li>Solid experience with digital technology and editing software packages i.e. Adobe Premiere Pro, After Effects, Final Cut Pro, and DaVinci Resolve.</li>\r\n	<li>Demonstrable video editing ability with a strong portfolio.</li>\r\n	<li>-Creative mind and storytelling skills.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Qualification: Any Graduate</li>\r\n	<li>Experience: 1-2 Years</li>\r\n	<li>Job Location: Mohali</li>\r\n</ul>\r\n', '1-2 Years', 0, '2021-11-29 11:01:03'),
(10, 'UI Designer', 'MOHALI', '<p>We are looking for an experienced and talented UI designer to design and shape unique, user-centric products and experiences. The ideal candidate will have experience working in agile teams, with developers, UX designers and copywriters. You will be able to make deliberate design decisions and to translate any given user-experience journey into a smooth and intuitive interaction.</p>\r\n\r\n<p>Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Be a great team player, experienced in working with agile teams.</li>\r\n	<li>Ability to collaborate closely with developers, copywriters and UX designers.</li>\r\n	<li>Create, improve and use wireframes, prototypes, style guides, user flows, and effectively communicate your interaction ideas using any of these methods.</li>\r\n	<li>Present and defend your design decisions.</li>\r\n	<li>All your design decisions should be based on the overall design roadmap as well as your own design thinking and fundamental principles (i.e. color theory, visual weight, etc.)</li>\r\n	<li>Continually keep yourself and your design team updated with the latest changes in your industry&rsquo;s standards.</li>\r\n</ul>\r\n\r\n<p>Requirements:</p>\r\n\r\n<ul>\r\n	<li>Three or more years of experience.</li>\r\n	<li>Hands-on experience creating wireframes, prototypes, storyboards, user flows, etc.</li>\r\n	<li>Experience using tools such as Photoshop, Sketch, Illustrator, InVision, Figma, Adobe XD, UXPin, Quartz.</li>\r\n	<li>Understanding of basic front-end languages: HTML5, CSS3, Bootstarp, Javascript.</li>\r\n	<li>Creative ideas with problem solving mindset.</li>\r\n	<li>Experience working in an agile/scrum development process.</li>\r\n	<li>Be open to receiving objective criticism and improving upon it.</li>\r\n</ul>\r\n\r\n<p>Details-:</p>\r\n\r\n<ul>\r\n	<li><strong>Experience:</strong>&nbsp;3-4 Years</li>\r\n	<li><strong>Job Location:</strong>&nbsp;Sector 82, Mohali</li>\r\n</ul>\r\n', '3-4 Years', 0, '2021-11-29 11:01:49'),
(11, 'Android Developer', 'MOHALI', '<p>We are looking for an Android Developer who possesses a passion for pushing mobile technologies to the limits. This Android app developer will work with our team of talented engineers to design and build the next generation of our mobile applications. Android programming works closely with other app development and technical teams.</p>\r\n\r\n<p>Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Writing clean and efficient codes for Android applications.</li>\r\n	<li>Monitoring the performance of live apps and work on optimizing them at the code level.</li>\r\n	<li>Identifying and resolving bottlenecks, rectifying bugs, and enhancing application performance.</li>\r\n	<li>Performing unit and instrumentation tests on code.</li>\r\n	<li>Collaborating with cross-functional teams to define and design new features.</li>\r\n	<li>Staying up to date with new mobile technology trends, applications, and protocols.</li>\r\n	<li>Collaborate with cross-functional teams to define, design, and ship new features</li>\r\n	<li>Work with outside data sources and APIs</li>\r\n	<li>Unit-test code for robustness, including edge cases, usability, and general reliability</li>\r\n	<li>Work on bug fixing and improving application performance</li>\r\n	<li>Continuously discover, evaluate, and implement new technologies to maximize development efficiency</li>\r\n</ul>\r\n\r\n<p>Requirements:</p>\r\n\r\n<ul>\r\n	<li>Degree in Computer Science, Engineering, or a related field.</li>\r\n	<li>You have prior experience as an Android Developer using Kotlin, Java, Android SDK, Android NDK.</li>\r\n	<li>You have experience in publishing an application on the Google Play store.</li>\r\n	<li>Proven work experience in design patterns mobile architecture using frameworks such as MVVM/MVC/MVP.</li>\r\n	<li>Familiarity with RESTful APIs to effectively integrate Android applications.</li>\r\n	<li>Familiarity with RESTful APIs to effectively integrate Android applications.</li>\r\n	<li>Familiarity with RESTful APIs to effectively integrate Android applications.</li>\r\n	<li>Proficient understanding of code versioning tools such as Git.</li>\r\n	<li>Familiarity with various testing tools.</li>\r\n	<li>You are a problem solver with good analytical skills.</li>\r\n</ul>\r\n\r\n<p>Details-:</p>\r\n\r\n<ul>\r\n	<li><strong>Qualification:</strong>&nbsp;Graduated</li>\r\n	<li><strong>Experience:</strong>&nbsp;2-4 Years</li>\r\n	<li><strong>Job Location:</strong>&nbsp;Sector 82, Mohali</li>\r\n</ul>\r\n', '2-4 Years', 0, '2021-11-29 11:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `service` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `country` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `email`, `phone`, `service`, `message`, `status`, `date`, `country`) VALUES
(1, 'Harry SHaw', 'harry@gmail.com', '91-7657863249', 'Website Development', 'Hello I need to create a   website\n\n', 0, '2021-12-30 05:34:23', ''),
(2, 'shanni', 'shannikumar@gmail.com', '91-8699760122', 'india', 'test', 0, '2021-12-31 12:14:50', ''),
(3, 'Pooja', 'pooja@masterinfotech.com', '91-8987876765', 'australia', 'FDGDFHHYRT', 0, '2021-12-31 12:18:36', ''),
(4, 'nandita sharma', 'admin@masters.com', '91-1234567890', 'test', 'test', 0, '2022-01-01 05:55:46', ''),
(5, 'shanni kumar', 'shanni@gmail.com', '61-8699760122', 'xyz.com', 'xsksjidsm', 0, '2022-01-01 06:00:43', ''),
(6, 'a b', 'harry@gmail.com', '91-1234567890', 'test', 'testing', 0, '2022-01-01 06:04:37', ''),
(7, 'nandita sharma', 'nandita@gmail.com', '91-1234567890', 'test.com', 'testing please ignore', 0, '2022-01-01 06:33:46', ''),
(8, 'nandita sharma', 'admin@masters.com', '91-7896442130', 'test.com', 'testing', 0, '2022-01-01 06:36:19', ''),
(9, 'nandita sharma', 'admin@masters.com', '91-7896442130', '', 'testing please ignore', 0, '2022-01-03 06:43:22', ''),
(10, 'shanni kumar', 'shanni@gmail.com', '91-8699760122', '', 'testing', 0, '2022-01-03 06:45:26', ''),
(11, 'Shanni Kumar', 'shannikumar143@gmail.com', '91-8699760122', '', 'Need website', 0, '2022-01-04 11:45:20', ''),
(12, 'King IsaacIE', 'isaacimmanuel2010@gmail.com', '91-9148153777', '', 'Hi I am KingIsaacIE welcome to my website ', 0, '2022-01-07 03:48:18', ''),
(13, 'King IsaacIE', 'isaacimmanuel2010@gmail.com', '91-9148153777', '', 'Hi I am KingIsaacIE welcome to my website ', 0, '2022-01-07 03:48:19', ''),
(14, 'Anjali kumari  Gupta', 'anjalibsccsiwagupta@gmail.com', '91-7564819877', '', 'Job for B.tech fresher', 0, '2022-01-07 03:49:38', ''),
(15, 'Rahul', 'rana.rahul478@gmail.com', '91-9569580100', '', 'Test mail ', 0, '2022-01-17 17:15:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `section` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `user_id`, `section`, `status`, `date`) VALUES
(1, 2, '1,5', 0, '2022-01-24 07:42:33'),
(2, 5, '1,2,3,4,5', 0, '2022-01-22 04:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `link` varchar(120) NOT NULL,
  `title` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `link`, `title`, `image`, `description`, `status`, `date`) VALUES
(1, 'https://www.accelpro.net/', 'ACCELPRO', '../uploads/012273860568.jpg', 'Founded in July, 2011, AccelPro is a Fast Growing Indian Product Company into Secure Remote Access Products and Services with Innovative Approach, Having 100+ Enterprises and Telcos using AccelPro Secure Access Products to Secure their Networks. AccelPro addresses much needed requirement for Fast &amp; Easy Secure Access solution, delivers next generation of Secure Access Products which helps Organizations of all sizes to Securely Access their Corporate Applications and Network Resources from Anymachine and Anywhere.', 0, '2021-12-16 12:34:19'),
(2, 'https://thecarclub.co.in/', 'The Car Club', '../uploads/037020119806.jpg', 'The Car Club is the last destination for premier exclusive and interesting luxury cars for you, established in the year 2001 and successfully serving the industry of pre-owned luxury cars. We are committed to delivering the very best quality vehicles at the most prominent competitive costs. Our business ideology is to deliver what we commit on time.\r\n', 0, '2021-12-16 12:34:24'),
(3, 'http://watergatemarineservices.com/', 'Water gate', '../uploads/024512587885.jpg', 'Watergate is one of the foremost trucking companies, delivering the plethora of transport services to its esteemed consumers across Malawi. We are the &ldquo;best-in-class and cost-effective transporter&rdquo; as defined by our customers and serving this industry for many years.\r\n', 0, '2021-12-16 12:34:29'),
(4, 'https://thefreedeals.com/deals/chandigarh', 'FreeDeals', '../uploads/082489277464.jpg', 'FreeDeals is one of the foremost trucking companies, delivering the plethora of transport services to its esteemed consumers across Malawi. We are the &ldquo;best-in-class and cost-effective transporter&rdquo; as defined by our customers and serving this industry for many years.', 0, '2021-12-16 12:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `problem_challenges`
--

CREATE TABLE `problem_challenges` (
  `id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_challenges`
--

INSERT INTO `problem_challenges` (`id`, `case_id`, `image`, `description`, `status`) VALUES
(1, 1, '../uploads/problem87124.png', '<h4>Problems</h4>\r\n\r\n<p>The main challenges we faced were mainly related to UX and some specific designs for the product page.</p>\r\n\r\n<ul>\r\n	<li>Since Accelpro is both, a service and a product-based website we had to have a balance of design and give appropriate weightage to pages including both.</li>\r\n	<li>Finding suitable color schemes for the cool and soft feel of the whole website.</li>\r\n	<li>Designing a separate page for product specification and features and highlighting each product&rsquo;s description.</li>\r\n	<li>With such a wide range of services and products, finding an appropriate design for menu options.</li>\r\n	<li>Choosing a development technology</li>\r\n</ul>\r\n', 0),
(2, 1, '../uploads/solution84649.png', '<h4>Solutions</h4>\r\n\r\n<p>The main challenges we faced were mainly related to UX and some specific designs for the product page.</p>\r\n\r\n<ul>\r\n	<li>We made sure that the design was developed and crafted in a way that allowed for maximum flexibility.</li>\r\n	<li>Learning about the target audience gave us insights into how the whole theme had to be put together</li>\r\n	<li>Brainstorming the ideas continuously gave rise to well-formed ideation and changes were introduced</li>\r\n	<li>Our team put together a series of analyses to redesign a full-fledged visual identity.</li>\r\n	<li>Our design team followed a user-centric design process to overcome many complex design loopholes.</li>\r\n	<li>The site is built upon the WordPress platform to meet special plugin requirements.</li>\r\n</ul>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(180) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `status`, `date`) VALUES
(1, 'MasterInfotech', 0, '2021-12-24 08:56:30'),
(2, 'ABC', 0, '2021-12-24 11:31:19'),
(3, 'Tradebull', 0, '2021-12-27 08:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `project_imaags`
--

CREATE TABLE `project_imaags` (
  `id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `title` varchar(120) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_imaags`
--

INSERT INTO `project_imaags` (`id`, `case_id`, `image`, `title`, `status`) VALUES
(1, 1, '../uploads/0172981.png', '', 0),
(2, 1, '../uploads/0263498.png', '', 0),
(3, 1, '../uploads/0316748.png', '', 0),
(4, 1, '../uploads/0457719.png', '', 0),
(5, 1, '../uploads/0585451.png', '', 0),
(6, 1, '../uploads/0636833.png', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `statues` int(11) NOT NULL,
  `case_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `image`, `statues`, `case_id`) VALUES
(1, 'Search', '../uploads/search34799.png', 0, 1),
(2, 'Wireframe', '../uploads/image41554.png', 0, 1),
(3, 'User Flow', '../uploads/flow98878.png', 0, 1),
(4, 'Ui-Ux Design', '../uploads/ui-ux57985.png', 0, 1),
(5, 'Development', '../uploads/development86696.png', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `icon`, `link`, `status`, `date`) VALUES
(1, 'Services', 'app-assets/images/icons/support.png', '1,2,3,4', 0, '2022-01-22 12:07:07'),
(2, 'Home', 'app-assets/images/icons/home.png', '5,6,7,8', 0, '2022-01-22 12:55:42'),
(3, 'Contact Us', 'app-assets/images/icons/phone-call.png', '9,10', 0, '2022-01-22 12:07:07'),
(4, 'Career', 'app-assets/images/icons/career.png', '11,12', 0, '2022-01-22 12:07:07'),
(5, 'Blogs', 'app-assets/images/icons/online.png', '13,14,15', 0, '2022-01-24 05:31:47'),
(6, 'Portfolio', 'app-assets/images/icons/portfolio.png', '16', 0, '2022-01-22 12:07:07'),
(7, 'Who We Are', 'app-assets/images/icons/user.png', '17', 0, '2022-01-22 12:07:07'),
(8, 'Case Studies', 'app-assets/images/icons/case-study.png', '18', 0, '2022-01-22 12:07:07'),
(9, 'Roles & Permissions', 'app-assets/images/icons/phone-call.png', '19,20,21,22', 0, '2022-01-22 12:07:07'),
(10, 'Manage Projects', 'app-assets/images/icons/online.png', '23,24', 0, '2022-01-22 12:07:07'),
(11, 'Marketing Material', 'app-assets/images/icons/dashboard.png', '25,26,27', 0, '2022-01-24 10:12:01'),
(12, 'Comments', 'app-assets/images/icons/comment.jpg', 'comment.php', 0, '2022-01-24 10:11:55'),
(13, 'Enquiries', 'app-assets/images/icons/inquiry.png', 'enquiries.php', 0, '2022-01-24 10:11:47'),
(14, 'Upload Banner', 'app-assets/images/icons/online.png', 'upload-banner.php', 0, '2022-01-24 10:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `service_data`
--

CREATE TABLE `service_data` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `image` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_data`
--

INSERT INTO `service_data` (`id`, `service_id`, `image`, `description`, `status`, `date`) VALUES
(2, 1, '../uploads/web-d55327.png', '<p>We are a one-stop-shop for all website development services. By using cutting-edge technologies our in-house team of developers delivers intuitive and highly agile websites. By keeping your vision in focus we bring out a digital transformation for your business that helps you further broaden your growth. We cover all types of web development solutions from creating plain text pages to complex web-based applications, social network applications, and electronic business applications.</p>\r\n', 0, '2021-12-17 08:31:16'),
(3, 2, '../uploads/mobappimg37029.png', 'With an industry-best approach to mobile application development, we bring together the best development and design practices to provide a full cycle of mobile app development for both, Android and IOS devices.\r\n\r\n<ul>\r\n	<li><i class=\"fas fa-check-circle\"></i>Native and Hybrid app development</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>Customized app development solution for IOS and Android</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>Mobile application UI/UX design</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>IoT application development</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>Maintenance and support</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>Rigorous testing and Q&amp;A before delivery</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>Rapid development using Agile Methodology</li>\r\n</ul>\r\n', 0, '2021-12-11 09:29:22'),
(4, 3, '../uploads/mobilephone73178.png', 'Our priority is always to create an aesthetic and robust UI/UX Design loaded with user-\r\nfirst values. We offer a unique blend of advanced and traditional approaches to design. Our \r\ndesigns are aimed at maximizing creativity and innovation to enhance the overall experience\r\nof the user.', 0, '2021-12-15 07:55:47'),
(5, 4, '../uploads/ecomm1792124772.png', '<p>Want to start an eCommerce store? Witness an expanded growth of your business with our customized eCommerce solutions. Our full-suite of eCommerce development services include:</p>\r\n', 0, '2022-01-24 10:32:28'),
(6, 6, '../uploads/webdevelopment37232.png', '<h2>Expand your digital footprint, grow your target audience exponentially.</h2>\r\n\r\n<p>There is no doubt that in the contemporary digital world, almost all marketing is done on the internet. With our all-in-one lead generative digital marketing services we help you stand out from all your competition, harnessing the full potential of online marketing.</p>\r\n', 0, '2021-12-13 06:37:18'),
(7, 7, '../uploads/bs147940.jpg', 'With our business consulting services we help you adapt and thrive in the dynamic markets of today. Being one of the leading Business Consulting firms, we work with you all through the way to navigate you overcome complex business challenges.', 0, '2021-12-16 12:39:55'),
(8, 8, '../uploads/158100.jpg', 'Do you know what is the best way to start your career? It is, getting the right kind of training. Whether you are a fresh graduate seeking training opportunities or a student looking for an internship Master Infotech is the right place for you. We believe in giving the right environment to your talents through high-yielding Training and Internship Program in order to sharpen them further. At Master Infotech give high importance to the passion inside you and make sure it is given the right direction.', 0, '2021-12-11 09:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `name`, `link`, `status`, `date`) VALUES
(1, 'Add Services', 'add-services.php', 0, '2022-01-22 12:02:14'),
(2, 'Manage Services', 'manage-services.php', 0, '2022-01-22 12:02:14'),
(3, 'Add Services Inner', 'add-services-inner.php', 0, '2022-01-22 12:02:14'),
(4, 'Manage Services Inner', 'manage-services-inner.php', 0, '2022-01-22 12:02:14'),
(5, 'Sliders', '1,2', 0, '2022-01-24 06:21:33'),
(6, 'Developing Technologies Content', '3,4', 0, '2022-01-24 06:24:36'),
(7, 'Choose the best', '5,6', 0, '2022-01-24 06:24:36'),
(8, 'Quality assurance', '7,8', 0, '2022-01-24 06:24:36'),
(9, 'Contact Page Details', '9,10', 0, '2022-01-24 06:24:36'),
(10, 'Contact Us Queries', '11', 0, '2022-01-24 06:24:37'),
(11, 'Manage Jobs', '12,13', 0, '2022-01-24 06:24:37'),
(12, 'Job Queries', '14', 0, '2022-01-24 06:24:37'),
(13, 'Manage Categories', '15,16', 0, '2022-01-24 06:24:37'),
(14, 'Manage Blogs', '17,18', 0, '2022-01-24 06:24:37'),
(15, 'Manage FAQ\'s', '19,20', 0, '2022-01-24 06:53:01'),
(16, 'Manage Portfolio', '21,22', 0, '2022-01-24 06:24:37'),
(17, 'Manage Content', '23,24', 0, '2022-01-24 06:24:37'),
(18, 'Manage Case Studies', '25,26', 0, '2022-01-24 06:24:37'),
(19, 'Manage Sections ', '27,28', 0, '2022-01-24 06:24:37'),
(20, 'Manage Roles', '29,30', 0, '2022-01-24 06:24:37'),
(21, 'Manage Permissions', '31,32', 0, '2022-01-24 06:24:37'),
(22, 'Manage Users', '33,34', 0, '2022-01-24 06:24:37'),
(23, 'All Projects', 'manage-projects.php', 0, '2022-01-22 12:02:14'),
(24, 'Add Projects', 'add-projects.php', 0, '2022-01-22 12:02:14'),
(25, 'Uploads', 'uploads.php', 0, '2022-01-24 10:09:51'),
(26, 'Logo & Designs', 'designs.php', 0, '2022-01-24 10:08:59'),
(27, 'Branding material', 'branding-material.php', 0, '2022-01-24 10:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `name`, `link`, `status`, `date`) VALUES
(1, 'Add Slider', 'add-sliders.php', 0, '2022-01-24 05:58:05'),
(2, 'Manage Sliders', 'manage-sliders.php', 0, '2022-01-24 05:58:05'),
(3, 'Add Content', 'add-developing.php', 0, '2022-01-24 05:58:05'),
(4, 'Manage Content', 'manage-developing.php', 0, '2022-01-24 05:58:05'),
(5, 'Add Content', 'add-choose-best.php', 0, '2022-01-24 05:58:05'),
(6, 'Manage Content', 'manage-choose-best.php', 0, '2022-01-24 05:58:05'),
(7, 'Add Content', 'add-quality.php', 0, '2022-01-24 05:58:05'),
(8, 'Manage Content', 'manage-quality.php', 0, '2022-01-24 05:58:05'),
(9, 'Add Details', 'add-contact-details.php', 0, '2022-01-24 05:58:05'),
(10, 'Manage Details', 'manage-contact-details.php', 0, '2022-01-24 05:58:05'),
(11, 'Queries list', 'query-list.php', 0, '2022-01-24 05:58:05'),
(12, 'Add Jobs', 'add-jobs.php', 0, '2022-01-24 05:58:05'),
(13, 'Manage Jobs', 'manage-jobs.php', 0, '2022-01-24 05:58:05'),
(14, 'Job Queries List', 'job-query.php', 0, '2022-01-24 05:58:05'),
(15, 'Add Categories', 'add-blog-cat.php', 0, '2022-01-24 05:58:05'),
(16, 'Manage Categories', 'manage-blog-cat.php', 0, '2022-01-24 05:58:05'),
(17, 'Add Blogs', 'add-blogs.php', 0, '2022-01-24 05:58:05'),
(18, 'Manage Blogs', 'manage-blogs.php', 0, '2022-01-24 05:58:05'),
(19, 'Add Blogs', 'add-faq.php', 0, '2022-01-24 05:58:05'),
(20, 'Manage Blogs', 'manage-faq.php', 0, '2022-01-24 05:58:05'),
(21, 'Add Portfolio', 'add-portfolio.php', 0, '2022-01-24 05:58:05'),
(22, 'Manage Portfolio', 'manage-portfolio.php', 0, '2022-01-24 05:58:05'),
(23, 'Add Content', 'add-who-we-are.php', 0, '2022-01-24 05:58:05'),
(24, 'Manage Content', 'manage-who-we-are.php', 0, '2022-01-24 05:58:05'),
(25, 'Add Case Studies', 'add-case-studies.php', 0, '2022-01-24 05:58:05'),
(26, 'Manage Case Studies', 'manage-case-studies.php', 0, '2022-01-24 05:58:05'),
(27, 'Add Sections', 'add-sections.php', 0, '2022-01-24 06:14:58'),
(28, 'Manage Sections', 'manage-sections.php', 0, '2022-01-24 06:17:18'),
(29, 'Add Roles', 'add-roles.php', 0, '2022-01-24 06:17:18'),
(30, 'Manage Roles', 'manage-roles.php', 0, '2022-01-24 06:17:18'),
(31, 'Add Permission', 'add-permission.php', 0, '2022-01-24 06:17:18'),
(32, 'Manage Permission', 'manage-permission.php', 0, '2022-01-24 06:17:18'),
(33, 'Add Users', 'add-users.php', 0, '2022-01-24 06:17:18'),
(34, 'Manage Users', 'manage-users.php', 0, '2022-01-24 06:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `project` int(11) NOT NULL,
  `assign_to` int(11) NOT NULL,
  `assign_by` int(11) NOT NULL,
  `task` text NOT NULL,
  `images` text NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `project`, `assign_to`, `assign_by`, `task`, `images`, `content`, `status`, `date`) VALUES
(2, 2, 2, 1, 'Testing', '../uploads/seo18063.webp', '<p>Hello sagar this is today task list kindly check and let me know when can it be possible.</p>\n', 3, '2021-12-17'),
(13, 3, 6, 2, 'test', '../uploads/profile24023.png', '<p>changes</p>\r\n', 3, '2022-01-18'),
(16, 1, 2, 1, 'test', '../uploads/profile73534.png', '<p>testing only</p>\r\n', 1, '2022-01-24'),
(17, 1, 2, 1, 'test', '../uploads/profile26964.png', '<p>test</p>\r\n', 0, '2022-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` int(11) NOT NULL,
  `cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `image`, `status`, `cat`) VALUES
(4, 'uploads/037020160829.webp', 0, 2),
(6, 'uploads/012273839867.webp', 0, 2),
(9, '../uploads/What is SEO72343.webp', 0, 2),
(10, '../uploads/IT startups emergence92874.webp', 0, 2),
(13, '../uploads/IT startups insights37386.webp', 0, 2),
(14, '../uploads/Challenges faced by IT startups 95244.webp', 0, 2),
(15, '../uploads/5G73922.webp', 0, 2),
(16, '../uploads/Customer Service83610.webp', 0, 2),
(17, '../uploads/UI-Design12531.jpg', 0, 2),
(18, '../uploads/UX-Design27576.jpg', 0, 2),
(19, '../uploads/understanding the audience26073.jpg', 0, 2),
(20, '../uploads/save-time54925.jpg', 0, 2),
(21, '../uploads/Greater-User-Retention11243.jpg', 0, 2),
(22, '../uploads/Establishing-a-brand-reputation21215.jpg', 0, 2),
(23, '../uploads/increase revenue44653.webp', 0, 2),
(24, '../uploads/best website design company80839.webp', 0, 2),
(25, '../uploads/website designing service33256.webp', 0, 2),
(26, '../uploads/why choose us38297.webp', 0, 2),
(27, '../uploads/what a web development company do74979.jpg', 0, 2),
(28, '../uploads/importance of well designed website47313.jpg', 0, 2),
(29, '../uploads/ease of usability (1)21087.jpg', 0, 2),
(30, '../uploads/best web development company (1)77910.jpg', 0, 2),
(31, '../uploads/Web Development company in chandigarh84051.jpg', 0, 2),
(32, '../uploads/Human touch50893.jpg', 0, 2),
(33, '../uploads/Maintanance66769.jpg', 0, 2),
(34, '../uploads/UIUx53686.jpg', 0, 2),
(35, '../uploads/security57609.jpg', 0, 2),
(36, '../uploads/graphs76641.jpg', 0, 2),
(37, '../uploads/seo18526.jpg', 0, 2),
(38, '../uploads/update60373.jpg', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`, `status`, `date`) VALUES
(1, 'admin', 0, '2021-12-07 06:16:29'),
(2, 'HR', 0, '2021-12-07 06:39:48'),
(3, 'SEO', 0, '2021-12-07 06:16:54'),
(5, 'Developer', 0, '2021-12-27 05:56:25'),
(6, 'Designer', 0, '2021-12-27 05:56:43'),
(7, 'Graphics', 0, '2021-12-27 05:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `who_we_are`
--

CREATE TABLE `who_we_are` (
  `id` int(11) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `content1` text NOT NULL,
  `image2` varchar(250) NOT NULL,
  `content2` text NOT NULL,
  `content3` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `who_we_are`
--

INSERT INTO `who_we_are` (`id`, `image1`, `content1`, `image2`, `content2`, `content3`, `status`, `date`) VALUES
(1, '../uploads/scrollimg.jpg', 'We are a full-fledged IT Services Company invading new possibilities and reshaping the technology-driven generation. We at Master Infotech strongly believe in building trust to go beyond technological boundaries. We directly cater to the business needs of our clients providing robust Digital Solutions.<br>\r\nOur modus operandi (way of operating) is exploring contemporary ways of establishing better client relationships. Our team of experts plans customized work plans keeping the vigorous market in mind. We constantly try to navigate excellence to all the complex projects to frame and amplify exceptional capabilities in an agile fashion. In times, when technology is ever-changing, we lead in an unconventional way.\r\n', '../uploads/our-vision8470053894.jpg', 'Our Vision is to be a leading IT Solutions company and sustain our continuous efforts to bring the best to our customers. We plan to constantly hold up standards of commitment, reliability, and innovation. Our priority is always to carry out world-class quality with absolute accuracy to emerge as a foremost name in the industry.', '[{\"title\":\"Embrace Change\",\"description\":\"To constantly change when needed lets us walk hand in hand with evolving market\"},{\"title\":\"Worship Precision\",\"description\":\"Accuracy and precision are the greatest companions of our work.\"},{\"title\":\"Chase Innovation\",\"description\":\"Extra focused on chasing the best possible innovative approach to deliver the best.\"},{\"title\":\"Being Aesthetic\",\"description\":\"strictly following aesthetic values to every detail, to create unconventional designs.\"}]', 0, '2021-12-16 12:52:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_cat`
--
ALTER TABLE `blogs_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_data`
--
ALTER TABLE `blogs_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study`
--
ALTER TABLE `case_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_user`
--
ALTER TABLE `contact_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_content`
--
ALTER TABLE `contact_us_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_quote`
--
ALTER TABLE `get_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_choose_best`
--
ALTER TABLE `home_choose_best`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_developing_tech`
--
ALTER TABLE `home_developing_tech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_quality_content`
--
ALTER TABLE `home_quality_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inner_service_data`
--
ALTER TABLE `inner_service_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_challenges`
--
ALTER TABLE `problem_challenges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_imaags`
--
ALTER TABLE `project_imaags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_data`
--
ALTER TABLE `service_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `who_we_are`
--
ALTER TABLE `who_we_are`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs_cat`
--
ALTER TABLE `blogs_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs_data`
--
ALTER TABLE `blogs_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `case_study`
--
ALTER TABLE `case_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_user`
--
ALTER TABLE `contact_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `contact_us_content`
--
ALTER TABLE `contact_us_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `get_quote`
--
ALTER TABLE `get_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_choose_best`
--
ALTER TABLE `home_choose_best`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_developing_tech`
--
ALTER TABLE `home_developing_tech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_quality_content`
--
ALTER TABLE `home_quality_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inner_service_data`
--
ALTER TABLE `inner_service_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `problem_challenges`
--
ALTER TABLE `problem_challenges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_imaags`
--
ALTER TABLE `project_imaags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service_data`
--
ALTER TABLE `service_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `who_we_are`
--
ALTER TABLE `who_we_are`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
