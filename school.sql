-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2016 at 08:44 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'admin', 'admin', 'یاسر', 'داودفر');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `title`, `text`, `date`) VALUES
(9, 'معرفی منطقه گردشگری سی سخت', 'پنل کاربری آقای علی رستمی', '۱۳۹۴/۱۰/۲۴');

-- --------------------------------------------------------

--
-- Table structure for table `dars`
--

CREATE TABLE `dars` (
  `id` int(11) NOT NULL,
  `rid` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `pid` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `ostad` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `dars`
--

INSERT INTO `dars` (`id`, `rid`, `pid`, `ostad`, `name`) VALUES
(15, 'کامپیوتر', '2', '1200116229', 'ریاضی'),
(18, 'حسابداری', '3', '4232129847', 'زبان 1'),
(19, 'معماری', '2', '4220561927', 'ریاضی 2'),
(22, 'کامپیوتر', '2', '4232129847', 'گرافیک'),
(26, 'حسابداری', '3', '4232129845', 'اصول-حسابداری-1'),
(27, 'معماری', '3', '4232129847', 'برنامه-نویسی'),
(28, 'معماری', '2', '1200116229', 'پایگاه-داده'),
(29, 'کامپیوتر', '3', '4220561927', 'اصول-طراحی-وب'),
(30, 'کامپیوتر', '3', '42342342311', 'تحلیل'),
(31, 'کامپیوتر', '2', '42342342311', 'علوم'),
(32, 'کامپیوتر', '2', '42342342311', 'درس'),
(33, 'کامپیوتر', '2', '42342342311', 'کتاب'),
(34, 'کامپیوتر', '2', '42342342311', 'دفتر'),
(35, 'کامپیوتر', '2', '42342342311', 'استاد'),
(36, 'کامپیوتر', '2', '42342342311', 'تاریخ-یهود'),
(37, 'کامپیوتر', '2', '42342342311', 'اخلاق'),
(38, 'کامپیوتر', '2', '42342342311', 'هندسه');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `stext` text COLLATE utf8_persian_ci NOT NULL,
  `ltext` longtext COLLATE utf8_persian_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `stext`, `ltext`, `date`, `time`) VALUES
