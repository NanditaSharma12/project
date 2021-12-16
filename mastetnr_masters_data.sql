-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 06:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
(3, 'Jasleen', 'hr@masterinfotech.com', '7898789890', 'HrMaster@#2021', 2, 0, '2021-12-11 06:31:03');

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
(2, 6, 'Harry', 'harry@gmail.com', '8989898989', 'http://google.com', 'https://www.masterinfotech.com/forms/cv 202146710.pdf', 0, '2021-12-11 06:47:11');

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
  `description` text NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_title` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs_data`
--

INSERT INTO `blogs_data` (`id`, `cat`, `add_date`, `added_by`, `title`, `slug`, `image`, `description`, `meta_desc`, `meta_title`, `status`, `date`) VALUES
(1, '2', '2021-11-29', 'Admin', 'What is UI UX Design Why is it important', 'What-is-UI-UX-Design-Why-is-it-important', '../uploads/ui-ux7634242661.webp', '<p>If you own a business you must know that running it without a website or a mobile application in a smartphone-powered generation can make you irrelevant no later than needed. In an era where the world sums up over the palm of your hands, it becomes critically important to have a website or even better, an app for your business. But, just owning a website or an app isn&rsquo;t enough, only a well-developed website or a mobile application in accordance with the&nbsp;<strong>UI/UX design</strong>&nbsp;can bring you better results. Today UI/UX design, which is an abbreviation of User Interface and User Experience, holds greater significance than &lsquo;just creating a website&rsquo;. A good UI/UX design enables the users to feel an uplifting experience, making UI/UX pre-eminent. As Steve Jobs once said, &ldquo;The design is not just what it looks like and feels like. The design is how it works&rdquo;, this, to date acts as an explanatory quote to the basics of UI/UX design. Furthermore, in the user and consumer-centric market UI/UX acts as a tool to strengthen your brand value and gain an instant edge over your competition.</p>\r\n\r\n<p>Before we move onto the importance, let&#39;s try and understand what exactly UI/UX is.</p>\r\n\r\n<h3>UI design: Creation and presentation.</h3>\r\n\r\n<p>User Interface or UI is simply a process of manoeuvering and engineering the interface and making it intuitive. To put it simply, UI is designing an interface, which is attractive and user-oriented. Buttons, icons, menu bars, typography, colors, etc. are some elements to be focused on while creating an ideal UI. In the much broader perspective, it is all about presentation and interactivity and also how uncomplicated it is. There is one thing that needs to be kept in mind that users hardly care about your design, they care about getting their work done with minimum effort.</p>\r\n\r\n<h3>UX design: Analysis and understanding</h3>\r\n\r\n<p>Compared to UI, UX is a much broader concept. UXD which expands to User Experience design is, in many ways, self-explanatory. Although UX extends to various industries, we will only focus on its digital aspect. UX design is a complete procedure of understanding and supporting user behavior providing them with a relevant and integrated experience. An ideal UX designing process involves factors such as branding, design, usability, and function. It also helps shape a customer&#39;s perception of a brand. The aim of a good UX design helps the user to navigate through what he/she desires.</p>\r\n\r\n<p><img src=\"../uploads/uiux-mini.webp\" /></p>\r\n\r\n<h3>Importance</h3>\r\n\r\n<p>Now that we know what UI/UX design is, we shall move on to its importance. A good design provides people with clear directions, navigating them through each page of information while displaying relevant calls-to-action so that decisions are simple and straightforward.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>- Better understanding of your audience</p>\r\n\r\n	<p>UI/UX is all about having a better understanding of your audience. Ultimate goal is always user satisfaction so all designing is done keeping in mind the comfortability of the user and especially the target audience. UI/UX allows you to segment and stratifies the customers/users based on the gathered data, giving you further insight into your key audience. While, many might believe that UI/UX is about designing, on contrary, it is more about studying and analyzing the users. With personas in your hand, you are equipped with vital information which gives you access to a stronger understanding of your audience which will prove beneficial all along the way.</p>\r\n	</li>\r\n	<li>\r\n	<p>- Establishing a brand reputation</p>\r\n\r\n	<p>There will be no mistake in saying that a quality UI/UX builds your brand reputation like no other thing can. When you give your user a beautiful interface that requires minimum effort and helps the user where he/she wants to, doubtlessly the user is going to think highly of your brand. The process of UI/UX involves usability checks on the product, either through user tests or through design evaluations, all acting as factors that further strengthen your brand reputation. Not just that, an ideal design allows the user to hold high regard for your brand. A good brand reputation gives you an edge over your market competition.</p>\r\n	</li>\r\n	<li>\r\n	<p>- Greater User Retention</p>\r\n\r\n	<p>Wondering why you aren&rsquo;t able to retain the visitors on your app or website? UI/UX is the answer. The User Retention Rate provides you with numbers about time spent by a user on your application, website, or on a specific feature. The better your approach is to UI/UX, the better user retention numbers you will get. Easy navigation improves the customer experience and enables the user to spend more time at your website or app ultimately building his trust for your brand.</p>\r\n	</li>\r\n	<li>\r\n	<p>- SAVES TIME!</p>\r\n\r\n	<p>In the business world time is money and UI/UX saves you time not just in the short but also in the long-run process. A website or an application designed following the UI/UX requires no or minimum changes and is hardly ever infected with user glitches. In meeting sessions, the designer brings wireframes and prototypes that serve as a visual demonstration before any coding starts. The process of careful analysis and understanding of the data, user behavior, and need results in a flawless product saving you all the time which would have been needed in changes and updates. The figure below displays a UX/UI process, which will give you an idea of how UX/UI works.</p>\r\n	</li>\r\n	<li>\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Summing up!</h3>\r\n\r\n<p>We now know that User Interface is all about how it looks and User Experience is all about how it works. UI/UX design is a process of improving the overall experience of the users establishing a greater scope of growth with minimum drawbacks. Understanding and meeting the needs of your key audience and making your website or mobile app more engaging is usually the goal of UI/UX design. However, it can be a little tedious to work with UI/UX while stressing your other business operations. Companies often opt for UI/UX design services (hyperlink) which not only helps them in uplifting elements of growth but is also cost-efficient.</p>\r\n', '\r\n								\r\n							        ', '\r\n								\r\n							        ', 0, '2021-12-10 07:37:45'),
(2, '2', '2021-11-29', 'Admin', 'Top 5 Bad SEO Practices You Need to Stop Immediately!', 'Top-5-Bad-SEO-Practices-You-Need-to-Stop-Immediately', '../uploads/seo-img9080669862.webp', '<p>When it comes to Digital Marketing, SEO (Search Engine Optimization) tops the list for improving your website ranking, on various search engines (predominantly Google). However, there are some bad practices in SEO that are not very uncommon but can damage your website ranking and reach severely. Before moving on to knowing what those bad SEO practices are, let&rsquo;s shed some light on what&nbsp;<strong>Seach Engine Optimization</strong>&nbsp;is.</p>\r\n\r\n<p><img alt=\"\" src=\"../uploads/seo.webp\" /></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>What is SEO?</p>\r\n\r\n	<p>To put it simply, Search Engine Optimization (SEO) is a process through which you can improve the visibility of your site to attain better quality and quantity of traffic. When we talk about SEO it directly means organic traffic and not the one which is gained through paid ad search. This is where an SEO expert comes in. A good SEO strategy gets you a higher organic ranking on search engines. The question arises, &lsquo;how does it work?&rsquo;<br />\r\n	- We all know search engines like Google uses spiders (bots) to crawl content, websites, and web pages and puts them on the Search Engine Results Page (SERP). Which is then analyzed based on how well structured and precise it is (also how well the guidelines were followed) the website is ranked in the search results. A good SEO strategy is usually laid out by communicating with the search engine through title tags, links, and quality content</p>\r\n	</li>\r\n	<li>\r\n	<p>Introduction to Bad SEO practices</p>\r\n\r\n	<p>Practices that are unethical and are not in accordance with the Google webmaster guidelines are usually considered bad SEO practices. In contrast to how SEO generates better results on search engines, bad SEO destroys the ranking of your website. Therefore, it becomes highly important to know some bad SEO practices for you to be alert all the time and are able to recognize them even quicker.</p>\r\n	</li>\r\n	<li>\r\n	<p>5 Bad SEO Practices</p>\r\n\r\n	<p>Let&rsquo;s take a look at the top 5 bad SEO practices:</p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Keyword Stuffing</p>\r\n\r\n		<p>The most common bad practice used black hats to trick into higher rankings, however, this may lead to high penalization. Using a keyword an unnecessary number of times in order to gain a better ranking is one of the worst SEO practices and is caught by crawlers easily. On top of that, it makes your content almost non-understandable due to the out-of-context and overuse of keywords.</p>\r\n		</li>\r\n		<li>\r\n		<p>Bad Website links</p>\r\n\r\n		<p>This apparently, is important and is overlooked by the majority of SEOs and gets you standing on slippery grounds. Google bot crawl not just the links and text in your content but your links on other websites and if those websites are filled with spam and digitally toxic content you&rsquo;re sure to get penalized sooner or later.</p>\r\n		</li>\r\n		<li>\r\n		<p>Content Duplication: Your own and of others</p>\r\n\r\n		<p>Well, this goes without saying, DON&rsquo;T COPY! It is one of the worst SEO practices which comes with a high price to pay. Copying content of others as well as your own isn&rsquo;t entertained by Google since Google wants to deliver its users with unique content to elevate their experience and by copying content you are just inviting trouble (google hates plagiarism). Search engines do not want you to post content just because you want higher visibility but want to share information. Your SEO strategies should be more inclined towards knowledge sharing.</p>\r\n		</li>\r\n		<li>\r\n		<p>Cloaking</p>\r\n\r\n		<p>Cloaking is a practice of deliberately showing different content to the crawlers and whole different content to the users. Surprisingly some black hat webmasters were able to pull this out in the past but not anymore. Ads, spammy content, and computer-generated content whatever you try to hide from crawlers will fire back at you.</p>\r\n		<img alt=\"\" src=\"../uploads/seo-clock.webp\" /></li>\r\n		<li>\r\n		<p>Misleading headlines</p>\r\n\r\n		<p>It simply means giving a headline to attract users and the content following it has no relevance to it. This practice may not lead to penalties by google but gives your user a bad experience which ultimately affects your ranking. For example, a headline like, &ldquo;Eating tips that will transform your life&rdquo; and the content is just about &ldquo;benefits of diet&rdquo; can disappoint a user badly enough to report you as spam.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Bonus Point: Don&rsquo;t Underestimate search engine crawlers!</p>\r\n\r\n	<p>Lastly, for a bonus point, never underestimate search engines. Even if you have a trick to go around its crawlers you will suffer from the consequences in the future. Be fair and rewards will be sweeter and long-lasting.</p>\r\n	</li>\r\n	<li>\r\n	<p>Conclusion</p>\r\n\r\n	<p>We learned how bad SEO practices do not just come with short-term penalties but also affect your website in the long run. We learned about Keyword stuffing, and how duplication of content and lead to high penalties. However, taking help from SEO service providers is an easier and efficient way to hike up your page ranking and get organic traffic.</p>\r\n	</li>\r\n</ul>\r\n', '\r\n								\r\n							        ', '\r\n								\r\n							        ', 0, '2021-12-10 07:36:59'),
(3, '3', '2021-11-29', 'Admin', 'An insight into growing your e commerce business in 2021', 'An-insight-into-growing-your-e-commerce-business-in-2021', '../uploads/blog-ecomm3914020419.webp', '<p>As the world was hit by Covid-19 world economy suffered. In contrast to the drastic blows which businesses took around the globe, eCommerce somehow flourished. As online buying witnessed exponential growth in numbers, globally. Many eCommerce companies emerged and ones that were already in the market were further solidified given the demand that is skyrocketing.</p>\r\n\r\n<p>Although e-commerce continues its pace in 2021 there are certain steps and strategies you must include if you want to sustain the business in the long run and even further have an edge over the ever-rising competition. Some of them are as follows:</p>\r\n\r\n<h3>Customer Service</h3>\r\n\r\n<p>There is nothing more important for an eCommerce business than its customers and so it becomes your prioritized duty to serve them in the best possible way. The happier your customers are, the bigger your business gets is the old elementary fact. The question is &lsquo;how&rsquo;? The simplest and the best way is to be always and easily available for your customers. When buying online, a customer can have many questions and queries, and not forget the high possibility of problems a customer might face sometimes. Being easily reachable through customer service and support builds your trustworthiness in the eyes of customers. Always remember the faster your customer gets to be in touch with you and is able to resolve his/her problem, the better goodwill you create. Many companies use chatbots, 24/7 customer support through chat and calls to provide better customer support. Only good customer service gets you loyal customers who wouldn&rsquo;t just buy from you but will be spreading the goodwill of your brand. It is just as Jeff Bezos once put, &ldquo;if you build a great experience, customers tell each other about that. Word-of-mouth is very powerful.&rdquo;</p>\r\n\r\n<h3>Adapt with growing technology</h3>\r\n\r\n<p>There is one thing that can be said without a doubt, that there will always be &lsquo;new technology that will be coming up. And in an industry like eCommerce where competition is never-ending, you will be left behind if you do not adapt to the new technology. In the technology-driven era, customers are always curious to try new technology and favor the businesses that let them do it. Making your platform more user-oriented equipped with a technology that is new in the market will help you grow organically since it enhances customer&rsquo;s feeling when he/she visits your platform. For Example, using augmented reality you can give your customer an immersive experience through your platform, this will not only strengthen your sales but also leave the customer impressed.</p>\r\n\r\n<h3>Be a part of the Sustainability movement!</h3>\r\n\r\n<p>Believe it or not, sustainability is the next big thing, no matter what business you are in. Statistics show, that with global warming affecting lives and the environment people are becoming more aware and are moving towards more environment-friendly and sustainable alternatives. Engaging yourself in sustainable practices will give an upper hand over all the businesses that do not mend their ways to sustainability. Sustainable practices will provide your business with a reputation of the sustainable brand in the eyes of your customers.</p>\r\n\r\n<h3>Personalize Your Customers&rsquo; Experience</h3>\r\n\r\n<p>Personalized client support is a strategy that assists you to tailor your correspondence with every client, either during direct communications or when conveying individualized informing. A client assistance approach that is customized basically implies a specialist &quot;knows&quot; the client they&#39;re conversing with on account of gathered information.</p>\r\n\r\n<h3>Final thoughts</h3>\r\n\r\n<p>As the owner of an eCommerce store, you must make sure your business is always growing. In these fast-changing times, if you are not growing, you&rsquo;ll find you reach a stagnant state. It&rsquo;s crucial to understand what your customers want and to experiment with all the advanced technology available so that you can improve the overall experience for your customer, and ultimately help your e-commerce business expand in 2021.</p>\r\n', '\r\n								\r\n							        ', '\r\n								\r\n							        ', 0, '2021-12-10 07:14:10'),
(5, '1', '2021-12-02', 'Admin', 'Kickstart your eCommerce Startup in 3 simple steps', 'Kickstart-your-eCommerce-Startup-in-3-simple-steps', '../uploads/eCommerce_Startup4194924897.webp', '<p>eCommerce has proven its might and moved the world to the next big change. Last year, with a pandemic to deal with, lockdown came as a boon to all eCommerce stores. The year 2020 witnessed retail e-commerce sales amounting to&nbsp;<strong>4.28 trillion US dollars</strong>&nbsp;worldwide. Amazon, Flipkart, Alibaba, etc. serve as huge examples of the mountainous potential of eCommerce.</p>\r\n\r\n<p>An eCommerce startup today can prove to be hefty if the execution is not in place. From giving a shape to your idea in the form of a product, conducting market research, coming up with a business model to build and launch your eCommerce website takes an infinite amount of effort to make it a success.<br />\r\nKeeping everything in mind, the following are 3 major steps to get you started on your eCommerce business:</p>\r\n\r\n<h3>Getting your idea in line with industry and market research</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>&ldquo;All great successful businesses were all once ideas&rdquo; Getting started on your idea is the first step, and probably the most important one. Your idea is 50% of your business and success and failure is hugely going to depend on how well your idea was framed. Firstly, you have to start with brainstorming your idea through various filters and make it as unique as possible. We know that the market is flooded with ideas and it won&rsquo;t be a surprise to meet an identical one but working through the particular element of your idea that speaks of its uniqueness is something that is going to fetch you sales in the future.</p>\r\n	</li>\r\n	<li>\r\n	<p>Second, comes conducting market research and finding the right line of products. Here, you also have to see through whether to be a single product or a multi-product store. This will obviously depend on your planned budget and funds. However, when you plan to be a multi-product store you also need multiple vendors to secure your sale (in case one vendor isn&rsquo;t available).</p>\r\n	</li>\r\n	<li>\r\n	<p>Third, now that you are done with brainstorming your ideas you also must look through and decide on the kind of business model you are willing to adopt for your business. Selecting a business model is part of idea development and depends heavily on various case studies you conduct, it does take time and should not be done hastily. When your idea is in the development phase you will get an initial idea about which business model you will have to adopt. However, it is still advisable to study all the available business models for better insight. Let&rsquo;s have a quick look at some business models:</p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p><strong>Business to Business (B2B):</strong>&nbsp;In this Business model Companies sells products or provides services to another company.</p>\r\n		</li>\r\n		<li>\r\n		<p><strong>Business to Consumer (B2C):</strong>&nbsp;The traditional retail model where a business sells directly to the consumers.</p>\r\n		</li>\r\n		<li>\r\n		<p><strong>Consumer to Business (C2B):</strong>&nbsp;In this particular type of business model consumer (who may or may not be a sole proprietor) sells goods or provides his/her services to a business.</p>\r\n		</li>\r\n		<li>\r\n		<p><strong>Consumer to Consmer (C2C):&nbsp;</strong>Apparently the oldest form of business model in which an individual (consumer) interacts with another individual to sell goods and provide services.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>Now that we are familiar with business models let&rsquo;s know about finding and finalizing the manufacturer/vendor for your product.</p>\r\n\r\n<p><img alt=\"\" src=\"../uploads/kick-ecom.webp\" /></p>\r\n\r\n<h3>Finding and Finalizing the manufacturer/Vendor of your product</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Finding and finalizing a manufacturer or supplier is not an easy task especially when you are just a startup, however, this step requires you to find appropriate sources for your raw material or any needed equipment.This step would again need extensive research of available vendors and manufacturers so as to figure out the best possible option which falls in your budget.</p>\r\n	</li>\r\n	<li>\r\n	<p>This Step is extra-crucial for your product pricing. Once you decide about which vendor to go with, you will have an idea of how much the product is going to cost you and what should be its price for initial margins. If you end up buying a costly product you will have to sell it even costlier and this will ultimately lead to little no customers.</p>\r\n	</li>\r\n	<li>\r\n	<p>If you are buying from multiple vendors the process becomes even harder. Amazon, for example, is a multi-vendor eCommerce platform, where Amazon does not own all the products displayed on its website. It enables merchants to sell their products in its marketplace to the customers. Let&rsquo;s further understand what are single and multi-vendor eCommerce platforms.</p>\r\n\r\n	<p><strong>Single vendor platform:&nbsp;</strong>Single vendor marketplace is an online platform where a single vendor or seller, sells to many consumers or buyers. This usually involves buyer and seller and does not usually have a broad range of products. Cost is usually less in this kind of platform since you are only dealing with a single vendor.</p>\r\n\r\n	<p><strong>Multi-Vendor platform:&nbsp;</strong>It is a platform where multiple vendors sell to multiple customers and are usually highly profitable. Due to a big range of products and countless vendors, there are many transactions that take place. All the transactions between vendors and customers are managed and administered by the website&rsquo;s admin, thus, the involvement of three parties i.e. Seller, Admin, and customer/buyer.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"../uploads/kick-start.webp\" /></p>\r\n\r\n<h3>Setting up a website for your platform</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Can you run an eCommerce store without a website? Obviously not! An eCommerce website is the heart of any eCommerce business. But building a website for an eCommerce business can be one of the toughest jobs. That is why many startups go for the smart choice&mdash;getting&nbsp;<a href=\"https://masterinfotech.com/web-d.html\">website development services</a>, which not only saves time but is also cost-efficient for it enables you to focus on your business operations.</p>\r\n	</li>\r\n	<li>\r\n	<p>For getting started with a website, firstly you will have to buy an online hosting and purchase a domain name for the website.</p>\r\n	</li>\r\n	<li>\r\n	<p>After that, you will have to decide on how your website looks and decide on a template, that is if you&rsquo;re using an online website builder</p>\r\n	</li>\r\n	<li>\r\n	<p>Otherwise, you can always hire a developer or a company that provides&nbsp;<a href=\"https://masterinfotech.com/e-commerce.html\">eCommerce website development</a>&nbsp;services.</p>\r\n	</li>\r\n	<li>\r\n	<p>Nonetheless setting up an eCommerce website involves a lot many things.Let&rsquo;s have a quick rundown of all the things an ideal eCommerce website should be able to achieve.</p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Responsive design</p>\r\n		</li>\r\n		<li>\r\n		<p>Product management</p>\r\n		</li>\r\n		<li>\r\n		<p>Content management system</p>\r\n		</li>\r\n		<li>\r\n		<p>Shopping cart:</p>\r\n		</li>\r\n		<li>\r\n		<p>Checkout page</p>\r\n		</li>\r\n		<li>\r\n		<p>Payment processing</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>If you want to save time and hire specialists to get you a website that builds your brand value and maximizes sales for your startup, you can reach out to us at Master Infotech.</p>\r\n', '\r\n								\r\n							        ', '\r\n								\r\n							        ', 0, '2021-12-10 07:36:06'),
(6, '1', '2021-12-02', 'Admin', '6 ways in which 5G is transforming Mobile App Development!', '6-ways-in-which-5G-is-transforming-Mobile-App-Development', '../uploads/5G4579088253.webp', '<p>Ever since the inception of the 5G network, many speculations have been made about the effectiveness and efficiency of the network. However, many believe it is just an upgraded version of 4G which is totally not the case. 5G is a whole new architecture in the communication and network industry. Loaded with higher superiority, 5G is not just set to change how we use mobile phones but will be transforming the mobile app development industry.<br />\r\nLet&rsquo;s look at 5 ways in which 5G is transforming Mobile App Development:</p>\r\n\r\n<p><img alt=\"\" src=\"../uploads/5gconnectivity.webp\" /></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Faster Speed</p>\r\n\r\n	<p>It goes without saying that 5G is faster than ever. According to Intel, 5G offers around 100 times faster speech compared to its predecessors. With faster cellular speed from 50Mbit/s to 2Gbit/s downloads and files transfer is to be faster than ever. And that is just the beginning, the 5G in the future could deliver up to 10 gigabytes of data in a second.</p>\r\n	</li>\r\n	<li>\r\n	<p>Connectivity</p>\r\n\r\n	<p>When it comes to connection density 5G seems to have revolutionized the way smartphones interconnect with devices. Mobile apps supporting IoT (internet of things) will be even more advanced as 5G offers connectivity to up to a million devices. And the increase in number is not the only thing, with 5G the implementation of IoT will be smoother and flawless, as the apps will be consuming less power. All kinds of smart gadgets and wearable devices will have impeccable connectivity with 5G allowing developers to move even further with wearable app development.</p>\r\n	</li>\r\n	<li>\r\n	<p>Latency</p>\r\n\r\n	<p>Needless to say, 5G enforces minimum latency issues. 5G networks are said to have cut latency to just one millisecond which was around half a second in 4G. This comes as a boon for app developers since this will make the user experience even more seamless.</p>\r\n	</li>\r\n	<li>\r\n	<p>Better AR and VR Integration</p>\r\n\r\n	<p>Developers have been facing a lot of issues in developing better AR and VR integrated applications due to the lack of quality networks. With 5g limitations faced by AR and VR apps will be lifted and we will be able to experience Artificial reality and Virtual reality will be integrated on an advanced level. From eCommerce to the gaming industry, all are to benefit largely from the enhancement of AR and VR offered by 5G.</p>\r\n	</li>\r\n	<li>\r\n	<p>Increased Battery Life</p>\r\n\r\n	<p>Consumption of battery has been a long-standing issue for devices. Slow and unoptimized networks consume time to execute tasks leading to extra consumption of battery of the device.<br />\r\n	The lightning speed of the 5g network completes tasks in less than seconds which leads to optimized usage of battery empowering us to flexibly use a mobile application for much longer.</p>\r\n	</li>\r\n	<li>\r\n	<p>Increase in GPS performance</p>\r\n\r\n	<p>All applications based on GPS technology will experience a big leap towards greater precision with 5G. Apps are to witness better real-time accuracy The speed and connectivity improvement will lead to all-around up-gradation in navigation-based applications. This will certainly come as a significant boost to the automotive and delivery industry.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>With 5G gradually pacing through the world and severely influencing the mobile app industry, we will see faster and better apps and futuristic use of AR and VR. The enhanced user experience will enable users to become more liberal in using and trying an even broader range of mobile applications, leading to a higher demand for apps all over the world.</p>\r\n', '\r\n								\r\n							        ', '\r\n								\r\n							        ', 0, '2021-12-10 07:34:48'),
(7, '2', '2021-12-02', 'Admin', 'IT startups in India: Past, Present, and Future', 'IT-startups-in-India-Past-Present-and-Future', '../uploads/blogit1716080504.webp', '<h3>Background</h3>\r\n\r\n<p>Around two decades ago in 2000-2001 India&rsquo;s IT sector witnessed a boom like no other. In 200, the Indian IT industry was already a $10 billion sector, with two-thirds of it coming from software and one-third from hardware. The software sector of India is majorly export-oriented with its maximum turnover being generated from foreign sales. Gradually, Bangalore (now Bangalore) developed into an IT hub of India, which also came to be known as India&rsquo;s silicon valley. IT giants of India such as Infosys and Wipro are all based in Bangaluru.</p>\r\n\r\n<h3>IT startups in Indian: An Emergence</h3>\r\n\r\n<p>As India&rsquo;s IT sectors witnessed such humongous growth it was only natural for people to seek career opportunities in the flourishing sector which directly or indirectly led to the vast population being educated and trained as IT professionals. Now, with many IT professionals in the country and a fair growth of scope IT sector, India further witnessed an additional boost in the emergence of IT-based Startups in India.<br />\r\nIt was only a matter of time and India&rsquo;s IT sector maximum number of startups, making it a pillar of India&rsquo;s technological force. New startup models and ideas began, what we call an &lsquo;IT revolution in India. IT startups began all over the country from small to medium-sized. As of today, India has the 3rd largest startup ecosystem in the world.</p>\r\n\r\n<h3>IT startups: An Insight.</h3>\r\n\r\n<p>An IT startup is a company that develops and delivers technology-based products and services to the market. IT startups are based on the idea of bringing some new to the technology world aiming to meet a market through innovative technology. An IT startup, like all other startups, is an idea or project undertaken by an entrepreneur (or group) to find and validate a scalable business model. Although all IT startups aim for success some are opened as a part of an experiment.</p>\r\n\r\n<h3>Challenges Faced by IT startups in India</h3>\r\n\r\n<p>Although IT sector is flourishing and is constantly developing itself to new heights. However, like all other startups, IT-based startups don&rsquo;t always write a success story. An IT startup in India comes with its own set of challenges. A study conducted by the IBM institute found that&nbsp;<strong>90% of Indian startups fail</strong>&nbsp;in their first 5 years.<br />\r\nSome of the major challenges faced by IT startups in India are as follows:-</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>- Financial Support</p>\r\n\r\n	<p>Just like all businesses, for IT startups finding sufficient funds is always a big challenge. Funds needed as capital and for maintaining day-to-day operations are important for any start-up to prevail. Without proper funds, many IT startups with great potential sometimes fail to survive.</p>\r\n	</li>\r\n	<li>\r\n	<p>- Poor Management</p>\r\n\r\n	<p>Many IT startups on the basis of a strong idea and execution may find their way to better revenue generation but all of that counts for nothing if not managed well. As greater revenues pour in, business grows and without effective management strategies all of it could lead to a downfall</p>\r\n	</li>\r\n	<li>\r\n	<p>- Market Competition</p>\r\n\r\n	<p>As we already discussed that growth in the IT sector ascending over the past several years has given birth to massive competition. This competition is a result of many IT-based startups flooding the Indian market due to great success opportunities. Naturally, not everyone survives the fierce competition.</p>\r\n	</li>\r\n	<li>\r\n	<p>- Bad Recruiting</p>\r\n\r\n	<p>Employees are the spine of any business. When it comes to startups, recruiting the right people becomes very essential because of higher risk factor. It has been noted that an unskilled team of employees has been a downfall of many IT startups. There has been a lot of chaos when it comes to IT education, over the past few year there has been a rapid rise of IT graduates lacking in Required knowledge and skill.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Conclusion</h3>\r\n\r\n<p>To sum it all up, IT startups have always shown great potential as far as the Indian market is concerned but in these competitive times only the ones ready to walk an extra mile witness their success story being written in golden letters.</p>\r\n', '\r\n								\r\n							        ', '\r\n								\r\n							        ', 0, '2021-12-10 07:29:32');

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
(2, 'JamesFlole', 'no-replyOPTOREPHIFT@gmail.com', '81347683341', 'Good day!  masterinfotech.com \r\n \r\nWe make offer for you \r\n \r\nSending your commercial proposal through the feedback form which can be found on the sites in the contact section. Contact form are filled in by our program and the captcha is solved. The profit of this method is that messages sent through feedback forms are whitelisted. This method raise the chances that your message will be open. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing Up to 50,000 messages. \r\n \r\n \r\nThis message is created automatically.  Use our contacts for communication. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.', 0, '2021-12-02 20:32:45'),
(3, 'Anthonylop', 'no.reply.feedbackform@gmail.com', '85158756228', 'Gооd dаy!  masterinfotech.com \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd businеss оffеr pеrfесtly lеgаl? \r\nWе submit а nеw lеgitimаtе mеthоd оf sеnding соmmеrсiаl оffеr thrоugh fееdbасk fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh соmmеrсiаl оffеrs аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh соntасt Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оur sеrviсе fоr frее. Wе will sеnd up tо 50,000 mеssаgеs fоr yоu. \r\nThе соst оf sеnding оnе milliоn mеssаgеs is 49 USD. \r\n \r\nThis mеssаgе is сrеаtеd аutоmаtiсаlly. Plеаsе usе thе соntасt dеtаils bеlоw tо соntасt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.', 0, '2021-12-03 06:17:32'),
(15, 'JAMES COOK', 'james_cook78@yahoo.com', '88115258311', 'Dear sir/ma \r\nWe are a finance and investment company offering loans at 3% interest rate. We will be happy to make a loan available to your organisation for your project. Our terms and conditions will apply. Our term sheet/loan agreement will be sent to you for review, when we hear from you. Please reply to this email ONLY cookj5939@gmail.com \r\n \r\nRegards. \r\nJames Cook \r\nChairman & CEO Euro Finance & Commercial Ltd', 0, '2021-12-10 14:22:25'),
(18, 'oNUnzFmlXapyrb', 'barbaragerasimova350@gmail.com', '2917389679', 'ATGOhwln', 0, '2021-12-12 13:20:54'),
(19, 'MFpywQOYtL', 'barbaragerasimova350@gmail.com', '4498064228', 'nQImwdBcUWprfbVL', 0, '2021-12-12 13:20:55'),
(20, 'StevenBup', 'robin@polletjes.nl', '86191496835', 'Confessions of a Bitcoin billionaire or passive income more $ 8656 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8Prmu&sa=D&06=55&usg=AFQjCNH_EGwAiiB8MpWHxZlE1C27oj3Rvw <<<<<<<<<<<<<<<<<<<<<<<<', 0, '2021-12-12 16:47:37'),
(67, 'nandita', 'qwert@fbg.com', '1234567890', 'test', 0, '2021-12-15 10:22:03'),
(68, 'nandita', 'qwert@fbg.com', '1234567890', 'test', 0, '2021-12-15 10:22:50'),
(69, 'nandita', 'admin@masters.com', '1234567890', 'test', 0, '2021-12-15 10:26:29'),
(70, 'nandita', 'admin@masters.com', '1234567890', 'test', 0, '2021-12-15 10:35:14'),
(71, 'nandita', 'admin@masters.com', '1234567890', 'hi', 0, '2021-12-15 10:38:04'),
(72, 'nandita', 'admin@masters.com', '1234567890', 'hi', 0, '2021-12-15 10:40:20'),
(73, 'nandita', 'admin@masters.com', '1234567890', 'hi', 0, '2021-12-15 10:50:59');

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
(3, '+91 74000 18000', 'info@masterinfotech.com', '7400018000', 'Plot no 163, Sector 82, Mohali, INDIA', '[{\"icon\":\"fab fa-facebook\",\"link\":\"http:\\/\\/localhost\\/master\\/contact-us.php\"}]', 0, '2021-11-26 07:49:17');

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
(9, 2, 'Native Mobile App Development', '../uploads/mobapp194476.webp', 'Our customized solutions include Native App Development. Our high functioning apps have supported businesses across industries to grow their customer and user base, delivering high-velocity mobile applications.\r\n\r\n\r\n', 0),
(10, 2, 'Hybrid Mobile App Development', '../uploads/mobapp255771.webp', 'Providing a unique blend of native and web applications, we ensure seamless and integrated hybrid mobile application solutions with an optimum user experience guarantee.', 0),
(11, 2, 'Wearable Application Development', '../uploads/mobapp376502.webp', 'Wearable smart devices have started dominating the technology World. Our unique development process provides you with a companion application which efficiently evolves with the personalized experience of the user on multiple devices and versions.', 0),
(12, 3, 'Branding design', '../uploads/flyers51101.webp', 'Our overall branding design eases out your way to attain superior visual recognition for your brand.', 0),
(13, 3, 'Mobile App UI/UX', '../uploads/user-interface67003.webp', 'With help of our exceptional UX/UI designers we build effective mobile interfaces for mobile applications, creating interactive experiences.', 0),
(14, 3, 'Cross-platform experiences design', '../uploads/cross94622.webp', 'Each platform has its own strengths. We specialize in integrating design experiences across multiple platforms to facilitate higher growth.', 0),
(15, 3, 'UI and UX consulting', '../uploads/online-business62327.webp', 'Our in-house team of specialist designers helps you figure out the best possible rhythm, theme, and plan of UI and UX design meeting your requirements.', 0),
(16, 3, 'Promotional designs', '../uploads/megaphone83333.webp', 'Our promotional designs services help your brand connect with your customers through eye-catching and attractive visuals.', 0),
(17, 4, 'ECOMMERCE WEB DEVELOPMENT', '../uploads/ecomm176222.webp', 'At Master Infotech our in-house team of developers and designers are specialized in eCommerce website development. By using state-of-the-art technologies and keeping in mind all your requirements to make your eCommerce project a success.', 0),
(18, 4, 'ECOMMERCE STRATEGY & CONSULTATION', '../uploads/ecomm225263.webp', 'Not sure about various aspects of running an eCommerce business and want help? We got you covered! From initiating the project and business idea to the final launch, we are with you all through the way to provide the best eCommerce consultation solutions for your eCommerce store.', 0),
(19, 4, 'ECOMMERCE DESIGN', '../uploads/ecomm376589.webp', 'In eCommerce design defines the business, as various studies point out that about 3 in every 4 users (75%) quit the website or uninstall the application if they don’t find it attractive and easy to use. So, we put a special focus on keeping our designs aesthetic which appeal to the customer instantly.', 0),
(20, 4, 'ECOMMERCE APP DEVELOPMENT', '../uploads/ecomm458191.webp', 'Not sure about various aspects of running an eCommerce business and want help? We got you covered! From initiating the project and business idea to the final launch, we are with you all through the way to provide the best eCommerce consultation solutions for your eCommerce store.', 0),
(21, 6, 'Search Engine Optimization', '../uploads/SEO25349.webp', 'The success of a website is finally derived from its search engine ranking. With our work-class SEO services, we enforce organic ranking for your website by devising a customized strategy resulting in quality traffic and leads.', 0),
(22, 6, 'Social Media Marketing', '../uploads/social-media39762.webp', 'There are around 4.2 billion active social media users worldwide. It is needless to say how powerful Social media marketing can be. We at Master Infotech help you strengthen brand awareness across social media platforms help you fortify your brand engagement.', 0),
(23, 6, 'Search Engine Marketing', '../uploads/321gp35439.webp', 'Get the best out of Search Engine Marketing for highly targeted and cost-effective results. We use the perfect blend of Pay Per Click (PPC) and Web analytics to boost your SERP ranking through strategizing, optimization, and advertising. With our customized paid campaigns put together, we help you grow your reach within hours!', 0),
(24, 6, 'Content Creation', '../uploads/writer59649.webp', 'Content is undoubtedly the king when it comes to digital marketing. By understanding and researching your business niche we create content that helps you in elevating your experience.', 0),
(25, 6, 'App Store Optimization', '../uploads/testing56433.webp', 'APO or App Store Optimization is a process of improving the ranking of an app on the iTunes App Store or Google Play store. It is sometimes also regarded as SEO of applications. By making use of the best available APO tools we give your application an organic boost in rankings.', 0),
(26, 7, 'Business strategy', '../uploads/bs260929.webp', 'We guide you and help you transform your vision for business into a well-planned and objective-ridden strategy. We research and derive useful insight from data to produce better insights.', 0),
(27, 7, 'Risk management', '../uploads/bs511736.webp', 'No business can be ever done without the involvement of risk. This risk cannot be removed but can always be managed and reduced. Our risk management services allow businesses to deep dive into insightful evaluations to be resilient to every upcoming risk.', 0),
(28, 7, 'Business Update and Re-engineering', '../uploads/bs370340.webp', 'No matter how much growth you have attained over the years, in the ever-changing market you always have to update and re-engineer your business from time to time. We work with you and supported with strong data we help you finalize the required updating and redesigning needed for your business.', 0),
(29, 7, 'Organizational Management', '../uploads/bs412010.webp', 'To ensure the sustainability of your organization we help you with managing your organization and develop an architecture that helps you deliver the right results at the right time, providing you with extensive growth opportunities.', 0);

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
(1, 2, '5', 0, '2021-12-07 09:46:28');

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
(1, 'https://www.accelpro.net/', 'ACCELPRO', '../uploads/012273860568.webp', '<p>Founded in July, 2011, AccelPro is a Fast Growing Indian Product Company into Secure Remote Access Products and Services with Innovative Approach, Having 100+ Enterprises and Telcos using AccelPro Secure Access Products to Secure their Networks. AccelPro addresses much needed requirement for Fast &amp; Easy Secure Access solution, delivers next generation of Secure Access Products which helps Organizations of all sizes to Securely Access their Corporate Applications and Network Resources from Anymachine and Anywhere.</p>\r\n', 0, '2021-12-10 08:04:13'),
(2, 'https://thecarclub.co.in/', 'The Car Club', '../uploads/037020119806.webp', '<p>The Car Club is the last destination for premier exclusive and interesting luxury cars for you, established in the year 2001 and successfully serving the industry of pre-owned luxury cars. We are committed to delivering the very best quality vehicles at the most prominent competitive costs. Our business ideology is to deliver what we commit on time.&lt;</p>\r\n', 0, '2021-12-10 08:04:44'),
(3, 'http://watergatemarineservices.com/', 'Water gate', '../uploads/024512587885.webp', '<p>Watergate is one of the foremost trucking companies, delivering the plethora of transport services to its esteemed consumers across Malawi. We are the &ldquo;best-in-class and cost-effective transporter&rdquo; as defined by our customers and serving this industry for many years.</p>\r\n', 0, '2021-12-10 08:04:29'),
(4, 'https://thefreedeals.com/deals/chandigarh', 'FreeDeals', '../uploads/082489277464.webp', '<p>FreeDeals is one of the foremost trucking companies, delivering the plethora of transport services to its esteemed consumers across Malawi. We are the &ldquo;best-in-class and cost-effective transporter&rdquo; as defined by our customers and serving this industry for many years.</p>\r\n', 0, '2021-12-10 08:06:07');

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
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `status`, `date`) VALUES
(1, 'Services', 0, '2021-12-07 05:23:10'),
(2, 'Home', 0, '2021-12-07 06:42:54'),
(3, 'Contact Us', 0, '2021-12-07 05:23:35'),
(4, 'Career', 0, '2021-12-07 05:23:44'),
(5, 'Blogs', 0, '2021-12-07 05:25:45'),
(6, 'Portfolio', 0, '2021-12-07 05:24:04'),
(7, 'Who We Are', 0, '2021-12-07 05:24:19'),
(8, 'Case Studies', 0, '2021-12-07 05:24:30'),
(9, 'Roles & Permissions', 0, '2021-12-07 05:24:47');

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
(2, 1, '../uploads/web-d55327.png', 'We are a one-stop-shop for all Web design and development services. By using cutting-edge technologies our in-house team of developers delivers intuitive and highly agile websites. By keeping your vision in focus we bring out a digital transformation for your business that helps you further broaden your growth. We cover all types of web development solutions from creating plain text pages to complex web-based applications, social network applications, and electronic business applications.\r\n', 0, '2021-12-11 09:25:24'),
(3, 2, '../uploads/mobappimg37029.png', 'With an industry-best approach to mobile application development, we bring together the best development and design practices to provide a full cycle of mobile app development for both, Android and IOS devices.\r\n\r\n<ul>\r\n	<li><i class=\"fas fa-check-circle\"></i>Native and Hybrid app development</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>Customized app development solution for IOS and Android</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>Mobile application UI/UX design</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>IoT application development</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>Maintenance and support</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>Rigorous testing and Q&amp;A before delivery</li>\r\n	<li><i class=\"fas fa-check-circle\"></i>Rapid development using Agile Methodology</li>\r\n</ul>\r\n', 0, '2021-12-11 09:29:22'),
(4, 3, '../uploads/mobilephone73178.png', 'Our customized solutions include Native App Development. Our high functioning apps have supported businesses across industries to grow their customer and user base, delivering high-velocity mobile applications.', 0, '2021-12-11 09:31:16'),
(5, 4, '../uploads/ecomm17921.png', '<p>Want to start an eCommerce store? Witness an expanded growth of your business with our customized eCommerce solutions. Our full-suite of eCommerce development services include:</p>\r\n', 0, '2021-12-01 08:28:29'),
(6, 6, '../uploads/webdevelopment37232.png', '<h3>Expand your digital footprint, grow your target audience exponentially.</h3>\r\n\r\n<p>There is no doubt that in the contemporary digital world, almost all marketing is done on the internet. With our all-in-one lead generative digital marketing services we help you stand out from all your competition, harnessing the full potential of online marketing.</p>\r\n', 0, '2021-12-01 08:32:21'),
(7, 7, '../uploads/bs147940.webp', 'With our business consulting services we help you adapt and thrive in the dynamic markets of today. Being one of the leading Business Consulting firms, we work with you all through the way to navigate you overcome complex business challenges.', 0, '2021-12-11 09:34:27'),
(8, 8, '../uploads/158100.jpg', 'Do you know what is the best way to start your career? It is, getting the right kind of training. Whether you are a fresh graduate seeking training opportunities or a student looking for an internship Master Infotech is the right place for you. We believe in giving the right environment to your talents through high-yielding Training and Internship Program in order to sharpen them further. At Master Infotech give high importance to the passion inside you and make sure it is given the right direction.', 0, '2021-12-11 09:34:59');

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
(1, 'uploads/1243649.webp', 0, 1),
(3, 'uploads/024512590876.webp', 0, 1),
(4, 'uploads/037020160829.webp', 0, 2),
(6, 'uploads/012273839867.webp', 0, 2);

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
(3, 'SEO', 0, '2021-12-07 06:16:54');

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
(1, '../uploads/scrollimg1018325341.webp', 'We are a full-fledged IT Services Company invading new possibilities and reshaping the technology-driven generation. We at Master Infotech strongly believe in building trust to go beyond technological boundaries. We directly cater to the business needs of our clients providing robust Digital Solutions.<br>\r\nOur modus operandi (way of operating) is exploring contemporary ways of establishing better client relationships. Our team of experts plans customized work plans keeping the vigorous market in mind. We constantly try to navigate excellence to all the complex projects to frame and amplify exceptional capabilities in an agile fashion. In times, when technology is ever-changing, we lead in an unconventional way.\r\n', '../uploads/our-vision8470053894.webp', 'Our Vision is to be a leading IT Solutions company and sustain our continuous efforts to bring the best to our customers. We plan to constantly hold up standards of commitment, reliability, and innovation. Our priority is always to carry out world-class quality with absolute accuracy to emerge as a foremost name in the industry.', '[{\"title\":\"Embrace Change\",\"description\":\"To constantly change when needed lets us walk hand in hand with evolving market\"},{\"title\":\"Worship Precision\",\"description\":\"Accuracy and precision are the greatest companions of our work.\"},{\"title\":\"Chase Innovation\",\"description\":\"Extra focused on chasing the best possible innovative approach to deliver the best.\"},{\"title\":\"Being Aesthetic\",\"description\":\"strictly following aesthetic values to every detail, to create unconventional designs.\"}]', 0, '2021-12-11 08:37:29');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs_cat`
--
ALTER TABLE `blogs_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs_data`
--
ALTER TABLE `blogs_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `contact_user`
--
ALTER TABLE `contact_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `contact_us_content`
--
ALTER TABLE `contact_us_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service_data`
--
ALTER TABLE `service_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `who_we_are`
--
ALTER TABLE `who_we_are`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