(4, 'درسنامه فصل نهم و دهم زیست شناسی سال سوم دبیرستانی', 'درسنامه فصل نهم و دهم زیست شناسی سال سوم دبیرستان', '<p><span style="font-family: tahoma, geneva, sans-serif; font-size: 14px; line-height: 18px; text-align: justify; color: rgb(0, 0, 0);">درسنامه&nbsp;</span><a href="http://www.soalsara.ir/" style="color: rgb(23, 114, 175); text-decoration: none; font-family: tahoma, geneva, sans-serif; font-size: 14px; line-height: 18px; text-align: justify;"><span style="color: rgb(0, 0, 0);">فصل نهم و دهم</span></a><span style="font-family: tahoma, geneva, sans-serif; font-size: 14px; line-height: 18px; text-align: justify; color: rgb(0, 0, 0);">&nbsp;زیست شناسی سال سوم دبیرستان را می توانید به صورت رایگان دانلود کنید</span></p>\r\n', '۱۳۹۴/۱۰/۱۹', '2016-01-09 09:37:27'),
(7, 'افراد موفق چه ویژگی‌های مشترکی دارند؟', 'مهم نیست فرد موفق، تاجر، هنرمند، ورزشکار و یا مخترع باشد، آن‌چه اهمیت دارد این است که تمام افراد موفق در یک سری موارد ویژگی‌های مشترکی دارند.', '<p style="box-sizing: border-box; font-stretch: inherit; font-size: 22.5792px; line-height: 33.8688px; font-family: WMitra, georgia; margin: 10px 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(0, 0, 0); text-align: justify; background: transparent;"><span style="background-color: transparent; font-size: 22.5792px;">شما نیز می&zwnj;توانید با طرز فکر آن&zwnj;ها آشنا شوید تا زندگی خود را به نحو شایسته&zwnj;ای تغییر دهید. نکته مهمی که همواره بایستی به خاطر داشته باشید این است که برای رسیدن به موفقیت باید از قبل خودتان را آماده سازید. در این&zwnj;جا به شما روش&zwnj;هایی را معرفی می&zwnj;کنیم تا با به کارگیری آن&zwnj;ها بتوانید در زندگی&zwnj;تان مانند افراد موفق فکر کنید، تصمیم بگیرید و در آینده&zwnj;ای نه چندان دور شاهد موفقیت&zwnj;های چشمگیری در زندگی خود باشید.</span></p>\r\n\r\n<p style="box-sizing: border-box; font-stretch: inherit; font-size: 22.5792px; line-height: 33.8688px; font-family: WMitra, georgia; margin: 10px 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(0, 0, 0); text-align: justify; background: transparent;"><span style="box-sizing: border-box; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: inherit; background: transparent;">قدرت دید و تمرکز بالا داشته باشید</span></p>\r\n\r\n<p style="box-sizing: border-box; font-stretch: inherit; font-size: 22.5792px; line-height: 33.8688px; font-family: WMitra, georgia; margin: 10px 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(0, 0, 0); text-align: justify; background: transparent;">یکی از ویژگی&zwnj;های افراد موفق این است که قدرت دید و تمرکز بالایی دارند. نسبت به همه چیز دقیق هستند و اگر دلیل را ندانند، آن &zwnj;قدر سوال می&zwnj;کنند تا کاملا متوجه شوند. همین علاقه و کنجکاوی برای فراگیری به آن&zwnj;ها کمک می&zwnj;کند تا ذهنی فعال و خلاق داشته باشند.</p>\r\n\r\n<p style="box-sizing: border-box; font-stretch: inherit; font-size: 22.5792px; line-height: 33.8688px; font-family: WMitra, georgia; margin: 10px 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(0, 0, 0); text-align: justify; background: transparent;">فردی که دارای ذهن خلاق است آینده را به خوبی می&zwnj;بیند و شرایط و احتمالات را به درستی ارزیابی می&zwnj;کند، کاری که دیگران قادر به انجام آن نیستند.</p>\r\n\r\n<p style="box-sizing: border-box; font-stretch: inherit; font-size: 22.5792px; line-height: 33.8688px; font-family: WMitra, georgia; margin: 10px 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(0, 0, 0); text-align: justify; background: transparent;">شخص موفق ابتدا در مورد هر مساله&zwnj;ای به خوبی فکر می&zwnj;کند، آن را در ذهن طوری تجسم می&zwnj;کند که گویی واقعی است، سپس با اراده&zwnj;ای قوی به سمت هدفش گام برمی&zwnj;دارد و برای رسیدن به آن از هیچ تلاشی دریغ نمی&zwnj;ورزد. جالب است بدانید اولین کسی که با کامیون بار حمل می&zwnj;کرد، روزی در ذهنش تصور کرد اگر با کشتی بارها حمل شوند چقدر سریع&zwnj;تر بارها به مقصد می&zwnj;رسند و همین جرقه فکری باعث شد تا صنعت کشتیرانی رونق گیرد.</p>\r\n', '۱۳۹۴/۱۰/۱۹', '2016-09-09 18:32:54'),
(8, 'اجرای برجام شاید تا چند روز دیگری', 'وزیر امور خارجه آمریکا گفت: توافق هسته ای ایران شاید تا چند روز دیگر اجرایی شود.\r\n', '<p><span style="color: rgb(0, 0, 0); font-family: WMitra, georgia; font-size: 22.5792px; line-height: 33.8688px; text-align: justify;">به گزارش جام جم آنلاین به نقل آسوشیتدپرس جان کری وزیر خارجه آمریکا گفت ممکن است چند روز دیگر توافق هسته&zwnj;ای ایران اجرا شود توافقی که کشورهای غربی و آمریکا را وادار خواهد کرد فورا تحریم&zwnj;های فراوانی را که علیه جمهوری اسلامی وضع شده است بردارند.</span><br style="box-sizing: border-box; font-stretch: inherit; font-size: 22.5792px; line-height: 33.8688px; font-family: WMitra, georgia; color: rgb(0, 0, 0); text-align: justify;" />\r\n<span style="color: rgb(0, 0, 0); font-family: WMitra, georgia; font-size: 22.5792px; line-height: 33.8688px; text-align: justify;">کری گفت روز پنج&zwnj;شنبه در تماسی تلفنی با محمدجواد ظریف وزیر خارجه ایران صحبت کرده است.</span><br style="box-sizing: border-box; font-stretch: inherit; font-size: 22.5792px; line-height: 33.8688px; font-family: WMitra, georgia; color: rgb(0, 0, 0); text-align: justify;" />\r\n<span style="color: rgb(0, 0, 0); font-family: WMitra, georgia; font-size: 22.5792px; line-height: 33.8688px; text-align: justify;">وی گفت ایران قصد دارد تعهدات خود را فورا اجرا کند و دولت اوباما نیز آماده انجام چنین کاری است.</span><br style="box-sizing: border-box; font-stretch: inherit; font-size: 22.5792px; line-height: 33.8688px; font-family: WMitra, georgia; color: rgb(0, 0, 0); text-align: justify;" />\r\n<span style="color: rgb(0, 0, 0); font-family: WMitra, georgia; font-size: 22.5792px; line-height: 33.8688px; text-align: justify;">کری از اقدام ایران در انتقال اکثر اورانیوم غنی&zwnj;&zwnj;شده خود به خارج از کشور ستایش کرد.</span><br style="box-sizing: border-box; font-stretch: inherit; font-size: 22.5792px; line-height: 33.8688px; font-family: WMitra, georgia; color: rgb(0, 0, 0); text-align: justify;" />\r\n<span style="color: rgb(0, 0, 0); font-family: WMitra, georgia; font-size: 22.5792px; line-height: 33.8688px; text-align: justify;">وی گفت این اقدام برنامه هسته&zwnj;ای ایران را تا حد فراوانی عقب برد و اقدامات بعدی این برنامه را حتی بیش از این عقب خواهد برد.</span></p>\r\n', '۱۳۹۴/۱۰/۱۹', '2016-01-11 21:17:40'),
(9, 'درسنامه فصل چهارم ریاضی سال دوم دبیرستان', 'درسنامه فصل چهارم ریاضی سال دوم دبیرستان', '<p>درسنامه فصل چهارم ریاضی سال دوم دبیرستان</p>\r\n', '۱۳۹۵/۶/۱۹', '2016-09-09 18:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `nomre`
--

CREATE TABLE `nomre` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `dname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `nomre` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `nomre`
--

INSERT INTO `nomre` (`id`, `uname`, `dname`, `nomre`) VALUES
(35, '12345', 'گرافیک', 17),
(36, 'qw', 'ریاضی', 14),
(37, 'tehran', 'ریاضی', 15),
(38, 'tehran', 'گرافیک', 12.2),
(42, 'asdf', 'برنامه-نویسی', 16.75),
(43, 'tehran', 'دفتر', 15),
(44, 'tehran', 'کتاب', 16),
(45, 'tehran', 'درس', 16),
(46, 'tehran', 'علوم', 16.2),
(47, 'tehran', 'استاد', 13.25),
(48, 'tehran', 'تاریخ-یهود', 15),
(49, 'tehran', 'اخلاق', 15),
(50, 'tehran', 'هندسه', 13),
(51, 'user', 'گرافیک', 10);

-- --------------------------------------------------------

--
-- Table structure for table `payam`
--

CREATE TABLE `payam` (
  `id` int(11) NOT NULL,
  `from` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `to` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `matn` text COLLATE utf8_persian_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `payam`
--

INSERT INTO `payam` (`id`, `from`, `to`, `title`, `matn`, `status`, `date`) VALUES
(29, '22', '1', 'عنوان پیام', 'عنوان پیام', '1', '۱۳۹۴/۱۰/۲۴'),
(30, '28', '1', 'یاسذ', 'یاسر', '0', '۱۳۹۴/۱۰/۲۴'),
(31, '27', '1', 'نمونه سوال', 'نمونه سوال', '0', '۱۳۹۴/۱۰/۲۴'),
(32, '26', '1', 'من حقوق میخوام', 'حقوق بده عوضی', '0', '۱۳۹۴/۱۰/۲۴'),
(33, '22', '1', 'پنل کاربری آقای علیقلی علیقلی', 'پنل کاربری آقای علیقلی علیقلی', '0', '۱۳۹۴/۱۰/۲۴'),
(34, '22', '1', 'sallam', 'koft', '1', '۱۳۹۴/۱۰/۲۴');

-- --------------------------------------------------------

--
-- Table structure for table `payani`
--

CREATE TABLE `payani` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `dname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `nomre` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `payani`
--

INSERT INTO `payani` (`id`, `uname`, `dname`, `nomre`) VALUES
(5, 'asdf', 'برنامه-نویسی', 12),
(6, '12345', 'ریاضی', 12),
(7, 'qw', 'ریاضی', 19),
(8, 'tehran', 'ریاضی', 18),
(9, 'tehran', 'گرافیک', 17.15),
(10, 'tehran', 'دفتر', 11),
(11, 'tehran', 'کتاب', 17),
(12, 'tehran', 'درس', 16.2),
(13, 'tehran', 'علوم', 14),
(14, 'tehran', 'استاد', 17.15),
(15, 'tehran', 'تاریخ-یهود', 16),
(16, 'tehran', 'اخلاق', 16.2),
(17, 'tehran', 'هندسه', 18),
(18, 'user', 'گرافیک', 10);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `ncode` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `tell` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `reshte` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `paye` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `ncode`, `age`, `tell`, `address`, `reshte`, `paye`, `pic`, `username`, `password`) VALUES
(22, 'علی', 'رستمی', '1990990990', '23', 'تهران', '998773654', 'کامپیوتر', '2', 'pstudent/e0c29a2819b706cdd60573e40ecd451bn.png', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `ncode` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `tell` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `reshte` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `madrak` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fname`, `lname`, `ncode`, `age`, `tell`, `address`, `reshte`, `madrak`, `pic`, `username`, `password`) VALUES
(22, 'علیقلی', 'علیقلی', '1200116229', '12', '4456467', 'علیقلی', 'کامپیوتر', 'لیسانس', 'pteacher/fa4f4704ca8e31b7c38435a90b780cb2n.png', 'modir', 'modir'),
(23, 'یاسری', 'داودفر', '4232129847', '29', '09369454741', 'یاسوج', 'حسابداری', 'فوق-لیسانس', 'pteacher/8035e8dfc85be91fd0217029f2903f2cn.png', 'yas', 'yas'),
(26, 'کریم', 'شس', '4220561927', '18', 'sdsd', '35345', 'کامپیوتر', 'فوق-لیسانس', 'pteacher/c97801d0ad9fbcc28779f0c5a94b9f5fn.png', 'ali', 'ali'),
(27, 'حاج باقر', 'حسنی', '4232129845', '36', 'یاسوج', '23564273', 'معماری', 'لیسانس', 'pteacher/1b7741df15498f7c6e249239581dfcban.png', 'hasan', 'hasan'),
(28, 'سیدیاسر', 'داودفر', '42342342311', '12', 'یاسوج', '1223', 'کامپیوتر', 'دکتری', 'pteacher/4af053ce6217b6050adb4a478a569c31n.png', 'javad', 'javad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dars`
--
ALTER TABLE `dars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomre`
--
ALTER TABLE `nomre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payam`
--
ALTER TABLE `payam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payani`
--
ALTER TABLE `payani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ncode` (`ncode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dars`
--
ALTER TABLE `dars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nomre`
--
ALTER TABLE `nomre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `payam`
--
ALTER TABLE `payam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `payani`
--
ALTER TABLE `payani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
